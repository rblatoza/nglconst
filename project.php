<?php  
/**
* Template Name: Projects
*
* @package nglconst
*/

?>

<?php
/**
 * Template Name: Current Projects
 *
 *
 * @package nglconst
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		
		<?php

		$args = array(
			'post_type' => 'project'
		);

		$query = new WP_Query( $args );

		if ( $query->have_posts() ) : ?>
			<div class="container">
				<header class="page-header">
					<h1><?php echo single_cat_title() ; ?> </h1>
				</header><!-- .page-header -->
				<div class="row">
					<?php while ($query->have_posts()) : $query->the_post(); ?>
						<div class="col col-md-4 center">
							<a href="<?php echo the_permalink(); ?>"><?php the_post_thumbnail('nglconst-small'); ?></a>
							<h5><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h5>
							<p>Location: <?php the_field('location'); ?></p>
						</div><!-- col -->
					<?php endwhile;
					wp_reset_query();
					the_posts_navigation(); ?>
				</div>
			</div>
			<?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
