<?php
/**
 * Welcome
 *
 * @package Blog_Up
 */

use Nilambar\Welcome\Welcome;

add_action(
	'wp_welcome_init',
	function() {
		$args = array(
			'mode' => 'theme',
			'slug' => 'blog-up',
		);

		$args['page'] = array(
			/* translators: %s: theme name. */
			'menu_title'  => sprintf( esc_html__( 'About %s', 'blog-up' ), esc_html__( 'Blog Up', 'blog-up' ) ),
			'menu_slug'   => 'about-' . BLOG_UP_SLUG,
			'parent_page' => 'themes.php',
		);

		$args['admin_notice'] = array(
			'screens' => array( 'themes', 'dashboard' ),
		);

		$args['quick_links'] = array(
			array(
				'text' => esc_html__( 'View Demos', 'blog-up' ),
				'url'  => 'https://dandure.com/blog-up/',
				'type' => 'primary',
			),
			array(
				'text' => esc_html__( 'Theme Homepage', 'blog-up' ),
				'url'  => 'https://wphait.com/themes/blog-up/',
				'type' => 'secondary',
			),
		);

		$args['sidebar'] = array(
			'render_callback' => 'blog_up_render_welcome_page_sidebar',
		);

		$args['tabs'] = array(
			'getting-started' => array(
				'title' => esc_html__( 'Getting Started', 'blog-up' ),
				'type'  => 'grid',
				'items' => array(
					'customize'     => array(
						'title'       => esc_html__( 'Customize Everything', 'blog-up' ),
						'icon'        => 'dashicons dashicons-admin-customizer',
						'description' => esc_html__( 'Theme uses Customizer API for theme options. Start customizing every aspect of the website with customizer.', 'blog-up' ),
						'button_text' => esc_html__( 'Go to Customizer', 'blog-up' ),
						'button_url'  => wp_customize_url(),
						'button_type' => 'primary',
					),
					'support'       => array(
						'title'       => esc_html__( 'Get Support', 'blog-up' ),
						'icon'        => 'dashicons dashicons-editor-help',
						'description' => esc_html__( 'Got theme support question or found bug or got some feedbacks? Please visit support forum in the WordPress.org directory.', 'blog-up' ),
						'button_text' => esc_html__( 'Visit Support', 'blog-up' ),
						'button_url'  => 'https://wordpress.org/support/theme/blog-up/#new-post',
						'button_type' => 'secondary',
						'is_new_tab'  => true,
					),
					'documentation' => array(
						'title'       => esc_html__( 'Documentation', 'blog-up' ),
						'icon'        => 'dashicons dashicons-admin-page',
						'description' => 'Kindly check our theme documentation for detailed information and instructions.',
						'button_text' => esc_html__( 'View Documentation', 'blog-up' ),
						'button_url'  => 'https://dandure.com/documentation/blog-up/',
						'button_type' => 'secondary',
						'is_new_tab'  => true,
					),
					'child-theme'   => array(
						'title'       => esc_html__( 'Child Theme', 'blog-up' ),
						'icon'        => 'dashicons dashicons-admin-appearance',
						'description' => 'Want to customize theme file? Please use a child theme.',
						'button_text' => esc_html__( 'About Child Theme', 'blog-up' ),
						'button_url'  => 'https://developer.wordpress.org/themes/advanced-topics/child-themes/',
						'button_type' => 'secondary',
						'is_new_tab'  => true,
					),
				),
			),
			'free-vs-pro'     => array(
				'title'          => 'Free Vs. Pro',
				'type'           => 'comparison',
				'upgrade_button' => array(
					'url' => BLOG_UP_UPGRADE_URL,
				),
				'items'          => array(
					array(
						'title' => 'Show / Hide Site Title',
						'free'  => 'yes',
						'pro'   => 'yes',
					),
					array(
						'title' => 'Show / Hide Site Tagline',
						'free'  => 'yes',
						'pro'   => 'yes',
					),
					array(
						'title' => 'Logo Height Option',
						'free'  => 'yes',
						'pro'   => 'yes',
					),
					array(
						'title' => 'Full Width Banner',
						'free'  => 'yes',
						'pro'   => 'yes',
					),
					array(
						'title' => 'Featured Posts on Home Page',
						'free'  => 'yes',
						'pro'   => 'yes',
					),
					array(
						'title'       => 'Breadcrumb',
						'description' => 'Rank Math or Yoast SEO',
						'free'        => 'yes',
						'pro'         => 'yes',
					),
					array(
						'title'       => 'Post Meta Options',
						'description' => 'Drag and drop and enable/disable',
						'free'        => 'yes',
						'pro'         => 'yes',
					),
					array(
						'title' => 'Social Share',
						'free'  => 'yes',
						'pro'   => 'yes',
					),
					array(
						'title' => 'Related Posts',
						'free'  => 'yes',
						'pro'   => 'yes',
					),
					array(
						'title' => 'WooCommerce Support',
						'free'  => 'yes',
						'pro'   => 'yes',
					),
					array(
						'title' => 'Page Speed Optimized',
						'free'  => 'yes',
						'pro'   => 'yes',
					),
					array(
						'title' => 'Search Engine Optimized',
						'free'  => 'yes',
						'pro'   => 'yes',
					),
					array(
						'title'       => 'Page Builder Compatibility',
						'description' => 'Compatible with page builders like Elementor',
						'free'        => 'yes',
						'pro'         => 'yes',
					),
					array(
						'title' => 'Google Core Web Vitals Optimized',
						'free'  => 'yes',
						'pro'   => 'yes',
					),
					array(
						'title' => 'No jQuery',
						'free'  => 'yes',
						'pro'   => 'yes',
					),
					array(
						'title' => 'Dark Skin',
						'free'  => 'no',
						'pro'   => 'yes',
					),
					array(
						'title' => 'Sticky Navigation',
						'free'  => 'no',
						'pro'   => 'yes',
					),
					array(
						'title' => 'Color and Typography',
						'free'  => 'no',
						'pro'   => 'yes',
					),
					array(
						'title' => 'Blog Layouts',
						'free'  => '1',
						'pro'   => '5',
					),
					array(
						'title' => 'Sticky Sidebar',
						'free'  => 'no',
						'pro'   => 'yes',
					),
					array(
						'title'       => 'Sidebar Options',
						'description' => 'Left, Right and No Sidebar',
						'free'        => 'no',
						'pro'         => 'yes',
					),
					array(
						'title'       => 'Social Share Position',
						'description' => 'Sticky / Regular',
						'free'        => 'no',
						'pro'         => 'yes',
					),
					array(
						'title' => 'Customize Powered By Text',
						'free'  => 'no',
						'pro'   => 'yes',
					),
					array(
						'title' => 'Author Box',
						'free'  => 'no',
						'pro'   => 'yes',
					),
					array(
						'title' => 'Theme Support',
						'free'  => 'Forum',
						'pro'   => 'Dedicated / Forum',
					),
				),
			),
			'plugins'         => array(
				'title' => esc_html__( 'Recommended Plugins', 'blog-up' ),
				'type'  => 'plugin',
				'items' => array(
					array(
						'name'        => esc_html__( 'WooCommerce Product Tabs', 'blog-up' ),
						'description' => esc_html__( 'Plugin to add new tabs for WooCommerce products.', 'blog-up' ),
						'slug'        => 'woocommerce-product-tabs',
					),
					array(
						'name'        => esc_html__( 'Admin Customizer', 'blog-up' ),
						'description' => esc_html__( 'Customize admin interface of your WordPress site.', 'blog-up' ),
						'slug'        => 'admin-customizer',
					),
					array(
						'name'        => esc_html__( 'Advanced Google reCAPTCHA', 'blog-up' ),
						'description' => esc_html__( 'Protect your WordPress website against spam comments and brute-force attacks using Google reCAPTCHA.', 'blog-up' ),
						'slug'        => 'advanced-google-recaptcha',
					),
					array(
						'name'        => esc_html__( 'Coming Soon & Maintenance Mode Page', 'blog-up' ),
						'description' => esc_html__( 'Simple and easy to setup Coming soon, Under Construction and Maintenance page plugin.', 'blog-up' ),
						'slug'        => 'nifty-coming-soon-and-under-construction-page',
					),
					array(
						'name'        => esc_html__( 'Post Grid Elementor Addon', 'blog-up' ),
						'description' => esc_html__( 'Elementor page builder addon to display posts in a grid.', 'blog-up' ),
						'slug'        => 'post-grid-elementor-addon',
					),
					array(
						'name'        => esc_html__( 'Majestic Before After Image', 'blog-up' ),
						'description' => esc_html__( 'Elementor addon to show the comparison of two images with a draggable handle.', 'blog-up' ),
						'slug'        => 'majestic-before-after-image',
					),
				),
			),
		);

		// Pass welcome arguments through filter.
		$config = apply_filters( 'blog_up_welcome_args', $args );

		if ( ! ( isset( $config['mode'] ) && isset( $config['slug'] ) ) ) {
			return;
		}

		// Instantiate Welcome object.
		$obj = new Welcome( $config['mode'], $config['slug'] );

		if ( isset( $config['page'] ) ) {
			$obj->set_page( $config['page'] );
		}

		if ( isset( $config['admin_notice'] ) ) {
			$obj->set_admin_notice( $config['admin_notice'] );
		}

		if ( isset( $config['quick_links'] ) ) {
			$obj->set_quick_links( $config['quick_links'] );
		}

		if ( isset( $config['sidebar'] ) ) {
			$obj->set_sidebar( $config['sidebar'] );
		}

		if ( isset( $config['tabs'] ) && is_array( $config['tabs'] ) ) {
			foreach ( $config['tabs'] as $tab_key => $tab ) {
				$obj->add_tab( array_merge( array( 'id' => $tab_key ), $tab ) );
			}
		}

		$obj->run();
	}
);

/**
 * Render welcome page sidebar.
 *
 * @since 1.0.0
 *
 * @param Welcome $object Instance of Welcome class.
 */
function blog_up_render_welcome_page_sidebar( $object ) {
	$object->render_sidebar_box(
		array(
			'title'        => esc_html__( 'Upgrade to Pro', 'blog-up' ),
			'content'      => esc_html__( 'Upgrade to pro version for additional features and options.', 'blog-up' ),
			'class'        => 'gray',
			'button_text'  => esc_html__( 'Upgrade Now', 'blog-up' ),
			'button_url'   => BLOG_UP_UPGRADE_URL,
			'button_class' => 'button button-primary button-upgrade',
		),
		$object
	);

	$object->render_sidebar_box(
		array(
			'title'        => esc_html__( 'Leave a Review', 'blog-up' ),
			/* translators: %s: theme name. */
			'content'      => $object->get_stars() . sprintf( esc_html__( 'Are you enjoying %s? We would appreciate a review.', 'blog-up' ), $object->get_name() ),
			'button_text'  => esc_html__( 'Submit Review', 'blog-up' ),
			'button_url'   => 'https://wordpress.org/support/theme/blog-up/reviews/#new-post',
			'button_class' => 'button',
		),
		$object
	);

	$object->render_sidebar_box(
		array(
			'title'   => esc_html__( 'Our Themes', 'blog-up' ),
			'content' => '<ol><li><a href="https://wphait.com/themes/nari/" target="_blank">Nari - Feminine WordPress Blog Theme</a></li><li><a href="https://wphait.com/themes/dhor/" target="_blank">Dhor - Minimal WordPress Blog Theme</a></li><li><a href="https://wphait.com/themes/hait/" target="_blank">Hait - Multipurpose WordPress Blog Theme</a></li></ol>',
		),
		$object
	);
}
