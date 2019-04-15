<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array(
	'page_builder' => array(
		'tab'         => esc_html__( 'Layout Elements', 'the-journal' ),
		'title'       => esc_html__( 'Section', 'the-journal' ),
		'description' => esc_html__( 'Add a Section', 'the-journal' ),
		'popup_size'  => 'medium',
		'type'        => 'section' // WARNING: Do not edit this
	)
);