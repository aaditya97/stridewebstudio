<?php

Softpoint_Kirki::add_section( 'frontpage_portfolio', array(
    'title'           => esc_html__( 'Frontpage: Portfolio Section', 'softpoint' ),
    'panel'           => 'frontpage_panel',
    'capability'      => 'edit_theme_options',
    'theme_supports'  => '',
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings'        => 'show_portfolio_section',
	'label'           => esc_html__( 'Show Portfolio Section', 'softpoint' ),
	'section'         => 'frontpage_portfolio',
	'type'            => 'checkbox',
    'default'         => '1',
    'active_callback' => 'softpoint_is_portfolio_active',
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings'        => 'portfolio_title',
	'label'           => esc_html__( 'Section Title', 'softpoint' ),
	'section'         => 'frontpage_portfolio',
	'type'            => 'text',
    'active_callback' => 'softpoint_is_portfolio_active',
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings'        => 'portfolio_subtitle',
	'label'           => esc_html__( 'Section Sub-Title', 'softpoint' ),
	'section'         => 'frontpage_portfolio',
	'type'            => 'text',
    'active_callback' => 'softpoint_is_portfolio_active',
) );



Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'type'            => 'custom',
	'settings'        => 'frontpage_portfolio_division_1',
	'section'         => 'frontpage_portfolio',
	'default'         => '<hr> <h3 class="part-title">'. esc_html__( 'Content', 'softpoint') .'</h3>',
    'active_callback' => 'softpoint_is_portfolio_active',
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'type'            => 'custom',
	'settings'        => 'frontpage_portfolio_info_1',
	'section'         => 'frontpage_portfolio',
	'default'         => '<p class="part-info">'. esc_html__( 'Select items to display the content in this section. You can add excerpt in portfolio item to display description here.', 'softpoint') .'</p>',
    'active_callback' => 'softpoint_is_portfolio_active',
) );

if( class_exists( 'Kirki_Helper' ) && class_exists( 'Jetpack_Portfolio' ) ) {
    Softpoint_Kirki::add_field( 'softpoint_theme', array(
    	'settings'        => 'first_port_item',
    	'label'           => esc_html__( 'Select First Portfolio Item', 'softpoint' ),
    	'section'         => 'frontpage_portfolio',
    	'type'            => 'select',
        'default'         => '',
        'choices'         => Kirki_Helper::get_posts( array( 'posts_per_page' => 10, 'post_type' => 'jetpack-portfolio' ) ),
        'active_callback' => 'softpoint_is_portfolio_active',
    ) );

    Softpoint_Kirki::add_field( 'softpoint_theme', array(
    	'settings'        => 'second_port_item',
    	'label'           => esc_html__( 'Select Second Portfolio Item', 'softpoint' ),
    	'section'         => 'frontpage_portfolio',
    	'type'            => 'select',
        'default'         => '',
        'choices'         => Kirki_Helper::get_posts( array( 'posts_per_page' => 10, 'post_type' => 'jetpack-portfolio' ) ),
        'active_callback' => 'softpoint_is_portfolio_active',
    ) );

    Softpoint_Kirki::add_field( 'softpoint_theme', array(
    	'settings'        => 'third_port_item',
    	'label'           => esc_html__( 'Select Third Portfolio Item', 'softpoint' ),
    	'section'         => 'frontpage_portfolio',
    	'type'            => 'select',
        'default'         => '',
        'choices'         => Kirki_Helper::get_posts( array( 'posts_per_page' => 10, 'post_type' => 'jetpack-portfolio' ) ),
        'active_callback' => 'softpoint_is_portfolio_active',
    ) );
}


Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'type'            => 'custom',
	'settings'        => 'frontpage_portfolio_division_2',
	'section'         => 'frontpage_portfolio',
	'default'         => '<hr> <h3 class="part-title">'. esc_html__( 'Buttons', 'softpoint') .'</h3>',
    'active_callback' => 'softpoint_is_portfolio_active',
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings'        => 'show_portfolio_buttons',
	'label'           => esc_html__( 'Show Button Below The Description', 'softpoint' ),
	'section'         => 'frontpage_portfolio',
	'type'            => 'checkbox',
    'default'         => '1',
    'active_callback' => 'softpoint_is_portfolio_active',
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings'        => 'portfolio_button_text',
	'label'           => esc_html__( 'Button / Link Text', 'softpoint' ),
	'section'         => 'frontpage_portfolio',
	'type'            => 'text',
    'default'         => esc_html__( 'Read More', 'softpoint' ),
    'active_callback' => 'softpoint_is_portfolio_active',
) );


// Alert if portfolio inactive
Softpoint_Kirki::add_field( 'softpoint_theme', array(
    'type'            => 'custom',
    'settings'        => 'portfolio_inactive_alert',
    'section'         => 'frontpage_portfolio',
    'active_callback' => 'softpoint_is_portfolio_alert_active',
    'default'         => '<div class="notice notice-error">
                            <h4><em>' . esc_html__( 'Portfolio can be displayed only if following conditions are true:', 'softpoint') . '<em></h4>
                            <ol>
                                <li>' . esc_html__( 'You must have "Jetpack" plugin installed.', 'softpoint' ) . '</li>
                                <li>' . esc_html__( 'You must enable "Portfolio" module from Jetpack settings.', 'softpoint' ) . '</li>
                            </ol>
                        </div>',
) );
