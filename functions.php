<?php
/**
 * Dhad theme functions.
 *
 * @package Dhad
 */

defined( 'ABSPATH' ) || exit;

define( 'DHAD_VERSION', '1.0.1' );

/** Theme supports and editor styles. */
add_action(
	'after_setup_theme',
	static function () {
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'editor-styles' );
		add_editor_style( 'style.css' );
		load_theme_textdomain( 'dhad', get_template_directory() . '/languages' );
	}
);

/** Front-end stylesheet. */
add_action(
	'wp_enqueue_scripts',
	static function () {
		wp_enqueue_style( 'dhad-style', get_stylesheet_uri(), array(), DHAD_VERSION );
	}
);

/** Pattern categories. */
add_action(
	'init',
	static function () {
		register_block_pattern_category(
			'dhad',
			array(
				'label'       => __( 'ضاد', 'dhad' ),
				'description' => __( 'Arabic-first sections for blogs, magazines and stores.', 'dhad' ),
			)
		);
		register_block_pattern_category(
			'dhad-pages',
			array( 'label' => __( 'ضاد: صفحات كاملة', 'dhad' ) )
		);
	}
);

/** Block styles. */
add_action(
	'init',
	static function () {
		register_block_style(
			'core/quote',
			array(
				'name'         => 'dhad-marked',
				'label'        => __( 'علامة جانبية', 'dhad' ),
				'inline_style' => '.is-style-dhad-marked{border-inline-start:4px solid var(--wp--preset--color--accent);padding-inline-start:var(--wp--preset--spacing--40);border-inline-end:0}',
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'         => 'dhad-card',
				'label'        => __( 'بطاقة', 'dhad' ),
				'inline_style' => '.is-style-dhad-card{background:var(--wp--preset--color--surface);border:1px solid var(--wp--preset--color--line);border-radius:var(--wp--custom--radius);padding:var(--wp--preset--spacing--50)}',
			)
		);
		register_block_style(
			'core/post-title',
			array(
				'name'         => 'dhad-underline',
				'label'        => __( 'خط سفلي', 'dhad' ),
				'inline_style' => '.is-style-dhad-underline a{text-decoration:none;background:linear-gradient(var(--wp--preset--color--accent),var(--wp--preset--color--accent)) no-repeat 0 100%/0 2px;transition:background-size .2s}.is-style-dhad-underline a:hover{background-size:100% 2px}',
			)
		);
	}
);
