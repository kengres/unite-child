<?php

 get_header(); ?>
	 
	<div id="primary" class="content-area col-sm-12 col-md-12">

		<main id="main" class="site-main" role="main">
			<div class="row">
				<div class="col-sm-12 col-md-7">
					<div class="welcomeText">
						<?php 
							$welcomePost = new WP_Query('category_name=welcome&post_per_page=1');
								if ($welcomePost->have_posts()) :
									while ($welcomePost->have_posts()) : $welcomePost->the_post(); ?>
									<h3 class="myh3 text-info"><?php the_title(); ?></h3>
									<div class="welcomeContent">
										<?php the_content(); ?>
									</div>
								<?php endwhile; ?>
									<?php else:
										//fallback

								    endif; ?>

							<?php wp_reset_postdata(); ?>
					</div> <!-- end of welcomeText-->
				</div>
				
				<div class="col-sm-12 col-md-5">
					<div class="recentNews">
						<h2 class="text-muted">Последние новости</h2>
					  	<?php $homeNewsPosts = new WP_Query('category_name=news');
							if ($homeNewsPosts->have_posts()) :
								while ($homeNewsPosts->have_posts()) : $homeNewsPosts->the_post(); ?>

						<article>
							<div class="article-content">
								<h4 class="text-info"><?php the_title(); ?>
									<small class=""><i><time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php echo get_the_date('d/m/Y', '','', FALSE); ?></time> </i></small>
								</h4>
								<?php the_content(); ?>
								<?php
									wp_link_pages( array(
										'before' => '<div class="page-links">' . __( 'Pages:', 'unite' ),
										'after'  => '</div>',
									) );
								?>
							</div><!-- .entry-content -->
							<?php edit_post_link( __( 'Edit', 'unite' ), '<footer class="entry-meta"><i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span></footer>' ); ?>
							<hr class="section-divider">
						</article><!-- #post-## -->

							<div class="home-widget-area row">

								<div class="col-sm-6 col-md-4 home-widget">
									<?php if( is_active_sidebar('home1') ) dynamic_sidebar( 'home1' ); ?>
								</div>

								<div class="col-sm-6 col-md-4 home-widget">
									<?php if( is_active_sidebar('home2') ) dynamic_sidebar( 'home2' ); ?>
								</div>

								<div class="col-sm-6 col-md-4 home-widget">
									<?php if( is_active_sidebar('home3') ) dynamic_sidebar( 'home3' ); ?>
								</div>

							</div>

						<?php endwhile; ?>		
					
						<?php else : ?>

						<?php endif; // end of the loop. ?>
						<?php wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	get_footer();
?>