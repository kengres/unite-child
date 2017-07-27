<div class="mask"></div>
<?php 
$args = array('post_type' => 'my_homeImgs', 'posts_per_page' => 1);
$aboutPost = new WP_Query($args);
if( $aboutPost->have_posts()):
   while ($aboutPost->have_posts()): $aboutPost->the_post(); ?>

      <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
      <div class="home_image_inner" style="background-image: url('<?php echo $url; ?>')">
         <div class="kengres-title-wrapper">
            <h2 class="main-title text_upper"><?php the_title(); ?></h2>
         </div>
         <div class="img_post-content-wrapper hidden-xs clearfix">
            <div class="img_post-content">
               <?php the_content(); ?>
            </div>
         </div>
      </div>
<?php  endwhile;
endif;
wp_reset_postdata();
?>
