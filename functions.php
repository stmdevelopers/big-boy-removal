<?php
/**
 * Big Boy Removal functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Big_Boy_Removal
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'big_boy_removal_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function big_boy_removal_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Big Boy Removal, use a find and replace
		 * to change 'big-boy-removal' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'big-boy-removal', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary Menu', 'primary-menu' ),
				'menu-2' => __( 'Quick Links', 'quick-links' ),
				'menu-3' => __( 'Our Services', 'our-services' ),
			)
		);

		// Add classes to each menu-item anchors in our Top Menu
		function add_top_menu_atts( $atts, $item, $args ) {
			if ($args->menu_class == "nav-items text-sm font-semibold lg:flex-grow lg:flex") {
				$atts['class'] = 'block mt-6 lg:inline-block lg:mt-0 text-gray-800 hover:text-red-600 lg:mr-10 px-2 lg:px-0 nav-link';
				if ( in_array('current_page_item', $item->classes) ) {
					$atts['class'] = 'block mt-6 lg:inline-block lg:mt-0 text-gray-800 hover:text-red-600 lg:mr-10 px-2 lg:px-0 nav-link active';
				}
			}
			return $atts;
		}
		add_filter('nav_menu_link_attributes', 'add_top_menu_atts', 10, 3);

		// Add classes to each menu-item anchors in our Footer Menu Quick Links
		function add_footer_menu_atts( $atts, $item, $args ) {
			if ($args->menu_class == "quick-links") {
				$atts['class'] = 'text-sm text-gray-700 hover:text-gray-900 font-semibold block pb-4';
			}
			return $atts;
		}
		add_filter('nav_menu_link_attributes', 'add_footer_menu_atts', 10, 3);

		// Add classes to each menu-item anchors in our Footer Services Menu
		function add_services_menu_atts( $atts, $item, $args ) {
			if ($args->menu_class == "services-links") {
				$atts['class'] = 'text-sm text-gray-700 hover:text-gray-900 font-semibold block pb-4';
			}
			return $atts;
		}
		add_filter('nav_menu_link_attributes', 'add_services_menu_atts', 10, 3);

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
				'big_boy_removal_custom_background_args',
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
add_action( 'after_setup_theme', 'big_boy_removal_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function big_boy_removal_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'big_boy_removal_content_width', 640 );
}
add_action( 'after_setup_theme', 'big_boy_removal_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function big_boy_removal_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'big-boy-removal' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'big-boy-removal' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'big_boy_removal_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function big_boy_removal_scripts() {
	// Google Fonts
	wp_enqueue_style("google-font-open-sans", "https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap", array(), _S_VERSION, "all");
	wp_enqueue_style("google-font-passion-one", "https://fonts.googleapis.com/css2?family=Passion+One:wght@400;700&display=swap", array(), _S_VERSION, "all");

	// Stylesheets
	wp_enqueue_style( 'big-boy-removal-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'big-boy-removal-style', 'rtl', 'replace' );

	wp_enqueue_style("fontawesome", get_template_directory_uri() . "/css/fontawesome.min.css", array(), _S_VERSION, "all");
  wp_enqueue_style("animatecss", "https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css", array(), _S_VERSION, "all");
  wp_enqueue_style("aos", "https://unpkg.com/aos@2.3.1/dist/aos.css", array(), _S_VERSION, "all");
  wp_enqueue_style("main", get_template_directory_uri() . "/css/main.css", array(), _S_VERSION, "all");

	// Scripts
	wp_enqueue_script( 'big-boy-removal-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script("aos", "https://unpkg.com/aos@2.3.1/dist/aos.js", array(), _S_VERSION, true );
  wp_enqueue_script("main", get_template_directory_uri() . "/js/main.js", array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'big_boy_removal_scripts' );

// Custom Excerpt Length Function
function custom_excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt) >= $limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }       
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

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

