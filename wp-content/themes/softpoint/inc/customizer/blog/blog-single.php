<?php

Softpoint_Kirki::add_section( 'blog_single', array(
    'title'          => esc_html__( 'Blog: Single Post', 'softpoint' ),
    'panel'          => 'blog_panel',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'blog_single_layout',
	'label'    => esc_html__( 'Select Layout For Blog Single Post:', 'softpoint' ),
	'section'  => 'blog_single',
	'type'     => 'radio',
    'default'  => 'default',
    'choices'  => array(
        'default' => esc_attr__( 'Post in Center. No sidebars.', 'softpoint' ),
        'one'     => esc_attr__( 'Right Sidebar', 'softpoint' ),
        'two'     => esc_attr__( 'Left Sidebar', 'softpoint' ),
        'three'   => esc_attr__( 'Use Full Width. No Sidebars.', 'softpoint' ),
    )
) );


Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'blog_single_posted_on',
	'label'    => esc_html__( 'Show Date On Single Post:', 'softpoint' ),
	'section'  => 'blog_single',
	'type'     => 'radio',
    'default'  => 'yes',
    'choices'  => array(
        'no'  => esc_html__( 'No. Do not show the date.', 'softpoint' ),
        'yes' => esc_html__( 'Yes. Show date of the post.', 'softpoint' ),
    )
) );
