<?php

Softpoint_Kirki::add_section( 'layout_site', array(
    'title'          => esc_html__( 'Site Layout', 'softpoint' ),
    'panel'          => 'layout_panel',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );



Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings'    => 'boxed_site',
	'label'       => esc_html__( 'Boxed Layout', 'softpoint' ),
	'section'     => 'layout_site',
	'type'        => 'toggle',
	'default'     => '0',
    'tooltip'     => esc_html__( 'Select this option to display site within a box.', 'softpoint' ),
    'description' => esc_html__( 'Depending on your screen size, you might need to hide controls to see effects of this change. Click on the "Hide Controls" button at bottom left corner. ', 'softpoint' ),
) );


Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'container_width',
	'label'    => esc_html__( 'Container Width (in px)', 'softpoint' ),
	'section'  => 'layout_site',
	'type'     => 'slider',
    'tooltip'  => esc_html__( 'You can increase or decrease container\'s width using this slider.', 'softpoint' ),
    'default'  => 1240,
	'choices'  => array(
		'min'  => '1080',
		'max'  => '1400',
		'step' => '10',
	),
    'output' => array(
		array(
			'element'  => '.container',
			'property' => 'max-width',
			'units'    => 'px',
		),
        array(
			'element'  => '.elementor-section.elementor-section-boxed>.elementor-container',
			'property' => 'max-width',
			'units'    => 'px',
		),
	),
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings'    => 'show_loading_on_frontpage',
	'label'       => esc_html__( 'Show loading image on frontpage.', 'softpoint' ),
	'section'     => 'layout_site',
	'type'        => 'checkbox',
	'default'     => '1',
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings'    => 'show_loading_on_all',
	'label'       => esc_html__( 'Show loading image on all pages.', 'softpoint' ),
	'section'     => 'layout_site',
	'type'        => 'checkbox',
	'default'     => '0',
) );


if( class_exists( 'Kirki' ) ) {
    function softpoint_move_header_bg_image( $wp_customize ) {
        $wp_customize->get_section( 'background_image' )->panel = 'layout_panel';
        $wp_customize->get_section( 'header_image' )->panel = 'layout_panel';
    }
    add_action( 'customize_register', 'softpoint_move_header_bg_image' );
}
