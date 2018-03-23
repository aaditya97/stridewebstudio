<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SoftPoint
 */

get_header(); ?>

<?php
	$blog_archive_layout = false;
	$show_right_sidebar  = false;
	$slow_left_sidebar   = false;
	$full_width_posts    = false;

	$blog_archive_layout = get_theme_mod( 'blog_archive_layout', 'one' );
	if ( $blog_archive_layout === 'one' ) {
		$show_right_sidebar = true;
	}
	if ( $blog_archive_layout === 'two' ) {
		$slow_left_sidebar = true;
	}
	if ( $blog_archive_layout === 'three' ) {
		$full_width_posts = true;
	}
?>

<?php
if( $slow_left_sidebar ) {
	get_sidebar();
}
?>

	<div id="primary" class="content-area <?php if ( $full_width_posts ) : echo 'col-md-12'; else : echo 'col-md-9'; endif; ?>">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header text-center mb-4">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description text-muted">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
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
if ( $show_right_sidebar ) {
	get_sidebar();
}
get_footer();
