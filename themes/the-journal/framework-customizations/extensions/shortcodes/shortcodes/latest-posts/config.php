<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array(
	'page_builder' => array(
		'title'       => esc_html__( 'Latest Posts', 'the-journal' ),
		'description' => esc_html__( 'Add Latest Posts', 'the-journal' ),
		'tab'         => esc_html__( 'Content Elements', 'the-journal' ),
		'popup_size'  => 'medium'
	)
);