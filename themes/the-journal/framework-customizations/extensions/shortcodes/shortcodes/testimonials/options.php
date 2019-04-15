<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title-group'        => array(
		'type'    => 'group',
		'options' => array(
			'title' => array(
				'label' => esc_html__( 'Title', 'the-journal' ),
				'desc'  => esc_html__( 'Please enter the title', 'the-journal' ),
				'type'  => 'text',
				'value' => '',
			)
		)
	),
	'testimonials-group' => array(
		'type'    => 'group',
		'options' => array(
			'testimonials' => array(
				'attr'          => array( 'class' => 'advanced-testimonials' ),
				'label'         => esc_html__( 'Testimonials', 'the-journal' ),
				'popup-title'   => esc_html__( 'Add/Edit Testimonial', 'the-journal' ),
				'desc'          => esc_html__( 'Here you can add, remove and edit your Testimonials.', 'the-journal' ),
				'type'          => 'addable-popup',
				'template'      => '{{=author_name}}',
				'popup-options' => array(
					'content'       => array(
						'label'   => esc_html__( 'Testimonial', 'the-journal' ),
						'desc'    => esc_html__( 'Enter the testimonial here', 'the-journal' ),
						'type'    => 'wp-editor',
						'tinymce' => true,
						'reinit'  => true,
						'wpautop' => false,
					),
					'author_avatar' => array(
						'label' => esc_html__( 'Image', 'the-journal' ),
						'desc'  => esc_html__( 'Add an image to this testimonial', 'the-journal' ),
						'type'  => 'upload',
					),
					'author_name'   => array(
						'label' => esc_html__( 'Name', 'the-journal' ),
						'desc'  => esc_html__( 'Enter the name of the person that gave the testimonial', 'the-journal' ),
						'type'  => 'text'
					),
					'author_job'    => array(
						'label' => esc_html__( 'Job Title', 'the-journal' ),
						'desc'  => esc_html__( 'Enter the job title', 'the-journal' ),
						'type'  => 'text'
					),
					'site_name'     => array(
						'label' => esc_html__( 'Company', 'the-journal' ),
						'desc'  => esc_html__( 'Name of the company', 'the-journal' ),
						'type'  => 'text'
					),
					'site_url'      => array(
						'label' => esc_html__( 'Website Link', 'the-journal' ),
						'desc'  => esc_html__( 'The company\'s website link', 'the-journal' ),
						'type'  => 'text'
					)
				)
			),
		)
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