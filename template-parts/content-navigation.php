<?php
/**
 * Template part for displaying the navigation
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nglconst
 */

?>


<nav id="site-navigation" class="main-navigation">
    <button class="menu-toggle btn btn-primary" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'nglconst' ); ?></span></button>
    <?php
    wp_nav_menu( array(
    'theme_location' => 'menu-1',
    'menu_id'        => 'primary-menu',
        ) );
    ?>
</nav><!-- #site-navigation -->