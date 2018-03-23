<?php

Softpoint_Kirki::add_section( 'frontpage_services', array(
    'title'          => esc_html__( 'Frontpage: Services Section', 'softpoint' ),
    'panel'          => 'frontpage_panel',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'show_services_section',
	'label'    => esc_html__( 'Show Services Section', 'softpoint' ),
	'section'  => 'frontpage_services',
	'type'     => 'checkbox',
    'default'  => '1',
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'services_title',
	'label'    => esc_html__( 'Section Title', 'softpoint' ),
	'section'  => 'frontpage_services',
	'type'     => 'text',
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'services_subtitle',
	'label'    => esc_html__( 'Section Sub-Title', 'softpoint' ),
	'section'  => 'frontpage_services',
	'type'     => 'text',
) );



Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'type'        => 'custom',
	'settings'    => 'frontpage_services_division_1',
	'section'     => 'frontpage_services',
	'default'     => '<hr> <h3 class="part-title">'. esc_html__( 'Content', 'softpoint') .'</h3>',
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'type'        => 'custom',
	'settings'    => 'frontpage_services_info_1',
	'section'     => 'frontpage_services',
	'default'     => '<p class="part-info">'. esc_html__( 'Select pages to display the content in this section. You can add excerpt in page to display description here.', 'softpoint') .'</p>',
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'first_service',
	'label'    => esc_html__( 'Select First Service', 'softpoint' ),
	'section'  => 'frontpage_services',
	'type'     => 'dropdown-pages',
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'second_service',
	'label'    => esc_html__( 'Select Second Service', 'softpoint' ),
	'section'  => 'frontpage_services',
	'type'     => 'dropdown-pages',
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'third_service',
	'label'    => esc_html__( 'Select Third Service', 'softpoint' ),
	'section'  => 'frontpage_services',
	'type'     => 'dropdown-pages',
) );



Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'type'        => 'custom',
	'settings'    => 'frontpage_services_division_2',
	'section'     => 'frontpage_services',
	'default'     => '<hr> <h3 class="part-title">'. esc_html__( 'Icons', 'softpoint') .'</h3>',
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'first_service_icon',
	'label'    => esc_html__( 'Icon name for first service', 'softpoint' ),
	'section'  => 'frontpage_services',
	'type'     => 'fontawesome',
    'default'  => 'heart'
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'second_service_icon',
	'label'    => esc_html__( 'Icon name for second service', 'softpoint' ),
	'section'  => 'frontpage_services',
	'type'     => 'fontawesome',
    'default'  => 'code'
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'third_service_icon',
	'label'    => esc_html__( 'Icon name for third service', 'softpoint' ),
	'section'  => 'frontpage_services',
	'type'     => 'fontawesome',
    'default'  => 'cloud-upload'
) );



Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'type'        => 'custom',
	'settings'    => 'frontpage_services_division_3',
	'section'     => 'frontpage_services',
	'default'     => '<hr> <h3 class="part-title">'. esc_html__( 'Buttons', 'softpoint') .'</h3>',
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'show_services_buttons',
	'label'    => esc_html__( 'Show Button Below Each Service', 'softpoint' ),
	'section'  => 'frontpage_services',
	'type'     => 'checkbox',
    'default'  => '1',
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'show_services_button_as_link',
	'label'    => esc_html__( 'Show Button As A Link', 'softpoint' ),
	'section'  => 'frontpage_services',
	'type'     => 'checkbox',
    'default'  => '0',
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'services_button_text',
	'label'    => esc_html__( 'Button / Link Text', 'softpoint' ),
	'section'  => 'frontpage_services',
	'type'     => 'text',
    'default'  => esc_html__( 'Read More', 'softpoint' ),
) );
