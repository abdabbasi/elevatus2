<?php
/**
 * elevatus_2022 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package elevatus_2022
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function elevatus_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on elevatus_2022, use a find and replace
		* to change 'elevatus' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'elevatus', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'elevatus' ),
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
			'elevatus_custom_background_args',
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
add_action( 'after_setup_theme', 'elevatus_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function elevatus_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'elevatus_content_width', 640 );
}
add_action( 'after_setup_theme', 'elevatus_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function elevatus_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'elevatus' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'elevatus' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'elevatus_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function elevatus_scripts() {	
	// Fontawesome link
	wp_enqueue_script('elevatus-fontawesome', 'https://kit.fontawesome.com/f432f03516.js', array(), null, true);
	
	// Splide Slider Style  
	wp_enqueue_style('elevatus-Splide-style', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css', array(), _S_VERSION);

	// Splide Slider JS
	wp_enqueue_script('elevatus-Splide-functions', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js', array(), _S_VERSION, true);
	
	//Stimulus js
	wp_enqueue_script('elevatus-stimulus', 'https://cdn.jsdelivr.net/npm/stimulus@2.0.0/dist/stimulus.umd.min.js', array(), null, true);

	// smooth-scroll JS
	wp_enqueue_script('paradigm-dh-smooth-scroll', get_template_directory_uri() . '/js/smooth-scroll.js', array(), _S_VERSION, true);

	// Custom Style
	wp_enqueue_style( 'elevatus-style-old', get_template_directory_uri() . '/style-v1.css', array(), _S_VERSION );
	wp_enqueue_style( 'elevatus-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'elevatus-style', 'rtl', 'replace' );
	
	// Custom js
	wp_enqueue_script( 'elevatus-controllers', get_template_directory_uri() . '/js/controllers.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'elevatus-functions', get_template_directory_uri() . '/js/functions.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'elevatus_scripts' );

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



// Custom Optioins pages
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'position' 		=> '2',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Blocks Settings',
		'menu_title'	=> 'Blocks',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Our People',
		'menu_title'	=> 'Our People',
		'menu_slug' 	=> 'our-people-settings',
		'capability'	=> 'edit_posts',
		'icon_url'      => 'dashicons-groups',
		'position' 		=> '6',
		'redirect'		=> false
	));
	
}


// Menus
function wpb_about_menu() {
	register_nav_menu('about-menu',__( 'About Menu' ));
}
add_action( 'init', 'wpb_about_menu' );

function wpb_solutions_menu() {
	register_nav_menu('solutions-menu',__( 'Solutions Menu' ));
}
add_action( 'init', 'wpb_solutions_menu' );

function wpb_resources_menu() {
	register_nav_menu('resources-menu',__( 'Resources Menu' ));
}
add_action( 'init', 'wpb_resources_menu' );

function wpb_sm_menu() {
	register_nav_menu('sm-menu',__( 'Social Media Menu' ));
}
add_action( 'init', 'wpb_sm_menu' );

// Custom Blocks
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {
    
    // Check function exists.
    if( function_exists('acf_register_block_type') ) {
        
        // register a Three Column block.
        acf_register_block_type(array(
            'name'              => 'three-col',
            'title'             => __('Three Column'),
            'description'       => __('A custom Text block.'),
            'render_template'   => 'blocks/three-col.php',
            'category'          => 'formatting',
            'icon'              => 'columns',
            'keywords'          => array( 'column' ),
        ));

        // register a Product Header block.
        acf_register_block_type(array(
            'name'              => 'product-header',
            'title'             => __('Product Header'),
            'description'       => __('A custom Header block.'),
            'render_template'   => 'blocks/product-header.php',
            'category'          => 'formatting',
            'icon'              => 'media-default',
            'keywords'          => array( 'header' ),
        ));

        // register a integration-slider block.
        acf_register_block_type(array(
            'name'              => 'integration-slider',
            'title'             => __('Integration Slider'),
            'description'       => __('A custom integration slider block.'),
            'render_template'   => 'blocks/integration-slider.php',
            'category'          => 'formatting',
            'icon'              => 'format-gallery',
            'keywords'          => array( 'slider' ),
        ));

		// register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'testimonial-1',
            'title'             => __('Testimonial one slide'),
            'description'       => __('A custom testimonial with 1 slide/page block.'),
            'render_template'   => 'blocks/testimonials.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonial', 'quote' ),
        ));

		// register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'testimonial-2',
            'title'             => __('Testimonial two slide'),
            'description'       => __('A custom testimonial with 2 slide/page block.'),
            'render_template'   => 'blocks/testimonials-2.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonial', 'quote' ),
        ));

		// register a content-image-accordion block.
        acf_register_block_type(array(
            'name'              => 'content-image-accordion',
            'title'             => __('Content & image with accordion'),
            'description'       => __('A custom content-image-accordion block.'),
            'render_template'   => 'blocks/content-image-accordion.php',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array( 'content', 'image' ),
        ));

		// register a signed-offers block.
        acf_register_block_type(array(
            'name'              => 'signed-offers',
            'title'             => __('Signed offers'),
            'description'       => __('A custom signed-offers-sec block.'),
            'render_template'   => 'blocks/signed-offers.php',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array( 'content', 'image' ),
        ));

		// register a progress-analytics block.
        acf_register_block_type(array(
            'name'              => 'progress-analytics',
            'title'             => __('Progress & Analytics'),
            'description'       => __('A custom progress-analytics-sec block.'),
            'render_template'   => 'blocks/analytics.php',
            'category'          => 'formatting',
            'icon'              => 'analytics',
            'keywords'          => array( 'content', 'image' ),
        ));

		// register a Awards block.
        acf_register_block_type(array(
            'name'              => 'awards',
            'title'             => __('Awards'),
            'description'       => __('A custom awards-sec block.'),
            'render_template'   => 'blocks/awards.php',
            'category'          => 'formatting',
            'icon'              => 'awards',
            'keywords'          => array( 'content', 'image' ),
        ));

		// register a Products List block.
        acf_register_block_type(array(
            'name'              => 'product-list',
            'title'             => __('Products List'),
            'description'       => __('A custom Products List block.'),
            'render_template'   => 'blocks/list-products.php',
            'category'          => 'formatting',
            'icon'              => 'products',
            'keywords'          => array( 'products' ),
        ));
		
		// register a Candles block.
        acf_register_block_type(array(
            'name'              => 'candles',
            'title'             => __('Candles'),
            'description'       => __('A custom Candles block.'),
            'render_template'   => 'blocks/candles.php',
            'category'          => 'formatting',
            'icon'              => 'products',
            'keywords'          => array( 'products' ),
        ));

		// register a Articles block.
        acf_register_block_type(array(
            'name'              => 'articles',
            'title'             => __('Articles'),
            'description'       => __('A custom Articles block.'),
            'render_template'   => 'blocks/articles.php',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array( 'products' ),
        ));

		// register a content-with-image block.
        acf_register_block_type(array(
            'name'              => 'content-with-image',
            'title'             => __('Content with image'),
            'description'       => __('A custom content-with-image block.'),
            'render_template'   => 'blocks/content-with-image.php',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array( 'content', 'image' ),
        ));
		
		// register a Company Logos block.
        acf_register_block_type(array(
            'name'              => 'company-logos',
            'title'             => __('Company Logos'),
            'description'       => __('A custom Company Logos block.'),
            'render_template'   => 'blocks/company-logos.php',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array( 'content', 'image' ),
        ));
		
		// register a GDPR block.
        acf_register_block_type(array(
            'name'              => 'gdpr',
            'title'             => __('GDPR'),
            'description'       => __('A custom GDPR block.'),
            'render_template'   => 'blocks/gdpr.php',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array( 'content', 'image' ),
        ));

		// register a image-with-companies-logos block.
        acf_register_block_type(array(
            'name'              => 'image-with-companies-logos',
            'title'             => __('Image with Companies Logos'),
            'description'       => __('A custom image-with-companies-logos block.'),
            'render_template'   => 'blocks/image-with-company-logos.php',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array( 'content', 'image' ),
        ));

		// register a image-with-counters block.
        acf_register_block_type(array(
            'name'              => 'image-with-counters',
            'title'             => __('Image with Counters'),
            'description'       => __('A custom image-with-counters block.'),
            'render_template'   => 'blocks/image-with-counters.php',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array( 'content', 'image' ),
        ));
		
        // register a Seamless block.
        acf_register_block_type(array(
            'name'              => 'Seamless',
            'title'             => __('seamless'),
            'description'       => __('A custom Seamless block.'),
            'render_template'   => 'blocks/seamless.php',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array( 'Seamless' ),
        ));
       
        // register a Features Boxes block.
        acf_register_block_type(array(
            'name'              => 'Features Boxes',
            'title'             => __('Features Boxes'),
            'description'       => __('A custom Features Boxes block.'),
            'render_template'   => 'blocks/features-boxes.php',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array( 'boxes' ),
        ));
       
        // register a Our Team block.
        acf_register_block_type(array(
            'name'              => 'Our Team',
            'title'             => __('Our Team'),
            'description'       => __('A custom Our Team block.'),
            'render_template'   => 'blocks/our-team.php',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array( 'Our Team' ),
        ));

        // register a Image with articles.
        acf_register_block_type(array(
            'name'              => 'Image with articles',
            'title'             => __('Image with articles'),
            'description'       => __('A custom Image with articles block.'),
            'render_template'   => 'blocks/image-with-articles.php',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array( 'Image with articles' ),
        ));
        
        // register a statistics.
        acf_register_block_type(array(
            'name'              => 'Statistics',
            'title'             => __('statistics'),
            'description'       => __('A custom statistics block.'),
            'render_template'   => 'blocks/statistics.php',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array( 'statistics' ),
        ));
        
        // register a Statistics with content & Image.
        acf_register_block_type(array(
            'name'              => 'Statistics with content & Image',
            'title'             => __('Statistics with content & Image'),
            'description'       => __('A custom Statistics with content & Image block.'),
            'render_template'   => 'blocks/statistics-with-content.php',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array( 'statistics' ),
        ));
        
        // register a Boxes with Image Background.
        acf_register_block_type(array(
            'name'              => 'Boxes with Image Background',
            'title'             => __('Boxes with Image Background'),
            'description'       => __('A custom Boxes with Image Background block.'),
            'render_template'   => 'blocks/boxes.php',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array( 'Boxes' ),
        ));

        // register a Seagulls Section.
        acf_register_block_type(array(
            'name'              => 'Boxes Seagulls Section',
            'title'             => __('Boxes Seagulls Section'),
            'description'       => __('A custom Seagulls Section block.'),
            'render_template'   => 'blocks/seagulls-sec.php',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array( 'Boxes' ),
        ));

        // register a Hero Blog Section.
        acf_register_block_type(array(
            'name'              => 'Hero Blog Section',
            'title'             => __('Hero Blog Section'),
            'description'       => __('A custom Hero Blog Section block.'),
            'render_template'   => 'blocks/blog-hero.php',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array( 'Boxes' ),
        ));

        // register a Popular Blogs Section.
        acf_register_block_type(array(
            'name'              => 'Popular Blogs Section',
            'title'             => __('Popular Blogs Section'),
            'description'       => __('A custom Popular Blogs Section block.'),
            'render_template'   => 'blocks/popular-sec.php',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array( 'Boxes' ),
        ));

        // register a Advantages Section.
        acf_register_block_type(array(
            'name'              => 'Advantages Section',
            'title'             => __('Advantages Section'),
            'description'       => __('A custom Advantages Section block.'),
            'render_template'   => 'blocks/advantages-block.php',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array( 'Boxes' ),
        ));
        
        // register a Landing Form
        acf_register_block_type(array(
            'name'              => 'Landing Form',
            'title'             => __('Landing Form'),
            'description'       => __('A custom Landing Form block.'),
            'render_template'   => 'blocks/landing-form.php',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array( 'Boxes' ),
        ));
        
        // register a Home Products Info
        acf_register_block_type(array(
            'name'              => 'Home Products Info',
            'title'             => __('Home Products Info'),
            'description'       => __('A custom Home Products Info block.'),
            'render_template'   => 'blocks/home-products.php',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array( 'Boxes' ),
        ));
        
        // register a Accordion Info
        acf_register_block_type(array(
            'name'              => 'Accordion',
            'title'             => __('Accordion'),
            'description'       => __('A custom Accordion block.'),
            'render_template'   => 'blocks/accordion.php',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array( 'accordion' ),
        ));

        // register a Get Demo Hero Section
        acf_register_block_type(array(
            'name'              => 'Demo Hero',
            'title'             => __('Demo Hero'),
            'description'       => __('A custom Demo Hero block.'),
            'render_template'   => 'blocks/demo_hero.php',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array( 'Demos' ),
        ));

        // register a Latest Updates Section
        acf_register_block_type(array(
            'name'              => 'Latest Updates',
            'title'             => __('Latest Updates'),
            'description'       => __('A custom Latest updates block.'),
            'render_template'   => 'blocks/latest-updates.php',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array( 'Latest Updates' ),
        ));

        // register a Industries Hero Nav Section
        acf_register_block_type(array(
            'name'              => 'Industries Hero Nav',
            'title'             => __('Industries Hero Nav'),
            'description'       => __('A custom Industries Hero Nav block.'),
            'render_template'   => 'blocks/industries-hero-nav.php',
            'category'          => 'formatting',
            'icon'              => 'format-aside',
            'keywords'          => array( 'industries-hero-nav' ),
        ));

        // register a Custom Awards block.
        acf_register_block_type(array(
            'name'              => 'awards-custom',
            'title'             => __('Awards Custom'),
            'description'       => __('A custom awards-sec block.'),
            'render_template'   => 'blocks/awards-custom.php',
            'category'          => 'formatting',
            'icon'              => 'awards',
            'keywords'          => array( 'content', 'image' ),
        ));
    }

}
