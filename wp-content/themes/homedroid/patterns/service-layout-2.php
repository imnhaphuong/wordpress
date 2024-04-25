<?php

/**
 * Title: Services Layout 2
 * Slug: homedroid/service-layout-2
 * Categories: homedroid
 */
$homedroid_url = trailingslashit(get_template_directory_uri());
$homedroid_images = array(
    $homedroid_url . 'assets/images/service_6.jpg',
    $homedroid_url . 'assets/images/service_7.jpg',
    $homedroid_url . 'assets/images/service_4.jpg',
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

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"44px"},"blockGap":{"left":"30px"}}},"className":"homedroid-fade-up"} -->
    <div class="wp-block-columns homedroid-fade-up" style="margin-top:44px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"30px","bottom":"32px","right":"30px","left":"30px"}},"border":{"radius":"12px"}},"backgroundColor":"light-color","className":"is-style-homedroid-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-homedroid-boxshadow-medium has-light-color-background-color has-background" style="border-radius:12px;padding-top:30px;padding-right:30px;padding-bottom:32px;padding-left:30px"><!-- wp:image {"id":5713,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"width":"0px","style":"none","radius":"12px"}}} -->
                <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($homedroid_images[0]) ?>" alt="" class="wp-image-5713" style="border-style:none;border-width:0px;border-radius:12px;object-fit:cover" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"24px"}}},"fontSize":"big"} -->
                    <h4 class="wp-block-heading has-text-align-center has-big-font-size" style="margin-top:24px"><?php esc_html_e('Gardening Services', 'homedroid') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'homedroid') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textTransform":"uppercase"},"border":{"width":"1px","radius":"50px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:50px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><?php esc_html_e('Read More', 'homedroid') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"30px","bottom":"32px","right":"30px","left":"30px"}},"border":{"radius":"12px"}},"backgroundColor":"light-color","className":"is-style-homedroid-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-homedroid-boxshadow-medium has-light-color-background-color has-background" style="border-radius:12px;padding-top:30px;padding-right:30px;padding-bottom:32px;padding-left:30px"><!-- wp:image {"id":5713,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"width":"0px","style":"none","radius":"12px"}}} -->
                <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($homedroid_images[1]) ?>" alt="" class="wp-image-5713" style="border-style:none;border-width:0px;border-radius:12px;object-fit:cover" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"24px"}}},"fontSize":"big"} -->
                    <h4 class="wp-block-heading has-text-align-center has-big-font-size" style="margin-top:24px"><?php esc_html_e('Gardening Services', 'homedroid') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'homedroid') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textTransform":"uppercase"},"border":{"width":"1px","radius":"50px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:50px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><?php esc_html_e('Read More', 'homedroid') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"30px","bottom":"32px","right":"30px","left":"30px"}},"border":{"radius":"12px"}},"backgroundColor":"light-color","className":"is-style-homedroid-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-homedroid-boxshadow-medium has-light-color-background-color has-background" style="border-radius:12px;padding-top:30px;padding-right:30px;padding-bottom:32px;padding-left:30px"><!-- wp:image {"id":5713,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"width":"0px","style":"none","radius":"12px"}}} -->
                <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($homedroid_images[2]) ?>" alt="" class="wp-image-5713" style="border-style:none;border-width:0px;border-radius:12px;object-fit:cover" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"24px"}}},"fontSize":"big"} -->
                    <h4 class="wp-block-heading has-text-align-center has-big-font-size" style="margin-top:24px"><?php esc_html_e('Gardening Services', 'homedroid') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'homedroid') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"textTransform":"uppercase"},"border":{"width":"1px","radius":"50px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:50px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><?php esc_html_e('Read More', 'homedroid') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->