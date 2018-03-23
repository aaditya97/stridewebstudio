<?php

Softpoint_Kirki::add_section( 'default_page', array(
    'title'          => esc_html__( 'Page Settings', 'softpoint' ),
    'panel'          => '',
    'priority'       => 23,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'description'    => esc_html__( 'Settings for pages other than frontpage & blog home page.', 'softpoint' )
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'default_page_layout',
	'label'    => esc_html__( 'Select Layout For Default Page Template:', 'softpoint' ),
	'section'  => 'default_page',
	'type'     => 'radio',
    'default'  => 'default',
    'choices'  => array(
        'default' => esc_attr__( 'Page content in Center. No sidebars.', 'softpoint' ),
        'one'     => esc_attr__( 'Right Sidebar', 'softpoint' ),
        'two'     => esc_attr__( 'Left Sidebar', 'softpoint' ),
        'three'   => esc_attr__( 'Use Full Width. No Sidebars.', 'softpoint' ),
    )
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'page_featured_img_position',
	'label'    => esc_html__( 'Select Position for Featured Image:', 'softpoint' ),
	'section'  => 'default_page',
	'type'     => 'radio',
    'default'  => 'default',
    'choices'  => array(
        'default' => esc_attr__( 'After page title', 'softpoint' ),
        'before'  => esc_attr__( 'Before page title', 'softpoint' ),
    )
) );
