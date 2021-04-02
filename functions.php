<?php
/**
 * ice_cream functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ice_cream
 */

require_once('inc/register_component.php');
require_once('inc/fields.php');

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'ice_cream_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ice_cream_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ice_cream, use a find and replace
		 * to change 'ice_cream' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ice_cream', get_template_directory() . '/languages' );

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
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.

		add_theme_support( 'menus' );
		register_nav_menus(
			array(
				'headerMenu' => esc_html__( 'Меню в шапке', 'ice_cream' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'ice_cream_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'ice_cream_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ice_cream_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ice_cream_content_width', 640 );
}
add_action( 'after_setup_theme', 'ice_cream_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ice_cream_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ice_cream' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ice_cream' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ice_cream_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ice_cream_scripts() {
//	wp_enqueue_style( 'ice_cream-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'ice_cream-style', 'rtl', 'replace' );

	wp_enqueue_script( 'ice_cream-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_style( 'ice_cream-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap', array(), null, null );
	wp_enqueue_style( 'ice_cream-icons', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css', array(), null, null );
	wp_enqueue_style( 'ice_cream-owlcarousel', get_template_directory_uri() . '/assets/lib/owlcarousel/assets/owl.carousel.css', array(), null, null);
	wp_enqueue_style( 'ice_cream-lightbox', get_template_directory_uri() . '/assets/lib/lightbox/css/lightbox.min.css', array(), null, null);
	wp_enqueue_style( 'ice_cream-styles', get_template_directory_uri() . '/assets/css/style.css', array(), null, null);

    wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js');
	wp_enqueue_script( 'ice_cream-stackpath', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'ice_cream-easing', get_template_directory_uri() . '/assets/lib/easing/easing.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'ice_cream-waypoints', get_template_directory_uri() . '/assets/lib/waypoints/waypoints.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'ice_cream-owlcarouselJS', get_template_directory_uri() . '/assets/lib/owlcarousel/owl.carousel.js', array('jquery'), null, true );
	wp_enqueue_script( 'ice_cream-isotope', get_template_directory_uri() . '/assets/lib/isotope/isotope.pkgd.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'ice_cream-lightboxJS', get_template_directory_uri() . '/assets/lib/lightbox/js/lightbox.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'ice_cream-jqBootstrapValidation', get_template_directory_uri() . '/assets/mail/jqBootstrapValidation.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'ice_cream-contact', get_template_directory_uri() . '/assets/mail/contact.js', array('jquery'), null, true );
	wp_enqueue_script( 'ice_cream-mainJS', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'ice_cream_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

