<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$options = array(
	'portfolio-posts' => array(
		'title'   => esc_html__( 'Portfolio', 'the-journal' ),
		'type'    => 'tab',
		'options' => array(
			'portfolio-options'    => array(
				'title'   => esc_html__( 'Portfolio', 'the-journal' ),
				'type'    => 'box',
				'options' => array(
					'enable_portfolio_filter'  => array(
						'label'        => esc_html__( 'Portfolio Filter', 'the-journal' ),
						'desc'         => esc_html__( 'Enable portfolio filter?', 'the-journal' ),
						'help'         => sprintf( "%s", esc_html__( 'This filter appears only on the Portfolio category page.', 'the-journal' ) ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'yes',
							'label' => esc_html__( 'Yes', 'the-journal' )
						),
						'left-choice'  => array(
							'value' => 'no',
							'label' => esc_html__( 'No', 'the-journal' )
						),
						'value'        => 'yes',
					),
					'portfolio_posts_per_page' => array(
						'label' => esc_html__( 'No. of Projects per Page', 'the-journal' ),
						'desc'  => esc_html__( 'Enter how many projects will be displayed on a page', 'the-journal' ),
						'value' => get_option( 'posts_per_page' ),
						'type'  => 'short-text',
					)
				)
			),
			'header-portfolio-box' => array(
				'title'   => esc_html__( 'Projects Header', 'the-journal' ),
				'type'    => 'box',
				'options' => array(
					'general_portfolio_header' => array(
						'type'          => 'multi',
						'label'         => false,
						'attr'          => array(
							'class' => 'fw-option-type-multi-show-borders',
						),
						'inner-options' => array(

							'posts_header_image' => array(
								'label' => esc_html__( 'Header Image', 'the-journal' ),
								'desc'  => esc_html__( 'Upload a header image', 'the-journal' ),
								'help'  => esc_html__( "This default header image will be used for all your portfolio posts and categories if you didn't set one for a specific category or portfolio post.", "the-journal" ),
								'type'  => 'upload'
							)
						)
					)
				)
			),
		)
	),
);