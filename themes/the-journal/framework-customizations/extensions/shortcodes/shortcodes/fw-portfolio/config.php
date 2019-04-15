<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

if ( ! fw_ext( 'portfolio' ) ) {
	// if portfolio extensions is disabled return
	return;
}

$cfg = array(
	'page_builder' => array(
		'title'       => __( 'Porfolio', 'the-journal' ),
		'description' => __( 'Add a Portfolio', 'the-journal' ),
		'tab'         => __( 'Content Elements', 'the-journal' ),
		'popup_size'  => 'medium',
	)
);