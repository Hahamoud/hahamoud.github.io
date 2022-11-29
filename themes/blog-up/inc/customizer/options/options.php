<?php
/**
 * Options
 *
 * @package Blog_Up
 */

$default = blog_up_get_default_theme_options();

// Add Theme Options Panel.
$wp_customize->add_panel(
	'theme_option_panel',
	array(
		'title'    => esc_html__( 'Theme Options', 'blog-up' ),
		'priority' => 80,
	)
);

require_once BLOG_UP_DIR . '/inc/customizer/options/header.php';
require_once BLOG_UP_DIR . '/inc/customizer/options/banner.php';
require_once BLOG_UP_DIR . '/inc/customizer/options/featured-posts.php';
require_once BLOG_UP_DIR . '/inc/customizer/options/breadcrumb.php';
require_once BLOG_UP_DIR . '/inc/customizer/options/blog.php';
require_once BLOG_UP_DIR . '/inc/customizer/options/blog-single.php';

// Load shop page options if WooCommerce is active.
if ( class_exists( 'WooCommerce', false ) ) {
	require_once BLOG_UP_DIR . '/inc/customizer/options/shop.php';
	require_once BLOG_UP_DIR . '/inc/customizer/options/shop-single.php';
}

// Load footer options.
require_once BLOG_UP_DIR . '/inc/customizer/options/footer.php';