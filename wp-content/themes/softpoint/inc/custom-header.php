<?php
/**
 * Implementation of the Custom Header feature
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package SoftPoint
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses softpoint_header_style()
 */
function softpoint_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'softpoint_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '495057',
		'width'                  => 1600,
		'height'                 => 80,
		'flex-height'            => true,
		'wp-head-callback'       => 'softpoint_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'softpoint_custom_header_setup' );

if ( ! function_exists( 'softpoint_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see softpoint_custom_header_setup().
	 */
	function softpoint_header_style() {

		if ( get_header_image() ) : ?>
			<style type="text/css">
				.site-header {
					background-image: url(<?php echo esc_url( get_header_image() ); ?>);
					background-size: cover;
					background-position: center center;
				}
			</style>
		<?php
		endif;

		$header_text_color = get_header_textcolor();

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">

			<?php if ( get_header_image() ) : ?>
				.site-header {
					background-image: <?php echo esc_url( get_header_image() ); ?>
				}
			<?php endif; ?>

			<?php
			// Has the text been hidden?
			if ( ! display_header_text() ) :
			?>
				.site-title {
					position: absolute;
					clip: rect(1px, 1px, 1px, 1px);
				}
			<?php
				// If the user has set a custom color for the text use that.
				else :
			?>
				.site-title a,
				.site-description,
				.site-header .site-title a {
					color: #<?php echo esc_attr( $header_text_color ); ?>;
				}
			<?php endif; ?>
		</style>
		<?php
	}
endif;
