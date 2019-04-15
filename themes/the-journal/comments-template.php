<?php
if ( ! function_exists( 'the_journal_comment' ) ) :
	/**
	 * Template for comments and pingbacks.
	 *
	 * To override this walker in a child theme without modifying the comments template
	 * simply create your own the_journal_comment(), and that function will be used instead.
	 *
	 * Used as a callback by wp_list_comments() for displaying the comments.
	 *
	 */

	function the_journal_comment( $comment, $args, $depth ) {

		switch ( $comment->comment_type ) :
			case 'pingback' :
			case 'trackback' :
				?>
				<li class="post pingback">

				<article id="li-comment-<?php comment_ID() ?>" class="comment-body">
					<p><?php esc_html_e( 'Pingback:', 'the-journal' ); ?><?php comment_author_link(); ?><?php edit_comment_link( esc_html__( 'Edit', 'the-journal' ), '<span class="edit-link">', '</span>' ); ?></p>
					<div class="comment-entry">
						<?php comment_text(); ?>
						<?php comment_reply_link( array_merge( $args, array(
							'depth'     => $depth,
							'max_depth' => $args['max_depth']
						) ) ); ?>
					</div>
				</article>

				<?php
				break;
			default : ?>
			<li <?php comment_class( 'comment' ); ?> id="li-comment-<?php comment_ID(); ?>">
				<a name="comment-<?php comment_ID() ?>"></a>
				<article id="li-comment-<?php comment_ID() ?>" class="comment-body">
					<div class="comment-avatar">
						<div class="avatar"><?php echo get_avatar( $comment->comment_author_email, 63 ); ?></div>
					</div>

					<div class="comment-aside">
						<div class="comment-meta">
							<span class="comment-author">
								<a href="#" class="link-author"><?php comment_author_link(); ?></a>
							</span>
							<span class="comment-date"><?php comment_date(); ?></span>
							<?php comment_reply_link( array_merge( $args, array(
								'depth'     => $depth,
								'max_depth' => $args['max_depth']
							) ) ); ?>
						</div>
						<div class="comment-content">
							<p><?php echo do_shortcode( $comment->comment_content ); ?></p>
						</div>
						<?php if ( $comment->comment_approved == '0' ) : ?>
							<em class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'the-journal' ); ?></em>
							<br/>
						<?php endif; ?>
					</div><!-- /.comment-aside -->

					<div class="clearfix"></div>
					<div id="comment-<?php comment_ID(); ?>"></div>
					<div class="clearfix"></div>
				</article><!-- /.comment-container -->
				<?php
				break;
		endswitch;
	}
endif; // ends check for the_journal_comment()