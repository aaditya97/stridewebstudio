<?php

// Register widget area.
function softpoint_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'softpoint' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here for sidebar.', 'softpoint' ),
		'before_widget' => '<section id="%1$s" class="widget softpoint-panel %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Header Right', 'softpoint' ),
		'id'            => 'sidebar-header-right',
		'description'   => esc_html__( 'You can use this area for search bar, an advertisement, social icons or contact information.', 'softpoint' ),
		'before_widget' => '<section id="%1$s" class="softpoint-header-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Topbar Left', 'softpoint' ),
		'id'            => 'sidebar-topbar-left',
		'description'   => esc_html__( 'You can use this area to disply contact information or menu.', 'softpoint' ),
		'before_widget' => '<section id="%1$s" class="softpoint-topbar-left %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Topbar Right', 'softpoint' ),
		'id'            => 'sidebar-topbar-right',
		'description'   => esc_html__( 'You can use this area to disply contact information or menu.', 'softpoint' ),
		'before_widget' => '<section id="%1$s" class="softpoint-topbar-right %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Page Sidebar', 'softpoint' ),
		'id'            => 'sidebar-page',
		'description'   => esc_html__( 'Add widgets here for page sidebar.', 'softpoint' ),
		'before_widget' => '<section id="%1$s" class="widget softpoint-panel %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Shop Sidebar', 'softpoint' ),
		'id'            => 'sidebar-shop',
		'description'   => esc_html__( 'Add widgets here for WooCommerce shop sidebar.', 'softpoint' ),
		'before_widget' => '<section id="%1$s" class="widget softpoint-panel %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );
}
add_action( 'widgets_init', 'softpoint_widgets_init' );
