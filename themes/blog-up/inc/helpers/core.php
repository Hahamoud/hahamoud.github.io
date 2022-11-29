<?php
/**
 * Core functions
 *
 * @package Blog_Up
 */

/**
 * Get theme option.
 *
 * @since 1.0.0
 *
 * @param string $key Option key.
 * @return mixed Option value.
 */
function blog_up_get_option( $key ) {
	if ( empty( $key ) ) {
		return;
	}

	$theme_default = blog_up_get_default_theme_options();

	$theme_options = get_theme_mod( 'theme_options', $theme_default );
	$theme_options = array_merge( $theme_default, $theme_options );

	$value = '';

	if ( isset( $theme_options[ $key ] ) ) {
		$value = $theme_options[ $key ];
	}

	return $value;
}

/**
 * Get all theme options in array.
 *
 * @since 1.0.0
 *
 * @return array Theme options.
 */
function blog_up_get_options() {
	return get_theme_mods();
}

/**
 * Get default option.
 *
 * @since 1.0.0
 *
 * @param string $key Option key.
 * @return mixed Option value.
 */
function blog_up_get_default_option( $key ) {
	if ( empty( $key ) ) {
		return;
	}

	$theme_default = blog_up_get_default_theme_options();

	$value = '';

	if ( isset( $theme_default[ $key ] ) ) {
		$value = $theme_default[ $key ];
	}

	return $value;
}

/**
 * Get default theme options.
 *
 * @since 1.0.0
 *
 * @return array Default theme options.
 */
function blog_up_get_default_theme_options() {
	$defaults = array();

	$defaults['logo_height']     = 40;
	$defaults['hide_site_title'] = false;
	$defaults['hide_tagline']    = true;
	
	// Banner
	$defaults['enable_banner']     = false;
	$defaults['banner_height']     = 600;
	$defaults['banner_image']      = '';
	$defaults['banner_heading']    = '';
	$defaults['banner_button']     = esc_html__( 'Read More', 'blog-up' );
	$defaults['banner_link']     = '#';

	// Featured Posts
	$defaults['enable_featured_posts']     		= false;
	$defaults['featured_posts_categories'] 		= array();
	$defaults['featured_posts_number']     		= 3;
	$defaults['featured_posts_hide_categories'] = false;
	$defaults['featured_posts_hide_date']     	= false;

	// Breadcrumb.
	$defaults['enable_breadcrumb'] = false;
	$defaults['breadcrumb_type']   = 'rankmath';

	// Blog archive.
	$defaults['blog_meta']      = array( 'date', 'author' );
	$defaults['show_excerpt']   = true;
	$defaults['excerpt_length'] = 24;
	$defaults['readmore_text']  = esc_html__( 'Read More', 'blog-up' );

	// Blog single.
	$defaults['post_header_meta']      = array( 'date', 'author', 'categories' );
	$defaults['post_footer_meta']      = array( 'tags' );
	$defaults['show_related_posts']    = true;
	$defaults['related_posts_heading'] = esc_html__( 'Related Posts', 'blog-up' );
	$defaults['related_posts_number']  = 2;
	$defaults['enable_social_share']   = true;
	$defaults['social_share_heading']  = esc_html__( 'Share this article:', 'blog-up' );

	// Shop page.
	$defaults['shop_layout']          = 'no-sidebar';
	$defaults['product_per_page']     = 9;
	$defaults['product_number']       = 3;
	$defaults['hide_product_sorting'] = false;

	// Shop single page.
	$defaults['enable_gallery_zoom']      = false;
	$defaults['disable_related_products'] = false;

	// Footer.
	$defaults['copyright_text']      = esc_html__( 'Copyright &copy; [the-year] [the-site-title]. All Rights Reserved.', 'blog-up' );
	$defaults['enable_back_to_top']  = true;

	return apply_filters( 'blog_up_default_options', $defaults );
}