<?php
/**
 * Footer Options
 *
 * @package Blog_Up
 */

use Nilambar\CustomizerUtils\Control\Switcher;
use Nilambar\CustomizerUtils\Control\Textarea;
use Nilambar\CustomizerUtils\Helper\Sanitize;

// Footer Section.
$wp_customize->add_section(
	'section_footer',
	array(
		'title'    => esc_html__( 'Footer', 'blog-up' ),
		'priority' => 100,
		'panel'    => 'theme_option_panel',
	)
);

// Setting enable_back_to_top.
$wp_customize->add_setting(
	'theme_options[enable_back_to_top]',
	array(
		'default'           => $default['enable_back_to_top'],
		'sanitize_callback' => array( Sanitize::class, 'checkbox' ),
	)
);
$wp_customize->add_control(
	new Switcher(
		$wp_customize,
		'theme_options[enable_back_to_top]',
		array(
			'label'    => esc_html__( 'Enable Back to Top', 'blog-up' ),
			'section'  => 'section_footer',
			'priority' => 100,
		)
	)
);

// Setting copyright_text.
$wp_customize->add_setting(
	'theme_options[copyright_text]',
	array(
		'default'           => $default['copyright_text'],
		'sanitize_callback' => 'wp_kses_post',
	)
);
$wp_customize->add_control(
	new Textarea(
		$wp_customize,
		'theme_options[copyright_text]',
		array(
			'label'    => esc_html__( 'Copyright Text', 'blog-up' ),
			'section'  => 'section_footer',
			'priority' => 100,
		)
	)
);
