<?php
/**
 * The default template for displaying post details
 */

$post_options = the_journal_single_post_options( $post->ID );//get post options
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class( "post post-details" ); ?> itemscope="itemscope"
			 itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
		<?php the_journal_entry_top(); ?>

		<div class="fw-col-inner">
			<header class="entry-header">
				<?php the_journal_post_meta( $post->ID, 'post' ); ?>
				<h4 class="entry-title"><?php echo get_the_title(); ?></h4>
			</header>

			<div class="fw-post-image fw-block-image-parent">
				<a href="<?php echo esc_url( $post_options['image']['original_image_url'] ); ?>" data-rel="prettyPhoto"
				   class="post-thumbnail fw-block-image-child <?php echo esc_attr( $post_options['ratio_class'] ); ?>">
					<?php echo do_shortcode( $post_options['image']['img'] ); ?>
				</a>
			</div>

			<div class="entry-content clearfix" itemprop="text">
				<?php the_journal_entry_content_before(); ?>

				<?php the_content();
				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'the-journal' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
				) ); ?>

				<?php the_journal_entry_content_after(); ?>
			</div>

			<?php $tags = get_the_tags();
			if ( ! empty( $tags ) ) : ?>
				<footer class="entry-meta">
					<div class="fw-tag-links"><?php the_tags( '', ' ', '' ); ?></div>
				</footer>
			<?php endif; ?>
		</div>

		<?php the_journal_entry_bottom(); ?>
	</article>
<?php get_template_part( 'content', 'author' ); ?>
<?php get_template_part( 'post', 'navigation' ); ?>
<?php get_template_part( 'related', 'articles' );