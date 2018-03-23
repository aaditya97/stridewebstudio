<?php
/**
 * The main template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SoftPoint
 */

get_header(); ?>

<?php
	$blog_home_layout   = false;
	$show_right_sidebar = false;
	$slow_left_sidebar  = false;
	$full_width_posts   = false;

	$blog_home_layout = get_theme_mod( 'blog_home_layout', 'default' );
	if ( $blog_home_layout === 'one' ) {
		$show_right_sidebar = true;
	}
	if ( $blog_home_layout === 'two' ) {
		$slow_left_sidebar = true;
	}
	if ( $blog_home_layout === 'three' ) {
		$full_width_posts = true;
	}
?>

<?php
if( $slow_left_sidebar ) {
	get_sidebar();
}
?>

	<div id="primary" class="content-area <?php if( $full_width_posts ) : echo 'col-md-12'; else : echo 'col-md-9'; endif; ?>">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			if( get_theme_mod( 'show_post_slider_on_home', '1' ) && is_home() && !is_paged() ) {
				get_template_part( 'template-parts/others/post-slider' );
			}

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
if( $show_right_sidebar ) {
	get_sidebar();
}
get_footer();
