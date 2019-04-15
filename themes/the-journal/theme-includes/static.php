<?php if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}

/**
 * Include static files: javascript and css
 *
 */
$template_directory = get_template_directory_uri();
if ( defined( 'FW' ) ) {
	$version = fw()->theme->manifest->get_version();
} else {
	$version = '1.0';
}

/**
 * Enqueue scripts and styles for the front end.
 */

// Load bootstrap stylesheet.
wp_enqueue_style(
	'bootstrap',
	$template_directory . '/css/bootstrap.css',
	array(),
	$version
);

// Load menu stylesheet.
wp_enqueue_style(
	'fw-mmenu',
	$template_directory . '/css/jquery.mmenu.all.css',
	array(),
	$version
);

// Load owl slidet for section type 10.
wp_enqueue_style(
	'owlcarousel',
	$template_directory . '/css/owl.carousel.css',
	array(),
	$version
);

// Load our main stylesheet. It is generated with less in upload folder
$upload_dir = wp_upload_dir();
if ( file_exists( $upload_dir['basedir'] . '/fw-style.css' ) ) {
	wp_enqueue_style(
		'the-journal-style',
		$upload_dir['baseurl'] . '/fw-style.css',
		array(),
		filemtime( $upload_dir['basedir'] . '/fw-style.css' )
	);
} else {
	wp_enqueue_style(
		'the-journal-style',
		$template_directory . '/css/fw-style.css',
		array(),
		$version
	);
}

// Load our main stylesheet.
wp_enqueue_style(
	'the-journal-theme-style',
	get_stylesheet_uri(),
	array(),
	$version
);

// Load prettyPhoto stylesheet.
wp_enqueue_style(
	'prettyPhoto',
	$template_directory . '/css/prettyPhoto.css',
	array(),
	$version
);

// Load animate stylesheet.
wp_enqueue_style(
	'animate',
	$template_directory . '/css/animate.css',
	array(),
	$version
);

// Load font-awesome stylesheet.
wp_enqueue_style(
	'font-awesome',
	$template_directory . '/css/font-awesome.css',
	array(),
	$version
);

// Load js files.
if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	wp_enqueue_script( 'comment-reply' );
}

wp_enqueue_script(
	'modernizr',
	$template_directory . '/js/lib/modernizr.js',
	array( 'jquery' ),
	$version,
	false
);

wp_enqueue_script(
	'bootstrap',
	$template_directory . '/js/lib/bootstrap.js',
	array(),
	$version,
	false
);

wp_enqueue_script(
	'carouFredSel',
	$template_directory . '/js/jquery.carouFredSel-6.2.1.js',
	array( 'jquery' ),
	$version,
	true
);

wp_enqueue_script(
	'touchSwipe',
	$template_directory . '/js/jquery.touchSwipe.js',
	array( 'jquery' ),
	$version,
	true
);

wp_enqueue_script(
	'prettyPhoto',
	$template_directory . '/js/jquery.prettyPhoto.js',
	array( 'jquery' ),
	$version,
	true
);

wp_enqueue_script( 'masonry' );

wp_enqueue_script(
	'customInput',
	$template_directory . '/js/jquery.customInput.js',
	array( 'jquery' ),
	$version,
	true
);

wp_enqueue_script(
	'scrollTo',
	$template_directory . '/js/jquery.scrollTo.js',
	array( 'jquery' ),
	$version,
	true
);

wp_enqueue_script(
	'mmenu',
	$template_directory . '/js/jquery.mmenu.all.js',
	array( 'jquery' ),
	$version,
	true
);

wp_enqueue_script(
	'selectize',
	$template_directory . '/js/selectize.js',
	array( 'jquery' ),
	$version,
	true
);

wp_enqueue_script(
	'the-journal-general',
	$template_directory . '/js/general.js',
	array( 'jquery' ),
	$version,
	true
);

/*
*  Send success and error messages of the contact form in general.js
*/
wp_localize_script( 'the-journal-general', 'FwPhpVars', array(
	'ajax_url'           => esc_url( admin_url( 'admin-ajax.php' ) ),
	'template_directory' => $template_directory,
) );
if ( defined( 'FW' ) && FW_Form::get_submitted() && ! FW_Form::get_submitted()->is_valid() ) {
	wp_localize_script( 'general', '_fw_form_invalid', array(
		'id'     => FW_Form::get_submitted()->get_id(),
		'errors' => FW_Form::get_submitted()->get_errors(),
	) );
}

wp_enqueue_script(
	'lazysizes',
	$template_directory . '/js/lazysizes.js',
	array( 'jquery' ),
	$version,
	true
);

// js for ie < ie9
wp_enqueue_script( 'html5shiv', $template_directory . '/js/lib/html5shiv.js', array(), $version );
wp_style_add_data( 'html5shiv', 'conditional', 'if lt IE 9' );

wp_enqueue_script( 'respond', $template_directory . '/js/lib/respond.js', array(), $version );
wp_style_add_data( 'respond', 'conditional', 'if lt IE 9' );