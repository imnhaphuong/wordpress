<?php

/**
 * file for holding dashboard welcome page for theme
 */
if (!function_exists('homedroid_is_plugin_installed')) {
    function homedroid_is_plugin_installed($plugin_slug)
    {
        $plugin_path = WP_PLUGIN_DIR . '/' . $plugin_slug;
        return file_exists($plugin_path);
    }
}
if (!function_exists('homedroid_is_plugin_activated')) {
    function homedroid_is_plugin_activated($plugin_slug)
    {
        return is_plugin_active($plugin_slug);
    }
}
if (!function_exists('homedroid_welcome_notice')) :
    function homedroid_welcome_notice()
    {
        if (get_option('homedroid_dismissed_custom_notice')) {
            return;
        }
        global $pagenow;
        $current_screen  = get_current_screen();

        if (is_admin()) {
            if ($current_screen->id !== 'dashboard' && $current_screen->id !== 'themes') {
                return;
            }
            if (is_network_admin()) {
                return;
            }
            if (!current_user_can('manage_options')) {
                return;
            }
            $theme = wp_get_theme();

            if (is_child_theme()) {
                $theme = wp_get_theme()->parent();
            }
            $homedroid_version = $theme->get('Version');


?>
            <div class="homedroid-admin-notice notice notice-info is-dismissible content-install-plugin theme-info-notice" id="homedroid-dismiss-notice">
                <div class="info-content">
                    <div class="notice-holder">
                        <h5><span class="theme-name"><span><?php echo __('Welcome to Homedroid', 'homedroid'); ?></span></h5>
                        <h1><?php echo __('Optimize your workflow effortlessly! Cozy Blocks pairs perfectly with our 30+ Advanced Blocks—install for full benefits', 'homedroid'); ?></h1>
                        </h3>
                        <div class="notice-text">
                            <p><?php echo __('Enhance your experience with our feature-rich 30+ Advanced Blocks! Unlock the full potential by integrating Cozy Addons today. Explore a multitude of powerful tools and functionalities designed to elevate your user experience.', 'homedroid') ?></p>
                            <p><?php echo __('Please install and activate all recommended to use blcoks and demo importer features- Cozy Addons, Cozy Essential Addons, Advanced Import.', 'homedroid') ?></p>
                        </div>
                        <a href="#" id="install-activate-button" class="button admin-button info-button"><?php echo __('Getting started with a single click', 'homedroid'); ?></a>
                        <a href="<?php echo admin_url(); ?>themes.php?page=about-homedroid" class="button admin-button info-button"><?php echo __('Explore Homedroid', 'homedroid'); ?></a>

                    </div>
                </div>
                <div class="theme-hero-screens">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/inc/admin/images/screen_plugin_ct.png'); ?>" />
                </div>

            </div>
    <?php
        }
    }
endif;
add_action('admin_notices', 'homedroid_welcome_notice');
function homedroid_dismissble_notice()
{
    update_option('homedroid_dismissed_custom_notice', 1);
}
add_action('wp_ajax_homedroid_dismissble_notice', 'homedroid_dismissble_notice');
// Hook into a custom action when the button is clicked
add_action('wp_ajax_homedroid_install_and_activate_plugins', 'homedroid_install_and_activate_plugins');
add_action('wp_ajax_nopriv_homedroid_install_and_activate_plugins', 'homedroid_install_and_activate_plugins');
add_action('wp_ajax_homedroid_rplugin_activation', 'homedroid_rplugin_activation');
add_action('wp_ajax_nopriv_homedroid_rplugin_activation', 'homedroid_rplugin_activation');

// Function to install and activate the plugins



function homedroid_check_plugin_installed_status($pugin_slug, $plugin_file)
{
    return file_exists(ABSPATH . 'wp-content/plugins/' . $pugin_slug . '/' . $plugin_file) ? true : false;
}

/* Check if plugin is activated */


function homedroid_check_plugin_active_status($pugin_slug, $plugin_file)
{
    return is_plugin_active($pugin_slug . '/' . $plugin_file) ? true : false;
}

require_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
require_once(ABSPATH . 'wp-admin/includes/file.php');
require_once(ABSPATH . 'wp-admin/includes/misc.php');
require_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');
function homedroid_install_and_activate_plugins()
{
    // Define the plugins to be installed and activated
    $recommended_plugins = array(
        array(
            'slug' => 'cozy-addons',
            'file' => 'cozy-addons.php',
            'name' => __('Cozy Addons', 'homedroid')
        ),
        array(
            'slug' => 'advanced-import',
            'file' => 'advanced-import.php',
            'name' => __('Advanced Imporrt', 'homedroid')
        ),
        array(
            'slug' => 'cozy-essential-addons',
            'file' => 'cozy-essential-addons.php',
            'name' => __('Cozy Essential Addons', 'homedroid')
        ),
        // Add more plugins here as needed
    );

    // Include the necessary WordPress functions


    // Set up a transient to store the installation progress
    set_transient('install_and_activate_progress', array(), MINUTE_IN_SECONDS * 10);

    // Loop through each plugin
    foreach ($recommended_plugins as $plugin) {
        $plugin_slug = $plugin['slug'];
        $plugin_file = $plugin['file'];
        $plugin_name = $plugin['name'];

        // Check if the plugin is active
        if (is_plugin_active($plugin_slug . '/' . $plugin_file)) {
            homedroid_update_install_and_activate_progress($plugin_name, 'Already Active');
            continue; // Skip to the next plugin
        }

        // Check if the plugin is installed but not active
        if (is_homedroid_plugin_installed($plugin_slug . '/' . $plugin_file)) {
            $activate = activate_plugin($plugin_slug . '/' . $plugin_file);
            if (is_wp_error($activate)) {
                homedroid_update_install_and_activate_progress($plugin_name, 'Error');
                continue; // Skip to the next plugin
            }
            homedroid_update_install_and_activate_progress($plugin_name, 'Activated');
            continue; // Skip to the next plugin
        }

        // Plugin is not installed or activated, proceed with installation
        homedroid_update_install_and_activate_progress($plugin_name, 'Installing');

        // Fetch plugin information
        $api = plugins_api('plugin_information', array(
            'slug' => $plugin_slug,
            'fields' => array('sections' => false),
        ));

        // Check if plugin information is fetched successfully
        if (is_wp_error($api)) {
            homedroid_update_install_and_activate_progress($plugin_name, 'Error');
            continue; // Skip to the next plugin
        }

        // Set up the plugin upgrader
        $upgrader = new Plugin_Upgrader();
        $install = $upgrader->install($api->download_link);

        // Check if installation is successful
        if ($install) {
            // Activate the plugin
            $activate = activate_plugin($plugin_slug . '/' . $plugin_file);

            // Check if activation is successful
            if (is_wp_error($activate)) {
                homedroid_update_install_and_activate_progress($plugin_name, 'Error');
                continue; // Skip to the next plugin
            }
            homedroid_update_install_and_activate_progress($plugin_name, 'Activated');
        } else {
            homedroid_update_install_and_activate_progress($plugin_name, 'Error');
        }
    }

    // Delete the progress transient
    $redirect_url = admin_url('themes.php?page=advanced-import');

    // Delete the progress transient
    delete_transient('install_and_activate_progress');
    // Return JSON response
    wp_send_json_success(array('redirect_url' => $redirect_url));
}

// Function to check if a plugin is installed but not active
function is_homedroid_plugin_installed($plugin_slug)
{
    $plugins = get_plugins();
    return isset($plugins[$plugin_slug]);
}

// Function to update the installation and activation progress
function homedroid_update_install_and_activate_progress($plugin_name, $status)
{
    $progress = get_transient('install_and_activate_progress');
    $progress[] = array(
        'plugin' => $plugin_name,
        'status' => $status,
    );
    set_transient('install_and_activate_progress', $progress, MINUTE_IN_SECONDS * 10);
}


function homedroid_dashboard_menu()
{
    add_theme_page(esc_html__('About Homedroid', 'homedroid'), esc_html__('About Homedroid', 'homedroid'), 'edit_theme_options', 'about-homedroid', 'homedroid_theme_info_display');
}
add_action('admin_menu', 'homedroid_dashboard_menu');
function homedroid_theme_info_display()
{ ?>
    <div class="dashboard-about-homedroid">
        <div class="homedroid-dashboard">
            <ul id="homedroid-dashboard-tabs-nav">
                <li><a href="#homedroid-welcome"><?php echo __('Get Started', 'homedroid') ?></a></li>
                <li><a href="#homedroid-setup"><?php echo __('Setup Instruction', 'homedroid') ?></a></li>
                <li><a href="#homedroid-comparision"><?php echo __('FREE VS PRO', 'homedroid') ?></a></li>
            </ul> <!-- END tabs-nav -->
            <div id="tabs-content">
                <div id="homedroid-welcome" class="tab-content">
                    <h1> <?php echo __('Welcome to the Homedroid - Home Services WordPress Theme', 'homedroid') ?></h1>
                    <p><?php echo __('Introducing Homedroid, the premier WordPress theme designed specifically for home service businesses, spanning HVAC, plumbing, cleaning, pest control, and beyond. Engineered for lightning-fast performance and seamless cross-browser compatibility, Homedroid ensures your online presence thrives. With built-in SEO features, your website is primed for success from the start. Customization is effortless with Homedroid, allowing you to tailor your site to perfection. Drive conversions with strategically placed CTAs and seamlessly integrate social media for maximum engagement. Plus, Homedroid seamlessly integrates with the WordPress native editor, offering you unparalleled flexibility in content creation. Stay ahead of the curve with Homedroid\'s regular updates, ensuring your site performs at its peak at all times. Elevate your business\'s online presence with Homedroid and set yourself apart from the competition. Explore more about Homedroid at https://cozythemes.com/homedroid-ultimate-home-services-wordpress-theme.', 'homedroid') ?></p>
                    <h3><?php echo __('Required Plugins', 'homedroid'); ?></h3>
                    <p class="notice-text"><?php echo __('Please install and activate all recommended pluign to import the demo with "one click demo import" feature and unlock premium features!(for pro version)', 'homedroid') ?></p>
                    <ul class="homedroid-required-plugin">
                        <li>

                            <h4><?php echo __('1. Cozy Addons', 'homedroid'); ?>
                                <?php
                                if (homedroid_is_plugin_activated('cozy-addons/cozy-addons.php')) {
                                    echo __(': Plugin has been already activated!', 'homedroid');
                                } elseif (homedroid_is_plugin_installed('cozy-addons/cozy-addons.php')) {
                                    echo __(': Plugin does not activated, Activate the plugin to use one click demo import and unlock premium features.', 'homedroid');
                                } else {
                                    echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=cozy-addons&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'homedroid') . '</a>';
                                }
                                ?>
                            </h4>
                        </li>
                        <li>

                            <h4><?php echo __('2. Cozy Essential Addons', 'homedroid'); ?>
                                <?php
                                if (homedroid_is_plugin_activated('cozy-essential-addons/cozy-essential-addons.php')) {
                                    echo __(': Plugin has been already activated!', 'homedroid');
                                } elseif (homedroid_is_plugin_installed('cozy-essential-addons/cozy-essential-addons.php')) {
                                    echo __(': Plugin does not activated, Activate the plugin to use one click demo import and unlock premium features.', 'homedroid');
                                } else {
                                    echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=cozy-essential-addons&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'homedroid') . '</a>';
                                }
                                ?>
                            </h4>
                        </li>
                        <li>
                            <h4><?php echo __('3. Advanced Import - Need only to use "one click demo import" features', 'homedroid'); ?>
                                <?php
                                if (homedroid_is_plugin_activated('advanced-import/advanced-import.php')) {
                                    echo __(': Plugin has been already activated!', 'homedroid');
                                } elseif (homedroid_is_plugin_installed('advanced-import/advanced-import.php')) {
                                    echo __(': Plugin does not activated, Activate the plugin to use one click demo import feature.', 'homedroid');
                                } else {
                                    echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=advanced-import&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'homedroid') . '</a>';
                                }
                                ?>
                            </h4>
                        </li>
                    </ul>
                    <a href="#" id="install-activate-button" class="button admin-button info-button"><?php echo __('Getting started with a single click', 'homedroid'); ?></a>
                </div>
                <div id="homedroid-setup" class="tab-content">
                    <h3 class="homedroid-baisc-guideline-header"><?php echo __('Basic Theme Setup', 'homedroid') ?></h3>
                    <div class="homedroid-baisc-guideline">
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Setup Header Layout:', 'homedroid') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Patterns -> Template Parts -> Header:', 'homedroid') ?></li>
                                        <li> - <?php echo __('click on Header > Click on Edit (Icon) -> Add or Remove Requirend block/content as your requirement.:', 'homedroid') ?></li>
                                        <li> - <?php echo __('Click on save to update your layout', 'homedroid') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Setup Footer Layout:', 'homedroid') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Patterns -> Template Parts -> Footer:', 'homedroid') ?></li>
                                        <li> - <?php echo __('click on Footer > Click on Edit (Icon) > Add or Remove Requirend block/content as your requirement.:', 'homedroid') ?></li>
                                        <li> - <?php echo __('Click on save to update your layout', 'homedroid') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Setup Templates like Homepage/404/Search/Page/Single and more templates Layout:', 'homedroid') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Templates:', 'homedroid') ?></li>
                                        <li> - <?php echo __('click on Template(You need to edit/update) > Click on Edit (Icon) > Add or Remove Requirend block/content as your requirement.:', 'homedroid') ?></li>
                                        <li> - <?php echo __('Click on save to update your layout', 'homedroid') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Restore/Reset Default Content layout of Template(Like: Frontpage/Blog/Archive etc.)', 'homedroid') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Templates:', 'homedroid') ?></li>
                                        <li> - <?php echo __('Click on Manage all Templates', 'homedroid') ?></li>
                                        <li> - <?php echo __('Click on 3 Dots icon at right side of respective Template', 'homedroid') ?></li>
                                        <li> - <?php echo __('Click on Clear Customization', 'homedroid') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Restore/Reset Default Content layout of Template Parts(Header/Footer/Sidebar)', 'homedroid') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Patterns:', 'homedroid') ?></li>
                                        <li> - <?php echo __('Click on Manage All Template Parts', 'homedroid') ?></li>
                                        <li> - <?php echo __('Click on 3 Dots icon at right side of respective Template parts', 'homedroid') ?></li>
                                        <li> - <?php echo __('Click on Clear Customization', 'homedroid') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="homedroid-comparision" class="tab-content">
                    <div class="featured-list">
                        <div class="half-col free-features">
                            <h3><?php echo __('Homedroid Features (Free)', 'homedroid') ?></h3>
                            <ul>
                                <li><strong> - <?php echo __('Homedroid offer wide range of  ready to use Home Sections Patterns', 'homedroid') ?></strong>
                                    <ul>
                                        <li><?php echo __('Hero Section', 'homedroid') ?></li>
                                        <li><?php echo __('About Us Section - 2', 'homedroid') ?></li>
                                        <li><?php echo __('About Us Page Layout', 'homedroid') ?></li>
                                        <li><?php echo __('Contact Us Page Section', 'homedroid') ?></li>
                                        <li><?php echo __('Counter Section', 'homedroid') ?></li>
                                        <li><?php echo __('Enquiry Form Section', 'homedroid') ?></li>
                                        <li><?php echo __('FAQ Section', 'homedroid') ?></li>
                                        <li><?php echo __('Latest Post Section', 'homedroid') ?></li>
                                        <li><?php echo __('Portfolio Section', 'homedroid') ?></li>
                                        <li><?php echo __('Pricing Table Section - 3', 'homedroid') ?></li>
                                        <li><?php echo __('Service Section - 2', 'homedroid') ?></li>
                                        <li><?php echo __('Service Page Layout', 'homedroid') ?></li>
                                        <li><?php echo __('Team Section', 'homedroid') ?></li>
                                        <li><?php echo __('Testimonial Section', 'homedroid') ?></li>
                                        <li><?php echo __('Who We Serve Section', 'homedroid') ?></li>
                                    </ul>
                                </li>

                                <li> <strong>- <?php echo __('FSE Templates Ready', 'homedroid') ?></strong>
                                    <ul>
                                        <li> <?php echo __('404 Template', 'homedroid') ?></li>
                                        <li> <?php echo __('Archive Template', 'homedroid') ?></li>
                                        <li> <?php echo __('Product Catalog Template', 'homedroid') ?></li>
                                        <li> <?php echo __('Blank Template', 'homedroid') ?></li>
                                        <li> <?php echo __('Front Page Template', 'homedroid') ?></li>
                                        <li> <?php echo __('Blog Home Template', 'homedroid') ?></li>
                                        <li> <?php echo __('Index Page Template', 'homedroid') ?></li>
                                        <li> <?php echo __('Search Template', 'homedroid') ?></li>
                                        <li> <?php echo __('Sitemap Template', 'homedroid') ?></li>
                                        <li> <?php echo __('Page Template', 'homedroid') ?></li>
                                        <li> <?php echo __('Left Sidebar Page Template', 'homedroid') ?></li>
                                        <li> <?php echo __('Full Width Page  Template', 'homedroid') ?></li>
                                        <li> <?php echo __('Single Template', 'homedroid') ?></li>
                                        <li> <?php echo __('Single Product Template', 'homedroid') ?></li>
                                        <li> <?php echo __('Cart Page Template', 'homedroid') ?></li>
                                        <li> <?php echo __('Checkout Page Template', 'homedroid') ?></li>
                                        <li> <?php echo __('Left Sidebar Single Template', 'homedroid') ?></li>
                                        <li> <?php echo __('Full Width Single Template', 'homedroid') ?></li>

                                    </ul>
                                <li>
                                <li><strong> - <?php echo __('Fully Customizable Header Layout - 2', 'homedroid') ?></strong></li>
                                <li> <strong>- <?php echo __('Fully Customizable Footer Layout - 3 ', 'homedroid') ?></strong></li>
                                <li><strong> - <?php echo __('12 Beautiful Fonts Option', 'homedroid') ?></strong></li>
                                <li> <strong>- <?php echo __('Innper Page Templates', 'homedroid') ?></strong></li>
                                <li> <strong>- <?php echo __('On Scroll Animation option', 'homedroid') ?></strong></li>
                                <li> <strong>- <?php echo __('Access Cozy Blocks with upto 22 Advanced Blocks for FSE and Gutenberg Editor', 'homedroid') ?></strong></li>
                            </ul>
                        </div>
                        <div class="half-col pro-features">
                            <h3><?php echo __('Premium Features', 'homedroid') ?></h3>
                            <p><?php echo __('Including all free features and comes with 30+ advanced blocks that enhance and power up the ecommerce website, here are some blocks that add the powerful features for your ecommerce/shopping website. By seamlessly integrating these blocks with our ready-to-use patterns, you have the flexibility to craft a wide selection of captivating online store ease', 'homedroid') ?></p>
                            <ul>
                                <li><?php echo __('Post Blocks', 'homedroid') ?></li>
                                <li><?php echo __('Slider Block', 'homedroid') ?></li>
                                <li><?php echo __('Counter Block', 'homedroid') ?></li>
                                <li><?php echo __('Team Block (With Carousel)', 'homedroid') ?></li>
                                <li><?php echo __('Testimonials Block (With Carousel)', 'homedroid') ?></li>
                                <li><?php echo __('Social Shares Blocks', 'homedroid') ?></li>
                                <li><?php echo __('Social Icons Blocks', 'homedroid') ?></li>
                                <li><?php echo __('Breadcrumbs Block', 'homedroid') ?></li>
                                <li><?php echo __('Portfolio Block (With Custom Post Type)', 'homedroid') ?></li>
                                <li><?php echo __('Popup buidler Block to display offer and flash sale', 'homedroid') ?>
                                    <?php echo __('and access', 'homedroid') ?> <a href="https://cozythemes.com/cozy-addons/" target="_blank"><?php echo __('Cozy Blocks with more than 30+ advanced block.', 'homedroid') ?></a>
                                </li>

                            </ul>
                            <br />

                            <a href="https://cozythemes.com/pricing-and-plans/" class="upgrade-btn button" target="_blank"><?php echo __('Upgrade to Pro', 'homedroid') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
