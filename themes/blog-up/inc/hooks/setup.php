<?php
/**
 * Setup
 *
 * @package Blog_Up
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @since 1.0.0
 */
function blog_up_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for post thumbnails.
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'blog-up-thumb', 730, 486, true );

	// Register menu locations.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary Menu', 'blog-up' ),
		)
	);

	// Switch default core markup to output valid HTML5.
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
			'blog_up_custom_background_args',
			array(
				'default-color' => 'fff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add support for block styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	// Add support for core custom logo.
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

add_action( 'after_setup_theme', 'blog_up_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @since 1.0.0
 */
function blog_up_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'blog_up_content_width', 640 );
}

add_action( 'after_setup_theme', 'blog_up_content_width', 0 );

/**
 * Register widget areas.
 *
 * @since 1.0.0
 */
function blog_up_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'blog-up' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'blog-up' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	for ( $i = 1; $i <= 3; $i ++ ) {
		register_sidebar(
			array(
				/* translators: %d: Widget number. */
				'name'          => sprintf( esc_html__( 'Footer %d', 'blog-up' ), $i ),
				'id'            => 'footer-' . $i,
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			)
		);
	}
}

add_action( 'widgets_init', 'blog_up_widgets_init' );

/**
 * Enqueue scripts and styles.
 *
 * @since 1.0.0
 */
function blog_up_scripts() {
	$fonts_url = blog_up_get_google_fonts_url();

	if ( $fonts_url ) {
		wp_enqueue_style( 'blog-up-google-fonts', wptt_get_webfont_url( $fonts_url ), array(), BLOG_UP_VERSION );
	}

	wp_enqueue_style( 'blog-up-style', get_stylesheet_uri(), array(), BLOG_UP_VERSION );

	if ( true === blog_up_get_option( 'enable_featured_posts' ) )  {
		wp_enqueue_script( 'blog-up-swiper', BLOG_UP_URL . '/assets/js/swiper-bundle.min.js', array(), BLOG_UP_VERSION, true );
		wp_enqueue_style( 'blog-up-swiper', BLOG_UP_URL . '/assets/css/swiper-bundle.min.css', array(), BLOG_UP_VERSION );
	}

	wp_enqueue_script( 'blog-up-custom', BLOG_UP_URL . '/assets/js/custom.js', apply_filters( 'blog_up_script_dependencies', array() ), BLOG_UP_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'blog_up_scripts' );