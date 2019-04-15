<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$template_directory = get_template_directory_uri();
$map_shortcode      = fw_ext( 'shortcodes' )->get_shortcode( 'map' );

$options = array(
	'unique_id'      => array(
		'type' => 'unique'
	),
	'location_group' => array(
		'type'    => 'group',
		'options' => array(
			'data_provider' => array(
				'type'         => 'multi-picker',
				'label'        => false,
				'desc'         => false,
				'picker'       => array(
					'population_method' => array(
						'label'   => esc_html__( 'Population Method', 'the-journal' ),
						'desc'    => esc_html__( 'Select map population method (Ex: events, custom)', 'the-journal' ),
						'type'    => 'select',
						'choices' => $map_shortcode->_get_picker_dropdown_choices(),
					)
				),
				'choices'      => $map_shortcode->_get_picker_choices(),
				'show_borders' => false,
			),
		)
	),
	'map_type'       => array(
		'label'   => esc_html__( 'Map Type', 'the-journal' ),
		'desc'    => esc_html__( 'Select map type', 'the-journal' ),
		'type'    => 'image-picker',
		'value'   => '',
		'choices' => array(
			'roadmap'   => array(
				'small' => array(
					'height' => 75,
					'src'    => $template_directory . '/images/image-picker/map-roadmap.jpg',
				),
				'large' => array(
					'height' => 208,
					'src'    => $template_directory . '/images/image-picker/map-roadmap.jpg'
				),
			),
			'terrain'   => array(
				'small' => array(
					'height' => 75,
					'src'    => $template_directory . '/images/image-picker/map-terrain.jpg',
				),
				'large' => array(
					'height' => 208,
					'src'    => $template_directory . '/images/image-picker/map-terrain.jpg'
				),
			),
			'satellite' => array(
				'small' => array(
					'height' => 75,
					'src'    => $template_directory . '/images/image-picker/map-satellite.jpg',
				),
				'large' => array(
					'height' => 208,
					'src'    => $template_directory . '/images/image-picker/map-satellite.jpg'
				),
			),
			'hybrid'    => array(
				'small' => array(
					'height' => 75,
					'src'    => $template_directory . '/images/image-picker/map-hybrid.jpg',
				),
				'large' => array(
					'height' => 208,
					'src'    => $template_directory . '/images/image-picker/map-hybrid.jpg'
				),
			),
		),
	),
	'map_height'     => array(
		'label' => esc_html__( 'Map Height', 'the-journal' ),
		'desc'  => esc_html__( 'Enter the map height in pixels (Ex: 300)', 'the-journal' ),
		'type'  => 'short-text',
		'value' => '400',
	),
	'gmap_key'       => array(
		'label' => __( 'API Key', 'the-journal' ),
		'type'  => 'gmap-key',
		/* translators: %s: google search console */
		'desc'  => sprintf( __( 'Create an application in %1$sGoogle Console%2$s and add the API Key here.', 'the-journal' ), '<a target="_blank" href="https://console.developers.google.com/flows/enableapi?apiid=places_backend,maps_backend,geocoding_backend,directions_backend,distance_matrix_backend,elevation_backend&keyType=CLIENT_SIDE&reusekey=true">', '</a>' )
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