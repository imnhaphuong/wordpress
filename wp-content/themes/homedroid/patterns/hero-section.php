<?php

/**
 * Title: Hero/Banner Section
 * Slug: homedroid/hero-section
 * Categories: homedroid
 */
$homedroid_url = trailingslashit(get_template_directory_uri());
$homedroid_images = array(
    $homedroid_url . 'assets/images/banner_home.png',
);
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"dimensions":{"minHeight":"657px"}},"gradient":"primary-gradient","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-primary-gradient-gradient-background has-background" style="min-height:657px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($homedroid_images[0]) ?>","id":5734,"dimRatio":0,"minHeight":657,"contentPosition":"center center","style":{"spacing":{"padding":{"top":"0","bottom":"55px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-cover" style="padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:55px;padding-left:var(--wp--preset--spacing--40);min-height:657px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-5734" alt="" src="<?php echo esc_url($homedroid_images[0]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container"><!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"width":"45%"} -->
                <div class="wp-block-column" style="flex-basis:45%"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"className":"homedroid-slide-up","layout":{"type":"constrained","contentSize":""}} -->
                    <div class="wp-block-group homedroid-slide-up" style="padding-right:0;padding-left:0"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"small"} -->
                        <h2 class="wp-block-heading has-secondary-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400;text-transform:uppercase"><?php esc_html_e('Welcome to Homedroid!', 'homedroid') ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:heading {"level":1,"style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"500","fontSize":"54px"},"spacing":{"margin":{"top":"10px","bottom":"24px"}}}} -->
                        <h1 class="wp-block-heading" style="margin-top:10px;margin-bottom:24px;font-size:54px;font-style:normal;font-weight:500;text-transform:capitalize"><?php esc_html_e('Your Trusted Partner for Exceptional Home Services', 'homedroid') ?></h1>
                        <!-- /wp:heading -->

                        <!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                        <h2 class="wp-block-heading has-light-color-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:400;text-transform:none"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'homedroid') ?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"40px"}}}} -->
                        <div class="wp-block-buttons" style="margin-top:40px"><!-- wp:button {"backgroundColor":"secondary","textColor":"dark-shade","style":{"border":{"radius":"50px","width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|dark-shade"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"36px","right":"36px","top":"18px","bottom":"18px"}}},"className":"is-style-button-hover-secondary-bgcolor","fontSize":"normal"} -->
                            <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-normal-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-dark-shade-color has-secondary-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:50px;padding-top:18px;padding-right:36px;padding-bottom:18px;padding-left:36px"><?php esc_html_e('Schedule Quick Call', 'homedroid') ?></a></div>
                            <!-- /wp:button -->

                            <!-- wp:button {"backgroundColor":"light-color","textColor":"dark-color","style":{"border":{"radius":"50px","width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|dark-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"36px","right":"36px","top":"18px","bottom":"18px"}}},"className":"is-style-button-hover-secondary-bgcolor","fontSize":"normal"} -->
                            <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-normal-font-size" style="font-style:normal;font-weight:500"><a class="wp-block-button__link has-dark-color-color has-light-color-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:50px;padding-top:18px;padding-right:36px;padding-bottom:18px;padding-left:36px"><?php esc_html_e('Learn More', 'homedroid') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"></div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->