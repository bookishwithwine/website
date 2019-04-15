<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array(
	'page_builder' => array(
		'tab'        => esc_html__( 'Layout Elements', 'the-journal' ),
		'title'      => esc_html__( 'Column', 'the-journal' ),
		'popup_size' => 'medium',
		'type'       => 'column'
	)
);