<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => esc_html__( 'Widget Area', 'the-journal' ),
	'description' => esc_html__( 'Add a Widget Area', 'the-journal' ),
	'tab'         => esc_html__( 'Content Elements', 'the-journal' ),
	'popup_size'  => 'medium'
);