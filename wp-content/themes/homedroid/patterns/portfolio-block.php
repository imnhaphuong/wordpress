<?php

/**
 * Title: Portfolio Showcase Section
 * Slug: homedroid/portfolio-block
 * Categories: homedroid
 */
$homedroid_url = trailingslashit(get_template_directory_uri());
$homedroid_images = array(
    $homedroid_url . 'assets/images/service_1.jpg',
    $homedroid_url . 'assets/images/service_2.jpg',
    $homedroid_url . 'assets/images/service_3.jpg',
    $homedroid_url . 'assets/images/service_7.jpg',
    $homedroid_url . 'assets/images/service_5.jpg',
    $homedroid_url . 'assets/images/service_6.jpg'
);
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"100px","bottom":"100px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"className":"homedroid-fade-up","layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-group homedroid-fade-up"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
        <p class="has-text-align-center has-secondary-color has-text-color has-link-color"><?php esc_html_e('Our Portfolio', 'homedroid') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"xx-large"} -->
        <h1 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:600"><?php esc_html_e('Our Recent Works', 'homedroid') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas that emphasize cleanliness', 'homedroid') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"48px"}}},"className":"homedroid-fade-up"} -->
    <div class="wp-block-columns homedroid-fade-up" style="margin-top:48px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($homedroid_images[0]) ?>","id":5941,"dimRatio":10,"minHeight":360,"contentPosition":"bottom left","isDark":false,"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"className":"homedroid-portfolio-box","layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left homedroid-portfolio-box" style="border-radius:20px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-5941" alt="" src="<?php echo esc_url($homedroid_images[0]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"30px","right":"var:preset|spacing|30"}},"border":{"width":"0px","style":"none","radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"0px","bottomRight":"0px"}}},"backgroundColor":"light-color","className":"homedroid-portfolio-content","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                    <div class="wp-block-group homedroid-portfolio-content has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:24px;padding-right:var(--wp--preset--spacing--30);padding-bottom:24px;padding-left:30px"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"big"} -->
                        <h3 class="wp-block-heading has-text-align-left has-big-font-size" style="font-style:normal;font-weight:500"><a href="#"><?php esc_html_e('Solar Services', 'homedroid') ?></a></h3>
                        <!-- /wp:heading -->

                        <!-- wp:buttons -->
                        <div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"60px"}},"className":"homedroid-portfolio-link-icon"} -->
                            <div class="wp-block-button homedroid-portfolio-link-icon"><a class="wp-block-button__link wp-element-button" style="border-radius:60px"><?php esc_html_e('More', 'homedroid') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($homedroid_images[1]) ?>","id":5598,"dimRatio":10,"focalPoint":{"x":0.49,"y":0.21},"minHeight":360,"contentPosition":"bottom left","isDark":false,"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"className":"homedroid-portfolio-box","layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left homedroid-portfolio-box" style="border-radius:20px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-5598" alt="" src="<?php echo esc_url($homedroid_images[1]) ?>" style="object-position:49% 21%" data-object-fit="cover" data-object-position="49% 21%" />
                <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"30px","right":"var:preset|spacing|30"}},"border":{"width":"0px","style":"none","radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"0px","bottomRight":"0px"}}},"backgroundColor":"light-color","className":"homedroid-portfolio-content","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                    <div class="wp-block-group homedroid-portfolio-content has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:24px;padding-right:var(--wp--preset--spacing--30);padding-bottom:24px;padding-left:30px"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"big"} -->
                        <h3 class="wp-block-heading has-text-align-left has-big-font-size" style="font-style:normal;font-weight:500"><a href="#"><?php esc_html_e('Construction Services', 'homedroid') ?></a></h3>
                        <!-- /wp:heading -->

                        <!-- wp:buttons -->
                        <div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"60px"}},"className":"homedroid-portfolio-link-icon"} -->
                            <div class="wp-block-button homedroid-portfolio-link-icon"><a class="wp-block-button__link wp-element-button" style="border-radius:60px"><?php esc_html_e('More', 'homedroid') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($homedroid_images[2]) ?>","id":4967,"dimRatio":10,"minHeight":360,"contentPosition":"bottom left","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"className":"homedroid-portfolio-box","layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-left homedroid-portfolio-box" style="border-radius:20px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-4967" alt="" src="<?php echo esc_url($homedroid_images[2]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"30px","right":"var:preset|spacing|30"}},"border":{"width":"0px","style":"none","radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"0px","bottomRight":"0px"}}},"backgroundColor":"light-color","className":"homedroid-portfolio-content","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                    <div class="wp-block-group homedroid-portfolio-content has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:24px;padding-right:var(--wp--preset--spacing--30);padding-bottom:24px;padding-left:30px"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"big"} -->
                        <h3 class="wp-block-heading has-text-align-left has-big-font-size" style="font-style:normal;font-weight:500"><a href="#"><?php esc_html_e('HVAC Services', 'homedroid') ?></a></h3>
                        <!-- /wp:heading -->

                        <!-- wp:buttons -->
                        <div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"60px"}},"className":"homedroid-portfolio-link-icon"} -->
                            <div class="wp-block-button homedroid-portfolio-link-icon"><a class="wp-block-button__link wp-element-button" style="border-radius:60px"><?php esc_html_e('More', 'homedroid') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"24px"}}},"className":"homedroid-fade-up"} -->
    <div class="wp-block-columns homedroid-fade-up" style="margin-top:24px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($homedroid_images[3]) ?>","id":4545,"dimRatio":10,"minHeight":360,"contentPosition":"bottom left","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"className":"homedroid-portfolio-box","layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-left homedroid-portfolio-box" style="border-radius:20px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-4545" alt="" src="<?php echo esc_url($homedroid_images[3]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"30px","right":"var:preset|spacing|30"}},"border":{"width":"0px","style":"none","radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"0px","bottomRight":"0px"}}},"backgroundColor":"light-color","className":"homedroid-portfolio-content","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                    <div class="wp-block-group homedroid-portfolio-content has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:24px;padding-right:var(--wp--preset--spacing--30);padding-bottom:24px;padding-left:30px"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"big"} -->
                        <h3 class="wp-block-heading has-text-align-left has-big-font-size" style="font-style:normal;font-weight:500"><a href="#"><?php esc_html_e('Gardening Services', 'homedroid') ?></a></h3>
                        <!-- /wp:heading -->

                        <!-- wp:buttons -->
                        <div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"60px"}},"className":"homedroid-portfolio-link-icon"} -->
                            <div class="wp-block-button homedroid-portfolio-link-icon"><a class="wp-block-button__link wp-element-button" style="border-radius:60px"><?php esc_html_e('More', 'homedroid') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($homedroid_images[4]) ?>","id":4899,"dimRatio":10,"minHeight":360,"contentPosition":"bottom left","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"className":"homedroid-portfolio-box","layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-left homedroid-portfolio-box" style="border-radius:20px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-4899" alt="" src="<?php echo esc_url($homedroid_images[4]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"30px","right":"var:preset|spacing|30"}},"border":{"width":"0px","style":"none","radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"0px","bottomRight":"0px"}}},"backgroundColor":"light-color","className":"homedroid-portfolio-content","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                    <div class="wp-block-group homedroid-portfolio-content has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:24px;padding-right:var(--wp--preset--spacing--30);padding-bottom:24px;padding-left:30px"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"big"} -->
                        <h3 class="wp-block-heading has-text-align-left has-big-font-size" style="font-style:normal;font-weight:500"><a href="#"><?php esc_html_e('Cleaning Services', 'homedroid') ?></a></h3>
                        <!-- /wp:heading -->

                        <!-- wp:buttons -->
                        <div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"60px"}},"className":"homedroid-portfolio-link-icon"} -->
                            <div class="wp-block-button homedroid-portfolio-link-icon"><a class="wp-block-button__link wp-element-button" style="border-radius:60px"><?php esc_html_e('More', 'homedroid') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($homedroid_images[5]) ?>","id":4546,"dimRatio":10,"minHeight":360,"contentPosition":"bottom left","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"className":"homedroid-portfolio-box","layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-left homedroid-portfolio-box" style="border-radius:20px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-4546" alt="" src="<?php echo esc_url($homedroid_images[5]) ?>" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"30px","right":"var:preset|spacing|30"}},"border":{"width":"0px","style":"none","radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"0px","bottomRight":"0px"}}},"backgroundColor":"light-color","className":"homedroid-portfolio-content","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                    <div class="wp-block-group homedroid-portfolio-content has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:24px;padding-right:var(--wp--preset--spacing--30);padding-bottom:24px;padding-left:30px"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"big"} -->
                        <h3 class="wp-block-heading has-text-align-left has-big-font-size" style="font-style:normal;font-weight:500"><a href="#"><?php esc_html_e('Pest Control Services', 'homedroid') ?></a></h3>
                        <!-- /wp:heading -->

                        <!-- wp:buttons -->
                        <div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"60px"}},"className":"homedroid-portfolio-link-icon"} -->
                            <div class="wp-block-button homedroid-portfolio-link-icon"><a class="wp-block-button__link wp-element-button" style="border-radius:60px"><?php esc_html_e('More', 'homedroid') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->