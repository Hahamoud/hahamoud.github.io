<?php
/**
 * Custom hooks
 *
 * @package Blog_Up
 */

/**
 * Add Google fonts.
 *
 * @since 1.0.0
 *
 * @param array $fonts An array of Google fonts.
 * @return array Modified array of fonts.
 */
function blog_up_add_google_fonts( $fonts ) {
	$fonts[] = 'Inter';

	return $fonts;
}

add_filter( 'blog_up_google_fonts', 'blog_up_add_google_fonts' );

/**
 * Customize breadcrumb status.
 *
 * @since 1.0.0
 *
 * @param bool $status Status.
 * @return bool Modified status.
 */
function blog_up_customize_breadcrumb_status( $status ) {
	$status = false;

	$enable_breadcrumb = blog_up_get_option( 'enable_breadcrumb' );

	if ( true === $enable_breadcrumb ) {
		$status = true;
	}

	// Check WooCommerce.
	if ( is_archive() && class_exists( 'WooCommerce', false ) && is_woocommerce() && false === $enable_breadcrumb ) {
		$status = false;
	}

	// Dont show breadcrumb in any case.
	if ( is_front_page() || is_home() || is_404() ) {
		$status = false;
	}

	return $status;
}

add_filter( 'blog_up_breadcrumb_status', 'blog_up_customize_breadcrumb_status' );

/**
 * Customize related posts status.
 *
 * @since 1.0.0
 *
 * @param bool $status Status.
 * @return bool Modified status.
 */
function blog_up_customize_related_posts_status( $status ) {
	$status = false;

	$show_related_posts = blog_up_get_option( 'show_related_posts' );

	if ( true === $show_related_posts && 'post' === get_post_type() ) {
		$status = true;
	}

	return $status;
}

add_filter( 'blog_up_related_posts_status', 'blog_up_customize_related_posts_status' );

/**
 * Customize banner status.
 *
 * @since 1.0.0
 *
 * @param bool $status Status.
 * @return bool Modified status.
 */
function blog_up_customize_banner_status( $status ) {
	$status = false;

	$enable_banner = blog_up_get_option( 'enable_banner' );

	if ( true === $enable_banner && is_front_page() && is_home() ) {
		$status = true;
	}

	return $status;
}

add_filter( 'blog_up_banner_status', 'blog_up_customize_banner_status' );

/**
 * Customize featured posts status.
 *
 * @since 1.0.0
 *
 * @param bool $status Status.
 * @return bool Modified status.
 */
function blog_up_customize_featured_posts_status( $status ) {
	$status = false;

	$enable_featured_posts = blog_up_get_option( 'enable_featured_posts' );

	if ( true === $enable_featured_posts && is_front_page() && is_home() ) {
		$status = true;
	}

	return $status;
}

add_filter( 'blog_up_featured_posts_status', 'blog_up_customize_featured_posts_status' );