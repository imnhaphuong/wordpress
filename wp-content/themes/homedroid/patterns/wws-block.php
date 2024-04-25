<?php

/**
 * Title: Who We Serve Section
 * Slug: homedroid/wws-block
 * Categories: homedroid
 */
$homedroid_url = trailingslashit(get_template_directory_uri());
$homedroid_images = array(
    $homedroid_url . 'assets/images/wws_1.png',
    $homedroid_url . 'assets/images/wws_2.png',
    $homedroid_url . 'assets/images/wws_3.png',
    $homedroid_url . 'assets/images/wws_4.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"100px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"gradient":"light-shade-color","className":"homedroid-fade-up","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group homedroid-fade-up has-light-shade-color-gradient-background has-background" style="padding-top:80px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
        <h1 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:600"><?php esc_html_e('Who We Serve', 'homedroid') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas that emphasize cleanliness', 'homedroid') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"48px"},"blockGap":{"left":"24px"}}}} -->
    <div class="wp-block-columns" style="margin-top:48px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50"}},"backgroundColor":"light-color","className":"homedroid-hover-zoom","layout":{"type":"constrained","justifyContent":"center"}} -->
            <div class="wp-block-group homedroid-hover-zoom has-light-color-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"align":"center","id":5888,"width":"60px","sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($homedroid_images[0]) ?>" alt="" class="wp-image-5888" style="width:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":4,"fontSize":"medium"} -->
                <h4 class="wp-block-heading has-text-align-center has-medium-font-size"><a href="#"><?php esc_html_e('Residential Homes', 'homedroid') ?></a></h4>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50"}},"backgroundColor":"light-color","className":"homedroid-hover-zoom","layout":{"type":"constrained"}} -->
            <div class="wp-block-group homedroid-hover-zoom has-light-color-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"align":"center","id":5888,"width":"60px","sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($homedroid_images[1]) ?>" alt="" class="wp-image-5888" style="width:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":4,"fontSize":"medium"} -->
                <h4 class="wp-block-heading has-text-align-center has-medium-font-size"><a href="#"><?php esc_html_e('Commercial Areas', 'homedroid') ?></a></h4>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50"}},"backgroundColor":"light-color","className":"homedroid-hover-zoom","layout":{"type":"constrained"}} -->
            <div class="wp-block-group homedroid-hover-zoom has-light-color-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"align":"center","id":5888,"width":"60px","sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($homedroid_images[2]) ?>" alt="" class="wp-image-5888" style="width:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":4,"fontSize":"medium"} -->
                <h4 class="wp-block-heading has-text-align-center has-medium-font-size"><a href="#"><?php esc_html_e('Industrial Areas', 'homedroid') ?></a></h4>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50"}},"backgroundColor":"light-color","className":"homedroid-hover-zoom","layout":{"type":"constrained"}} -->
            <div class="wp-block-group homedroid-hover-zoom has-light-color-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"align":"center","id":5888,"width":"60px","sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($homedroid_images[3]) ?>" alt="" class="wp-image-5888" style="width:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","level":4,"fontSize":"medium"} -->
                <h4 class="wp-block-heading has-text-align-center has-medium-font-size"><a href="#"><?php esc_html_e('Governmental Projects', 'homedroid') ?></a></h4>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->