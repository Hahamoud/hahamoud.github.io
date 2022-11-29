<?php
/**
 * Layout hooks
 *
 * @package Blog_Up
 */

/**
 * Add main header.
 *
 * @since 1.0.0
 */
function blog_up_add_main_header() {
	get_template_part( 'template-parts/header/main' );
}

add_action( 'blog_up_header', 'blog_up_add_main_header' );

/**
 * Add breadcrumb.
 *
 * @since 1.0.0
 */
function blog_up_add_breadcrumb() {
	if ( true !== apply_filters( 'blog_up_breadcrumb_status', false ) ) {
		return;
	}

	get_template_part( 'template-parts/header/breadcrumb' );
}

add_action( 'blog_up_after_header', 'blog_up_add_breadcrumb' );

/**
 * Add Banner.
 *
 * @since 1.0.0
 */
function blog_up_add_banner() {
	if ( true !== apply_filters( 'blog_up_banner_status', false ) ) {
		return;
	}

	get_template_part( 'template-parts/general/banner' );
}

add_action( 'blog_up_before_content', 'blog_up_add_banner' );

/**
 * Add featured posts.
 *
 * @since 1.0.0
 */
function blog_up_add_featured_posts() {
	if ( true !== apply_filters( 'blog_up_featured_posts_status', false ) ) {
		return;
	}

	get_template_part( 'template-parts/general/featured' );
}

add_action( 'blog_up_before_content', 'blog_up_add_featured_posts' );

/**
 * Add sidebar.
 *
 * @since 1.0.0
 */
function blog_up_add_sidebar() {
	if ( true !== apply_filters( 'blog_up_sidebar_status', true ) ) {
		return;
	}

	get_sidebar();
}

add_action( 'blog_up_sidebar', 'blog_up_add_sidebar' );

/**
 * Add main footer.
 *
 * @since 1.0.0
 */
function blog_up_add_main_footer() {
	get_template_part( 'template-parts/footer/main' );
}

add_action( 'blog_up_footer', 'blog_up_add_main_footer' );

/**
 * Add footer widgets.
 *
 * @since 1.0.0
 */
function blog_up_add_footer_widgets() {
	get_template_part( 'template-parts/footer/widgets' );
}

add_action( 'blog_up_before_footer', 'blog_up_add_footer_widgets' );

/**
 * Add goto top.
 *
 * @since 1.0.0
 */
function blog_up_add_goto_top() {
	if ( true !== blog_up_get_option( 'enable_back_to_top' ) ) {
		return;
	}

	echo '<div id="back_to_top">&uarr;</div>';
}

add_action( 'blog_up_body_bottom', 'blog_up_add_goto_top' );

/**
 * Add pagination.
 *
 * @since 1.0.0
 */
function blog_up_add_pagination() {
	the_posts_pagination(
		array(
			'prev_text' => esc_html__( 'Previous', 'blog-up' ),
			'next_text' => esc_html__( 'Next','blog-up' ),
		)
	);
}

add_action( 'blog_up_pagination', 'blog_up_add_pagination' );

/**
 * Add single navigation.
 *
 * @since 1.0.0
 */
function blog_up_add_single_navigation() {
	the_post_navigation(
		array(
			'prev_text' => '<span class="nav-arrow">&larr;</span> <span class="nav-subtitle">%title</span>',
			'next_text' => '<span class="nav-subtitle">%title</span> <span class="nav-arrow">&rarr;</span>',
		)
	);
}

add_action( 'blog_up_single_after_content', 'blog_up_add_single_navigation' );

/**
 * Add related posts.
 *
 * @since 1.0.0
 */
function blog_up_add_related_posts() {
	if ( true !== apply_filters( 'blog_up_related_posts_status', false ) ) {
		return;
	}

	get_template_part( 'template-parts/related-posts' );
}

add_action( 'blog_up_single_after_content', 'blog_up_add_related_posts' );

/**
 * Add footer copyright.
 *
 * @since 1.0.0
 */
function blog_up_add_footer_copyright() {
	$copyright = '';

	$copyright_text = blog_up_get_option( 'copyright_text' );

	if ( ! empty( $copyright_text ) ) {
		$copyright = blog_up_apply_theme_shortcode( wp_kses_post( $copyright_text ) );
	}

	if ( $copyright ) {
		echo '<div class="copyright">';
		echo do_shortcode( $copyright ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		echo '</div><!-- .copyright -->';
	}
}

add_action( 'blog_up_credits', 'blog_up_add_footer_copyright', 10 );

/**
 * Add footer poweredby.
 *
 * @since 1.0.0
 */
function blog_up_add_footer_poweredby() {
	/* translators: 1: Theme name, 2: Theme author. */
	printf( esc_html__( ' Theme: %1$s by %2$s', 'blog-up' ), esc_html__( 'Blog Up', 'blog-up' ), '<a href="https://wphait.com/" target="_blank">WP Hait</a>' );
}

add_action( 'blog_up_credits', 'blog_up_add_footer_poweredby', 20 );
