<?php
/**
 * Theme Customizer
 *
 * @package Blog_Up
 */

use Nilambar\CustomizerUtils\Section\Button;

/**
 * Register Customizer controls, sections and settings.
 *
 * @since 1.0.0
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function blog_up_customize_register( $wp_customize ) {
	$wp_customize->register_control_type( Nilambar\CustomizerUtils\Control\Buttonset::class );
	$wp_customize->register_control_type( Nilambar\CustomizerUtils\Control\Color::class );
	$wp_customize->register_control_type( Nilambar\CustomizerUtils\Control\DropdownGoogleFonts::class );
	$wp_customize->register_control_type( Nilambar\CustomizerUtils\Control\DropdownTaxonomies::class );
	$wp_customize->register_control_type( Nilambar\CustomizerUtils\Control\Image::class );
	$wp_customize->register_control_type( Nilambar\CustomizerUtils\Control\Number::class );
	$wp_customize->register_control_type( Nilambar\CustomizerUtils\Control\Radio::class );
	$wp_customize->register_control_type( Nilambar\CustomizerUtils\Control\Select::class );
	$wp_customize->register_control_type( Nilambar\CustomizerUtils\Control\Sortable::class );
	$wp_customize->register_control_type( Nilambar\CustomizerUtils\Control\Switcher::class );
	$wp_customize->register_control_type( Nilambar\CustomizerUtils\Control\Text::class );
	$wp_customize->register_control_type( Nilambar\CustomizerUtils\Control\Textarea::class );
	$wp_customize->register_control_type( Nilambar\CustomizerUtils\Control\URL::class );

	$wp_customize->register_section_type( Button::class );

	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => function() {
					bloginfo( 'name' );
				},
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => function() {
					bloginfo( 'description' );
				},
			)
		);
	}

	$wp_customize->add_section(
		new Button(
			$wp_customize,
			'blog_up_upgrade_button',
			array(
				'title'    => esc_html__( 'Blog Up Pro', 'blog-up' ),
				'priority' => 1,
				'button'   => array(
					'text' => esc_html__( 'Upgrade to Pro', 'blog-up' ),
					'url'  => 'https://wphait.com/themes/blog-up/',
				),
			)
		)
	);

	// Load options.
	require_once BLOG_UP_DIR . '/inc/customizer/options/options.php';
}

add_action( 'customize_register', 'blog_up_customize_register' );
