<?php
/**
 * Banner Options.
 *
 * @package Blog_Up
 */

use Nilambar\CustomizerUtils\Control\Image;
use Nilambar\CustomizerUtils\Control\Number;
use Nilambar\CustomizerUtils\Control\Switcher;
use Nilambar\CustomizerUtils\Control\Text;
use Nilambar\CustomizerUtils\Control\URL;
use Nilambar\CustomizerUtils\Helper\Callback;
use Nilambar\CustomizerUtils\Helper\Sanitize;

// Banner Section.
$wp_customize->add_section( 'section_banner',
	array(
		'title'      => esc_html__( 'Banner', 'blog-up' ),
		'priority'   => 100,
		'panel'      => 'theme_option_panel',
	)
);

// Setting enable_banner.
$wp_customize->add_setting( 'theme_options[enable_banner]',
	array(
		'default'           => $default['enable_banner'],
		'sanitize_callback' => array( Sanitize::class, 'checkbox' ),
	)
);
$wp_customize->add_control(
	new Switcher(
		$wp_customize,
		'theme_options[enable_banner]',
		array(
			'label'    => esc_html__( 'Enable Banner', 'blog-up' ),
			'section'  => 'section_banner',
			'priority' => 100,
		)
	)
);

// Setting banner_height.
$wp_customize->add_setting( 'theme_options[banner_height]',
	array(
		'default'           => $default['banner_height'],
		'sanitize_callback' => array( Sanitize::class, 'number' ),
	)
);
$wp_customize->add_control(
	new Number(
		$wp_customize,
		'theme_options[banner_height]',
		array(
			'label'    => esc_html__( 'Banner Height', 'blog-up' ),
			'section'  => 'section_banner',
			'input_attrs' => array( 'min' => 90, 'max' => 750, 'style' => 'width: 75px;' ),
			'priority' => 100,
			'active_callback'   => array( Callback::class, 'active' ),
			'conditional_logic' => array(
				array(
					array(
						'key'     => 'theme_options[enable_banner]',
						'compare' => '==',
						'value'   => true,
					),
				),
			),
		)
	)
);

// Setting banner_image.
$wp_customize->add_setting( 'theme_options[banner_image]',
	array(
		'default'           => $default['banner_image'],
		'sanitize_callback' => array( Sanitize::class, 'url' ),
	)
);

$wp_customize->add_control(
	new Image(
		$wp_customize,
		'theme_options[banner_image]',
		array(
			'label'    => esc_html__( 'Banner Image', 'blog-up' ),
			'section'  => 'section_banner',
			'priority' => 100,
			'active_callback'   => array( Callback::class, 'active' ),
			'conditional_logic' => array(
				array(
					array(
						'key'     => 'theme_options[enable_banner]',
						'compare' => '==',
						'value'   => true,
					),
				),
			),
		)
	)
);

// Setting banner_heading.
$wp_customize->add_setting( 'theme_options[banner_heading]',
	array(
		'default'           => $default['banner_heading'],
		'sanitize_callback' => array( Sanitize::class, 'text' ),
	)
);
$wp_customize->add_control(
	new Text(
		$wp_customize,
		'theme_options[banner_heading]',
		array(
			'label'    => esc_html__( 'Heading', 'blog-up' ),
			'section'  => 'section_banner',
			'priority' => 100,
			'active_callback'   => array( Callback::class, 'active' ),
			'conditional_logic' => array(
				array(
					array(
						'key'     => 'theme_options[enable_banner]',
						'compare' => '==',
						'value'   => true,
					),
				),
			),
		)
	)
);

// Setting banner_button.
$wp_customize->add_setting( 'theme_options[banner_button]',
	array(
		'default'           => $default['banner_button'],
		'sanitize_callback' => array( Sanitize::class, 'text' ),
	)
);
$wp_customize->add_control(
	new Text(
		$wp_customize,
		'theme_options[banner_button]',
		array(
			'label'    => esc_html__( 'Button Text', 'blog-up' ),
			'section'  => 'section_banner',
			'priority' => 100,
			'active_callback'   => array( Callback::class, 'active' ),
			'conditional_logic' => array(
				array(
					array(
						'key'     => 'theme_options[enable_banner]',
						'compare' => '==',
						'value'   => true,
					),
				),
			),
		)
	)
);

// Setting banner_link.
$wp_customize->add_setting( 'theme_options[banner_link]',
	array(
		'default'           => $default['banner_link'],
		'sanitize_callback' => array( Sanitize::class, 'url' ),
	)
);
$wp_customize->add_control(
	new URL(
		$wp_customize,
		'theme_options[banner_link]',
		array(
			'label'    => esc_html__( 'Button Link', 'blog-up' ),
			'section'  => 'section_banner',
			'priority' => 100,
			'active_callback'   => array( Callback::class, 'active' ),
			'conditional_logic' => array(
				array(
					array(
						'key'     => 'theme_options[enable_banner]',
						'compare' => '==',
						'value'   => true,
					),
				),
			),
		)
	)
);