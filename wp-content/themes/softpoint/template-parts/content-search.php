<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SoftPoint
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'sp-the-post' ); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
				softpoint_post_categories();
				softpoint_posted_by();
				if( get_theme_mod( 'show_posted_on', 0 ) ) {
					softpoint_posted_on();
				}
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php softpoint_post_thumbnail(); ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

</article><!-- #post-<?php the_ID(); ?> -->
