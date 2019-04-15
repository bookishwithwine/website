<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'main' => array(
		'type'    => 'box',
		'title'   => '',
		'options' => array(
			'id'       => array(
				'type'  => 'hidden',
				'value' => uniqid( 'contact-form-' )
			),
			'builder'  => array(
				'type'    => 'tab',
				'title'   => esc_html__( 'Form Fields', 'the-journal' ),
				'options' => array(
					'form' => array(
						'label' => false,
						'type'  => 'form-builder',
						'value' => array(
							'json' => json_encode( array(
								array(
									'type'      => 'form-header-title',
									'shortcode' => 'form_header_title',
									'width'     => '',
									'options'   => array(
										'title'    => '',
										'subtitle' => '',
									)
								)
							) )
						)
					),
				),
			),
			'settings' => array(
				'type'    => 'tab',
				'title'   => esc_html__( 'Settings', 'the-journal' ),
				'options' => array(
					'settings-options' => array(
						'title'   => esc_html__( 'Options', 'the-journal' ),
						'type'    => 'tab',
						'options' => array(
							'form_text_settings'  => array(
								'type'    => 'group',
								'options' => array(
									'subject-group'       => array(
										'type'    => 'group',
										'options' => array(
											'subject_message' => array(
												'type'  => 'text',
												'label' => esc_html__( 'Subject Message', 'the-journal' ),
												'desc'  => esc_html__( 'This text will be used as subject message for the email', 'the-journal' ),
												'value' => esc_html__( 'New message', 'the-journal' ),
											),
										)
									),
									'submit-button-group' => array(
										'type'    => 'group',
										'attr'    => array( 'class' => 'fw-form-button-dashboard' ),
										'options' => array(
											'button_options' => array(
												'attr'          => array(
													'data-advanced-for' => 'button-options',
													'class'             => 'fw-advanced-button'
												),
												'type'          => 'popup',
												'label'         => esc_html__( 'Custom Style', 'the-journal' ),
												'desc'          => esc_html__( 'Change the style / typography of this button', 'the-journal' ),
												'button'        => esc_html__( 'Styling', 'the-journal' ),
												'size'          => 'medium',
												'popup-options' => array(
													'label-group' => array(
														'type'    => 'group',
														'options' => array(
															'label' => array(
																'label' => esc_html__( 'Label', 'the-journal' ),
																'attr'  => array( 'class' => 'button-advanced' ),
																'desc'  => esc_html__( 'This is the text that appears on your button', 'the-journal' ),
																'type'  => 'text',
																'value' => 'Submit'
															),
														)
													)
												),
											)
										)
									),
									'submit_button_text'  => array(
										'type'  => 'html',
										'label' => false,
										'desc'  => '',
										'value' => '',
										'html'  => '',
									),
									'success-group'       => array(
										'type'    => 'group',
										'options' => array(
											'success_message' => array(
												'type'  => 'text',
												'label' => esc_html__( 'Success Message', 'the-journal' ),
												'desc'  => esc_html__( 'This text will be displayed when the form will successfully send', 'the-journal' ),
												'value' => esc_html__( 'Message sent!', 'the-journal' ),
											),
										)
									),
									'failure_message'     => array(
										'type'  => 'text',
										'label' => esc_html__( 'Failure Message', 'the-journal' ),
										'desc'  => esc_html__( 'This text will be displayed when the form will fail to be sent', 'the-journal' ),
										'value' => esc_html__( 'Oops something went wrong.', 'the-journal' ),
									),
								),
							),
							'form_email_settings' => array(
								'type'    => 'group',
								'options' => array(
									'email_to' => array(
										'type'  => 'text',
										'label' => esc_html__( 'Email To', 'the-journal' ),
										'help'  => esc_html__( 'We recommend you to use an email that you verify often', 'the-journal' ),
										'desc'  => esc_html__( 'The form will be sent to this email address.', 'the-journal' ),
									),
								),
							),
						)
					),
					'mailer-options'   => array(
						'title'   => esc_html__( 'Mailer', 'the-journal' ),
						'type'    => 'tab',
						'options' => array(
							'mailer' => array(
								'label' => false,
								'type'  => 'mailer'
							)
						)
					)
				),
			)
		)
	)
);