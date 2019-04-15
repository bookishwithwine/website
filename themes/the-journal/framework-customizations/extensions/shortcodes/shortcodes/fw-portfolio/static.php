<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$the_journal_template_directory_uri = get_template_directory_uri();
$the_journal_version                = fw()->theme->manifest->get_version();

wp_enqueue_script( 'jquery-masonry' );

wp_enqueue_script(
	'isotope',
	$the_journal_template_directory_uri . '/js/isotope.pkgd.min.js',
	array( 'jquery' ),
	$the_journal_version,
	true
);

wp_enqueue_script(
	'fw-modulo-columns',
	$the_journal_template_directory_uri . '/js/modulo-columns.js',
	array( 'jquery' ),
	$the_journal_version,
	true
);

wp_enqueue_script(
	'fw-shortcode-portfolio-script',
	$the_journal_template_directory_uri . '/framework-customizations/extensions/shortcodes/shortcodes/fw-portfolio/static/js/portfolio-script.js',
	array( 'jquery' ),
	$the_journal_version,
	true
);