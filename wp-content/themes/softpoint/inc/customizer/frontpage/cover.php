<?php

Softpoint_Kirki::add_section( 'frontpage_cover', array(
    'title'          => esc_html__( 'Frontpage: Cover Section', 'softpoint' ),
    'panel'          => 'frontpage_panel',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'show_cover_section',
	'label'    => esc_html__( 'Show Cover Section', 'softpoint' ),
	'section'  => 'frontpage_cover',
	'type'     => 'checkbox',
    'default'  => '1',
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'cover_layout',
	'label'    => esc_html__( 'Select Layout For The Section', 'softpoint' ),
	'section'  => 'frontpage_cover',
	'type'     => 'radio',
    'default'  => 'image',
    'choices'  => array(
        'image'  => esc_html__( 'Single background image.', 'softpoint' ),
        'slider' => esc_html__( 'Page/post slider', 'softpoint' )
    )
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'cover_title',
	'label'    => esc_html__( 'Cover Title', 'softpoint' ),
	'section'  => 'frontpage_cover',
	'type'     => 'text',
    'default'  => esc_html__( 'Perfect Business Theme', 'softpoint' ),
    'active_callback' => array(
        array(
            'setting'  		=> 'cover_layout',
            'operator' 		=> '==',
            'value'    		=> 'image',
        ),
    ),
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'cover_subtitle',
	'label'    => esc_html__( 'Cover Sub-Title', 'softpoint' ),
	'section'  => 'frontpage_cover',
	'type'     => 'text',
    'default'  => esc_html__( 'It is blazingly fast, extremely light-weight, search engine friendly and very easy to use.', 'softpoint' ),
    'active_callback' => array(
        array(
            'setting'  		=> 'cover_layout',
            'operator' 		=> '==',
            'value'    		=> 'image',
        ),
    )
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'cover_btn_text',
	'label'    => esc_html__( 'Button Text', 'softpoint' ),
	'section'  => 'frontpage_cover',
	'type'     => 'text',
    'default'  => esc_html__( 'Contact Us', 'softpoint' ),
    'active_callback' => array(
        array(
            'setting'  		=> 'cover_layout',
            'operator' 		=> '==',
            'value'    		=> 'image',
        ),
    )
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'cover_btn_link',
	'label'    => esc_html__( 'Button Link', 'softpoint' ),
	'section'  => 'frontpage_cover',
	'type'     => 'text',
    'default'  => '#',
    'active_callback' => array(
        array(
            'setting'  		=> 'cover_layout',
            'operator' 		=> '==',
            'value'    		=> 'image',
        ),
    )
) );



Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'type'        => 'custom',
	'settings'    => 'frontpage_cover_division_1',
	'section'     => 'frontpage_cover',
	'default'     => '<hr> <h3 class="part-title">'. esc_html__( 'Background', 'softpoint' ) .'</h3>',
    'active_callback' => array(
        array(
            'setting'  		=> 'cover_layout',
            'operator' 		=> '==',
            'value'    		=> 'image',
        ),
    )
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'frontpage_cover_bg_type',
	'label'    => esc_html__( 'Select background type:', 'softpoint' ),
	'section'  => 'frontpage_cover',
	'type'     => 'radio',
    'default'  => 'img',
    'choices'  => array(
        'img'   => esc_html__( 'Image Background', 'softpoint' ),
        'color' => esc_html__( 'Color Background', 'softpoint' ),
    ),
    'active_callback' => array(
        array(
            'setting'  		=> 'cover_layout',
            'operator' 		=> '==',
            'value'    		=> 'image',
        ),
    )
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'frontpage_cover_bg',
	'label'    => esc_html__( 'Cover Background Color', 'softpoint' ),
	'section'  => 'frontpage_cover',
	'type'     => 'color',
    'default'  => '#e9ecef',
    'output'   => array(
        array(
			'element'  => array( '.jumbotron.sp-cover' ),
			'property' => 'background-color',
		),
    ),
    'active_callback' => array(
        array(
            'setting'  => 'frontpage_cover_bg_type',
            'operator' => '==',
            'value'    => 'color',
        ),
        array(
            'setting'  		=> 'cover_layout',
            'operator' 		=> '==',
            'value'    		=> 'image',
        ),
    )
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'frontpage_cover_text_color',
	'label'    => esc_html__( 'Cover Text Color', 'softpoint' ),
	'section'  => 'frontpage_cover',
	'type'     => 'color',
    'default'  => '#212529',
    'output'   => array(
        array(
			'element'  => array( '.jumbotron.sp-cover' ),
			'property' => 'color',
		),
    ),
    'active_callback' => array(
        array(
            'setting'  => 'frontpage_cover_bg_type',
            'operator' => '==',
            'value'    => 'color',
        ),
        array(
            'setting'  		=> 'cover_layout',
            'operator' 		=> '==',
            'value'    		=> 'image',
        ),
    )
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'frontpage_cover_bg_img',
	'label'    => esc_html__( 'Cover Background Image', 'softpoint' ),
	'section'  => 'frontpage_cover',
	'type'     => 'background',
    'default'  => array(
		'background-color'      => '#343a40',
		'background-image'      => get_template_directory_uri() . '/assets/images/frontpage-cover-bg.jpeg',
		'background-repeat'     => 'repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	),
    'output'   => array(
        array(
			'element'  => array( '.jumbotron.sp-cover' ),
			'property' => 'background',
		),
    ),
    'active_callback' => array(
        array(
            'setting'  => 'frontpage_cover_bg_type',
            'operator' => '==',
            'value'    => 'img',
        ),
        array(
            'setting'  		=> 'cover_layout',
            'operator' 		=> '==',
            'value'    		=> 'image',
        ),
    )
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'frontpage_cover_img_over_color',
	'label'    => esc_html__( 'Image Overlay Color', 'softpoint' ),
	'section'  => 'frontpage_cover',
	'type'     => 'color',
    'default'  => 'rgba(50, 50, 50, 0.7)',
    'output'   => array(
        array(
			'element'  => array( '.sp-cover-overlay' ),
			'property' => 'background-color',
		),
    ),
    'choices'  => array(
        'alpha' => true,
    ),
    'active_callback' => array(
        array(
            'setting'  => 'frontpage_cover_bg_type',
            'operator' => '==',
            'value'    => 'img',
        ),
        array(
            'setting'  		=> 'cover_layout',
            'operator' 		=> '==',
            'value'    		=> 'image',
        ),
    )
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'frontpage_cover_img_text_color',
	'label'    => esc_html__( 'Cover Text Color', 'softpoint' ),
	'section'  => 'frontpage_cover',
	'type'     => 'color',
    'default'  => '#fff',
    'output'   => array(
        array(
			'element'  => array( '.jumbotron.sp-cover' ),
			'property' => 'color',
		),
    ),
    'active_callback' => array(
        array(
            'setting'  => 'frontpage_cover_bg_type',
            'operator' => '==',
            'value'    => 'img',
        ),
        array(
            'setting'  		=> 'cover_layout',
            'operator' 		=> '==',
            'value'    		=> 'image',
        ),
    )
) );



Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'type'        => 'custom',
	'settings'    => 'frontpage_cover_division_2',
	'section'     => 'frontpage_cover',
	'default'     => '<hr> <h3 class="part-title">'. esc_html__( 'Slides', 'softpoint' ) .'</h3>',
    'active_callback' => array(
        array(
            'setting'  		=> 'cover_layout',
            'operator' 		=> '==',
            'value'    		=> 'slider',
        ),
    )
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'type'        => 'custom',
	'settings'    => 'frontpage_cover_info_2',
	'section'     => 'frontpage_cover',
	'default'     => '<p class="part-info">'. esc_html__( 'Select pages to display the content in this slider. You can add featured image, page title & excerpt on the page. It will be displayed as the background image, slide title & slide description respectively in the slider.', 'softpoint') .'</p>',
    'active_callback' => array(
        array(
            'setting'  		=> 'cover_layout',
            'operator' 		=> '==',
            'value'    		=> 'slider',
        ),
    )
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'first_slide',
	'label'    => esc_html__( 'Select First Slide', 'softpoint' ),
	'section'  => 'frontpage_cover',
	'type'     => 'dropdown-pages',
    'active_callback' => array(
        array(
            'setting'  		=> 'cover_layout',
            'operator' 		=> '==',
            'value'    		=> 'slider',
        ),
    )
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'second_slide',
	'label'    => esc_html__( 'Select Second Slide', 'softpoint' ),
	'section'  => 'frontpage_cover',
	'type'     => 'dropdown-pages',
    'active_callback' => array(
        array(
            'setting'  		=> 'cover_layout',
            'operator' 		=> '==',
            'value'    		=> 'slider',
        ),
    )
) );

Softpoint_Kirki::add_field( 'softpoint_theme', array(
	'settings' => 'third_slide',
	'label'    => esc_html__( 'Select Third Slide', 'softpoint' ),
	'section'  => 'frontpage_cover',
	'type'     => 'dropdown-pages',
    'active_callback' => array(
        array(
            'setting'  		=> 'cover_layout',
            'operator' 		=> '==',
            'value'    		=> 'slider',
        ),
    )
) );
