<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SoftPoint
 */

?>

<?php
	$page_featured_img_position = get_theme_mod( 'page_featured_img_position', 'default' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'sp-the-post sp-the-page' ); ?>>

	<?php if( $page_featured_img_position === 'before' ) : ?>
		<?php softpoint_post_thumbnail(); ?>
	<?php endif; ?>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php if( $page_featured_img_position === 'default' ) : ?>
		<?php softpoint_post_thumbnail(); ?>
	<?php endif; ?>

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'softpoint' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
