<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * Framework options
 *
 * @var array $options Fill this array with options to generate framework settings form in backend
 */
$portfolio_tab = array();
if ( fw_ext( 'portfolio' ) ) {
	$portfolio_tab = fw()->theme->get_options( 'portfolio-tab' );
}
$colors     = array(
	'color_1' => '#d2a74d',
	'color_2' => '#0f1f25',
	'color_3' => '#898d8e',
	'color_4' => '#edf1f2',
	'color_5' => '#141e24'
);
$typography = array();

$admin_url                  = esc_url( admin_url() );
$template_directory         = get_template_directory_uri();
$the_journal_color_settings = fw_get_db_customizer_option( 'color_settings', $colors );
$typography_settings        = fw_get_db_customizer_option( 'typography_settings', $typography );

$options = array(
	'general-options' => array(
		'title'   => esc_html__( 'General', 'the-journal' ),
		'type'    => 'tab',
		'options' => array(
			'general-box' => array(
				'title'   => esc_html__( 'Global Settings', 'the-journal' ),
				'type'    => 'box',
				'options' => array(
					'website_background' => array(
						'type'          => 'multi',
						'label'         => false,
						'inner-options' => array(
							'website_bg_color' => array(
								'label' => esc_html__( 'Website Background', 'the-journal' ),
								'desc'  => esc_html__( 'Select the website background color', 'the-journal' ),
								'value' => '#f1eee9',
								'type'  => 'color-picker',
							),
							'website_bg'       => array(
								'type'    => 'background-image',
								'value'   => 'none',
								'label'   => '',
								'desc'    => esc_html__( 'Select the patern overlay', 'the-journal' ),
								'choices' => array(
									'none' => array(
										'icon' => $template_directory . '/images/patterns/no_pattern.jpg',
										'css'  => array(
											'background-image' => 'none'
										),
									),
									'bg-1' => array(
										'icon' => $template_directory . '/images/patterns/diagonal_bottom_to_top_pattern_preview.jpg',
										'css'  => array(
											'background-image'  => 'url("' . $template_directory . '/images/patterns/diagonal_bottom_to_top_pattern.png' . '")',
											'background-repeat' => 'repeat',
										)
									),
									'bg-2' => array(
										'icon' => $template_directory . '/images/patterns/diagonal_top_to_bottom_pattern_preview.jpg',
										'css'  => array(
											'background-image'  => 'url("' . $template_directory . '/images/patterns/diagonal_top_to_bottom_pattern.png' . '")',
											'background-repeat' => 'repeat',
										)
									),
									'bg-3' => array(
										'icon' => $template_directory . '/images/patterns/dots_pattern_preview.jpg',
										'css'  => array(
											'background-image'  => 'url("' . $template_directory . '/images/patterns/dots_pattern.png' . '")',
											'background-repeat' => 'repeat',
										)
									),
									'bg-4' => array(
										'icon' => $template_directory . '/images/patterns/noise_pattern_preview.jpg',
										'css'  => array(
											'background-image'  => 'url("' . $template_directory . '/images/patterns/noise_pattern.png' . '")',
											'background-repeat' => 'repeat',
										)
									),
									'bg-5' => array(
										'icon' => $template_directory . '/images/patterns/romb_pattern_preview.jpg',
										'css'  => array(
											'background-image'  => 'url("' . $template_directory . '/images/patterns/romb_pattern.png' . '")',
											'background-repeat' => 'repeat',
										)
									),
									'bg-6' => array(
										'icon' => $template_directory . '/images/patterns/square_pattern_preview.jpg',
										'css'  => array(
											'background-image'  => 'url("' . $template_directory . '/images/patterns/square_pattern.png' . '")',
											'background-repeat' => 'repeat',
										)
									),
									'bg-7' => array(
										'icon' => $template_directory . '/images/patterns/vertical_lines_pattern_preview.jpg',
										'css'  => array(
											'background-image'  => 'url("' . $template_directory . '/images/patterns/vertical_lines_pattern.png' . '")',
											'background-repeat' => 'repeat',
										)
									),
									'bg-8' => array(
										'icon' => $template_directory . '/images/patterns/waves_pattern_preview.jpg',
										'css'  => array(
											'background-image'  => 'url("' . $template_directory . '/images/patterns/waves_pattern.png' . '")',
											'background-repeat' => 'repeat',
										)
									),
								)
							)
						)
					),
					'logo_settings'      => array(
						'type'          => 'multi',
						'label'         => false,
						'attr'          => array(
							'class' => 'fw-option-type-multi-show-borders',
						),
						'inner-options' => array(
							'logo' => array(
								'type'         => 'multi-picker',
								'label'        => false,
								'desc'         => false,
								'picker'       => array(
									'selected_value' => array(
										'label'   => esc_html__( 'Logo Type', 'the-journal' ),
										'desc'    => esc_html__( 'Select the logo type', 'the-journal' ),
										'attr'    => array( 'class' => 'fw-checkbox-float-left' ),
										'value'   => 'text',
										'type'    => 'radio',
										'choices' => array(
											'text'  => esc_html__( 'Text', 'the-journal' ),
											'image' => esc_html__( 'Image', 'the-journal' ),
										),
									)
								),
								'choices'      => array(
									'text'  => array(
										'title'    => array(
											'label' => esc_html__( 'Title', 'the-journal' ),
											'desc'  => esc_html__( 'Enter the title', 'the-journal' ),
											'type'  => 'short-text',
											'value' => get_bloginfo( 'name' )
										),
										'subtitle' => array(
											'label' => esc_html__( 'Subtitle', 'the-journal' ),
											'desc'  => esc_html__( 'Enter the subtitle', 'the-journal' ),
											'type'  => 'short-text',
											'value' => get_bloginfo( 'description' ),
										),
									),
									'image' => array(
										'image_logo'  => array(
											'label' => '',
											'desc'  => esc_html__( 'Upload logo image', 'the-journal' ),
											'type'  => 'upload'
										),
										'retina_logo' => array(
											'type'         => 'switch',
											'label'        => '',
											'desc'         => esc_html__( 'Use logo as retina?', 'the-journal' ),
											'left-choice'  => array(
												'value' => 'fw-logo-no-retina',
												'label' => esc_html__( 'No', 'the-journal' ),
											),
											'right-choice' => array(
												'value' => 'fw-logo-retina',
												'label' => esc_html__( 'Yes', 'the-journal' ),
											)
										),
									),
								),
								'show_borders' => false,
							),
						),
					),
					'comments_gdpr' => array(
						'type'    => 'multi-picker',
						'label'   => false,
						'desc'    => false,
						'picker'  => array(
							'selected' => array(
								'type'         => 'switch',
								'value'        => 'no',
								'label'        => __( 'Comments GDPR', 'the-journal' ),
								'desc'         => __( 'Enable the GDPR for WP comments?', 'the-journal' ),
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
						'choices' => array(
							'yes' => array(
								'comments_gdpr_text' => array(
									'label' => '',
									'desc'  => __( 'Enter the comments GDPR text', 'the-journal' ),
									'value' => '',
									'type'  => 'wp-editor',
									'media_buttons' => false,
								),
							)
						)
					),
				)
			),
			'social-box'  => array(
				'title'   => esc_html__( 'Social', 'the-journal' ),
				'type'    => 'box',
				'options' => array(
					'socials' => array(
						'type'          => 'addable-popup',
						'label'         => esc_html__( 'Social Links', 'the-journal' ),
						'desc'          => esc_html__( 'Add your social profiles', 'the-journal' ),
						'template'      => '{{=social_name}}',
						'popup-options' => array(
							'social_name' => array(
								'label' => esc_html__( 'Name', 'the-journal' ),
								'desc'  => esc_html__( 'Enter a name (it is for internal use and will not appear on the front end)', 'the-journal' ),
								'type'  => 'text',
							),
							'social_type' => array(
								'type'    => 'multi-picker',
								'label'   => false,
								'desc'    => false,
								'picker'  => array(
									'social-type' => array(
										'label'   => esc_html__( 'Icon', 'the-journal' ),
										'desc'    => esc_html__( 'Select social icon type', 'the-journal' ),
										'attr'    => array( 'class' => 'fw-checkbox-float-left' ),
										'type'    => 'radio',
										'value'   => 'icon-social',
										'choices' => array(
											'icon-social' => esc_html__( 'Font Awesome', 'the-journal' ),
											'upload-icon' => esc_html__( 'Custom Upload', 'the-journal' ),
										),
									),
								),
								'choices' => array(
									'icon-social' => array(
										'icon_class' => array(
											'type'  => 'icon',
											'value' => 'fa fa-adn',
											'label' => '',
										),
									),
									'upload-icon' => array(
										'upload-social-icon' => array(
											'label' => '',
											'type'  => 'upload',
										)
									),
								)
							),
							'social-link' => array(
								'label' => esc_html__( 'Link', 'the-journal' ),
								'desc'  => esc_html__( 'Enter your social URL link', 'the-journal' ),
								'type'  => 'text',
							)
						),
					),
				)
			),
		)
	),
	'blog-posts'      => array(
		'title'   => esc_html__( 'Blog', 'the-journal' ),
		'type'    => 'tab',
		'options' => array(
			'posts-box'        => array(
				'title'   => esc_html__( 'Posts', 'the-journal' ),
				'type'    => 'box',
				'options' => array(
					'posts_settings' => array(
						'type'          => 'multi',
						'label'         => false,
						'attr'          => array(
							'class' => 'fw-option-type-multi-show-borders',
						),
						'inner-options' => array(
							'blog_type'        => array(
								'type'    => 'multi-picker',
								'label'   => false,
								'desc'    => false,
								'picker'  => array(
									'selected' => array(
										'label'   => esc_html__( 'Type', 'the-journal' ),
										'desc'    => esc_html__( 'Select the blog type', 'the-journal' ),
										'type'    => 'short-select',
										'choices' => array(
											'blog-1' => __( 'Type 1', 'the-journal' ),
											'blog-2' => __( 'Type 2', 'the-journal' ),
										),
										'value'   => 'blog-1'
									),
								),
								'choices' => array()
							),
							'post_date'        => array(
								'label'        => esc_html__( 'Post Date', 'the-journal' ),
								'desc'         => esc_html__( 'Show post date?', 'the-journal' ),
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
							'post_author'      => array(
								'label'        => esc_html__( 'Post Author', 'the-journal' ),
								'desc'         => esc_html__( 'Show post author?', 'the-journal' ),
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
							'post_categories'  => array(
								'label'        => esc_html__( 'Post Categories', 'the-journal' ),
								'desc'         => esc_html__( 'Show post categories?', 'the-journal' ),
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
							'post_author_box'  => array(
								'label'        => esc_html__( 'Author Box', 'the-journal' ),
								'desc'         => esc_html__( 'Show author box?', 'the-journal' ),
								'type'         => 'switch',
								'right-choice' => array(
									'value' => 'yes',
									'label' => esc_html__( 'Yes', 'the-journal' )
								),
								'left-choice'  => array(
									'value' => 'no',
									'label' => esc_html__( 'No', 'the-journal' )
								),
								'value'        => 'no',
							),
							'related_articles' => array(
								'label'        => esc_html__( 'Related Articles', 'the-journal' ),
								'desc'         => esc_html__( 'Show related articles?', 'the-journal' ),
								'type'         => 'switch',
								'right-choice' => array(
									'value' => 'yes',
									'label' => esc_html__( 'Yes', 'the-journal' )
								),
								'left-choice'  => array(
									'value' => 'no',
									'label' => esc_html__( 'No', 'the-journal' )
								),
								'value'        => 'no',
							),
						)
					),
				)
			),
			'header-posts-box' => array(
				'title'   => esc_html__( 'Posts Header', 'the-journal' ),
				'type'    => 'box',
				'options' => array(
					'general_posts_header' => array(
						'type'          => 'multi',
						'label'         => false,
						'attr'          => array(
							'class' => 'fw-option-type-multi-show-borders',
						),
						'inner-options' => array(

							'posts_header_image' => array(
								'label' => esc_html__( 'Header Image', 'the-journal' ),
								'desc'  => esc_html__( 'Upload a header image', 'the-journal' ),
								'help'  => esc_html__( "This default header image will be used for all your posts and categories.", "the-journal" ),
								'type'  => 'upload'
							),
						)
					)
				)
			),
		)
	),
	$portfolio_tab,
	'pages'           => array(
		'title'   => esc_html__( 'Pages', 'the-journal' ),
		'type'    => 'tab',
		'options' => array(
			'general_page_header' => array(
				'type'          => 'multi',
				'label'         => false,
				'attr'          => array(
					'class' => 'fw-option-type-multi-show-borders',
				),
				'inner-options' => array(
					'posts_header_image' => array(
						'label' => esc_html__( 'Header Image', 'the-journal' ),
						'desc'  => esc_html__( 'Upload a header image', 'the-journal' ),
						'help'  => esc_html__( "This default header image will be used for all your pages (works only for pages that use Default Template).", "the-journal" ),
						'type'  => 'upload'
					)
				)
			)
		)
	),
	'header'          => array(
		'title'   => esc_html__( 'Header', 'the-journal' ),
		'type'    => 'tab',
		'options' => array(
			'header_settings' => array(
				'type'          => 'multi',
				'label'         => false,
				'attr'          => array(
					'class' => 'fw-option-type-multi-show-borders',
				),
				'inner-options' => array(
					'enable_sticky_header'    => array(
						'type'         => 'switch',
						'value'        => '',
						'attr'         => array(),
						'label'        => esc_html__( 'Sticky Header', 'the-journal' ),
						'desc'         => esc_html__( 'Make the header stick with the scroll?', 'the-journal' ),
						'left-choice'  => array(
							'value' => '',
							'label' => esc_html__( 'No', 'the-journal' ),
						),
						'right-choice' => array(
							'value' => 'fw-header-sticky',
							'label' => esc_html__( 'Yes', 'the-journal' ),
						),
					),
					'enable_header_top_bar'   => array(
						'type'         => 'multi-picker',
						'label'        => false,
						'desc'         => false,
						'picker'       => array(
							'selected_value' => array(
								'label'        => esc_html__( 'Header Top Bar', 'the-journal' ),
								'desc'         => esc_html__( 'Enable the header top bar?', 'the-journal' ),
								'type'         => 'switch',
								'right-choice' => array(
									'value' => 'yes',
									'label' => esc_html__( 'Yes', 'the-journal' )
								),
								'left-choice'  => array(
									'value' => 'no',
									'label' => esc_html__( 'No', 'the-journal' )
								),
								'value'        => 'no',
							)
						),
						'choices'      => array(
							'yes' => array(
								'header_text'           => array(
									'type'  => 'textarea',
									'value' => '',
									'label' => esc_html__( 'Text', 'the-journal' ),
									'desc'  => esc_html__( 'This top bar text is usually used for an email address or phone no', 'the-journal' ),
								),
								'enable_header_socials' => array(
									'type'         => 'multi-picker',
									'label'        => false,
									'desc'         => false,
									'picker'       => array(
										'selected_value' => array(
											'label'        => esc_html__( 'Social Icons', 'the-journal' ),
											'desc'         => esc_html__( 'Enable social icons?', 'the-journal' ),
											'help'         => sprintf( "%s", esc_html__( 'Your social links can be set from the', 'the-journal' ) . ' <a target="_blank" href="' . $admin_url . 'themes.php?page=fw-settings#fw-options-tab-social-options">' . esc_html__( 'Social Profiles', 'the-journal' ) . '</a> ' . esc_html__( 'section under the General tab.', 'the-journal' ) ),
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
										)
									),
									'choices'      => array(
										'yes' => array(
											'header_icon_size'       => array(
												'type'  => 'short-text',
												'label' => esc_html__( 'Icon Size', 'the-journal' ),
												'desc'  => esc_html__( 'Enter icon size in pixels. Ex: 16', 'the-journal' ),
												'value' => '16',
											),
											'header_social_position' => array(
												'type'         => 'switch',
												'label'        => esc_html__( 'Socials Position', 'the-journal' ),
												'desc'         => esc_html__( 'Select the socials position', 'the-journal' ),
												'right-choice' => array(
													'value' => 'fw-top-social-right',
													'label' => esc_html__( 'Right', 'the-journal' )
												),
												'left-choice'  => array(
													'value' => 'fw-top-social-left',
													'label' => esc_html__( 'Left', 'the-journal' )
												),
												'value'        => 'fw-top-social-right',
											),
										),
										'no'  => array(),
									),
									'show_borders' => false,
								),
							),
							'no'  => array(),
						),
						'show_borders' => false,
					),
					'search_group_typography' => array(
						'attr'    => array( 'class' => 'border-bottom-none' ),
						'type'    => 'group',
						'options' => array(
							'enable_search' => array(
								'type'         => 'multi-picker',
								'label'        => false,
								'desc'         => false,
								'picker'       => array(
									'selected_value' => array(
										'label'        => esc_html__( 'Search', 'the-journal' ),
										'desc'         => esc_html__( 'Enable search?', 'the-journal' ),
										'type'         => 'switch',
										'right-choice' => array(
											'value' => 'yes',
											'label' => esc_html__( 'Yes', 'the-journal' )
										),
										'left-choice'  => array(
											'value' => 'no',
											'label' => esc_html__( 'No', 'the-journal' )
										),
										'value'        => 'no',
									)
								),
								'choices'      => array(
									'yes' => array(
										'search_type'     => array(
											'type'    => 'multi-picker',
											'label'   => false,
											'desc'    => false,
											'picker'  => array(
												'selected' => array(
													'label'   => esc_html__( 'Type', 'the-journal' ),
													'desc'    => esc_html__( 'Select your prefered search type', 'the-journal' ),
													'type'    => 'select',
													'value'   => 'fw-input-search',
													'choices' => array(
														'fw-input-search' => esc_html__( 'Input Search', 'the-journal' ),
														'fw-mini-search'  => esc_html__( 'Icon Search', 'the-journal' ),
													),
												)
											),
											'choices' => array(
												'fw-input-search' => array(),
												'fw-mini-search'  => array(),
											)
										),
										'search_position' => array(
											'label'   => esc_html__( 'Position', 'the-journal' ),
											'desc'    => esc_html__( 'Select the search position', 'the-journal' ),
											'type'    => 'select',
											'value'   => 'top_bar',
											'choices' => array(
												'top_bar'  => esc_html__( 'Top Bar', 'the-journal' ),
												'menu_bar' => esc_html__( 'Menu Bar', 'the-journal' ),
											),
										),
									),
									'no'  => array(),
								),
								'show_borders' => false,
							),
						)
					),
				)
			)
		)
	),
	'footer'          => array(
		'title'   => esc_html__( 'Footer', 'the-journal' ),
		'type'    => 'tab',
		'options' => array(
			'footer_settings' => array(
				'type'          => 'multi',
				'label'         => false,
				'attr'          => array(
					'class' => 'fw-option-type-multi-show-borders',
				),
				'inner-options' => array(
					'show_footer_widgets' => array(
						'type'         => 'multi-picker',
						'label'        => false,
						'desc'         => false,
						'picker'       => array(
							'selected_value' => array(
								'label'        => esc_html__( 'Footer Widgets', 'the-journal' ),
								'desc'         => esc_html__( 'Show footer widgets?', 'the-journal' ),
								'type'         => 'switch',
								'right-choice' => array(
									'value' => 'yes',
									'label' => esc_html__( 'Yes', 'the-journal' )
								),
								'left-choice'  => array(
									'value' => 'no',
									'label' => esc_html__( 'No', 'the-journal' )
								),
								'value'        => 'no',
							)
						),
						'choices'      => array(
							'yes' => array(
								'number_of_columns' => array(
									'label'   => esc_html__( 'Number of Columns', 'the-journal' ),
									'desc'    => esc_html__( 'Select the number of columns', 'the-journal' ),
									'help'    => sprintf( "%s", esc_html__( 'You can set the widgets displayed in the footer from the', 'the-journal' ) . ' <a target="_blank" href="' . $admin_url . 'widgets.php">' . esc_html__( 'Widgets section', 'the-journal' ) . '</a> ' . esc_html__( 'under Appearance.', 'the-journal' ) ),
									'type'    => 'short-select',
									'value'   => 'footer-cols-3',
									'choices' => array(
										'footer-cols-3' => esc_html__( '3', 'the-journal' ),
										'footer-cols-4' => esc_html__( '4', 'the-journal' ),
									),
								),
								'footer_widgets_bg' => array(
									'type'         => 'multi-picker',
									'label'        => false,
									'desc'         => false,
									'picker'       => array(
										'background' => array(
											'label'   => esc_html__( 'Background', 'the-journal' ),
											'desc'    => esc_html__( 'Select the background for your widget area', 'the-journal' ),
											'attr'    => array( 'class' => 'fw-checkbox-float-left' ),
											'type'    => 'radio',
											'choices' => array(
												'none'  => esc_html__( 'None', 'the-journal' ),
												'image' => esc_html__( 'Image', 'the-journal' ),
												'color' => esc_html__( 'Color', 'the-journal' ),
											),
											'value'   => 'none'
										),
									),
									'choices'      => array(
										'none'  => array(),
										'color' => array(
											'background_color' => array(
												'label'   => '',
												'desc'    => esc_html__( 'Select the background color', 'the-journal' ),
												'help'    => esc_html__( 'The default color palette can be changed from the', 'the-journal' ) . ' <a target="_blank" href="' . $admin_url . 'themes.php?page=fw-settings&_focus_tab=fw-options-tab-colors_tab">' . esc_html__( 'Colors section', 'the-journal' ) . '</a> ' . esc_html__( 'found in the Theme Settings page', 'the-journal' ),
												'value'   => '',
												'choices' => $the_journal_color_settings,
												'type'    => 'color-palette'
											),
										),
										'image' => array(
											'background_image' => array(
												'label'   => '',
												'type'    => 'background-image',
												'choices' => array(//	in future may will set predefined images
												)
											),
											'background_color' => array(
												'label'   => '',
												'desc'    => esc_html__( 'Select the background color', 'the-journal' ),
												'help'    => esc_html__( 'The default color palette can be changed from the', 'the-journal' ) . ' <a target="_blank" href="' . $admin_url . 'themes.php?page=fw-settings&_focus_tab=fw-options-tab-colors_tab">' . esc_html__( 'Colors section', 'the-journal' ) . '</a> ' . esc_html__( 'found in the Theme Settings page', 'the-journal' ),
												'value'   => '',
												'choices' => $the_journal_color_settings,
												'type'    => 'color-palette'
											),
											'repeat'           => array(
												'label'   => '',
												'desc'    => esc_html__( 'Select how will the background repeat', 'the-journal' ),
												'type'    => 'short-select',
												'attr'    => array( 'class' => 'fw-checkbox-float-left' ),
												'value'   => 'no-repeat',
												'choices' => array(
													'no-repeat' => esc_html__( 'No-Repeat', 'the-journal' ),
													'repeat'    => esc_html__( 'Repeat', 'the-journal' ),
													'repeat-x'  => esc_html__( 'Repeat-X', 'the-journal' ),
													'repeat-y'  => esc_html__( 'Repeat-Y', 'the-journal' ),
												)
											),
											'bg_position_x'    => array(
												'label'   => esc_html__( 'Position', 'the-journal' ),
												'desc'    => esc_html__( 'Select the horizontal background position', 'the-journal' ),
												'type'    => 'short-select',
												'attr'    => array( 'class' => 'fw-checkbox-float-left' ),
												'value'   => '',
												'choices' => array(
													'left'   => esc_html__( 'Left', 'the-journal' ),
													'center' => esc_html__( 'Center', 'the-journal' ),
													'right'  => esc_html__( 'Right', 'the-journal' ),
												)
											),
											'bg_position_y'    => array(
												'label'   => '',
												'desc'    => esc_html__( 'Select the vertical background position', 'the-journal' ),
												'type'    => 'short-select',
												'attr'    => array( 'class' => 'fw-checkbox-float-left' ),
												'value'   => '',
												'choices' => array(
													'top'    => esc_html__( 'Top', 'the-journal' ),
													'center' => esc_html__( 'Center', 'the-journal' ),
													'bottom' => esc_html__( 'Bottom', 'the-journal' ),
												)
											),
											'bg_size'          => array(
												'label'   => esc_html__( 'Size', 'the-journal' ),
												'desc'    => esc_html__( 'Select the background size', 'the-journal' ),
												'help'    => esc_html__( '<strong>Auto</strong> - Default value, the background image has the original width and height.<br><br><strong>Cover</strong> - Scale the background image so that the background area is completely covered by the image.<br><br><strong>Contain</strong> - Scale the image to the largest size such that both its width and height can fit inside the content area.', 'the-journal' ),
												'type'    => 'short-select',
												'attr'    => array( 'class' => 'fw-checkbox-float-left' ),
												'value'   => '',
												'choices' => array(
													'auto'    => esc_html__( 'Auto', 'the-journal' ),
													'cover'   => esc_html__( 'Cover', 'the-journal' ),
													'contain' => esc_html__( 'Contain', 'the-journal' ),
												)
											)
										),
									),
									'show_borders' => false,
								)
							),
						),
						'show_borders' => false,
					),
					'footer_socials'      => array(
						'type'    => 'multi-picker',
						'label'   => false,
						'desc'    => false,
						'picker'  => array(
							'selected_value' => array(
								'type'         => 'switch',
								'value'        => 'no',
								'label'        => esc_html__( 'Footer Socials', 'the-journal' ),
								'desc'         => esc_html__( 'Display footer social icons?', 'the-journal' ),
								'help'         => sprintf( "%s", esc_html__( 'Your social links can be set from the', 'the-journal' ) . ' <a target="_blank" href="' . $admin_url . 'themes.php?page=fw-settings#fw-options-tab-social-options">' . esc_html__( 'Social Profiles', 'the-journal' ) . '</a> ' . esc_html__( 'section under the General tab.', 'the-journal' ) ),
								'left-choice'  => array(
									'value' => 'no',
									'label' => esc_html__( 'No', 'the-journal' ),
								),
								'right-choice' => array(
									'value' => 'yes',
									'label' => esc_html__( 'Yes', 'the-journal' ),
								)
							)
						),
						'choices' => array(
							'yes' => array(
								'footer_icon_size' => array(
									'type'  => 'short-text',
									'label' => esc_html__( 'Icon Size', 'the-journal' ),
									'desc'  => esc_html__( 'Enter icon size in pixels. Ex: 16', 'the-journal' ),
									'value' => '16',
								),
							)
						)
					),
					'copyright_group'     => array(
						'type'    => 'group',
						'attr'    => array( 'class' => 'border-bottom-none' ),
						'options' => array(
							'copyright'          => array(
								'label' => esc_html__( 'Copyright', 'the-journal' ),
								'desc'  => esc_html__( 'Please enter the copyright text', 'the-journal' ),
								'type'  => 'textarea',
								'value' => 'Magazine WordPress Theme made by <a rel="nofollow" href="https://themefuse.com/" target="_blank">ThemeFuse</a>',
							),
							'copyright_position' => array(
								'label'   => esc_html__( 'Position', 'the-journal' ),
								'desc'    => esc_html__( 'Select the copyright position', 'the-journal' ),
								'type'    => 'image-picker',
								'value'   => '',
								'choices' => array(
									'fw-copyright-left'   => array(
										'small' => array(
											'height' => 50,
											'src'    => $template_directory . '/images/image-picker/left-position.jpg',
											'title'  => esc_html__( 'Left', 'the-journal' )
										),
									),
									'fw-copyright-center' => array(
										'small' => array(
											'height' => 50,
											'src'    => $template_directory . '/images/image-picker/center-position.jpg',
											'title'  => esc_html__( 'Center', 'the-journal' )
										),
									),
									'fw-copyright-right'  => array(
										'small' => array(
											'height' => 50,
											'src'    => $template_directory . '/images/image-picker/right-position.jpg',
											'title'  => esc_html__( 'Right', 'the-journal' )
										),
									),
								),
							),
							'html_label'         => array(
								'type'  => 'html',
								'html'  => '',
								'value' => '',
								'label' => esc_html__( 'Spacing', 'the-journal' ),
							),
							'copyright_top'      => array(
								'label' => false,
								'desc'  => esc_html__( 'top', 'the-journal' ),
								'type'  => 'short-text',
								'value' => '50',
							),
							'copyright_bottom'   => array(
								'label' => false,
								'desc'  => esc_html__( 'bottom ', 'the-journal' ),
								'type'  => 'short-text',
								'value' => '50',
							)
						)
					)
				)
			)
		)
	),
	'colors_tab'      => array(
		'title'   => esc_html__( 'Colors', 'the-journal' ),
		'type'    => 'tab',
		'options' => array(
			'color_settings' => array(
				'attr'          => array( 'class' => 'fw-color-picker-palette' ),
				'type'          => 'multi',
				'label'         => false,
				'inner-options' => array(
					'color_1' => array(
						'label' => esc_html__( 'Color Palette', 'the-journal' ),
						'desc'  => esc_html__( 'Color 1', 'the-journal' ),
						'help'  => esc_html__( 'This color affects different elements across the website. Note that changing this color will also change the default color in all the options across the admin.', 'the-journal' ),
						'type'  => 'color-picker',
						'value' => '#d2a74d',
					),
					'color_2' => array(
						'label' => '',
						'desc'  => esc_html__( 'Color 2', 'the-journal' ),
						'help'  => esc_html__( 'This color affects different elements across the website. Note that changing this color will also change the default color in all the options across the admin.', 'the-journal' ),
						'type'  => 'color-picker',
						'value' => '#0f1f25',
					),
					'color_3' => array(
						'label' => '',
						'desc'  => esc_html__( 'Color 3', 'the-journal' ),
						'help'  => esc_html__( 'This color affects different elements across the website. Note that changing this color will also change the default color in all the options across the admin.', 'the-journal' ),
						'type'  => 'color-picker',
						'value' => '#898d8e',
					),
					'color_4' => array(
						'label' => '',
						'desc'  => esc_html__( 'Color 4', 'the-journal' ),
						'help'  => esc_html__( 'This color affects different elements across the website. Note that changing this color will also change the default color in all the options across the admin.', 'the-journal' ),
						'type'  => 'color-picker',
						'value' => '#edf1f2',
					),
					'color_5' => array(
						'label' => '',
						'desc'  => esc_html__( 'Color 5', 'the-journal' ),
						'help'  => esc_html__( 'This color affects different elements across the website. Note that changing this color will also change the default color in all the options across the admin.', 'the-journal' ),
						'type'  => 'color-picker',
						'value' => '#141e24',
					),
				)
			)
		)
	),
	'typography_tab'  => array(
		'title'   => esc_html__( 'Typography', 'the-journal' ),
		'type'    => 'tab',
		'options' => array(
			'typography_settings' => array(
				'type'          => 'multi',
				'label'         => false,
				'attr'          => array(
					'class' => 'fw-option-type-multi-show-borders',
				),
				'inner-options' => array(
					'body_text' => array(
						'label' => esc_html__( 'Body Text', 'the-journal' ),
						'type'  => 'tf-typography',
						'value' => array(
							'family'         => 'Crimson Text',
							'size'           => 19,
							'line-height'    => 28,
							'letter-spacing' => 0,
							'color-palette'  => '#5e6467',
						),
					),
					'titles'    => array(
						'label'      => __( 'Titles', 'the-journal' ),
						'type'       => 'tf-typography',
						'value'      => array(
							'family'         => 'Crimson Text',
							'line-height'    => 28,
							'letter-spacing' => 0,
							'color-palette'  => '#5e6467',
						),
						'components' => array(
							'size' => false
						)
					),
				)
			)
		)
	)
);