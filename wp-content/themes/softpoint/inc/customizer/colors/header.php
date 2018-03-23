<?php

Softpoint_Kirki::add_section( 'colors_header', array(
    'title'          => esc_html__( 'Header Colors', 'softpoint' ),
    'panel'          => 'colors_panel',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );


Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'header_bg_color',
	'label'    => esc_html__( 'Header Background Color', 'softpoint' ),
	'section'  => 'colors_header',
	'type'     => 'color',
    'default'  => '#fff',
    'priority' => 0,
    'output'   => array(
        array(
			'element'  => array( '.site-header' ),
			'property' => 'background-color',
		),
    )
) );

if( class_exists( 'Kirki' ) ) {
    function softpoint_move_colors( $wp_customize ) {
        $wp_customize->get_control( 'header_textcolor' )->section = 'colors_header';
        $wp_customize->get_control( 'header_textcolor' )->label = esc_html__( 'Header Site Title Color', 'softpoint' );
    }
    add_action( 'customize_register', 'softpoint_move_colors' );
}

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'header_title_hover_color',
	'label'    => esc_html__( 'Header Site Title Hover Color', 'softpoint' ),
	'section'  => 'colors_header',
	'type'     => 'color',
    'default'  => '#007bff',
    'output' => array(
        array(
			'element'  => array( '.site-header .site-title a:hover' ),
			'property' => 'color',
		),
    )
) );


Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'type'        => 'custom',
	'settings'    => 'colors_header_division_1',
	'section'     => 'colors_header',
	'default'     => '<hr> <h3 class="part-title">'. esc_html__( 'Navigation Colors', 'softpoint') .'</h3>',
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'header_nav_bg_color',
	'label'    => esc_html__( 'Navbar Background Color', 'softpoint' ),
	'section'  => 'colors_header',
	'type'     => 'color',
    'default'  => '#fff',
    'output'   => array(
        array(
			'element'  => array( '.nav-bg', '.main-navigation ul ul', '.slicknav_nav' ),
			'property' => 'background-color',
		),
    ),
    'active_callback' => array(
        array(
            'setting'  		=> 'header_layout',
            'operator' 		=> '!=',
            'value'    		=> 'default',
        ),
    ),
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'header_link_color',
	'label'    => esc_html__( 'Header Nav Link Color', 'softpoint' ),
	'section'  => 'colors_header',
	'type'     => 'color',
    'default'  => '#212529',
    'output' => array(
        array(
			'element'  => array( '.main-navigation a', '.slicknav_nav a' ),
			'property' => 'color',
		),
    )
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'header_link_active_color',
	'label'    => esc_html__( 'Header Nav Link Active Color', 'softpoint' ),
	'section'  => 'colors_header',
	'type'     => 'color',
    'default'  => '#007bff',
    'tooltip'  => esc_html__( 'Color of the link of current active page.', 'softpoint' ),
    'output' => array(
        array(
			'element'  => array( '.current-menu-item > a' ),
			'property' => 'color',
		),
    )
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'header_link_hover_color',
	'label'    => esc_html__( 'Header Nav Link Hover Color', 'softpoint' ),
	'section'  => 'colors_header',
	'type'     => 'color',
    'default'  => '#007bff',
    'output' => array(
        array(
			'element'  => array( '.main-navigation a:hover' ),
			'property' => 'color',
		),
    )
) );


Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'type'        => 'custom',
	'settings'    => 'colors_header_division_2',
	'section'     => 'colors_header',
	'default'     => '<hr> <h3 class="part-title">'. esc_html__( 'Topbar Colors', 'softpoint') .'</h3>',
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'type'        => 'custom',
	'settings'    => 'colors_header_info_2',
	'section'     => 'colors_header',
	'default'     => '<p class="part-info">'. esc_html__( '"Show Topbar Above Header" setting should be true for following settings. You can change that from "Customize > Layout Settings > Header Layout".', 'softpoint') .'</p>',
) );


Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'header_top_bg_color',
	'label'    => esc_html__( 'Topbar Background Color', 'softpoint' ),
	'section'  => 'colors_header',
	'type'     => 'color',
    'default'  => '#343a40',
    'output'   => array(
        array(
			'element'  => array( '.sp-topbar-bg' ),
			'property' => 'background-color',
		),
    ),
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'header_top_text_color',
	'label'    => esc_html__( 'Topbar Text Color', 'softpoint' ),
	'section'  => 'colors_header',
	'type'     => 'color',
    'default'  => 'rgba(255,255,255,0.5)',
    'choices'  => array(
        'alpha' => true
    ),
    'output'   => array(
        array(
			'element'  => array( '.sp-topbar-bg', '.sp-topbar-bg .widget_search input[type="text"]', '.sp-topbar-bg .widget_search input[type="text"]::-webkit-input-placeholder', '.sp-topbar-bg .widget_search input[type="text"]::-moz-placeholder', '.sp-topbar-bg .widget_search input[type="text"]:-ms-input-placeholder', '.sp-topbar-bg .widget_search input[type="text"]:-moz-placeholder' ),
			'property' => 'color',
		),
    ),
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'header_top_link_color',
	'label'    => esc_html__( 'Topbar Link Color', 'softpoint' ),
	'section'  => 'colors_header',
	'type'     => 'color',
    'default'  => '#fff',
    'choices'  => array(
        'alpha' => true
    ),
    'output'   => array(
        array(
			'element'  => array( '.sp-topbar-bg a' ),
			'property' => 'color',
		),
    ),
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'header_top_link_hover_color',
	'label'    => esc_html__( 'Topbar Link Hover Color', 'softpoint' ),
	'section'  => 'colors_header',
	'type'     => 'color',
    'default'  => '#fff',
    'choices'  => array(
        'alpha' => true
    ),
    'output'   => array(
        array(
			'element'  => array( '.sp-topbar-bg a:hover' ),
			'property' => 'color',
		),
    ),
) );
