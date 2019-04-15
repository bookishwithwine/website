<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Craft_Blog_Pro
 * @since 1.0.0
 */

$postformat = get_post_format();
$post_description = get_theme_mod( 'craft_blog_post_description_options', 'excerpt' );
$post_content_type 	= apply_filters( 'craft_blog_post_content_type', $post_description );

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>
	
	<?php craft_blog_post_format_media( $postformat ); ?>

	<div class="box">
		<?php 

			the_title( '<h3 class="title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			
			if ( 'post' === get_post_type() ) : ?>

				<div class="entry-meta info">
					<?php
						craft_blog_posted_on();
						craft_blog_posted_by();
						craft_blog_comments();
					?>
				</div><!-- .entry-meta -->
		<?php endif; ?>

		<div class="entry-content">
			<?php
				if ( 'excerpt' === $post_content_type ) {

					the_excerpt();

				} elseif ( 'content' === $post_content_type ) {

					the_content( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'craft-blog' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );
				}
			?>
		</div>
		
	</div>

</article><!-- #post-<?php the_ID(); ?> -->