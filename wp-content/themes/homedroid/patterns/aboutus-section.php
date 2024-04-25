<?php

/**
 * Title: About Us Section
 * Slug: homedroid/aboutus-section
 * Categories: homedroid
 */
$homedroid_url = trailingslashit(get_template_directory_uri());
$homedroid_images = array(
    $homedroid_url . 'assets/images/about_img.png'
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","bottom":"120px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-bottom:120px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","className":"homedroid-fade-up"} -->
        <div class="wp-block-column is-vertically-aligned-center homedroid-fade-up"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
            <p class="has-secondary-color has-text-color has-link-color"><?php esc_html_e('About Us', 'homedroid') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
            <h1 class="wp-block-heading" style="margin-top:0;margin-bottom:0"><?php esc_html_e('Are You Looking for Shipping Services?', 'homedroid') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p><?php esc_html_e('Home services" is a broad term that encompasses various services related to the maintenance, improvement, and well-being of a household. These services can be essential for homeowners to ensure the smooth functioning and comfort of their homes.', 'homedroid') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontSize":"medium"} -->
            <p class="has-primary-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Hotline : +1 (012) 345-6789', 'homedroid') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"32px"}}}} -->
            <div class="wp-block-buttons" style="margin-top:32px"><!-- wp:button {"textColor":"light-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70","top":"18px","bottom":"18px"}},"border":{"radius":"50px"}},"fontSize":"normal"} -->
                <div class="wp-block-button has-custom-font-size has-normal-font-size"><a class="wp-block-button__link has-light-color-color has-text-color has-link-color wp-element-button" style="border-radius:50px;padding-top:18px;padding-right:var(--wp--preset--spacing--70);padding-bottom:18px;padding-left:var(--wp--preset--spacing--70)"><?php esc_html_e('Read More', 'homedroid') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","className":"homedroid-slide-up"} -->
        <div class="wp-block-column is-vertically-aligned-center homedroid-slide-up"><!-- wp:image {"id":5873,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="<?php echo esc_url($homedroid_images[0]) ?>" alt="" class="wp-image-5873" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->