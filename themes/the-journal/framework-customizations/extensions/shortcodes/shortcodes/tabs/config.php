<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array(
	'page_builder' => array(
		'title'       => esc_html__( 'Tabs', 'the-journal' ),
		'description' => esc_html__( 'Add some Tabs', 'the-journal' ),
		'popup_size'  => 'medium',
		'tab'         => esc_html__( 'Content Elements', 'the-journal' ),
	)
);