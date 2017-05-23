<?php

namespace WSU\Shortcode_UI\Shorcake_Bakery;

// Adjust defaults included with Shortcake Bakery
add_filter( 'shortcake_bakery_shortcode_classes', 'WSU\Shortcode_UI\Shorcake_Bakery\filter_shortcodes' );
add_action( 'after_setup_theme', 'WSU\Shortcode_UI\Shorcake_Bakery\remove_embed_button', 999 );

/**
 * Filters the default list of shortcodes provided by the
 * Shortcake Bakery plugin.
 *
 * @since 0.0.1
 *
 * @return array
 */
function filter_shortcodes() {
	return array(
		// 'Shortcake_Bakery\Shortcodes\ABC_News',
		// 'Shortcake_Bakery\Shortcodes\Facebook',
		'Shortcake_Bakery\Shortcodes\Flickr',
		'Shortcake_Bakery\Shortcodes\Giphy',
		// 'Shortcake_Bakery\Shortcodes\Guardian',
		// 'Shortcake_Bakery\Shortcodes\Iframe',
		'Shortcake_Bakery\Shortcodes\Image_Comparison',
		'Shortcake_Bakery\Shortcodes\Infogram',
		'Shortcake_Bakery\Shortcodes\Instagram',
		'Shortcake_Bakery\Shortcodes\Livestream',
		// 'Shortcake_Bakery\Shortcodes\Rap_Genius',
		'Shortcake_Bakery\Shortcodes\PDF',
		// 'Shortcake_Bakery\Shortcodes\Playbuzz',
		'Shortcake_Bakery\Shortcodes\Scribd',
		// 'Shortcake_Bakery\Shortcodes\Script',
		// 'Shortcake_Bakery\Shortcodes\Silk',
		'Shortcake_Bakery\Shortcodes\SoundCloud',
		'Shortcake_Bakery\Shortcodes\Twitter',
		// 'Shortcake_Bakery\Shortcodes\Videoo',
		'Shortcake_Bakery\Shortcodes\Vimeo',
		'Shortcake_Bakery\Shortcodes\Vine',
		'Shortcake_Bakery\Shortcodes\YouTube',
	);
}

/**
 * Removes the "Insert Embed" button added by Shortcake Bakery.
 *
 * Arbitrary embed text can still be entered, but must be accessed
 * through Insert Media or Insert Post Element instead.
 *
 * @since 0.0.1
 */
function remove_embed_button() {
	if ( class_exists( '\Shortcake_Bakery' ) ) {
		remove_action( 'media_buttons', array( \Shortcake_Bakery::get_instance(), 'action_media_buttons' ) );
	}
}
