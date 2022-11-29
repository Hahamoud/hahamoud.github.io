<?php
/**
 * Functions
 *
 * @package Blog_Up
 */

define( 'BLOG_UP_VERSION', '1.0.3' );
define( 'BLOG_UP_SLUG', 'blog-up' );
define( 'BLOG_UP_DIR', rtrim( get_template_directory(), '/' ) );
define( 'BLOG_UP_URL', rtrim( get_template_directory_uri(), '/' ) );
define( 'BLOG_UP_UPGRADE_URL', 'https://checkout.freemius.com/mode/dialog/theme/11517/plan/19624/' );

// Include autoload.
if ( file_exists( BLOG_UP_DIR . '/vendor/autoload.php' ) ) {
	require_once BLOG_UP_DIR . '/vendor/autoload.php';
	require_once BLOG_UP_DIR . '/vendor/wptt/webfont-loader/wptt-webfont-loader.php';
	require_once BLOG_UP_DIR . '/vendor/ernilambar/ns-customizer-utilities/init.php';
	require_once BLOG_UP_DIR . '/vendor/ernilambar/wp-welcome/init.php';
}

// Init.
require_once BLOG_UP_DIR . '/inc/init.php';
