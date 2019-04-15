<?php the_journal_html_before(); ?><!doctype html>
<!--[if lt IE 8 ]>
<html <?php language_attributes(); ?> class="ie7"><![endif]-->
<!--[if IE 8 ]>
<html <?php language_attributes(); ?> class="ie8"><![endif]-->
<!--[if IE 9 ]>
<html <?php language_attributes(); ?> class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<?php the_journal_head_top(); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php the_journal_head_bottom(); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
<?php the_journal_body_top(); ?>
<div id="page" class="hfeed site">
	<?php the_journal_header_before(); ?>
	<?php get_template_part( 'templates/headers/header' ); //Display theme header ?>
	<?php the_journal_header_after(); ?>
	<div id="main" class="site-main">