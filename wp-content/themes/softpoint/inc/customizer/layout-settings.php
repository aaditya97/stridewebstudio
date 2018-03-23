<?php

Softpoint_Kirki::add_panel( 'layout_panel', array(
    'priority'    => 21,
    'title'       => esc_html__( 'Layout Settings', 'softpoint' ),
) );

include( get_template_directory() . '/inc/customizer/layout/site.php');
include( get_template_directory() . '/inc/customizer/layout/header.php');
include( get_template_directory() . '/inc/customizer/layout/footer.php');
