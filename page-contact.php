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

			<?php $formPost = new WP_Query('category_name=form&post_per_page=1');

	     	    if ($formPost->have_posts()) :

	     	    	while ($formPost->have_posts()) : $formPost->the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>


			<?php endwhile; // end of the loop. ?>

		<?php endif;
			wp_reset_postdata();
		 ?>
		<hr class="section-divider">
		<?php
	    	    $addInfo = new WP_Query('category_name=more_info&orderby=date&order=ASC');
	    	    if ($addInfo->have_posts()) :
	    	    	while ($addInfo->have_posts()) : $addInfo->the_post(); ?>
					<h4 class="myh4 text-success"><?php the_title(); ?></h4>
					<p class="text-big"><?php the_content(); ?></p>
			    	    
	    	    	<?php endwhile; ?>

	    	    <?php else: ?>
	    	    		<!-- no content found! -->

	    	    <?php endif;
	    	wp_reset_postdata(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
