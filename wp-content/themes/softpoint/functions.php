<?php
/**
 * SoftPoint functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SoftPoint
 */

if ( ! function_exists( 'softpoint_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function softpoint_setup() {
		// Make theme available for translation.
		load_theme_textdomain( 'softpoint', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'softpoint' ),
		) );

		// Switch default core markup to output valid HTML5.
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Add excerpt support for pages.
		add_post_type_support( 'page', 'excerpt' );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'softpoint_custom_background_args', array(
			'default-color' => 'f6f6f6',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for core custom logo.
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		// Add theme support for jetpack social links
		add_theme_support( 'social-links', array(
		    'facebook', 'twitter', 'linkedin', 'google_plus', 'tumblr',
		) );
	}
endif;
add_action( 'after_setup_theme', 'softpoint_setup' );



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function softpoint_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'softpoint_content_width', 1000 );
}
add_action( 'after_setup_theme', 'softpoint_content_width', 0 );



/**
 * Enqueue scripts and styles.
 */
function softpoint_scripts() {
	wp_enqueue_style( 'softpoint-fonts', '//fonts.googleapis.com/css?family=Lato|Rubik:300,500' );
	wp_enqueue_style( 'font-awesome-5', get_template_directory_uri() . '/assets/css/fontawesome-all.css', array(), '5.0.6', 'all' );
	wp_enqueue_style( 'bootstrap-4', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), 'v4.0.0', 'all' );
	wp_enqueue_style( 'slicknavcss', get_template_directory_uri() . '/assets/css/slicknav.css', array(), 'v1.0.10', 'all' );
	wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/css/swiper.css', array(), '4.1.6', 'all' );
	wp_enqueue_style( 'softpoint-style', get_stylesheet_uri() );

	wp_enqueue_script( 'softpoint-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'softpoint-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.js', array('jquery'), 'v1.0.10', true );
	wp_enqueue_script( 'swiperjs', get_template_directory_uri() . '/assets/js/swiper.js', array('jquery'), '4.1.6', true );
	wp_enqueue_script( 'softpoint-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'softpoint_scripts' );



/**
 * Registers an editor stylesheet for the theme.
 */
function softpoint_add_editor_styles() {
	wp_enqueue_style( 'softpoint-admin-fonts', '//fonts.googleapis.com/css?family=Lato|Rubik:300,600' );
    add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'softpoint_add_editor_styles' );



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Include Kirki (Via TGMPA)
 */
require get_template_directory() . '/inc/tgmpa/init-tgmpa.php';
require get_template_directory() . '/inc/kirki/class-softpoint-kirki.php';

/**
 * Implement the Custom theme hooks
 */
require get_template_directory() . '/inc/theme-hooks.php';

/**
 * Add extra functions
 */
require get_template_directory() . '/inc/extra-functions.php';

/**
 * Register Sidebars
 */
require get_template_directory() . '/inc/register-sidebars.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/customizer/settings.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
