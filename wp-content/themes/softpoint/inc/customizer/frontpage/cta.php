<?php

Softpoint_Kirki::add_section( 'frontpage_cta', array(
    'title'          => esc_html__( 'Frontpage: Call-to-action Section', 'softpoint' ),
    'panel'          => 'frontpage_panel',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'show_cta_section',
	'label'    => esc_html__( 'Show Call-to-action Section', 'softpoint' ),
	'section'  => 'frontpage_cta',
	'type'     => 'checkbox',
    'default'  => '1',
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'cta_text',
	'label'    => esc_html__( 'CTA Text', 'softpoint' ),
	'section'  => 'frontpage_cta',
	'type'     => 'text',
    'default'  => esc_html__( 'Did you like this website? It\'s built using SoftPoint.', 'softpoint' ),
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'cta_btn_text',
	'label'    => esc_html__( 'Button Text', 'softpoint' ),
	'section'  => 'frontpage_cta',
	'type'     => 'text',
    'default'  => esc_html__( 'Download Now', 'softpoint' ),
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'cta_btn_link',
	'label'    => esc_html__( 'Button Link', 'softpoint' ),
	'section'  => 'frontpage_cta',
	'type'     => 'text',
    'default'  => esc_url( 'https://downloads.wordpress.org/theme/softpoint.zip' ),
) );
