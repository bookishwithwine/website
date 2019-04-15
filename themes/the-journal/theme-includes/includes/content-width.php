<?php if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}

/**
 * Set up the content width value based on the theme's design.
 *
 * @see the_journal_action_theme_content_width()
 */
if ( ! isset( $content_width ) ) {
	$content_width = 474;
}
