<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$template_directory = get_template_directory_uri();
$options            = array(
	'type'         => array(
		'label'   => esc_html__( 'Type', 'the-journal' ),
		'desc'    => esc_html__( 'Select divider type', 'the-journal' ),
		'type'    => 'image-picker',
		'value'   => 'fw-line-solid',
		'choices' => array(
			'fw-line-solid'    => array(
				'small' => array(
					'height' => 50,
					'src'    => $template_directory . '/images/image-picker/solid.jpg',
					'title'  => esc_html__( 'Solid Line', 'the-journal' )
				),
			),
			'fw-divider-space' => array(
				'small' => array(
					'height' => 50,
					'src'    => $template_directory . '/images/image-picker/space_gap.jpg',
					'title'  => esc_html__( 'Space', 'the-journal' )
				),
			),
		),
	),
	'divider_size' => array(
		'type'         => 'multi-picker',
		'label'        => false,
		'desc'         => false,
		'picker'       => array(
			'size' => array(
				'label'   => esc_html__( 'Height', 'the-journal' ),
				'desc'    => esc_html__( 'Select the top and bottom margin in px', 'the-journal' ),
				'attr'    => array( 'class' => 'fw-checkbox-float-left' ),
				'type'    => 'radio',
				'choices' => array(
					'space-sm' => esc_html__( 'Small', 'the-journal' ),
					'space-md' => esc_html__( 'Medium', 'the-journal' ),
					'space-lg' => esc_html__( 'Large', 'the-journal' ),
					'custom'   => esc_html__( 'Custom', 'the-journal' ),
				),
				'value'   => 'space-md'
			),
		),
		'choices'      => array(
			'custom' => array(
				'margin_top'    => array(
					'label' => esc_html__( 'Margin Top', 'the-journal' ),
					'desc'  => esc_html__( 'Enter margin-top in px', 'the-journal' ),
					'attr'  => array( 'class' => 'fw-option-width-small' ),
					'type'  => 'short-text',
					'value' => ''
				),
				'margin_bottom' => array(
					'label' => esc_html__( 'Margin Bottom', 'the-journal' ),
					'attr'  => array( 'class' => 'fw-option-width-small' ),
					'desc'  => esc_html__( 'Enter margin-bottom in px', 'the-journal' ),
					'type'  => 'short-text',
					'value' => ''
				),
			),
			'no'     => array(),
		),
		'show_borders' => false,
	),
	'responsive'     => array(
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
	'class'          => array(
		'label' => __( 'Custom Class', 'the-journal' ),
		'desc'  => __( 'Enter custom CSS class', 'the-journal' ),
		'type'  => 'text',
		'value' => '',
	),
);