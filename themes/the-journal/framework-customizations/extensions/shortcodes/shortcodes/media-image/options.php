<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'img_settings' => array(
		'type'    => 'group',
		'options' => array(
			'upload_img' => array(
				'label' => esc_html__( 'Image', 'the-journal' ),
				'desc'  => esc_html__( 'Upload image', 'the-journal' ),
				'type'  => 'upload',
			)
		)
	),
	'ratio'        => array(
		'type'    => 'short-select',
		'label'   => __( 'Image Format', 'the-journal' ),
		'value'   => '',
		'choices' => array(
			array( // optgroup
				'attr'    => array( 'label' => __( 'Original', 'the-journal' ) ),
				'choices' => array(
					'' => __( 'Original Ratio', 'the-journal' ),
				),
			),
			array( // optgroup
				'attr'    => array( 'label' => __( 'Landscape', 'the-journal' ) ),
				'choices' => array(
					'fw-ratio-16-9' => __( '16-9', 'the-journal' ),
					'fw-ratio-4-3'  => __( '4-3', 'the-journal' ),
					'fw-ratio-2-1'  => __( '2-1', 'the-journal' ),
				),
			),
			array( // optgroup
				'attr'    => array( 'label' => __( 'Portret', 'the-journal' ) ),
				'choices' => array(
					'fw-ratio-9-16' => __( '9-16', 'the-journal' ),
					'fw-ratio-3-4'  => __( '3-4', 'the-journal' ),
					'fw-ratio-1-2'  => __( '1-2', 'the-journal' ),
				),
			),
			array( // optgroup
				'attr'    => array( 'label' => __( 'Square', 'the-journal' ) ),
				'choices' => array(
					'fw-ratio-1' => __( '1-1', 'the-journal' ),
				),
			),
		),
		'desc'    => __( 'Choose the image format', 'the-journal' )
	),
	'image_size'   => array(
		'type'    => 'multi-picker',
		'label'   => false,
		'desc'    => false,
		'picker'  => array(
			'select_size' => array(
				'label'   => esc_html__( 'Size', 'the-journal' ),
				'desc'    => esc_html__( 'Select the image size', 'the-journal' ),
				'help'    => esc_html__( "<strong>Container size</strong> - the image will take the width of the container. Ex: in a 1/3 column the image will ocuppy the column's full width.", "the-journal" ),
				'attr'    => array( 'class' => 'fw-checkbox-float-left' ),
				'type'    => 'radio',
				'value'   => 'auto',
				'choices' => array(
					'auto'   => esc_html__( 'Container size', 'the-journal' ),
					'custom' => esc_html__( 'Custom', 'the-journal' )
				),
			),
		),
		'choices' => array(
			'custom' => array(
				'width' => array(
					'label' => '',
					'desc'  => esc_html__( 'Image width in pixels', 'the-journal' ),
					'type'  => 'short-text',
					'value' => '250',
				),
			),
		)
	),
	'open_img'     => array(
		'type'    => 'multi-picker',
		'label'   => false,
		'desc'    => false,
		'picker'  => array(
			'icon-box-img' => array(
				'label'   => esc_html__( 'On Click', 'the-journal' ),
				'desc'    => esc_html__( 'What happens when you click the image?', 'the-journal' ),
				'attr'    => array( 'class' => 'fw-checkbox-float-left' ),
				'type'    => 'radio',
				'value'   => 'nothing',
				'choices' => array(
					'nothing' => esc_html__( 'Nothing happens', 'the-journal' ),
					'link'    => esc_html__( 'Open custom Link', 'the-journal' )
				),
			),
		),
		'choices' => array(
			'link' => array(
				'custom_link' => array(
					'label' => '',
					'desc'  => esc_html__( 'Enter your custom URL link', 'the-journal' ),
					'type'  => 'text'
				),
				'open'        => array(
					'type'         => 'switch',
					'value'        => '',
					'label'        => '',
					'desc'         => esc_html__( 'Open link in new window', 'the-journal' ),
					'left-choice'  => array(
						'value' => 'no',
						'label' => esc_html__( 'No', 'the-journal' ),
					),
					'right-choice' => array(
						'value' => 'yes',
						'label' => esc_html__( 'Yes', 'the-journal' ),
					)
				),
			),
		)
	),
	'responsive'   => array(
		'attr'          => array( 'class' => 'fw-advanced-button' ),
		'type'          => 'popup',
		'label'         => __( 'Responsive Behavior', 'the-journal' ),
		'button'        => __( 'Settings', 'the-journal' ),
		'size'          => 'medium',
		'popup-options' => array(
			'desktop_display'          => array(
				'type'   => 'multi-picker',
				'label'  => false,
				'desc'   => false,
				'picker' => array(
					'selected' => array(
						'type'         => 'switch',
						'value'        => 'yes',
						'label'        => __( 'Desktop', 'the-journal' ),
						'desc'         => __( 'Display this shortcode on desktop?', 'the-journal' ),
						'help'         => __( 'Applies to devices with the resolution higher then 1200px (desktops and laptops)', 'the-journal' ),
						'left-choice'  => array(
							'value' => 'no',
							'label' => __( 'No', 'the-journal' ),
						),
						'right-choice' => array(
							'value' => 'yes',
							'label' => __( 'Yes', 'the-journal' ),
						)
					),
				),
			),
			'tablet_landscape_display' => array(
				'type'   => 'multi-picker',
				'label'  => false,
				'desc'   => false,
				'picker' => array(
					'selected' => array(
						'type'         => 'switch',
						'value'        => 'yes',
						'label'        => __( 'Tablet Landscape', 'the-journal' ),
						'desc'         => __( 'Display this shortcode on tablet landscape?', 'the-journal' ),
						'help'         => __( 'Applies to devices with the resolution between 992px - 1199px (tablet landscape)', 'the-journal' ),
						'left-choice'  => array(
							'value' => 'no',
							'label' => __( 'No', 'the-journal' ),
						),
						'right-choice' => array(
							'value' => 'yes',
							'label' => __( 'Yes', 'the-journal' ),
						)
					),
				),
			),
			'tablet_display'           => array(
				'type'    => 'multi-picker',
				'label'   => false,
				'desc'    => false,
				'picker'  => array(
					'selected' => array(
						'type'         => 'switch',
						'value'        => 'yes',
						'label'        => __( 'Tablet Portrait', 'the-journal' ),
						'desc'         => __( 'Display this shortcode on tablet portrait?', 'the-journal' ),
						'help'         => __( 'Applies to devices with the resolution between 768px - 991px (tablet portrait)', 'the-journal' ),
						'left-choice'  => array(
							'value' => 'no',
							'label' => __( 'No', 'the-journal' ),
						),
						'right-choice' => array(
							'value' => 'yes',
							'label' => __( 'Yes', 'the-journal' ),
						)
					),
				),
				'choices' => array(),
			),
			'smartphone_display'       => array(
				'type'    => 'multi-picker',
				'label'   => false,
				'desc'    => false,
				'picker'  => array(
					'selected' => array(
						'type'         => 'switch',
						'value'        => 'yes',
						'label'        => __( 'Smartphone', 'the-journal' ),
						'desc'         => __( 'Display this shortcode on smartphone?', 'the-journal' ),
						'help'         => __( 'Applies to devices with the resolution up to 767px (smartphones both portrait and landscape as well as some low-resolution tablets)', 'the-journal' ),
						'left-choice'  => array(
							'value' => 'no',
							'label' => __( 'No', 'the-journal' ),
						),
						'right-choice' => array(
							'value' => 'yes',
							'label' => __( 'Yes', 'the-journal' ),
						)
					),
				),
				'choices' => array(),
			),
		),
	),
	'class'        => array(
		'label' => __( 'Custom Class', 'the-journal' ),
		'desc'  => __( 'Enter custom CSS class', 'the-journal' ),
		'type'  => 'text',
		'value' => '',
	),
);