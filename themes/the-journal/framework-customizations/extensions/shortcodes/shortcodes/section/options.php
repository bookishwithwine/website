<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$colors                     = array(
	'color_1' => '#d2a74d',
	'color_2' => '#0f1f25',
	'color_3' => '#898d8e',
	'color_4' => '#edf1f2',
	'color_5' => '#141e24'
);
$the_journal_color_settings = fw_get_db_settings_option( 'color_settings', $colors );

$options = array(
	'is_fullwidth'       => array(
		'label' => esc_html__( 'Full Width Content', 'the-journal' ),
		'type'  => 'switch',
		'desc'  => 'Make the content inside this section full width?',
	),
	'background_options' => array(
		'type'         => 'multi-picker',
		'label'        => false,
		'desc'         => false,
		'picker'       => array(
			'background' => array(
				'label'   => esc_html__( 'Background', 'the-journal' ),
				'desc'    => esc_html__( 'Select the background for your section', 'the-journal' ),
				'attr'    => array( 'class' => 'fw-checkbox-float-left' ),
				'type'    => 'radio',
				'choices' => array(
					'none'  => esc_html__( 'None', 'the-journal' ),
					'image' => esc_html__( 'Image', 'the-journal' ),
					'video' => esc_html__( 'Video', 'the-journal' ),
					'color' => esc_html__( 'Color', 'the-journal' ),
				),
				'value'   => 'none'
			),
		),
		'choices'      => array(
			'none'  => array(),
			'image' => array(
				'background_image' => array(
					'label'   => '',
					'type'    => 'background-image',
					'choices' => array(//	in future may will set predefined images
					)
				),
			),
			'video' => array(
				'video_type' => array(
					'type'         => 'multi-picker',
					'label'        => false,
					'desc'         => false,
					'picker'       => array(
						'selected' => array(
							'label'   => esc_html__( 'Video Type', 'the-journal' ),
							'desc'    => esc_html__( 'Select the video type', 'the-journal' ),
							'attr'    => array( 'class' => 'fw-checkbox-float-left' ),
							'type'    => 'radio',
							'choices' => array(
								'youtube'  => esc_html__( 'Youtube', 'the-journal' ),
								'uploaded' => esc_html__( 'Video', 'the-journal' ),
							),
							'value'   => 'youtube'
						),
					),
					'choices'      => array(
						'youtube'  => array(
							'video' => array(
								'label' => '',
								'desc'  => esc_html__( 'Insert a YouTube video URL', 'the-journal' ),
								'type'  => 'text',
							),
						),
						'uploaded' => array(
							'video' => array(
								'label'       => '',
								'desc'        => esc_html__( 'Upload a video', 'the-journal' ),
								'images_only' => false,
								'type'        => 'upload',
							),
						),
					),
					'show_borders' => false,
				),
			),
			'color' => array(
				'background_color' => array(
					'label'   => '',
					'desc'    => esc_html__( 'Select the background color', 'the-journal' ),
					'value'   => '',
					'choices' => $the_journal_color_settings,
					'type'    => 'color-palette'
				),
			),
		),
		'show_borders' => false,
	),
	'responsive'         => array(
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
	'class'              => array(
		'label' => __( 'Custom Class', 'the-journal' ),
		'desc'  => __( 'Enter custom CSS class', 'the-journal' ),
		'type'  => 'text',
		'value' => '',
	),
);