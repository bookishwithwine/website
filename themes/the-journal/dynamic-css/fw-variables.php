<?php
global $the_journal_less_variables;
// initial default values
$the_journal_less_variables['theme-color-1'] = '#d2a74d'; // main color, subtitles
$the_journal_less_variables['theme-color-2'] = '#0f1f25'; // secondary color
$the_journal_less_variables['theme-color-3'] = '#868686';
$the_journal_less_variables['theme-color-4'] = '#edf1f2';
$the_journal_less_variables['theme-color-5'] = '#4c4c4c';

// Placeholder
$the_journal_less_variables['placeholder-color'] = '#c2c2c2';

//** Background color for `<body>`.
$the_journal_less_variables['body-bg']        = '#161616';
$the_journal_less_variables['container-bg']   = '#fff'; // bg color when site style is Boxed
$the_journal_less_variables['body-bg-image']  = 'url(data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==)';
$the_journal_less_variables['body-bg-repeat'] = 'no-repeat';

//** Global text color on `<body>`.
$the_journal_less_variables['text-color'] = $the_journal_less_variables['theme-color-3'];

// Letter Spacing Base
$the_journal_less_variables['font-letter-spacing-base'] = '0';
//Letter Spacing Titles
$the_journal_less_variables['letter-titles-spacing'] = $the_journal_less_variables['font-letter-spacing-base'];

//== Typography
//## Font, line-height, and color for body text, headings, and more.
$the_journal_less_variables['font-family-1'] = '"Montserrat", sans-serif';
$the_journal_less_variables['font-family-2'] = '"Crimson Text", serif';
$the_journal_less_variables['font-family-3'] = '"Comic Sans MS", cursive';
$the_journal_less_variables['font-family-4'] = '"Crimson Text"';
$the_journal_less_variables['font-family-5'] = '"Montserrat"';

//** Font Family Text
$the_journal_less_variables['font-family-base'] = $the_journal_less_variables['font-family-2'];
$the_journal_less_variables['font-weight-base'] = 'normal';
$the_journal_less_variables['font-style-base']  = 'normal';

//** Font Family Title
$the_journal_less_variables['font-titles-family'] = $the_journal_less_variables['font-family-2'];
$the_journal_less_variables['font-titles-weight'] = 'normal';
$the_journal_less_variables['font-titles-style']  = 'normal';

// Font size base
$the_journal_less_variables['font-size-base'] = '19px';

// font size base
$the_journal_less_variables['font-size-large'] = ceil( (int) $the_journal_less_variables['font-size-base'] * 1.15 ) . 'px';
$the_journal_less_variables['font-size-small'] = ceil( (int) $the_journal_less_variables['font-size-base'] * 0.85 ) . 'px';

//** Unit-less `line-height` for use in components like buttons.
$the_journal_less_variables['line-height-small'] = '1.4em';
$the_journal_less_variables['line-height-base']  = '1.5em';
$the_journal_less_variables['line-height-large'] = '1.7em';

// Title line height
$the_journal_less_variables['line-titles-height'] = $the_journal_less_variables['line-height-base'];

//** Size theme (site full, site boxed, boxed)
$the_journal_less_variables['fw-page-full'] = '100%';

//** Margin top & bottom for page
$the_journal_less_variables['fw-site-margin-top']    = '0';
$the_journal_less_variables['fw-site-margin-bottom'] = '0';

//== Components
//
//## Define common padding sizes and more. Values based on 14px text and 1.428 line-height (~20px to start).
$the_journal_less_variables['padding-base-vertical']   = '12px';
$the_journal_less_variables['padding-base-horizontal'] = '25px';

$the_journal_less_variables['padding-large-vertical']   = '17px';
$the_journal_less_variables['padding-large-horizontal'] = '45px';

$the_journal_less_variables['padding-small-vertical']   = '6px';
$the_journal_less_variables['padding-small-horizontal'] = '15px';

//== Forms
//
// ** horizontal and vertical padding
$the_journal_less_variables['input-padding-x'] = '15px';
$the_journal_less_variables['input-padding-y'] = '12px';
$the_journal_less_variables['input-font-size'] = '15px';

//== Grid system
//
//## Define your custom responsive grid.

//** Number of columns in the grid.
$the_journal_less_variables['grid-columns'] = '12';

//** Padding between columns. Gets divided in half for the left and right.
$the_journal_less_variables['grid-gutter-width'] = '30px';

//== Header Layout
$the_journal_less_variables['fw-logo-wrap-height'] = '160px';

// Top menu
$the_journal_less_variables['fw-menu-logo-width']  = '400';
$the_journal_less_variables['fw-menu-logo-height'] = ( floatval( $the_journal_less_variables['fw-menu-logo-width'] ) / 2 ) . 'px';

// Section Height
$the_journal_less_variables['fw-section-height-md'] = '300px';

// Latest posts
$the_journal_less_variables['latests-posts-separator-opacity'] = '20';

//== Footer Layout
// Widget area styles
$the_journal_less_variables['fw-footer-widgets-bg']         = '#2a2e31'; // section's bg color
$the_journal_less_variables['fw-footer-widget-bg-image']    = 'data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='; // section's bg image
$the_journal_less_variables['fw-footer-widget-bg-repeat']   = 'no-repeat'; // section's bg repeat
$the_journal_less_variables['fw-footer-widget-bg-position'] = 'top right'; // section's bg position
$the_journal_less_variables['fw-footer-widget-bg-size']     = 'auto'; // section's bg size

$the_journal_less_variables['fw-footer-widgets-padding-top'] = '100px';
$the_journal_less_variables['fw-footer-widgets-padding-bot'] = '100px';

// copyright with socials
$the_journal_less_variables['fw-footer-bar-padding-top'] = '20px';
$the_journal_less_variables['fw-footer-bar-padding-bot'] = $the_journal_less_variables['fw-footer-bar-padding-top'];

$the_journal_less_variables['fw-footer-social-size']       = '16px'; // footer social icons size
$the_journal_less_variables['fw-top-bar-font-size-social'] = '16px';

//== Sections padding
// padding top & bottom in all sections
$the_journal_less_variables['fw-section-padding'] = '100px';

$the_journal_less_variables['fw-section-padding-sm'] = (int) $the_journal_less_variables['fw-section-padding'] * 0.6 . 'px';
$the_journal_less_variables['fw-section-padding-md'] = $the_journal_less_variables['fw-section-padding']; // from default value
$the_journal_less_variables['fw-section-padding-lg'] = (int) $the_journal_less_variables['fw-section-padding'] * 1.4 . 'px';

// spacing between elements: sections, shortcodes and others.
$the_journal_less_variables['fw-content-density'] = '10';

//== Core Shortcodes
//
// Dividers
$the_journal_less_variables['fw-divider-space-sm'] = '30px'; // height of small divider
$the_journal_less_variables['fw-divider-space-md'] = '60px'; // height of medium divider
$the_journal_less_variables['fw-divider-space-lg'] = '100px'; // height of large divider


// rewrite the global variable : $the_journal_less_variables (for rewrite the value that are changed from dashboard)
the_journal_render_view( get_template_directory() . '/dynamic-css/fw-admin-styling.php', array(), false );
// after fw-admin-styling will be all variables that are dependent of dashboard options

// titles color
$the_journal_less_variables['fw-titles-color'] = $the_journal_less_variables['theme-color-5'];

// here come variables that are inherit for example $the_journal_less_variables['font-family-2'] = $the_journal_less_variables['font-family-base'];


