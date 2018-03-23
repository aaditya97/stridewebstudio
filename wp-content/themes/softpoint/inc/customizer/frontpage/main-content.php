<?php

Softpoint_Kirki::add_section( 'frontpage_main_content', array(
    'title'          => esc_html__( 'Frontpage: Main Content Section', 'softpoint' ),
    'panel'          => 'frontpage_panel',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'show_main_content_section',
	'label'    => esc_html__( 'Show Main Content Section', 'softpoint' ),
	'section'  => 'frontpage_main_content',
	'type'     => 'checkbox',
    'default'  => '0',
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'main_content_title',
	'label'    => esc_html__( 'Section Title', 'softpoint' ),
	'section'  => 'frontpage_main_content',
	'type'     => 'text',
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'main_content_subtitle',
	'label'    => esc_html__( 'Section Sub-Title', 'softpoint' ),
	'section'  => 'frontpage_main_content',
	'type'     => 'text',
) );
