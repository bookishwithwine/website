<?php
//check if post related articles are enabled
$enable_related_articles = defined( 'FW' ) ? fw_get_db_customizer_option( 'posts_settings/related_articles', '' ) : 'no';

//if related articles are not enabled, return
if ( $enable_related_articles != 'yes' ) {
	return;
}

$related_articles = the_journal_related_articles(); //get post related articles
if ( ! empty( $related_articles ) ) : ?>
	<div class="fw-row">
		<div class="fw-wrap-related-article fw-related-article-type-1">
			<h3 class="fw-title-related"><strong><?php esc_html_e( 'Related Articles:', 'the-journal' ); ?></strong>
			</h3>
			<ul class="fw-related-article">
				<?php
				$args = array(
					'img_attr' => array( 'class' => 'attachment-post-thumbnail' ),
					'size'     => 'the-journal-category-square-800',
					'return'   => true,
					'ratio'    => 'fw-ratio-1'
				);
				?>
				<?php foreach ( $related_articles as $item ) :
					$image = the_journal_image( get_post_thumbnail_id( $item->ID ), $args );
					$ratio_class = ( $image['ratio'] != 'fw-noratio' ) ? 'fw-ratio-container ' . $image['ratio'] : $image['ratio'];
					if ( ! $image ) {
						$ratio_class = 'fw-ratio-container fw-ratio-1';
					}
					//get related post excerpt
					$item->post_excerpt != '' ? $excerpt = $item->post_excerpt : $excerpt = wp_trim_words( $item->post_content, 50 );
					?>
					<li>
						<div class="fw-related-article-image fw-block-image-parent">
							<a href="<?php echo esc_url( get_permalink( $item->ID ) ); ?>"
							   class="fw-block-image-child <?php echo esc_attr( $ratio_class ); ?>">
								<?php if ( $image ) :
									echo do_shortcode( $image['img'] );
								else :?>
									<img src="<?php echo esc_url( get_template_directory_uri() . '/images/no-photo-max-size.jpg' ); ?>"
										 alt"" />
								<?php endif; ?>
								<div class="fw-block-image-overlay">
									<div class="fw-itable">
										<div class="fw-icell">
											<div class="fw-overlay-title"><?php echo do_shortcode( $item->post_title ); ?></div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</li>
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			</ul>
		</div>
	</div>
<?php endif;