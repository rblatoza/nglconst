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
			if ( is_front_page() && is_home() ) : ?>
				<div class="jumbotron jumbotron-fluid">
  					<div class="container">
				  		<h1 class="display-5"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel	="home"><?php bloginfo( 'name' ); ?></a></h1>
				  		<p class="lead"><?php echo get_bloginfo( 'description', 'display' ); ?></p>
				  		<hr class="my-4">

						<?php get_template_part( 'template-parts/content', 'navigation' ); ?>

					</div>		
				</div>
			<?php else : ?>
				<div class="jumbotron jumbotron-fluid not_homepage">
  					<div class="container">
				  		<h3><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel	="home"><?php bloginfo( 'name' ); ?></a></h1>
				  		<p class="lead"><?php echo get_bloginfo( 'description', 'display' ); ?></p>
				  		<hr class="my-4">
						
						<?php get_template_part( 'template-parts/content', 'navigation' ); ?>
						
					</div>
			<?php 	endif; ?>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
