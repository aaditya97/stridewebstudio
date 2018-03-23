<?php

Softpoint_Kirki::add_section( 'blog_archive', array(
    'title'          => esc_html__( 'Blog: Archive Pages', 'softpoint' ),
    'description'    => esc_html__( 'Settings for blog archive pages like category, author, date, tags etc.', 'softpoint' ),
    'panel'          => 'blog_panel',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'blog_archive_layout',
	'label'    => esc_html__( 'Select Layout For Blog Single Post:', 'softpoint' ),
	'section'  => 'blog_archive',
	'type'     => 'radio',
    'default'  => 'one',
    'choices'  => array(
        'default' => esc_attr__( 'Posts in Center. No sidebars.', 'softpoint' ),
        'one'     => esc_attr__( 'Right Sidebar', 'softpoint' ),
        'two'     => esc_attr__( 'Left Sidebar', 'softpoint' ),
        'three'   => esc_attr__( 'Use Full Width. No Sidebars.', 'softpoint' ),
    )
) );
