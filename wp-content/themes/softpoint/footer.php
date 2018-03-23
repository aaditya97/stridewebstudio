<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SoftPoint
 */

?>

					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->
			</div><!-- #content -->

			<?php softpoint_footer_before(); ?>
			<?php softpoint_footer(); ?>
			<?php softpoint_footer_after(); ?>

		</div><!-- #page -->
	</div><!-- .container -->

<?php get_template_part( 'template-parts/others/loading' ); ?>

<?php softpoint_body_bottom(); ?>
<?php wp_footer(); ?>

</body>
</html>
