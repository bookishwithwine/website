<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$template_directory = get_template_directory_uri();

$options = array(
	'unique_id'      => array(
		'type' => 'unique'
	),
	'title_group'    => array(
		'type'    => 'group',
		'options' => array(
			'title'   => array(
				'type'  => 'text',
				'label' => esc_html__( 'Title', 'the-journal' ),
				'desc'  => esc_html__( 'Enter the heading title', 'the-journal' ),
			),
			'heading' => array(
				'type'    => 'multi-picker',
				'label'   => false,
				'desc'    => false,
				'picker'  => array(
					'selected' => array(
						'type'    => 'short-select',
						'label'   => 'Size',
						'desc'    => 'Choose the heading size, H1 being the largest',
						'value'   => 'h2',
						'choices' => array(
							'h1' => 'H1',
							'h2' => 'H2',
							'h3' => 'H3',
							'h4' => 'H4',
							'h5' => 'H5',
							'h6' => 'H6',
						)
					),
				),
				'choices' => array(
					'h1' => array(),
					'h2' => array(),
					'h3' => array(),
					'h4' => array(),
					'h5' => array(),
					'h6' => array(),
				),
			),
		)
	),
	'subtitle_group' => array(
		'type'    => 'group',
		'options' => array(
			'subtitle' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Subtitle', 'the-journal' ),
				'desc'  => esc_html__( 'Enter the heading subtitle', 'the-journal' ),
				'attr'  => array( 'class' => 'subtitle-advanced' ),
			),
		)
	),
	'centered'       => array(
		'label'   => esc_html__( 'Alignment', 'the-journal' ),
		'desc'    => esc_html__( 'Select the title and subtitle alignment', 'the-journal' ),
		'type'    => 'image-picker',
		'value'   => 'fw-heading-left',
		'choices' => array(
			'fw-heading-left'   => array(
				'small' => array(
					'height' => 50,
					'src'    => $template_directory . '/images/image-picker/left-position.jpg',
					'title'  => esc_html__( 'Left', 'the-journal' )
				),
			),
			'fw-heading-center' => array(
				'small' => array(
					'height' => 50,
					'src'    => $template_directory . '/images/image-picker/center-position.jpg',
					'title'  => esc_html__( 'Center', 'the-journal' )
				),
			),
			'fw-heading-right'  => array(
				'small' => array(
					'height' => 50,
					'src'    => $template_directory . '/images/image-picker/right-position.jpg',
					'title'  => esc_html__( 'Right', 'the-journal' )
				),
			),
		),
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