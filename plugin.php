<?php
/*
Plugin Name: WSUWP Extended Shortcode UI
Version: 0.0.1
Description: Extends the Shortcode UI plugin.
Author: washingtonstateuniversity, jeremyfelt
Author URI: https://web.wsu.edu/
Plugin URI: https://github.com/washingtonstateuniversity/WSUWP-Extended-Shortcode-UI
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// This plugin uses namespaces and requires PHP 5.3 or greater.
if ( version_compare( PHP_VERSION, '5.3', '<' ) ) {
	add_action( 'admin_notices', create_function( '',
	"echo '<div class=\"error\"><p>" . __( 'WSUWP Extended Shortcode UI requires PHP 5.3 to function properly. Please upgrade PHP or deactivate the plugin.', 'wsuwp-extended-shortcode-ui' ) . "</p></div>';" ) );
	return;
} else {
	include_once __DIR__ . '/includes/shortcode-ui.php';
}
