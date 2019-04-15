<?php
/**
 * The default template for displaying post navigation
 */

//check if post pagination is enabled
$enable_post_navigation = defined( 'FW' ) ? fw_get_db_customizer_option( 'posts_settings/post_navigation', 'yes' ) : 'yes';
if ( $enable_post_navigation != 'yes' ) {
	return;
}
?>
<div class="fw-row">
	<div class="blog-post-navigation">
		<?php previous_post_link( '%link', '<div class="fw-itable"><div class="fw-icell"><i class="fa fa-angle-left"></i><span>' . esc_html__( 'Previous Story', 'the-journal' ) . '</span><strong>%title</strong></div></div>' ); ?>
		<?php next_post_link( '%link', '<div class="fw-itable"><div class="fw-icell"><i class="fa fa-angle-right"></i><span>' . esc_html__( 'Next Story', 'the-journal' ) . '</span><strong>%title</strong></div></div>' ); ?>
	</div>
</div>