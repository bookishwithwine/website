<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => esc_html__( 'Map', 'the-journal' ),
	'description' => esc_html__( 'Add a Map', 'the-journal' ),
	'tab'         => esc_html__( 'Content Elements', 'the-journal' ),
	'popup_size'  => 'medium'
);