<?php
/*This file is part of blogger-lite, saraswati blog child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/



function  blogger_lite_remove_post_formats() {
    add_theme_support( 'post-formats', array( 'image','aside') );
}
add_action( 'after_setup_theme', 'blogger_lite_remove_post_formats', 11 );

function blogger_lite_about_section( $wp_customize ) {
    $wp_customize->remove_control('theme_detail');
}
add_action( 'customize_register', 'blogger_lite_about_section' );

function blogger_lite_child_style() {
$parent_style = 'parent-style'; 
	wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 
		'child-style', 
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('Version') );
	}
add_action( 'wp_enqueue_scripts', 'blogger_lite_child_style' );

/*Write here your own functions */


