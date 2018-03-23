<?php

if( class_exists( 'Kirki' ) ) {
    function softpoint_rename_display_site_title( $wp_customize ) {
        $wp_customize->get_control( 'display_header_text' )->label = esc_html__( 'Display Site Title', 'softpoint' );
    }
    add_action( 'customize_register', 'softpoint_rename_display_site_title' );
}

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'show_site_description',
	'label'    => esc_html__( 'Display Site Tagline', 'softpoint' ),
	'section'  => 'title_tagline',
	'type'     => 'checkbox',
    'default'  => '0',
    'priority' => 50
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'logo_height',
	'label'    => esc_html__( 'Logo Height (in px)', 'softpoint' ),
	'section'  => 'title_tagline',
	'type'     => 'number',
	'priority' => 8,
	'default'  => 50,
    'tooltip'  => esc_html__( 'Minimum height 25px & maximum height 150px. Width will be adjusted automatically.', 'softpoint' ),
    'choices'  => array(
		'min'  => 25,
		'max'  => 150,
		'step' => 1,
	),
    'output'   => array(
        array(
			'element'  => '.custom-logo',
			'property' => 'height',
			'units'    => 'px',
		),
        array(
			'element'       => '.custom-logo',
			'property'      => 'width',
            'value_pattern' => 'auto',
		)
    )
) );
