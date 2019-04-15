<?php
/**
 * Template Name: Visual Builder Template
 */

get_header();

while ( have_posts() ) :
	the_post();
	the_content();
endwhile;

the_journal_display_posts_sections();

get_footer();