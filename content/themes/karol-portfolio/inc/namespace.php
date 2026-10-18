<?php
/**
 * Karol Portfolio theme functionality.
 *
 * @package karol-portfolio
 */

namespace Karol\Theme;

const SLUG = 'karol-portfolio';

/**
 * Wire up theme hooks.
 */
function bootstrap(): void {
	add_action( 'after_setup_theme', __NAMESPACE__ . '\\setup' );
	add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_assets' );
	add_filter( 'render_block', __NAMESPACE__ . '\\enqueue_component_styles', 10, 2 );
}

/**
 * Register editor styles so the editor canvas matches the frontend.
 */
function setup(): void {
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/css/chalkboard.css' );
}

/**
 * Enqueue static assets.
 */
function enqueue_assets(): void {
	wp_enqueue_style( SLUG, get_stylesheet_uri(), [], asset_version( 'style.css' ) );
	wp_register_style( SLUG . '-chalkboard', get_theme_file_uri( 'assets/css/chalkboard.css' ), [], asset_version( 'assets/css/chalkboard.css' ) );
}

/**
 * Version an asset by its file modification time.
 *
 * Any edit changes the version, which busts browser and Altis integrity-hash caches.
 *
 * @param string $relative_path Theme-relative path to the asset.
 * @return string The file mtime, or the theme version if the file is unreadable.
 */
function asset_version( string $relative_path ): string {
	$mtime = false;
	$path  = get_theme_file_path( $relative_path );

	if ( file_exists( $path ) ) {
		$mtime = filemtime( $path );
	}

	return (string) ( false !== $mtime ? $mtime : wp_get_theme()->get( 'Version' ) );
}

/**
 * Enqueue a component stylesheet only on pages where its block renders.
 *
 * @param string $html  The block's rendered HTML.
 * @param array  $block The parsed block.
 * @return string The unchanged HTML.
 */
function enqueue_component_styles( string $html, array $block ): string {
	$class_name = $block['attrs']['className'] ?? '';

	if ( 'core/group' === ( $block['blockName'] ?? '' ) && str_contains( $class_name, 'chalkboard' ) ) {
		wp_enqueue_style( SLUG . '-chalkboard' );
	}

	return $html;
}
