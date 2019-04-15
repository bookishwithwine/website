<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$template_directory = get_template_directory_uri();
$options            = array(
	'text_group'   => array(
		'type'    => 'group',
		'options' => array(
			'text' => array(
				'attr'    => array( 'class' => 'text-advanced' ),
				'label'   => esc_html__( 'Text', 'the-journal' ),
				'desc'    => esc_html__( 'Enter quote text', 'the-journal' ),
				'value'   => '',
				'type'    => 'wp-editor',
				'tinymce' => true,
				'reinit'  => true,
				'wpautop' => false,
			),
		)
	),
	'text_align'   => array(
		'label'   => esc_html__( 'Text Alignment', 'the-journal' ),
		'desc'    => esc_html__( 'Select the prefered text alignment', 'the-journal' ),
		'type'    => 'image-picker',
		'value'   => '',
		'choices' => array(
			'fw-quote-left'   => array(
				'small' => array(
					'height' => 50,
					'src'    => $template_directory . '/images/image-picker/left-position.jpg',
					'title'  => esc_html__( 'Left', 'the-journal' )
				),
			),
			'fw-quote-center' => array(
				'small' => array(
					'height' => 50,
					'src'    => $template_directory . '/images/image-picker/center-position.jpg',
					'title'  => esc_html__( 'Center', 'the-journal' )
				),
			),
			'fw-quote-right'  => array(
				'small' => array(
					'height' => 50,
					'src'    => $template_directory . '/images/image-picker/right-position.jpg',
					'title'  => esc_html__( 'Right', 'the-journal' )
				),
			),
		),
	),
	'author_group' => array(
		'type'    => 'group',
		'options' => array(
			'author'      => array(
				'attr'  => array( 'class' => 'author-advanced' ),
				'label' => esc_html__( 'Author', 'the-journal' ),
				'desc'  => esc_html__( 'Enter the quote author', 'the-journal' ),
				'type'  => 'text',
				'value' => ''
			),
			'author_link' => array(
				'label' => esc_html__( 'Link', 'the-journal' ),
				'desc'  => esc_html__( 'Enter the author link', 'the-journal' ),
				'type'  => 'text',
				'value' => ''
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