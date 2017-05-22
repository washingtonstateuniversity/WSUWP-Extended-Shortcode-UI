<?php
/*
Plugin Name: WSUWP Extended Shortcode UI
Version: 0.0.1
Description: Extends the Shortcode UI plugin.
Author: washingtonstateuniversity, jeremyfelt
Author URI: https://web.wsu.edu/
Plugin URI: https://github.com/washingtonstateuniversity/WSUWP-Extended-Shortcode-UI
*/

namespace WSU\Shortcode_UI;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action( 'plugins_loaded', 'WSU\Shortcode_UI\bootstrap' );
/**
 * Loads the rest of the plugin.
 *
 * @since 0.0.1
 */
function bootstrap() {
}
