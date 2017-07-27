<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package unite
 */

get_header(); ?>

	<div id="primary" class="content-area col-sm-12 col-md-8 <?php echo of_get_option( 'site_layout' ); ?>">
		<main id="main" class="site-main" role="main">

			<?php $usefulDocs = new WP_Query('category_name=documents');
				if ($usefulDocs->have_posts()) :
					while ($usefulDocs->have_posts()) : $usefulDocs->the_post(); ?>

				<h3 class="h3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<div class="welcomeContent">
					<?php get_the_excerpt(); ?>
				</div>


			<?php endwhile; // end of the loop. ?>

		<?php endif;
			wp_reset_postdata();
		 ?>
		 
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
