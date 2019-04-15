<?php if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}

/**
 * Get values from admin styling and overwrite them when processing less files
 */

if ( ! defined( 'FW' ) ) {
	return;
}

global $the_journal_less_variables;
// get customizer settings
$settings_option            = fw_get_db_customizer_option();
$typography_settings        = $settings_option['typography_settings'];
$the_journal_color_settings = $settings_option['color_settings'];
$website_background         = $settings_option['website_background'];
$header_settings            = $settings_option['header_settings'];
$footer_settings            = $settings_option['footer_settings'];
$logo_settings              = $settings_option['logo_settings'];

// get theme bg color
if ( isset( $website_background['website_bg_color'] ) && $website_background['website_bg_color'] != '' ) {
	$the_journal_less_variables['body-bg'] = $website_background['website_bg_color'];
}

if ( isset( $website_background['website_bg']['type'] ) && $website_background['website_bg']['type'] == 'custom' ) {
	// custom image
	if ( isset( $website_background['website_bg']['data']['css']['background-image'] ) ) {
		$the_journal_less_variables['body-bg-image'] = $website_background['website_bg']['data']['css']['background-image'];
	}
	$the_journal_less_variables['body-bg-repeat'] = 'repeat';
} elseif ( isset( $website_background['website_bg']['type'] ) && $website_background['website_bg']['type'] == 'predefined' ) {
	if ( isset( $website_background['website_bg']['predefined'] ) && $website_background['website_bg']['predefined'] != 'none' ) {
		// predefined image
		$the_journal_less_variables['body-bg-image']  = $website_background['website_bg']['data']['css']['background-image'];
		$the_journal_less_variables['body-bg-repeat'] = $website_background['website_bg']['data']['css']['background-repeat'];
	}
}

// body styles
if ( isset( $typography_settings['body_text'] ) ) {
	$font_styles                                    = the_journal_get_font_array( $typography_settings['body_text'], $the_journal_color_settings );
	$the_journal_less_variables['font-family-base'] = $font_styles['font-family'];
	( $font_styles['font-size'] != 'px' ) ? $the_journal_less_variables['font-size-base'] = $font_styles['font-size'] : '';
	( $font_styles['line-height'] != 'px' ) ? $the_journal_less_variables['line-height-base'] = $font_styles['line-height'] : '';
	( $font_styles['letter-spacing'] != 'px' ) ? $the_journal_less_variables['font-letter-spacing-base'] = $font_styles['letter-spacing'] : '';
	! empty( $font_styles['color'] ) ? $the_journal_less_variables['text-color'] = $font_styles['color'] : '';
	$the_journal_less_variables['font-style-base']  = $font_styles['font-style'];
	$the_journal_less_variables['font-weight-base'] = $font_styles['font-weight'];
}

// titles styles
if ( isset( $typography_settings['titles'] ) ) {
	$font_styles                                      = the_journal_get_font_array( $typography_settings['titles'], $the_journal_color_settings );
	$the_journal_less_variables['font-titles-family'] = $font_styles['font-family'];
	( $font_styles['line-height'] != 'px' ) ? $the_journal_less_variables['line-titles-height'] = $font_styles['line-height'] : '';
	( $font_styles['letter-spacing'] != 'px' ) ? $the_journal_less_variables['letter-titles-spacing'] = $font_styles['letter-spacing'] : '';
	! empty( $font_styles['color'] ) ? $the_journal_less_variables['fw-titles-color'] = $font_styles['color'] : '';
	$the_journal_less_variables['font-titles-style']  = $font_styles['font-style'];
	$the_journal_less_variables['font-titles-weight'] = $font_styles['font-weight'];
}

// get top bar socials icons size
if ( $header_settings['enable_header_top_bar']['selected_value'] == 'yes' ) {
	// header socials
	if ( $header_settings['enable_header_top_bar']['yes']['enable_header_socials']['selected_value'] == 'yes' ) {
		if ( isset( $header_settings['enable_header_top_bar']['yes']['enable_header_socials']['yes']['header_icon_size'] ) && ! empty( $header_settings['enable_header_top_bar']['yes']['enable_header_socials']['yes']['header_icon_size'] ) ) {
			$the_journal_less_variables['fw-top-bar-font-size-social'] = (int) $header_settings['enable_header_top_bar']['yes']['enable_header_socials']['yes']['header_icon_size'] . 'px';
		}
	}
}

// logo width and height
if ( isset( $logo_settings['logo']['image']['image_logo']['attachment_id'] ) && $logo_settings['logo']['image']['image_logo']['attachment_id'] != '' ) {
	$logo_image = wp_get_attachment_image_src( $logo_settings['logo']['image']['image_logo']['attachment_id'], 'full' );
	if ( isset( $logo_image['1'] ) && isset( $logo_image['2'] ) ) {
		$the_journal_less_variables['fw-menu-logo-width']  = $logo_image['1'];
		$the_journal_less_variables['fw-menu-logo-height'] = $logo_image['2'];
	}
}

// footer widget area
if ( $footer_settings['show_footer_widgets']['selected_value'] == 'yes' ) {
	if ( isset( $footer_settings['show_footer_widgets']['yes']['footer_widgets_bg']['background'] ) && $footer_settings['show_footer_widgets']['yes']['footer_widgets_bg']['background'] != 'none' ) {
		//footer widgets custom background color
		if ( $footer_settings['show_footer_widgets']['yes']['footer_widgets_bg']['background'] == 'color' && isset( $footer_settings['show_footer_widgets']['yes']['footer_widgets_bg']['color']['background_color']['id'] ) && $footer_settings['show_footer_widgets']['yes']['footer_widgets_bg']['color']['background_color']['id'] == 'fw-custom' ) {
			if ( ! empty( $footer_settings['show_footer_widgets']['yes']['footer_widgets_bg']['color']['background_color']['color'] ) ) {
				$the_journal_less_variables['fw-footer-widgets-bg'] = $footer_settings['show_footer_widgets']['yes']['footer_widgets_bg']['color']['background_color']['color'];
			} else {
				// for empty color
				$the_journal_less_variables['fw-footer-widgets-bg'] = 'transparent';
			}
			// footer widgets predefined background color
		} elseif ( $footer_settings['show_footer_widgets']['yes']['footer_widgets_bg']['background'] == 'color' ) {
			$the_journal_less_variables['fw-footer-widgets-bg'] = isset( $footer_settings['show_footer_widgets']['yes']['footer_widgets_bg']['color']['background_color']['id'] ) ? $the_journal_color_settings[ $footer_settings['show_footer_widgets']['yes']['footer_widgets_bg']['color']['background_color']['id'] ] : '';
			// footer widgets background image
		} elseif ( $footer_settings['show_footer_widgets']['yes']['footer_widgets_bg']['background'] == 'image' ) {
			if ( isset( $footer_settings['show_footer_widgets']['yes']['footer_widgets_bg']['image']['background_color']['id'] ) && $footer_settings['show_footer_widgets']['yes']['footer_widgets_bg']['image']['background_color']['id'] == 'fw-custom' ) {
				if ( ! empty( $footer_settings['show_footer_widgets']['yes']['footer_widgets_bg']['image']['background_color']['color'] ) ) {
					$the_journal_less_variables['fw-footer-widgets-bg'] = $footer_settings['show_footer_widgets']['yes']['footer_widgets_bg']['image']['background_color']['color'];
				} else {
					// for empty color
					$the_journal_less_variables['fw-footer-widgets-bg'] = 'transparent';
				}
			} else {
				if ( isset( $footer_settings['show_footer_widgets']['yes']['footer_widgets_bg']['image']['background_color']['id'] ) ) {
					$the_journal_less_variables['fw-footer-widgets-bg'] = $the_journal_color_settings[ $footer_settings['show_footer_widgets']['yes']['footer_widgets_bg']['image']['background_color']['id'] ];
				}
			}

			if ( ! empty( $footer_settings['show_footer_widgets']['yes']['footer_widgets_bg']['image']['background_image']['data'] ) ) {
				$temp_style = '';
				if ( $footer_settings['show_footer_widgets']['yes']['footer_widgets_bg']['image']['background_image']['data']['icon'] != '' ) {
					$the_journal_less_variables['fw-footer-widget-bg-image'] = '"' . $footer_settings['show_footer_widgets']['yes']['footer_widgets_bg']['image']['background_image']['data']['icon'] . '"';
				}
				$the_journal_less_variables['fw-footer-widget-bg-repeat']   = $footer_settings['show_footer_widgets']['yes']['footer_widgets_bg']['image']['repeat'];
				$temp_style                                                 .= ' ' . $footer_settings['show_footer_widgets']['yes']['footer_widgets_bg']['image']['bg_position_x'];
				$temp_style                                                 .= ' ' . $footer_settings['show_footer_widgets']['yes']['footer_widgets_bg']['image']['bg_position_y'];
				$the_journal_less_variables['fw-footer-widget-bg-position'] = $temp_style;
				$the_journal_less_variables['fw-footer-widget-bg-size']     = $footer_settings['show_footer_widgets']['yes']['footer_widgets_bg']['image']['bg_size'];
			}
		}
	} else {
		// background none
		$the_journal_less_variables['fw-footer-widgets-bg'] = 'transparent';
	}
}

// footer icons size
if ( isset( $footer_settings['footer_socials']['selected_value'] ) && $footer_settings['footer_socials']['selected_value'] == 'yes' ) {

	if ( isset( $footer_settings['footer_socials']['yes']['footer_icon_size'] ) && ! empty( $footer_settings['footer_socials']['yes']['footer_icon_size'] ) ) {
		$the_journal_less_variables['fw-footer-social-size'] = $footer_settings['footer_socials']['yes']['footer_icon_size'] . 'px';
	}
}

// footer padding top & bottom
if ( isset( $footer_settings['copyright_top'] ) && $footer_settings['copyright_top'] != '' ) {
	$the_journal_less_variables['fw-footer-bar-padding-top'] = (int) $footer_settings['copyright_top'] . 'px';
}
if ( isset( $footer_settings['copyright_bottom'] ) && $footer_settings['copyright_bottom'] != '' ) {
	$the_journal_less_variables['fw-footer-bar-padding-bot'] = (int) $footer_settings['copyright_bottom'] . 'px';
}

// get color 1
if ( isset( $the_journal_color_settings['color_1'] ) && $the_journal_color_settings['color_1'] != '' ) {
	$the_journal_less_variables['theme-color-1'] = $the_journal_color_settings['color_1'];
}
// get color 2
if ( isset( $the_journal_color_settings['color_2'] ) && $the_journal_color_settings['color_2'] != '' ) {
	$the_journal_less_variables['theme-color-2'] = $the_journal_color_settings['color_2'];
}
// get color 3
if ( isset( $the_journal_color_settings['color_3'] ) && $the_journal_color_settings['color_3'] != '' ) {
	$the_journal_less_variables['theme-color-3'] = $the_journal_color_settings['color_3'];
}
// get color 4
if ( isset( $the_journal_color_settings['color_4'] ) && $the_journal_color_settings['color_4'] != '' ) {
	$the_journal_less_variables['theme-color-4'] = $the_journal_color_settings['color_4'];
}
// get color 5
if ( isset( $the_journal_color_settings['color_5'] ) && $the_journal_color_settings['color_5'] != '' ) {
	$the_journal_less_variables['theme-color-5'] = $the_journal_color_settings['color_5'];
}
