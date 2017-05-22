<?php

namespace WSU\Shortcode_UI\Image_Shortcake;

add_filter( 'img_shortcode_ui_args', 'WSU\Shortcode_UI\Image_Shortcake\add_class_attribute' );

/**
 * Filters the classes output on standard image markup.
 *
 * These classes are applied to `<img>` and not to a wrapping `<figure>`
 * if a caption is used.
 *
 * @since 0.0.1
 *
 * @param array $args
 * @return array
 */
function add_class_attribute( $args ) {
	$current_attributes = wp_list_pluck( $args['attrs'], 'attr' );

	if ( in_array( 'classes', $current_attributes, true ) ) {
		return $args;
	}

	$args['attrs'][] = array(
		'label'       => 'Class names attached to the image',
		'attr'        => 'classes',
		'type'        => 'text',
		'placeholder' => 'Space separated list of class names',
	);

	return $args;
}
