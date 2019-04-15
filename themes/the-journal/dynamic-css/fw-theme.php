<?php
global $the_journal_less_variables;
$upload_dir                        = wp_upload_dir();
$style_dir                         = $upload_dir['basedir'];
$the_journal_dynamic_css_directory = get_template_directory() . '/dynamic-css/fw-theme';

$css = '';
// Utilities
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/utilities.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );

// Grid
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/grid.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );

// Forms Styles
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/shortcodes/forms.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );

// Header
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/headers/header.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/headers/header-3.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/headers/header-logo.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/headers/header-search.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/headers/header-top-bar.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/headers/mobile-menu.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/headers/top-nav-menu.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );

// Layout
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/general.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/content.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/typography.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/sidebar.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );

// Widgets
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/widgets/widgets.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/widgets/widgets-archive.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/widgets/widgets-calendar.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/widgets/widgets-categories.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/widgets/widget-recent-comments.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/widgets/widget-recent-entries.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/widgets/widget-rss.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/widgets/widget-search.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/widgets/widget-tagcloud.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/widgets/widget-text.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/widgets/widget-posts-list.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/widgets/widget-select.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );

// Libraries
//-> Selectize
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/lib/selectize/selectize.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/lib/selectize/selectize.theme.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );

//-> Check & Radio box
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/lib/custom-checkbox-radio/custom-checkbox-radio.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );

//-> Pretty Photto
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/lib/pretty-photo/pretty-photo.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );

// Posts
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/posts/posts.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/posts/posts-type-1.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/posts/posts-type-2.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/posts/posts-format.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/posts/posts-details.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/posts/posts-comments.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/posts/posts-comments-link.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/posts/posts-related-article.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );

// Pagination
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/pagination.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );

// Image styling
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/image-styling/image.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/image-styling/image-overlay.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );

// Portfolio
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/portfolio/portfolio.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/portfolio/portfolio-details.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/portfolio/portfolio-type-1.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );

// Buttons
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/buttons/buttons.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/buttons/buttons-size.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/buttons/buttons-style-1.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );

// Sliders
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/sliders/sliders.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/sliders/easy-slider.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );

// Shortcodes
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/shortcodes/accordion.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/shortcodes/dividers.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/shortcodes/forms.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/shortcodes/icon-box.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/shortcodes/icon-title.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/shortcodes/image.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/shortcodes/map.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/shortcodes/pricing.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/shortcodes/quote.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/shortcodes/special-heading.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/shortcodes/table.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/shortcodes/tabs.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/shortcodes/team-member.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/shortcodes/testimonials.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );

// Latest Posts
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/latest-posts/latest-posts.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/latest-posts/latest-posts-type1.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/latest-posts/latest-posts-type2.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/latest-posts/latest-posts-type3.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/latest-posts/latest-posts-type4.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/latest-posts/latest-posts-type5.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/latest-posts/latest-posts-type6.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/latest-posts/latest-posts-type7.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/latest-posts/latest-posts-type8.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/latest-posts/latest-posts-type9.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/latest-posts/latest-posts-type10.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );

// Breadcrumbs
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/breadcrumbs.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );

// Footer
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/footer/footer.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/footer/footer-widget.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );
$css .= the_journal_render_view( $the_journal_dynamic_css_directory . '/footer/footer-copyright.php', array( 'the_journal_less_variables' => $the_journal_less_variables ) );

if ( method_exists( 'FW_WP_Filesystem', 'put' ) ) {
	FW_WP_Filesystem::put( $style_dir . '/' . the_journal_style_file_name() . '.css', $css );
}

