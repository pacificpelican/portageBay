<?php
/**
 * Portage Bay functions and definitions
 *
 * @package Portage Bay
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'httpdjmcloud_danieljmckeown_com_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function httpdjmcloud_danieljmckeown_com_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Portage Bay, use a find and replace
	 * to change 'httpdjmcloud-danieljmckeown-com' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'httpdjmcloud-danieljmckeown-com', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'httpdjmcloud-danieljmckeown-com' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 *
	 * ELIMINATED DUE TO CONFLICT WITH MaterializeCSS
	 */


	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'httpdjmcloud_danieljmckeown_com_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // httpdjmcloud_danieljmckeown_com_setup
add_action( 'after_setup_theme', 'httpdjmcloud_danieljmckeown_com_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function httpdjmcloud_danieljmckeown_com_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Below Content Left Sidebar', 'httpdjmcloud-danieljmckeown-com' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Below Content Right Sidebar', 'httpdjmcloud-danieljmckeown-com' ),
		'id'            => 'sidebar-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Responsive Left Sidebar', 'httpdjmcloud-danieljmckeown-com' ),
		'id'            => 'sidebar-3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'httpdjmcloud_danieljmckeown_com_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function httpdjmcloud_danieljmckeown_com_scripts() {
	wp_enqueue_style( 'httpdjmcloud-danieljmckeown-com-style', get_stylesheet_uri() );

	wp_enqueue_script( 'httpdjmcloud-danieljmckeown-com-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'httpdjmcloud-danieljmckeown-com-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'httpdjmcloud_danieljmckeown_com_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


function theme_name_scripts() {

$themeloc = esc_url( get_template_directory_uri() );

$srcjqtoo = "$themeloc/js/jquery-1.11.1.min.js";

$srcmaterial = "$themeloc/js/materialize.min.js";

$src6init = "$themeloc/js/init.js";

wp_register_script( "portjqry", $srcjqtoo );

wp_register_script( "portmterial", $srcmaterial);

wp_register_script( "port6init", $src6init );



wp_enqueue_script( "portjqry" );

wp_enqueue_script( "portmterial" );

wp_enqueue_script( "port6init" );

								}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );


