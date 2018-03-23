<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SoftPoint
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'sp-the-post' ); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php if( is_sticky() ) : ?>
				<i class="sp-sticky-icon fas fa-thumbtack mr-2" title="<?php echo esc_attr__( 'Sticky Post', 'softpoint' ); ?>"></i>
			<?php endif; ?>
			<?php
				softpoint_post_categories();
				softpoint_posted_by();
				if( is_home() && get_theme_mod( 'blog_home_posted_on', 'no' ) === 'yes' ) {
					softpoint_posted_on();
				}
				elseif ( is_singular() && get_theme_mod( 'blog_single_posted_on', 'yes' ) === 'yes' ) {
					softpoint_posted_on();
				}
			?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<?php softpoint_post_thumbnail(); ?>

	<?php if( is_singular() || ( get_theme_mod( 'blog_home_full_post', 'no' ) === 'yes' ) ) : ?>
		<div class="entry-content">
			<?php
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'softpoint' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'softpoint' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	<?php else : ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
			<div class="text-center mt-4">
				<a href="<?php echo esc_url( get_permalink() ); ?>" class="btn btn-primary btn-sm"><?php esc_html_e( 'Continue Reading', 'softpoint' ); ?> <small class="fas fa-chevron-right ml-1"></small></a>
			</div>
		</div><!-- .entry-summary -->
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
