<?php
/**
 * The Sidebar containing the main widget area
 */

the_journal_sidebars_before();

$sidebar_position = null;
// if Unyson sidebars extension is enabled
if ( function_exists( 'fw_ext_sidebars_get_current_position' ) ) :
	// get sidebar position
	$sidebar_position = fw_ext_sidebars_get_current_position();
	if ( $sidebar_position !== 'full' && $sidebar_position !== null ) : ?>
		<div class="col-md-4 col-sm-12 fw-sidebar" role="complementary" itemscope="itemscope"
			 itemtype="http://schema.org/WPSideBar">
			<div class="fw-col-inner">
				<?php the_journal_sidebar_top(); ?>
				<?php if ( $sidebar_position === 'left' || $sidebar_position === 'right' ) : ?>
					<?php echo fw_ext_sidebars_show( 'blue' ); ?>
				<?php endif; ?>
				<?php the_journal_sidebar_bottom(); ?>
			</div>
			<!-- /.fw-col-inner -->
		</div><!-- /.fw-sidebar -->
	<?php endif; ?>
	<!--show default sidebar-->
<?php else : ?>
	<div class="col-md-4 col-sm-12 fw-sidebar" role="complementary" itemscope="itemscope"
		 itemtype="http://schema.org/WPSideBar">
		<div class="fw-col-inner">
			<?php the_journal_sidebar_top(); ?>
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
			<?php the_journal_sidebar_bottom(); ?>
		</div>
		<!-- /.fw-col-inner -->
	</div><!-- /.fw-sidebar -->
<?php endif; ?>

<?php the_journal_sidebars_after();