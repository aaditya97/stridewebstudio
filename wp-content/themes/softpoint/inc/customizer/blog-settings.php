<?php

Softpoint_Kirki::add_panel( 'blog_panel', array(
    'priority'    => 31,
    'title'       => esc_html__( 'Blog Settings', 'softpoint' ),
) );

include( get_template_directory() . '/inc/customizer/blog/blog-home.php');
include( get_template_directory() . '/inc/customizer/blog/blog-single.php');
include( get_template_directory() . '/inc/customizer/blog/blog-archive.php');
