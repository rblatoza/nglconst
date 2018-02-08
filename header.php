<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nglconst
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans|Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

 <?php 
//	$default 		= get_theme_mods();
//	echo "<pre>";
//	print_r( $default);
//	echo "</pre>";
?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nglconst' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			//the_custom_logo();
		//	if ( is_front_page() && is_home() ) : ?>
				<div class="jumbotron jumbotron-fluid">
  					<div class="container">
				  		<h1 class="display-5"><?php bloginfo( 'name' ); ?></h1>
				  		<p class="lead"><?php echo get_bloginfo( 'description', 'display' ); ?></p>
				  		<hr class="my-4">

						<nav id="site-navigation" class="main-navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'nglconst' ); ?></button>
							<?php
							wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
								) );
							?>
						</nav><!-- #site-navigation -->
					</div>
		</div><!-- .site-branding -->


	</header><!-- #masthead -->

	<div id="content" class="site-content">
