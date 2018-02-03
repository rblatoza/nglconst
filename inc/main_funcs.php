<?php
/**
 * Load files.
 *
 * @package nglconst
 */

// Load core functions.
require_once trailingslashit( get_template_directory() ) . '/inc/core.php';

// Load action hooks.
require_once trailingslashit( get_template_directory() ) . '/inc/action_hooks.php';

// Customizer additions.
require_once trailingslashit( get_template_directory() ) . '/inc/customizer.php';

?>