<?php

/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package homedroid
 * @since 1.0.0
 */

if (function_exists('register_block_style')) {
    /**
     * Register block styles.
     *
     * @since 0.1
     *
     * @return void
     */
    function homedroid_register_block_styles()
    {
        register_block_style(
            'core/columns',
            array(
                'name'  => 'homedroid-boxshadow',
                'label' => __('Box Shadow', 'homedroid')
            )
        );

        register_block_style(
            'core/column',
            array(
                'name'  => 'homedroid-boxshadow',
                'label' => __('Box Shadow', 'homedroid')
            )
        );
        register_block_style(
            'core/column',
            array(
                'name'  => 'homedroid-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'homedroid')
            )
        );
        register_block_style(
            'core/column',
            array(
                'name'  => 'homedroid-boxshadow-large',
                'label' => __('Box Shadow Large', 'homedroid')
            )
        );

        register_block_style(
            'core/group',
            array(
                'name'  => 'homedroid-boxshadow',
                'label' => __('Box Shadow', 'homedroid')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'homedroid-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'homedroid')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'homedroid-boxshadow-large',
                'label' => __('Box Shadow Larger', 'homedroid')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'homedroid-boxshadow',
                'label' => __('Box Shadow', 'homedroid')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'homedroid-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'homedroid')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'homedroid-boxshadow-larger',
                'label' => __('Box Shadow Large', 'homedroid')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'homedroid-image-pulse',
                'label' => __('Iamge Pulse Effect', 'homedroid')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'homedroid-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'homedroid')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'homedroid-image-hover-pulse',
                'label' => __('Hover Pulse Effect', 'homedroid')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'homedroid-image-hover-rotate',
                'label' => __('Hover Rotate Effect', 'homedroid')
            )
        );
        register_block_style(
            'core/columns',
            array(
                'name'  => 'homedroid-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'homedroid')
            )
        );

        register_block_style(
            'core/column',
            array(
                'name'  => 'homedroid-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'homedroid')
            )
        );

        register_block_style(
            'core/group',
            array(
                'name'  => 'homedroid-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'homedroid')
            )
        );

        register_block_style(
            'core/post-terms',
            array(
                'name'  => 'categories-background-with-round',
                'label' => __('Background with round corner style', 'homedroid')
            )
        );
        register_block_style(
            'core/post-title',
            array(
                'name'  => 'title-hover-primary-color',
                'label' => __('Hover: Primary color', 'homedroid')
            )
        );
        register_block_style(
            'core/post-title',
            array(
                'name'  => 'title-hover-secondary-color',
                'label' => __('Hover: Secondary color', 'homedroid')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-primary-color',
                'label' => __('Hover: Primary Color', 'homedroid')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-secondary-color',
                'label' => __('Hover: Secondary Color', 'homedroid')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-primary-bgcolor',
                'label' => __('Hover: Primary color fill', 'homedroid')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-secondary-bgcolor',
                'label' => __('Hover: Secondary color fill', 'homedroid')
            )
        );

        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-primary-color',
                'label' => __('Hover: Primary Color', 'homedroid')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-secondary-color',
                'label' => __('Hover: Secondary Color', 'homedroid')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-primary-fill',
                'label' => __('Hover: Primary Fill', 'homedroid')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-secondary-fill',
                'label' => __('Hover: secondary Fill', 'homedroid')
            )
        );

        register_block_style(
            'core/list',
            array(
                'name'  => 'list-style-no-bullet',
                'label' => __('List Style: Hide bullet', 'homedroid')
            )
        );
        register_block_style(
            'core/list',
            array(
                'name'  => 'hide-bullet-list-link-hover-style-primary',
                'label' => __('Hover style with primary color and hide bullet', 'homedroid')
            )
        );
        register_block_style(
            'core/list',
            array(
                'name'  => 'hide-bullet-list-link-hover-style-secondary',
                'label' => __('Hover style with secondary color and hide bullet', 'homedroid')
            )
        );

        register_block_style(
            'core/gallery',
            array(
                'name'  => 'enable-grayscale-mode-on-image',
                'label' => __('Enable Grayscale Mode on Image', 'homedroid')
            )
        );
        register_block_style(
            'core/social-links',
            array(
                'name'  => 'social-icon-border',
                'label' => __('Border Style', 'homedroid')
            )
        );
        register_block_style(
            'core/page-list',
            array(
                'name'  => 'homedroid-page-list-bullet-hide-style',
                'label' => __('Hide Bullet Style', 'homedroid')
            )
        );
        register_block_style(
            'core/categories',
            array(
                'name'  => 'homedroid-categories-bullet-hide-style',
                'label' => __('Hide Bullet Style', 'homedroid')
            )
        );
        register_block_style(
            'core/cover',
            array(
                'name'  => 'homedroid-cover-round-style',
                'label' => __('Round Corner Style', 'homedroid')
            )
        );
    }
    add_action('init', 'homedroid_register_block_styles');
}
