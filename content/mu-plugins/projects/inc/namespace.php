<?php
/**
 * Projects module.
 *
 * @package karol-projects
 */

namespace Karol\Projects;

use function Altis\register_module;

/**
 * Register the module with Altis.
 */
function register(): void {
	register_module(
		'projects',
		dirname( __DIR__ ),
		'Projects',
		[
			'defaults' => [
				'enabled' => true,
			],
		],
		__NAMESPACE__ . '\\bootstrap'
	);
}

/**
 * Wire up module hooks when the module is enabled.
 */
function bootstrap(): void {
	add_action( 'init', __NAMESPACE__ . '\\register_content' );
}

/**
 * Register the project post type, taxonomy and meta.
 */
function register_content(): void {
	register_post_type(
		'project',
		[
			'labels'       => [
				'name'          => 'Projects',
				'singular_name' => 'Project',
			],
			'public'       => true,
			'has_archive'  => true,
			'menu_icon'    => 'dashicons-portfolio',
			'rewrite'      => [ 'slug' => 'work' ],
			'show_in_rest' => true,
			'supports'     => [ 'title', 'editor', 'excerpt', 'thumbnail' ],
		]
	);

	register_taxonomy(
		'project_tech',
		'project',
		[
			'labels'       => [
				'name'          => 'Tech',
				'singular_name' => 'Tech',
			],
			'public'       => true,
			'hierarchical' => false,
			'show_in_rest' => true,
		]
	);

	register_post_meta(
		'project',
		'project_url',
		[
			'type'              => 'string',
			'single'            => true,
			'show_in_rest'      => true,
			'sanitize_callback' => 'esc_url_raw',
		]
	);
}
