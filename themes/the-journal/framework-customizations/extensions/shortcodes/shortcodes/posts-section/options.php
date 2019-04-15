<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$template_directory = get_template_directory_uri();
$options            = array(
	'category' => array(
		'label'   => esc_html__( 'Display From', 'the-journal' ),
		'desc'    => esc_html__( 'Select a blog category', 'the-journal' ),
		'type'    => 'select',
		'value'   => '',
		'choices' => fw_get_category_term_list(),
	),
	'type'     => array(
		'type'    => 'multi-picker',
		'label'   => false,
		'desc'    => false,
		'picker'  => array(
			'selected' => array(
				'label'   => esc_html__( 'Type', 'the-journal' ),
				'desc'    => esc_html__( 'Select the posts section type', 'the-journal' ),
				'type'    => 'short-select',
				'choices' => array(
					'type-1'  => __( 'Type 1', 'the-journal' ),
					'type-2'  => __( 'Type 2', 'the-journal' ),
					'type-3'  => __( 'Type 3', 'the-journal' ),
					'type-4'  => __( 'Type 4', 'the-journal' ),
					'type-5'  => __( 'Type 5', 'the-journal' ),
					'type-6'  => __( 'Type 6', 'the-journal' ),
					'type-7'  => __( 'Type 7', 'the-journal' ),
					'type-8'  => __( 'Type 8', 'the-journal' ),
					'type-9'  => __( 'Type 9', 'the-journal' ),
					'type-10' => __( 'Type 10', 'the-journal' ),
				),
				'value'   => 'type-1'
			),
		),
		'choices' => array(
			'type-1'  => array(
				'posts_number' => array(
					'label' => esc_html__( 'No of Posts', 'the-journal' ),
					'desc'  => esc_html__( 'Enter the number of posts to display. Ex: 3, 6, maximum of 50', 'the-journal' ),
					'type'  => 'short-text',
					'value' => ''
				)
			),
			'type-2'  => array(
				'posts_number' => array(
					'label' => esc_html__( 'No of Posts', 'the-journal' ),
					'desc'  => esc_html__( 'Enter the number of posts to display. Ex: 3, 6, maximum of 50', 'the-journal' ),
					'type'  => 'short-text',
					'value' => ''
				)
			),
			'type-3'  => array(
				'posts_number' => array(
					'label' => esc_html__( 'No of Posts', 'the-journal' ),
					'desc'  => esc_html__( 'Enter the number of posts to display. Ex: 3, 6, maximum of 50', 'the-journal' ),
					'type'  => 'short-text',
					'value' => ''
				)
			),
			'type-4'  => array(
				'posts_number' => array(
					'label' => esc_html__( 'No of Posts', 'the-journal' ),
					'desc'  => esc_html__( 'Enter the number of posts to display. Ex: 3, 6, maximum of 50', 'the-journal' ),
					'type'  => 'short-text',
					'value' => ''
				)
			),
			'type-5'  => array(
				'posts_number' => array(
					'label' => esc_html__( 'No of Posts', 'the-journal' ),
					'desc'  => esc_html__( 'Enter the number of posts to display. Ex: 3, 6, maximum of 50', 'the-journal' ),
					'type'  => 'short-text',
					'value' => ''
				)
			),
			'type-6'  => array(
				'posts_number' => array(
					'label' => esc_html__( 'No of Posts', 'the-journal' ),
					'desc'  => esc_html__( 'Enter the number of posts to display. Ex: 3, 6, maximum of 50', 'the-journal' ),
					'type'  => 'short-text',
					'value' => ''
				)
			),
			'type-8'  => array(
				'posts_number' => array(
					'label' => esc_html__( 'No of Posts', 'the-journal' ),
					'desc'  => esc_html__( 'Enter the number of posts to display. Ex: 3, 6, maximum of 50', 'the-journal' ),
					'type'  => 'short-text',
					'value' => ''
				)
			),
			'type-9'  => array(
				'posts_number' => array(
					'label' => esc_html__( 'No of Posts', 'the-journal' ),
					'desc'  => esc_html__( 'Enter the number of posts to display. Ex: 3, 6, maximum of 50', 'the-journal' ),
					'type'  => 'short-text',
					'value' => ''
				)
			),
			'type-10' => array(
				'posts_number' => array(
					'label' => esc_html__( 'No of Posts', 'the-journal' ),
					'desc'  => esc_html__( 'Enter the number of posts to display. Ex: 3, 6, maximum of 50', 'the-journal' ),
					'type'  => 'short-text',
					'value' => ''
				)
			),
		)
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