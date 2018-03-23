<?php

Softpoint_Kirki::add_config( 'softpoint_theme', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

// Add settings
include( get_template_directory() . '/inc/customizer/upgrade.php' );
include( get_template_directory() . '/inc/customizer/site-identity-settings.php' );
include( get_template_directory() . '/inc/customizer/layout-settings.php' );
include( get_template_directory() . '/inc/customizer/front-page-settings.php' );
include( get_template_directory() . '/inc/customizer/default-page-settings.php' );
include( get_template_directory() . '/inc/customizer/blog-settings.php' );
include( get_template_directory() . '/inc/customizer/color-settings.php' );


/**
* Styling Customizer
*/
function softpoint_customizer_css()
{
	if( class_exists( 'Kirki' ) ) {
		wp_enqueue_style( 'softpoint-customizer-css', get_template_directory_uri() . '/inc/customizer/customizer.css' );
	}
}
add_action( 'customize_controls_print_styles', 'softpoint_customizer_css' );
