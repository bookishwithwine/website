<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array(
	'page_builder' => array(
		'title'       => esc_html__( 'Posts Section', 'the-journal' ),
		'description' => esc_html__( 'Add Posts Section', 'the-journal' ),
		'tab'         => esc_html__( 'Content Elements', 'the-journal' ),
		'popup_size'  => 'medium'
	)
);