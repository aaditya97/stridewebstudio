<?php
/**
 * The template for displaying comments
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SoftPoint
 */

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area sp-comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<div class="comments-header">
			<h4 class="comments-title">
				<?php
				$comment_count = get_comments_number();
				if ( '1' === $comment_count ) {
					printf(
						/* translators: 1: title. */
						esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'softpoint' ),
						'<span>' . get_the_title() . '</span>'
					);
				} else {
					printf( // WPCS: XSS OK.
						/* translators: 1: comment count number, 2: title. */
						esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $comment_count, 'comments title', 'softpoint' ) ),
						number_format_i18n( $comment_count ),
						'<span>' . get_the_title() . '</span>'
					);
				}
				?>
			</h4><!-- .comments-title -->
		</div>
		<!-- /.comments-header -->

		<ul class="comment-list">
			<?php
				wp_list_comments( array(
					'style'          => 'ul',
					'short_ping'     => true,
					'avatar_size'	 => 60,
				) );

				the_comments_navigation();
			?>
		</ul><!-- .comment-list -->

		<?php

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'softpoint' ); ?></p>
		<?php
		endif;

	endif; // Check for have_comments().

	comment_form();
	?>

</div><!-- #comments -->
