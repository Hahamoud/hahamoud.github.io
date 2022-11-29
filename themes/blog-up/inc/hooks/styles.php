<?php
/**
 * Dynamic CSS
 *
 * @package Blog_Up
 */

/**
 * Render dynamic styles.
 *
 * @since 1.0.0
 */
function blog_up_dynamic_styles() {
	$custom_css = '';

	$logo_height = absint( blog_up_get_option( 'logo_height' ) );

	$custom_css .= ".site-branding img { max-height: {$logo_height}px; }";

	$banner_height = absint( blog_up_get_option( 'banner_height' ) );

	$custom_css .= ":root{--hero-height: {$banner_height}px;	}";

	if ( $custom_css ) {
		wp_add_inline_style( 'blog-up-style', $custom_css ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}

add_action( 'wp_enqueue_scripts', 'blog_up_dynamic_styles' );