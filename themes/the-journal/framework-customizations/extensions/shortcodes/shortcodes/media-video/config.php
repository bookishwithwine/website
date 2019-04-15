<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array(
	'page_builder' => array(
		'title'       => esc_html__( 'Video', 'the-journal' ),
		'description' => esc_html__( 'Add a Video', 'the-journal' ),
		'tab'         => esc_html__( 'Media Elements', 'the-journal' ),
		'popup_size'  => 'medium'
	)
);