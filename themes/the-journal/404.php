<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
?>
<?php get_header(); ?>
<?php $sidebar_position = function_exists( 'fw_ext_sidebars_get_current_position' ) ? fw_ext_sidebars_get_current_position() : 'right'; ?>
	<div class="no-header-image"></div>
	<section
			class="fw-default-page fw-404-page fw-main-row <?php the_journal_get_content_class( 'main', $sidebar_position ); ?>">
		<div class="fw-container">
			<div class="fw-row">

				<?php the_journal_content_before(); ?>

				<div class="content-area <?php the_journal_get_content_class( 'content', $sidebar_position ); ?>">
					<?php the_journal_content_top(); ?>

					<h2 class="entry-title fw-title-404"><?php esc_html_e( '404 - Page Not Found', 'the-journal' ); ?></h2>

					<div class="page-content">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'the-journal' ); ?></p>
						<?php get_search_form(); ?>
					</div>
					<!-- .page-content -->

					<?php the_journal_content_bottom(); ?>
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
