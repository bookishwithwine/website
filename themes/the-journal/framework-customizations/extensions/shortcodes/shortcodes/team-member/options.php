<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'image_group'       => array(
		'type'    => 'group',
		'options' => array(
			'image' => array(
				'label' => esc_html__( 'Image', 'the-journal' ),
				'desc'  => esc_html__( 'Upload an image', 'the-journal' ),
				'type'  => 'upload'
			)
		)
	),
	'name_group'        => array(
		'type'    => 'group',
		'options' => array(
			'name' => array(
				'label' => esc_html__( 'Name', 'the-journal' ),
				'desc'  => esc_html__( 'Enter the team member name', 'the-journal' ),
				'type'  => 'text',
				'value' => ''
			)
		)
	),
	'job_group'         => array(
		'type'    => 'group',
		'options' => array(
			'job' => array(
				'attr'  => array( 'class' => 'job-advanced' ),
				'label' => esc_html__( 'Job Title', 'the-journal' ),
				'desc'  => esc_html__( 'Enter the job title', 'the-journal' ),
				'type'  => 'text',
				'value' => ''
			),
		)
	),
	'description_group' => array(
		'type'    => 'group',
		'options' => array(
			'desc' => array(
				'attr'    => array( 'class' => 'description-advanced' ),
				'label'   => esc_html__( 'Description', 'the-journal' ),
				'desc'    => esc_html__( 'Enter team member description', 'the-journal' ),
				'value'   => '',
				'type'    => 'wp-editor',
				'tinymce' => true,
				'reinit'  => true,
				'wpautop' => false,
			),
		)
	),
	'responsive'        => array(
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
	'class'             => array(
		'label' => __( 'Custom Class', 'the-journal' ),
		'desc'  => __( 'Enter custom CSS class', 'the-journal' ),
		'type'  => 'text',
		'value' => '',
	),
);