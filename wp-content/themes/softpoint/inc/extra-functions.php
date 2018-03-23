<?php

/**
* Get header markup
*/
function softpoint_get_header() {
	if( get_theme_mod( 'header_layout' ) == 'two' ) :
		get_template_part( 'template-parts/header-layouts/layout-2' );
	elseif( get_theme_mod( 'header_layout' ) == 'three' ) :
		get_template_part( 'template-parts/header-layouts/layout-3' );
	else :
		get_template_part( 'template-parts/header-layouts/layout-1' );
	endif;
}
add_action( 'softpoint_header', 'softpoint_get_header' );


/**
* Get footer markup
*/
function softpoint_get_footer() {
	get_template_part( 'template-parts/others/footer-markup' );
}
add_action( 'softpoint_footer', 'softpoint_get_footer' );


/**
* Add Body Class
*/
function softpoint_add_body_class( $classes ) {
	if ( get_theme_mod( 'boxed_site' ) ) {
        $classes[] = 'sp-boxed-site';
    }
	else {
		$classes[] = 'sp-wide-site';
	}
	if ( get_theme_mod( 'show_loading_on_frontpage', '1' ) && is_front_page() ) {
		$classes[] = 'sp-loading-now';
	}
	if ( get_theme_mod( 'show_loading_on_all', '0' ) ) {
		$classes[] = 'sp-loading-now';
	}
	if ( !get_theme_mod( 'sticky_navbar', '1' ) ) {
		$classes[] = 'sp-no-sticky-nav';
	}
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

    return $classes;
}
add_filter( 'body_class', 'softpoint_add_body_class' );


/**
* Check if it is boxed site
*/
function softpoint_is_boxed_site() {
	if ( get_theme_mod( 'boxed_site' ) ) {
        return true;
    }
	else {
		return false;
	}
}


/**
* Check if it is wide site
*/
function softpoint_is_wide_site() {
	if ( ! get_theme_mod( 'boxed_site' ) ) {
        return true;
    }
	else {
		return false;
	}
}


/**
* Return exerpt for frontpage
*/
function softpoint_get_short_excerpt( $length = 40, $post_obj = null ) {
	global $post;
	if ( is_null( $post_obj ) ) {
		$post_obj = $post;
	}
	$length = absint( $length );
	if ( $length < 1 ) {
		$length = 40;
	}
	$source_content = $post_obj->post_content;
	if ( ! empty( $post_obj->post_excerpt ) ) {
		$source_content = $post_obj->post_excerpt;
	}
	$source_content = preg_replace( '`\[[^\]]*\]`', '', $source_content );
	$trimmed_content = wp_trim_words( $source_content, $length, '...' );
	return $trimmed_content;
}


/**
* Is portfolio section active
*/
function softpoint_is_portfolio_active() {
	if( class_exists( 'Kirki_Helper' ) && class_exists( 'Jetpack_Portfolio' ) ) {
		return true;
	}
	else {
		return false;
	}
}


/**
* Is portfolio ALERT active
*/
function softpoint_is_portfolio_alert_active() {
	return !softpoint_is_portfolio_active();
}


/**
* Is frontpage settings alert active for customizer alert
*/
function softpoint_is_frontpage_settings_alert_active() {
	if ( get_option( 'show_on_front' ) != 'page' ) {
		return true;
	}
	else {
		$current_frontpage = get_option( 'page_on_front' );
		$current_frontpage_template = get_page_template_slug( $current_frontpage );
		if( $current_frontpage_template != 'page-templates/front-page.php' ) {
			return true;
		}
		else {
			return false;
		}
	}
}


/**
* Is frontpage settings panel active in customizer
*/
function softpoint_is_frontpage_settings_panel_active() {
	return !softpoint_is_frontpage_settings_alert_active();
}



/**
* Greet new users & guide them to help page
*/
function softpoint_admin_notice(){
	if ( is_admin() ) {
		softpoint_greet_user();
	}
}
$sp_intro_notice_dismissed = get_option( 'softpoint-intro-dismissed' );
if( empty( $sp_intro_notice_dismissed ) ) {
	add_action('admin_notices', 'softpoint_admin_notice');
}

function softpoint_greet_user() {
	$help_url = esc_url( admin_url( 'themes.php?page=about-softpoint' ) );
	echo '<div class="notice softpoint-intro-notice notice-success is-dismissible">';
	echo wp_kses_post( __( '<p>Welcome! Thank you for choosing SoftPoint. We are always here to help you. Go to \'Appearance > SoftPoint Help\' page to get any type of help.</p>', 'softpoint' ) );
	echo "<p><a href='" . esc_url( admin_url( 'themes.php?page=about-softpoint' ) ) . "' class='button button-primary'>";
	esc_html_e( 'Get started with SoftPoint', 'softpoint' );
	echo '</a></p></div>';
}


// Enqueue dismiss script
function softpoint_admin_scripts() {
	wp_enqueue_script( 'softpoint-admin', get_template_directory_uri() . '/assets/js/softpoint-admin.js' );
}
$sp_intro_notice_dismissed = get_option( 'softpoint-intro-dismissed' );
if( empty( $sp_intro_notice_dismissed ) ) {
	add_action( 'admin_enqueue_scripts' , 'softpoint_admin_scripts' );
}


// Update option if notice dismissed
add_action( 'wp_ajax_softpoint-intro-dismissed', 'softpoint_dismiss_intro_notice' );
function softpoint_dismiss_intro_notice() {
	update_option( 'softpoint-intro-dismissed', 1 );
}


/**
* Add admin styles
*/
function softpoint_admin_style( $hook ) {
	if ( 'appearance_page_about-softpoint' != $hook ) {
		return;
	}
	wp_enqueue_style( 'softpoint-admin', get_template_directory_uri() . '/assets/css/softpoint-admin.css' );
	if ( is_rtl() ) {
		wp_enqueue_style( 'softpoint-admin-rtl', get_template_directory_uri() . '/assets/css/softpoint-admin-rtl.css' );
	}
}
add_action( 'admin_enqueue_scripts' , 'softpoint_admin_style' );



/**
* Add welcome page
*/
function softpoint_add_welcome_page() {
    $_name = esc_html__( 'SoftPoint Help' , 'softpoint' );

    $theme_page = add_theme_page(
        $_name,
        $_name,
        'edit_theme_options',
        'about-softpoint',
        'softpoint_welcome_page'
    );
}
add_action( 'admin_menu', 'softpoint_add_welcome_page', 1 );

function softpoint_welcome_page() {
	include_once( get_template_directory() . '/inc/views/about.php' );
}


/**
* Add classes to navigation buttons
*/
add_filter( 'next_posts_link_attributes', 'softpoint_posts_link_attributes' );
add_filter( 'previous_posts_link_attributes', 'softpoint_posts_link_attributes' );
add_filter( 'next_comments_link_attributes', 'softpoint_comments_link_attributes' );
add_filter( 'previous_comments_link_attributes', 'softpoint_comments_link_attributes' );

function softpoint_posts_link_attributes() {
    return 'class="btn btn-primary"';
}

function softpoint_comments_link_attributes() {
    return 'class="btn btn-outline-primary"';
}



/**
* Demo import
*/
function softpoint_ocdi_import_files() {
  return array(
    array(
      'import_file_name'             => 'Demo 1',
      'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo-import/softpoint-content.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demo-import/softpoint-widgets.wie',
      'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'demo-import/softpoint-customizer.dat',
      'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'screenshot.jpg',
	  'import_notice'                => esc_html__( 'Fresh WordPress installation is recommended for demo import. You might need to change some settings like Menu, Frontpage or customizer options if this is not fresh WordPress.', 'softpoint' ),
      'preview_url'                  => 'https://softpoint.themesease.com',
    ),
  );
}
add_filter( 'pt-ocdi/import_files', 'softpoint_ocdi_import_files' );

add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

// Set Front Page & Menu After Import
function softpoint_ocdi_after_import_setup( $selected_import ) {

	update_option( 'softpoint-demo-imported', 1 );

	$sp_menu_name = 'Main Menu - SoftPoint Demo';
	$sp_front_page_name = 'Homepage - SoftPoint Demo';
	$sp_blog_page_name = 'Blog - SoftPoint Demo';

	if( 'Demo 1' === $selected_import['import_file_name'] ) {
		$sp_menu_name = 'Main Menu - SoftPoint Demo';
		$sp_front_page_name = 'Homepage - SoftPoint Demo';
		$sp_blog_page_name = 'Blog - SoftPoint Demo';
	}

    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', $sp_menu_name, 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'menu-1' => $main_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( $sp_front_page_name );
    $blog_page_id  = get_page_by_title( $sp_blog_page_name );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

	if( defined( 'ELEMENTOR_VERSION' ) ) {
		update_option( 'elementor_disable_color_schemes', 'yes' );
	    update_option( 'elementor_disable_typography_schemes', 'yes' );
	}

}
add_action( 'pt-ocdi/after_import', 'softpoint_ocdi_after_import_setup' );

// Change One Click Demo Import Name
function softpoint_ocdi_plugin_page_setup( $default_settings ) {
	$default_settings['parent_slug'] = 'themes.php';
	$default_settings['page_title']  = esc_html__( 'Import SoftPoint Demos' , 'softpoint' );
	$default_settings['menu_title']  = esc_html__( 'Import SoftPoint Demos' , 'softpoint' );
	$default_settings['capability']  = 'import';
	$default_settings['menu_slug']   = 'pt-one-click-demo-import';

	return $default_settings;
}
add_filter( 'pt-ocdi/plugin_page_setup', 'softpoint_ocdi_plugin_page_setup' );
