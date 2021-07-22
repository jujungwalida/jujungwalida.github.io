<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

// This theme requires WordPress 5.3 or later.
if ( version_compare( $GLOBALS['wp_version'], '5.3', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'nada_salama_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @return void
	 */
	function nada_salama_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Nada Salama, use a find and replace
		 * to change 'nadasalama' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'nadasalama', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary Menu', 'nadasalama' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Enqueue editor styles.
		$editor_stylesheet_path = './assets/admin/css/editor.css';
        add_editor_style( $editor_stylesheet_path );

		/*
		* Adds starter content to highlight the theme on fresh sites.
		* This is done conditionally to avoid loading the starter content on every
		* page load, as it is a one-off operation only needed once in the customizer.
		*/
		if ( is_customize_preview() ) {
			require get_template_directory() . '/inc/starter-content.php';
			add_theme_support( 'starter-content', nada_salama_get_starter_content() );
		}

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom line height controls.
		add_theme_support( 'custom-line-height' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for experimental cover block spacing.
		add_theme_support( 'custom-spacing' );

		// Add support for custom units.
		// This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
		add_theme_support( 'custom-units' );

		// Add support for custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'height'               => 100,
				'width'                => 400,
				'flex-height'          => true,
				'flex-width'           => true,
				'header-text'          => array( 'site-title', 'site-description' ),
				'unlink-homepage-logo' => true,
				'class'                => 'w-11 h-auto',
			)
		);
	}
}
add_action( 'after_setup_theme', 'nada_salama_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @return void
 */
function nada_salama_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'nadasalama' ),
			'id'            => 'sidebar',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'nadasalama' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'nada_salama_widgets_init' );

/**
 * Enqueue scripts and styles.
 *
 * @return void
 */
function nada_salama_scripts() {
	// Main stylesheet
    wp_enqueue_style(
        'nada-salama-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        wp_get_theme()->get( 'Version' ) );

    wp_enqueue_script(
		'nada-salama-script',
		get_template_directory_uri() . '/assets/js/script.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	// Threaded comment reply styles.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nada_salama_scripts' );

/**
 * Enqueue block editor script.
 *
 * @return void
 */
function nada_salama_block_editor_script() {

	wp_enqueue_script(
        'nada-salama-editor',
        get_theme_file_uri( '/assets/admin/js/editor.js' ),
        array( 'wp-blocks', 'wp-dom' ),
        wp_get_theme()->get( 'Version' ),
        true
    );
}

add_action( 'enqueue_block_editor_assets', 'nada_salama_block_editor_script' );

/** Enqueue non-latin language styles
 *
 * @return void
 */
function nada_salama_non_latin_languages() {
	$custom_css = nada_salama_get_non_latin_css( 'front-end' );

	if ( $custom_css ) {
		wp_add_inline_style( 'nada-salama-style', $custom_css );
	}
}
add_action( 'wp_enqueue_scripts', 'nada_salama_non_latin_languages' );

// SVG Icons class.
require get_template_directory() . '/classes/class-nada-salama-svg-icons.php';

// Enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Menu functions and filters.
//require get_template_directory() . '/inc/menu-functions.php';

// Custom template tags for the theme.
require get_template_directory() . '/inc/template-tags.php';

// Customizer additions.
require get_template_directory() . '/classes/class-nada-salama-customize.php';
new Nada_Salama_Customize();

// Custom post types
require get_template_directory() . '/cpt/product.php';

// Custom walker nav menu
require get_template_directory() . '/classes/class-nada-salama-walker-nav-menu.php';
