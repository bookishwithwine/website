<?php
/**
 * The template for displaying Archive pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header();
the_journal_header_image();//get header image
$sidebar_position = function_exists( 'fw_ext_sidebars_get_current_position' ) ? fw_ext_sidebars_get_current_position() : 'right';
$blog_type        = function_exists( 'fw_get_db_customizer_option' ) ? fw_get_db_customizer_option( 'posts_settings/blog_type/selected', 'blog-1' ) : 'blog-1';
?>
	<section class="fw-main-row <?php the_journal_get_content_class( 'main', $sidebar_position ); ?>" role="main"
			 itemprop="mainEntity" itemscope="itemscope" itemtype="http://schema.org/Blog">
		<div class="fw-container">
			<div class="fw-row">

				<?php the_journal_content_before(); ?>

				<div class="fw-content-area <?php the_journal_get_content_class( 'content', $sidebar_position ); ?>">
					<div class="fw-col-inner">
						<?php the_journal_content_top(); ?>

						<?php if ( function_exists( 'fw_ext_breadcrumbs' ) ) {
							fw_ext_breadcrumbs();
						} ?>
						<div class="postlist">
							<?php if ( have_posts() ) :
								$the_journal_blog_wrap = the_journal_get_blog_wrap( $blog_type, $sidebar_position );
								the_journal_content_while_before();

								$count = 0;
								// Start the Loop.
								while ( have_posts() ) : the_post();
									the_journal_entry_before();

									echo wp_kses( $the_journal_blog_wrap['start'], array( 'div' => array( 'class' => array() ) ) );
									$count ++;
									/*
									* Include the post format-specific template for the content. If you want to
									* use this in a child theme, then include a file called called content-___.php
									* (where ___ is the post format) and that will be used instead.
									*/
									get_template_part( 'templates/' . $blog_type . '/content', get_post_format() );
									echo wp_kses( $the_journal_blog_wrap['end'], array( 'div' => array( 'class' => array() ) ) );
									the_journal_entry_after();
								endwhile;

								the_journal_content_while_after();
							else : // If no content, include the "No posts found" template.
							{
								get_template_part( 'content', 'none' );
							}
							endif; ?>
						</div>
						<!-- /.postlist-->
						<?php the_posts_pagination(
							array(
								'mid_size'  => 2,
								'prev_text' => '<i class="fa fa-angle-left"></i><strong>' . esc_html__( 'Newer', 'the-journal' ) . '</strong>',
								'next_text' => '<strong>' . esc_html__( 'Older', 'the-journal' ) . '</strong><i class="fa fa-angle-right"></i>',
							)
						); ?>

						<?php the_journal_content_bottom(); ?>
					</div>
				</div>
				<!-- /.content-area-->

				<?php the_journal_content_after(); ?>

				<?php get_sidebar(); ?>
			</div>
			<!-- /.row-->
		</div>
		<!-- /.container-->
	</section>
<?php get_footer();