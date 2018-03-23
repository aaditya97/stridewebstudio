<?php

Softpoint_Kirki::add_panel( 'colors_panel', array(
    'priority'    => 32,
    'title'       => esc_html__( 'Color Settings', 'softpoint' ),
) );

include( get_template_directory() . '/inc/customizer/colors/general.php');
include( get_template_directory() . '/inc/customizer/colors/header.php');
include( get_template_directory() . '/inc/customizer/colors/footer.php');
