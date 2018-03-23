<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package SoftPoint
 */

get_header(); ?>

	<div id="primary" class="content-area col-md-9">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'softpoint' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'softpoint' ); ?></p>

					<div class="mb-4">
						<?php get_search_form(); ?>
					</div>
					<?php
						the_widget( 'WP_Widget_Recent_Posts', array(), array(
							'before_title' => '<h4 class="widget-title">',
							'after_title'  => '</h4>',
						) );
					?>

					<div class="widget widget_categories">
						<h4 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'softpoint' ); ?></h4>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->

					<?php
						the_widget( 'WP_Widget_Archives', 'dropdown=1', array(
							'before_title' => '<h4 class="widget-title">',
							'after_title'  => '</h4>',
						) );

						the_widget( 'WP_Widget_Tag_Cloud', array(), array(
							'before_title' => '<h4 class="widget-title">',
							'after_title'  => '</h4>',
						) );
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
