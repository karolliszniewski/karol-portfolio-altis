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
}

/**
 * Register editor styles so the editor canvas matches the frontend.
 */
function setup(): void {
	add_editor_style( 'style.css' );
}

/**
 * Enqueue static assets.
 */
function enqueue_assets(): void {
	wp_enqueue_style( SLUG, get_stylesheet_uri() );
}
