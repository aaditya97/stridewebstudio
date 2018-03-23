<?php

Softpoint_Kirki::add_section( 'blog_home', array(
    'title'          => esc_html__( 'Blog: Homepage', 'softpoint' ),
    'panel'          => 'blog_panel',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'blog_home_layout',
	'label'    => esc_html__( 'Select Layout For Blog Homepage:', 'softpoint' ),
	'section'  => 'blog_home',
	'type'     => 'radio',
    'default'  => 'default',
    'choices'  => array(
        'default' => esc_attr__( 'Posts in Center. No sidebars.', 'softpoint' ),
        'one'     => esc_attr__( 'Right Sidebar', 'softpoint' ),
        'two'     => esc_attr__( 'Left Sidebar', 'softpoint' ),
        'three'   => esc_attr__( 'Use Full Width. No Sidebars.', 'softpoint' ),
    )
) );


Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'blog_home_full_post',
	'label'    => esc_html__( 'Show Full Post On Homepage:', 'softpoint' ),
	'section'  => 'blog_home',
	'type'     => 'radio',
    'default'  => 'no',
    'choices'  => array(
        'no'  => esc_html__( 'No. Show excerpt only.', 'softpoint' ),
        'yes' => esc_html__( 'Yes. Show full post.', 'softpoint' ),
    )
) );


Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'blog_home_posted_on',
	'label'    => esc_html__( 'Show Date Of Post On Homepage:', 'softpoint' ),
	'section'  => 'blog_home',
	'type'     => 'radio',
    'default'  => 'no',
    'choices'  => array(
        'no'  => esc_html__( 'No. Do not show the date.', 'softpoint' ),
        'yes' => esc_html__( 'Yes. Show date of the post.', 'softpoint' ),
    )
) );



Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'type'        => 'custom',
	'settings'    => 'blog_home_division_1',
	'section'     => 'blog_home',
	'default'     => '<hr> <h3 class="part-title">'. esc_html__( 'Featured Posts Slider', 'softpoint') .'</h3>',
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'show_post_slider_on_home',
	'label'    => esc_html__( 'Show Featured Posts Slider On Homepage', 'softpoint' ),
	'section'  => 'blog_home',
	'type'     => 'checkbox',
    'default'  => '1',
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'featured_count',
	'label'    => esc_html__( 'Number of Posts In Slider', 'softpoint' ),
	'section'  => 'blog_home',
	'type'     => 'number',
    'default'  => '5',
    'choices'  => array(
		'min'  => 1,
		'max'  => 10,
		'step' => 1,
	),
) );

if( class_exists( 'Kirki_Helper' ) ) {
    Softpoint_Kirki::add_field( 'softpoint_theme', array(
    	'settings' => 'featured_category',
    	'label'    => esc_html__( 'Select Featured Category:', 'softpoint' ),
    	'section'  => 'blog_home',
    	'type'     => 'select',
        'default'  => '',
        'choices'  => Kirki_Helper::get_terms( array('taxonomy' => 'category') ),
    ) );

    Softpoint_Kirki::add_field( 'softpoint_theme', array(
    	'settings'    => 'featured_ids',
    	'label'       => esc_html__( 'Select Posts:', 'softpoint' ),
        'description' => esc_html( 'If you select posts, "Select Featured Category" setting will be ignored.' ),
    	'section'     => 'blog_home',
    	'type'        => 'select',
        'multiple'    => 10,
        'choices'     => Kirki_Helper::get_posts( array( 'posts_per_page' => 10, 'post_type' => 'post' ) ),
    ) );
}
