<?php if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}

/**
 * Include admin static files: javascript and css
 */

$template_directory = get_template_directory_uri();
$version            = defined( 'FW' ) ? fw()->theme->manifest->get_version() : '1.0.1';

wp_enqueue_style(
	'the-journal-css-theme-admin',
	$template_directory . '/css/theme-admin.css',
	array(),
	$version
);

if ( is_rtl() ) {
	wp_enqueue_style(
		'the-journal-css-admin-rtl',
		$template_directory . '/css/admin-rtl.css',
		array(),
		$version
	);
}

wp_enqueue_script(
	'the-journal-js-theme-admin',
	$template_directory . '/js/theme-admin.js',
	array( 'jquery', ),
	$version,
	true
);

