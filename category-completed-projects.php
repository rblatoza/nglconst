<?php
/**
 * Template Name: Completed Projects
 *
 *
 * @package nglconst
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		
		<?php
		//&posts_per_page=2&offset=0
		echo get_cat_ID(single_cat_title());
		$cat_id = get_cat_ID(single_cat_title('', False ));
		query_posts("cat={$cat_id}");
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1><?php echo single_cat_title() . " Projects"; ?> </h1>
			</header><!-- .page-header -->

			<?php while (have_posts()) : the_post(); ?>
				<div class="entry-content">
					 <?php nglconst_post_thumbnail(); ?>
					<h4><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<p><?php the_excerpt(); ?></p>

					<?php
						wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nglconst' ),
						'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->
			<?php endwhile;
			
			wp_reset_query();
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
