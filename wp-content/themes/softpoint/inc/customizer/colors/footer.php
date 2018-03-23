<?php

Softpoint_Kirki::add_section( 'colors_footer', array(
    'title'          => esc_html__( 'Footer Colors', 'softpoint' ),
    'panel'          => 'colors_panel',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );


Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'footer_bg_color',
	'label'    => esc_html__( 'Select Color For Footer Background:', 'softpoint' ),
	'section'  => 'colors_footer',
	'type'     => 'color',
    'default'  => '#343a40',
    'output' => array(
        array(
			'element'  => array( '.sp-footer-bg' ),
			'property' => 'background-color',
		),
    )
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'footer_text_color',
	'label'    => esc_html__( 'Select Color For Footer Text:', 'softpoint' ),
	'section'  => 'colors_footer',
	'type'     => 'color',
    'default'  => 'rgba(255,255,255,0.5)',
    'choices'  => array(
        'alpha' => true,
    ),
    'output' => array(
        array(
			'element'  => array( '.sp-footer-bg' ),
			'property' => 'color',
		),
    )
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'footer_link_color',
	'label'    => esc_html__( 'Select Color For Footer Link:', 'softpoint' ),
	'section'  => 'colors_footer',
	'type'     => 'color',
    'default'  => 'rgba(255,255,255,1)',
    'choices'  => array(
        'alpha' => true,
    ),
    'output' => array(
        array(
			'element'  => array( '.sp-footer-bg a' ),
			'property' => 'color',
		),
    )
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'footer_link_hover_color',
	'label'    => esc_html__( 'Select Color For Footer Link Hover:', 'softpoint' ),
	'section'  => 'colors_footer',
	'type'     => 'color',
    'default'  => 'rgba(255,255,255,1)',
    'choices'  => array(
        'alpha' => true,
    ),
    'output' => array(
        array(
			'element'  => array( '.sp-footer-bg a:hover' ),
			'property' => 'color',
		),
    )
) );
