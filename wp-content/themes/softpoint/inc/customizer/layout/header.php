<?php

Softpoint_Kirki::add_section( 'layout_header', array(
    'title'          => esc_html__( 'Header Layout', 'softpoint' ),
    'panel'          => 'layout_panel',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );


Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'header_layout',
	'label'    => esc_html__( 'Select Layout For Header:', 'softpoint' ),
	'section'  => 'layout_header',
	'type'     => 'radio',
    'default'  => 'default',
    'choices'  => array(
        'default' => esc_html__( 'Logo and menu in one row', 'softpoint' ),
        'two'     => esc_html__( 'Logo and a widget in 1 row. Menu on 2nd.', 'softpoint' ),
        'three'   => esc_html__( 'Center aligned logo and menu in 2 rows.', 'softpoint' ),
    )
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings'        => 'header_width',
	'label'           => esc_html__( 'Select Width For Header Content:', 'softpoint' ),
	'section'         => 'layout_header',
	'type'            => 'radio',
    'default'         => 'default',
    'tooltip'         => esc_html__( 'Depending on your screen size, you might need to hide controls to see effects of this change. Click on the "Hide Controls" button at bottom left corner. ', 'softpoint' ),
    'active_callback' => 'softpoint_is_wide_site',
    'choices'         => array(
        'default' => esc_html__( 'Default', 'softpoint' ),
        'wide'    => esc_html__( 'Wide', 'softpoint' ),
    )
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings'    => 'show_topbar',
	'label'       => esc_html__( 'Show Topbar Above Header', 'softpoint' ),
	'section'     => 'layout_header',
	'type'        => 'checkbox',
    'default'     => '0',
    'description' => esc_html__( 'You can add content to topbar using widgets.', 'softpoint' ),
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings'    => 'sticky_navbar',
	'label'       => esc_html__( 'Stick Navigation Bar To Top While Scrolling.', 'softpoint' ),
	'section'     => 'layout_header',
	'type'        => 'checkbox',
    'default'     => '1',
) );
