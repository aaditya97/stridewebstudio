<?php

Softpoint_Kirki::add_section( 'layout_footer', array(
    'title'          => esc_html__( 'Footer Layout', 'softpoint' ),
    'panel'          => 'layout_panel',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );


Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'footer_layout',
	'label'    => esc_html__( 'Select Layout For Footer:', 'softpoint' ),
	'section'  => 'layout_footer',
	'type'     => 'radio',
    'default'  => 'default',
    'choices'  => array(
        'default' => esc_html__( 'Center aligned footer.', 'softpoint' ),
        'two'     => esc_html__( 'Left / Right aligned footer.', 'softpoint' ),
    )
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'show_goto_top',
	'label'    => esc_html__( 'Show "Go to Top" button', 'softpoint' ),
	'section'  => 'layout_footer',
	'type'     => 'checkbox',
    'default'  => '1',
    'tooltip'  => esc_html__( 'This button is displayed at bottom right corner when user scrolls the page more than 500 pixels.', 'softpoint' )
) );
