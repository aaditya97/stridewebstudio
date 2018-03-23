<?php

Softpoint_Kirki::add_section( 'colors_general', array(
    'title'          => esc_html__( 'General Colors', 'softpoint' ),
    'panel'          => 'colors_panel',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );


if( class_exists( 'Kirki' ) ) {
    function softpoint_move_bg_color( $wp_customize ) {
        $wp_customize->get_control( 'background_color' )->section = 'colors_general';
    }
    add_action( 'customize_register', 'softpoint_move_bg_color' );
}

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'boxed_bg_color',
	'label'    => esc_html__( 'Background Color In Box', 'softpoint' ),
	'section'  => 'colors_general',
	'type'     => 'color',
    'default'  => '#f6f6f6',
    'output'   => array(
        array(
			'element'  => array( '.sp-boxed-site .sp-container.sp-content-bg' ),
			'property' => 'background-color',
		),
    ),
    'active_callback' => array(
        array(
            'setting'  		=> 'boxed_site',
            'operator' 		=> '!=',
            'value'    		=> '0',
        ),
    ),
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'primary_color',
	'label'    => esc_html__( 'Links & Buttons Color (Primary Color)', 'softpoint' ),
	'section'  => 'colors_general',
	'type'     => 'color',
    'default'  => '#007bff',
    'output'   => array(
        array(
			'element'  => array( 'a', '.btn-outline-primary', '.content-area .sp-the-post .entry-header .entry-title a:hover', '.btn-link' ),
			'property' => 'color',
		),
        array(
			'element'  => array( '.btn-primary', 'input[type="button"]', 'input[type="reset"]', 'input[type="submit"]', '.sp-services-section .sp-single-service .sp-service-icon' ),
			'property' => 'background-color',
		),
        array(
			'element'  => array( '.btn-primary', 'input[type="button"]', 'input[type="reset"]', 'input[type="submit"]', '.btn-outline-primary' ),
			'property' => 'border-color',
		),
        array(
			'element'  => array( '.btn-outline-primary:hover' ),
			'property' => 'background-color',
		),
        array(
			'element'  => array( '.btn-outline-primary:hover' ),
			'property' => 'border-color',
		),
        array(
            'element'  => array( '.sp-post-slider .swiper-button-prev', '.sp-post-slider .swiper-button-next' ),
            'property' => 'color',
        ),
        array(
            'element'       => array( '.btn-primary:focus', '.btn-outline-primary:focus' ),
            'property'      => 'box-shadow',
            'value_pattern' => '0 0 0 0.1rem $',
        ),
    ),
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'primary_hover_color',
	'label'    => esc_html__( 'Links & Buttons Hover Color', 'softpoint' ),
	'section'  => 'colors_general',
	'type'     => 'color',
    'default'  => '#0069d9',
    'output'   => array(
        array(
			'element'  => array( 'a:hover', 'a:active', 'a:focus', '.btn-link:hover' ),
			'property' => 'color',
		),
        array(
			'element'  => array( '.btn-primary:hover', '.btn-primary:active', '.btn-primary:focus', 'input[type="button"]:hover', 'input[type="button"]:active', 'input[type="button"]:focus', 'input[type="submit"]:hover', 'input[type="submit"]:active', 'input[type="submit"]:focus', '.btn-primary:not(:disabled):not(.disabled):active' ),
			'property' => 'background-color',
		),
        array(
			'element'  => array( '.btn-primary:hover', '.btn-primary:active', '.btn-primary:focus', 'input[type="button"]:hover', 'input[type="button"]:active', 'input[type="button"]:focus', 'input[type="submit"]:hover', 'input[type="submit"]:active', 'input[type="submit"]:focus', '.btn-primary:not(:disabled):not(.disabled):active' ),
			'property' => 'border-color',
		),
    ),
) );
