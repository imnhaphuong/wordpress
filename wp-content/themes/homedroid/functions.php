<?php
if (!defined('HOMEDROID_VERSION')) {
    // Replace the version number of the theme on each release.
    define('HOMEDROID_VERSION', wp_get_theme()->get('Version'));
}
define('HOMEDROID_DEBUG', defined('WP_DEBUG') && WP_DEBUG === true);
define('HOMEDROID_DIR', trailingslashit(get_template_directory()));
define('HOMEDROID_URL', trailingslashit(get_template_directory_uri()));

if (!function_exists('homedroid_support')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since walker_fse 1.0.0
     *
     * @return void
     */
    function homedroid_support()
    {
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        // Add support for block styles.
        add_theme_support('wp-block-styles');
        add_theme_support('post-thumbnails');
        // Enqueue editor styles.
        add_editor_style('style.css');
    }

endif;
add_action('after_setup_theme', 'homedroid_support');

/*----------------------------------------------------------------------------------
Enqueue Styles
-----------------------------------------------------------------------------------*/
if (!function_exists('homedroid_styles')) :
    function homedroid_styles()
    {
        // registering style for theme
        wp_enqueue_style('homedroid-style', get_stylesheet_uri(), array(), HOMEDROID_VERSION);
        wp_enqueue_style('homedroid-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css');
        wp_enqueue_style('homedroid-aos-style', get_template_directory_uri() . '/assets/css/aos.css');
        if (is_rtl()) {
            wp_enqueue_style('homedroid-rtl-css', get_template_directory_uri() . '/assets/css/rtl.css', 'rtl_css');
        }
        wp_enqueue_script('jquery');
        wp_enqueue_script('homedroid-aos-scripts', get_template_directory_uri() . '/assets/js/aos.js', array(), HOMEDROID_VERSION, true);
        wp_enqueue_script('homedroid-scripts', get_template_directory_uri() . '/assets/js/homedroid-scripts.js', array(), HOMEDROID_VERSION, true);
    }
endif;

add_action('wp_enqueue_scripts', 'homedroid_styles');

/**
 * Enqueue scripts for admin area
 */
function homedroid_admin_style()
{
    $hello_notice_current_screen = get_current_screen();
    if (!empty($_GET['page']) && 'about-homedroid' === $_GET['page'] || $hello_notice_current_screen->id === 'themes' || $hello_notice_current_screen->id === 'dashboard') {
        wp_enqueue_style('homedroid-admin-style', get_template_directory_uri() . '/assets/css/admin-style.css', array(), HOMEDROID_VERSION, 'all');
        wp_enqueue_script('homedroid-admin-scripts', get_template_directory_uri() . '/assets/js/homedroid-admin-scripts.js', array(), HOMEDROID_VERSION, true);
        wp_enqueue_script('homedroid-welcome-notice', get_template_directory_uri() . '/inc/admin/js/homedroid-welcome-notice.js', array('jquery'), HOMEDROID_VERSION, true);
        wp_localize_script('homedroid-welcome-notice', 'homedroid_localize', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'redirect_url' => admin_url('themes.php?page=_cozy_companions')
        ));
    }
}
add_action('admin_enqueue_scripts', 'homedroid_admin_style');

/**
 * Enqueue assets scripts for both backend and frontend
 */
function homedroid_block_assets()
{
    wp_enqueue_style('homedroid-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css');
}
add_action('enqueue_block_assets', 'homedroid_block_assets');

/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/core/init.php';

/**
 * Load welcome page file.
 */
require_once get_template_directory() . '/inc/admin/welcome-notice.php';

if (!function_exists('homedroid_excerpt_more_postfix')) {
    function homedroid_excerpt_more_postfix($more)
    {
        if (is_admin()) {
            return $more;
        }
        return '...';
    }
    add_filter('excerpt_more', 'homedroid_excerpt_more_postfix');
}
function homedroid_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'homedroid_add_woocommerce_support');
