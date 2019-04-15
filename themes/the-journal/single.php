<?php
/**
 * The Template for displaying all single posts
 */

get_header();
the_journal_header_image();//get header image
//get sidebar position
$sidebar_position = function_exists( 'fw_ext_sidebars_get_current_position' ) ? fw_ext_sidebars_get_current_position() : 'right';
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
						<?php
						the_journal_content_while_before();

						while ( have_posts() ) : the_post();
							the_journal_entry_before();

							get_template_part( 'content', 'single' );

							the_journal_entry_after();

							//show comments template
							if ( comments_open() ) {
								comments_template();
							}
							break; endwhile;
						the_journal_content_while_after();
						?>

						<?php the_journal_content_bottom(); ?>
					</div>
					<!-- /.inner -->
				</div>
				<!-- /.content-area -->

				<?php the_journal_content_after(); ?>

				<?php get_sidebar(); ?>
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>
<?php get_footer();