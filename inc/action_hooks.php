<?php
/**
 * Load hooks.
 *
 * @package nglconst
 */

//=============================================================
// Doctype hook of the theme
//=============================================================
if ( ! function_exists( 'nglconst_doctype_action' ) ) :
    /**
     * Doctype declaration of the theme.
     *
     * @since 1.0.0
     */
    function nglconst_doctype_action() {
    ?><!DOCTYPE html> <html <?php language_attributes(); ?>><?php
    }
endif;

add_action( 'nglconst_doctype', 'nglconst_doctype_action', 10 );

?>