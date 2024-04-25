<?php

/**
 * Title: Services Section
 * Slug: homedroid/services-section
 * Categories: homedroid
 */
$homedroid_url = trailingslashit(get_template_directory_uri());
$homedroid_images = array(
    $homedroid_url . 'assets/images/icon_1.png',
    $homedroid_url . 'assets/images/icon_2.png',
    $homedroid_url . 'assets/images/icon_3.png',
    $homedroid_url . 'assets/images/icon_4.png',
    $homedroid_url . 'assets/images/icon_5.png',
    $homedroid_url . 'assets/images/icon_6.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"100px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"homedroid-fade-up","layout":{"type":"constrained","contentSize":"740px"}} -->
    <div class="wp-block-group homedroid-fade-up"><!-- wp:heading {"textAlign":"center","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
        <h5 class="wp-block-heading has-text-align-center has-secondary-color has-text-color has-link-color"><?php esc_html_e('Our Services', 'homedroid') ?></h5>
        <!-- /wp:heading -->

        <!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color"} -->
        <h1 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color" style="font-style:normal;font-weight:600"><?php esc_html_e('How Can We Help You', 'homedroid') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"24px"}}}} -->
        <p class="has-text-align-center" style="margin-top:24px"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas that emphasize cleanliness', 'homedroid') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"44px"},"blockGap":{"left":"24px"}}},"className":"homedroid-fade-up"} -->
    <div class="wp-block-columns homedroid-fade-up" style="margin-top:44px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"44px","bottom":"32px","left":"32px","right":"32px"}},"border":{"radius":"20px"}},"backgroundColor":"light-color","className":"is-style-homedroid-boxshadow homedroid-hover-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-homedroid-boxshadow homedroid-hover-box has-light-color-background-color has-background" style="border-radius:20px;padding-top:44px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:image {"align":"center","id":5505,"width":"30px","sizeSlug":"full","linkDestination":"none","className":"homedroid-service-icons"} -->
                <figure class="wp-block-image aligncenter size-full is-resized homedroid-service-icons"><img src="<?php echo esc_url($homedroid_images[0]) ?>" alt="" class="wp-image-5505" style="width:30px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"24px"}}},"fontSize":"big"} -->
                <h4 class="wp-block-heading has-text-align-center has-big-font-size" style="margin-top:24px"><?php esc_html_e('Gardening Services', 'homedroid') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'homedroid') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textTransform":"uppercase"}},"className":"is-style-button-hover-secondary-color"} -->
                    <div class="wp-block-button is-style-button-hover-secondary-color" style="text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><?php esc_html_e('Read More', 'homedroid') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"44px","bottom":"32px","left":"32px","right":"32px"}},"border":{"radius":"20px"}},"backgroundColor":"light-color","className":"is-style-homedroid-boxshadow homedroid-hover-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-homedroid-boxshadow homedroid-hover-box has-light-color-background-color has-background" style="border-radius:20px;padding-top:44px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:image {"align":"center","id":5505,"width":"30px","sizeSlug":"full","linkDestination":"none","className":"homedroid-service-icons"} -->
                <figure class="wp-block-image aligncenter size-full is-resized homedroid-service-icons"><img src="<?php echo esc_url($homedroid_images[1]) ?>" alt="" class="wp-image-5505" style="width:30px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"24px"}}},"fontSize":"big"} -->
                <h4 class="wp-block-heading has-text-align-center has-big-font-size" style="margin-top:24px"><?php esc_html_e('Plumbing Services', 'homedroid') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'homedroid') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textTransform":"uppercase"}},"className":"is-style-button-hover-secondary-color"} -->
                    <div class="wp-block-button is-style-button-hover-secondary-color" style="text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><?php esc_html_e('Read More', 'homedroid') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"44px","bottom":"32px","left":"32px","right":"32px"}},"border":{"radius":"20px"}},"backgroundColor":"light-color","className":"is-style-homedroid-boxshadow homedroid-hover-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-homedroid-boxshadow homedroid-hover-box has-light-color-background-color has-background" style="border-radius:20px;padding-top:44px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:image {"align":"center","id":5505,"width":"30px","sizeSlug":"full","linkDestination":"none","className":"homedroid-service-icons"} -->
                <figure class="wp-block-image aligncenter size-full is-resized homedroid-service-icons"><img src="<?php echo esc_url($homedroid_images[2]) ?>" alt="" class="wp-image-5505" style="width:30px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"24px"}}},"fontSize":"big"} -->
                <h4 class="wp-block-heading has-text-align-center has-big-font-size" style="margin-top:24px"><?php esc_html_e('Painting', 'homedroid') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'homedroid') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textTransform":"uppercase"}},"className":"is-style-button-hover-secondary-color"} -->
                    <div class="wp-block-button is-style-button-hover-secondary-color" style="text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><?php esc_html_e('Read More', 'homedroid') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"24px"}}},"className":"homedroid-fade-up"} -->
    <div class="wp-block-columns homedroid-fade-up"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"44px","bottom":"32px","left":"32px","right":"32px"}},"border":{"radius":"20px"}},"backgroundColor":"light-color","className":"is-style-homedroid-boxshadow homedroid-hover-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-homedroid-boxshadow homedroid-hover-box has-light-color-background-color has-background" style="border-radius:20px;padding-top:44px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:image {"align":"center","id":5505,"width":"30px","sizeSlug":"full","linkDestination":"none","className":"homedroid-service-icons"} -->
                <figure class="wp-block-image aligncenter size-full is-resized homedroid-service-icons"><img src="<?php echo esc_url($homedroid_images[3]) ?>" alt="" class="wp-image-5505" style="width:30px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"24px"}}},"fontSize":"big"} -->
                <h4 class="wp-block-heading has-text-align-center has-big-font-size" style="margin-top:24px"><?php esc_html_e('HVAC Services', 'homedroid') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'homedroid') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textTransform":"uppercase"}},"className":"is-style-button-hover-secondary-color"} -->
                    <div class="wp-block-button is-style-button-hover-secondary-color" style="text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><?php esc_html_e('Read More', 'homedroid') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"44px","bottom":"32px","left":"32px","right":"32px"}},"border":{"radius":"20px"}},"backgroundColor":"light-color","className":"is-style-homedroid-boxshadow homedroid-hover-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-homedroid-boxshadow homedroid-hover-box has-light-color-background-color has-background" style="border-radius:20px;padding-top:44px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:image {"align":"center","id":5505,"width":"30px","sizeSlug":"full","linkDestination":"none","className":"homedroid-service-icons"} -->
                <figure class="wp-block-image aligncenter size-full is-resized homedroid-service-icons"><img src="<?php echo esc_url($homedroid_images[4]) ?>" alt="" class="wp-image-5505" style="width:30px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"24px"}}},"fontSize":"big"} -->
                <h4 class="wp-block-heading has-text-align-center has-big-font-size" style="margin-top:24px"><?php esc_html_e('Home Repair', 'homedroid') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'homedroid') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textTransform":"uppercase"}},"className":"is-style-button-hover-secondary-color"} -->
                    <div class="wp-block-button is-style-button-hover-secondary-color" style="text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><?php esc_html_e('Read More', 'homedroid') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"44px","bottom":"32px","left":"32px","right":"32px"}},"border":{"radius":"20px"}},"backgroundColor":"light-color","className":"is-style-homedroid-boxshadow homedroid-hover-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-homedroid-boxshadow homedroid-hover-box has-light-color-background-color has-background" style="border-radius:20px;padding-top:44px;padding-right:32px;padding-bottom:32px;padding-left:32px"><!-- wp:image {"align":"center","id":5505,"width":"30px","sizeSlug":"full","linkDestination":"none","className":"homedroid-service-icons"} -->
                <figure class="wp-block-image aligncenter size-full is-resized homedroid-service-icons"><img src="<?php echo esc_url($homedroid_images[5]) ?>" alt="" class="wp-image-5505" style="width:30px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"24px"}}},"fontSize":"big"} -->
                <h4 class="wp-block-heading has-text-align-center has-big-font-size" style="margin-top:24px"><?php esc_html_e('Pest Control', 'homedroid') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas .', 'homedroid') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textTransform":"uppercase"}},"className":"is-style-button-hover-secondary-color"} -->
                    <div class="wp-block-button is-style-button-hover-secondary-color" style="text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><?php esc_html_e('Read More', 'homedroid') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->