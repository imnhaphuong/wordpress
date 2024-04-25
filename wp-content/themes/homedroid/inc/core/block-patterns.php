<?php

/**
 * homedroid: Block Patterns
 *
 * @since homedroid 1.0.0
 */

/**
 * Registers pattern categories for homedroid
 *
 * @since homedroid 1.0.0
 *
 * @return void
 */
function homedroid_register_pattern_category()
{
	$block_pattern_categories = array(
		'homedroid' => array('label' => __('Homedroid Sections', 'homedroid')),
		'homedroid-home' => array('label' => __('Homedroid Home Pages', 'homedroid')),
		'homedroid-contact' => array('label' => __('Homedroid Contact Us Pages', 'homedroid')),
		'homedroid-services' => array('label' => __('Homedroid Service Pages', 'homedroid')),
		'homedroid-about' => array('label' => __('Homedroid About Us Pages', 'homedroid'))
	);

	$block_pattern_categories = apply_filters('homedroid_block_pattern_categories', $block_pattern_categories);

	foreach ($block_pattern_categories as $name => $properties) {
		if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
			register_block_pattern_category($name, $properties); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		}
	}
}
add_action('init', 'homedroid_register_pattern_category', 9);
