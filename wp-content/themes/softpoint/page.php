<?php
/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SoftPoint
 */

get_header(); ?>

<?php
	$default_page_layout = false;
	$show_right_sidebar  = false;
	$slow_left_sidebar   = false;
	$full_width_posts    = false;

	$default_page_layout = get_theme_mod( 'default_page_layout', 'default' );
	if ( $default_page_layout === 'one' ) {
		$show_right_sidebar = true;
	}
	if ( $default_page_layout === 'two' ) {
		$slow_left_sidebar = true;
	}
	if ( $default_page_layout === 'three' ) {
		$full_width_posts = true;
	}
?>

<?php
if( $slow_left_sidebar ) {
	get_sidebar( 'page' );
}
?>

	<div id="primary" class="content-area sp-single-page <?php if( $full_width_posts ) : echo 'col-md-12'; else : echo 'col-md-9'; endif; ?>">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
if( $show_right_sidebar ) {
	get_sidebar( 'page' );
}
get_footer();
