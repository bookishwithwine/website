<?php
/**
 * The template for displaying a "No posts found" message
 */
?>
<div class="entry-content fw-content-none" itemprop="text">
	<h2 class="entry-title"><?php esc_html_e( 'Nothing Found', 'the-journal' ); ?></h2>
	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
		<?php /* translators: %1$s: publish first post */ ?>
		<p><?php printf( esc_html__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'the-journal' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
	<?php elseif ( is_search() ) : ?>
		<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'the-journal' ); ?></p>
		<div class="row">
			<div class="col-md-6">
				<?php get_search_form(); ?>
			</div>
		</div>
		<div class="clearfix"></div>
		<?php
	else : ?>
		<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'the-journal' ); ?></p>
		<div class="row">
			<div class="col-md-6">
				<?php get_search_form(); ?>
			</div>
		</div>
		<div class="clearfix"></div>
	<?php endif; ?>
</div>