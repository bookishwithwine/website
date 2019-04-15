<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 */

get_header();
the_journal_header_image(); // get header image
$sidebar_position = function_exists( 'fw_ext_sidebars_get_current_position' ) ? fw_ext_sidebars_get_current_position() : '';
?>
	<section class="fw-default-page fw-main-row <?php the_journal_get_content_class( 'main', $sidebar_position ); ?>"
			 role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
		<div class="fw-container">
			<div class="fw-row">
				<?php the_journal_content_before(); ?>

				<div class="fw-content-area <?php the_journal_get_content_class( 'content', $sidebar_position ); ?>">
					<div class="fw-inner">
						<?php the_journal_content_top(); ?>

						<?php if ( function_exists( 'fw_ext_breadcrumbs' ) ) {
							fw_ext_breadcrumbs();//display breadcrumbs
						} ?>

						<?php the_journal_content_while_before(); ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php the_journal_entry_before(); ?>
							<?php if ( get_the_title() != '' || get_the_content() != '' ) : ?>
								<article id="page-<?php the_ID(); ?>" class="post post-details" itemscope="itemscope"
										 itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
									<?php the_journal_entry_top(); ?>
									<div class="inner">
										<?php if ( get_the_title() != '' ) : ?>
											<header class="entry-header">
												<h4 class="entry-title"><?php echo get_the_title(); ?></h4>
											</header>
										<?php endif; ?>

										<?php if ( get_the_content() != '' ) : ?>
											<div class="entry-content" itemprop="text">
												<?php the_journal_entry_content_before(); ?>
												<?php
												the_content();
												wp_link_pages( array(
													'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'the-journal' ) . '</span>',
													'after'       => '</div>',
													'link_before' => '<span>',
													'link_after'  => '</span>',
												) );
												?>
												<?php the_journal_entry_content_after(); ?>
											</div><!-- /.entry-content -->
										<?php else: ?>
											<?php the_content(); ?>
										<?php endif; ?>
									</div>
									<!-- /.inner -->
									<?php the_journal_entry_bottom(); ?>
								</article><!-- /#page-## -->
							<?php else: ?>
								<?php the_content(); ?>
							<?php endif; ?>
							<?php the_journal_entry_after(); ?>
							<?php if ( comments_open() ) {
								comments_template(); //display comments
							} ?>
						<?php endwhile; ?>
						<?php the_journal_content_while_after(); ?>

						<?php the_journal_content_bottom(); ?>

						<?php the_journal_display_posts_sections(); ?>

					</div>
					<!-- /.inner -->
				</div>
				<!-- /.content-area -->
				<?php the_journal_content_after(); ?>

				<?php if ( ! empty( $sidebar_position ) ) {
					get_sidebar();
				} ?>
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>
<?php get_footer();