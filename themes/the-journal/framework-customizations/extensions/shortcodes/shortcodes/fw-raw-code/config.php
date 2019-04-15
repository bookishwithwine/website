<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array(
	'page_builder' => array(
		'title'          => __( 'RAW Code', 'the-journal' ),
		'description'    => __( 'Add Raw Code', 'the-journal' ),
		'tab'            => __( 'Content Elements', 'the-journal' ),
		'popup_size'     => 'medium',
		'title_template' => '{{ if (!o.shortcode_name) { }} {{- title}} {{ } }} {{ if (o.shortcode_name) { }} {{- o.shortcode_name}} {{ } }}',
	)
);
