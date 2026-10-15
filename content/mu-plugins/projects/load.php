<?php
/**
 * Projects module entrypoint.
 *
 * @package karol-projects
 */

namespace Karol\Projects;

require_once __DIR__ . '/inc/namespace.php';

add_action( 'altis.modules.init', __NAMESPACE__ . '\\register' );
