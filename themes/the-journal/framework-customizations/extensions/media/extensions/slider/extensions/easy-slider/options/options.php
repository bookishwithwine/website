<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/*
 * options.php - extra options shown after default options on add and edit slider page.
*/
$options = array(
	'unique_id'       => array(
		'type' => 'unique'
	),
	'slides_interval' => array(
		'label' => esc_html__( 'Slides Interval', 'the-journal' ),
		'desc'  => esc_html__( 'Enter the slides interval in milliseconds', 'the-journal' ),
		'type'  => 'text',
		'value' => '5000',
	),
);