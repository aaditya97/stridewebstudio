<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package SoftPoint
 */

get_header(); ?>

<?php
	$blog_single_layout   = false;
	$show_right_sidebar = false;
	$slow_left_sidebar  = false;
	$full_width_posts   = false;

	$blog_single_layout = get_theme_mod( 'blog_single_layout', 'default' );
	if ( $blog_single_layout === 'one' ) {
		$show_right_sidebar = true;
	}
	if ( $blog_single_layout === 'two' ) {
		$slow_left_sidebar = true;
	}
	if ( $blog_single_layout === 'three' ) {
		$full_width_posts = true;
	}
?>

<?php
if( $slow_left_sidebar ) {
	get_sidebar();
}
?>

	<div id="primary" class="content-area sp-single-post <?php if( $full_width_posts ) : echo 'col-md-12'; else : echo 'col-md-9'; endif; ?>">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(array(
	            'prev_text' => esc_html__( '&laquo; Previous Post', 'softpoint' ),
	            'next_text' => esc_html__( 'Next Post &raquo;', 'softpoint' ),
	        ) );

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
	get_sidebar();
}
get_footer();
