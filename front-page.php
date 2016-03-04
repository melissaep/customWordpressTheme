<?php

/*
	Template Name: Front Page
*/

get_header();  ?>


<div class="main">
  <div class="container">

	  
	
	<!-- Get posts only with a tag of 'Featured' -->
    
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <!-- <h2><?php the_title(); ?></h2> -->
      <!-- <?php the_content(); ?> -->

	<div class="featured-posts-gallery gallery">
		
      	<?php
              $featuredPostQuery = new WP_Query(
          		array(
                  'posts_per_page' => -1,
                  'tag' => 'featured',
                  'order' => 'ASC'
                  )
          ); ?>
			
			<!-- Start loop for featured flickity -->
          <?php if ( $featuredPostQuery->have_posts() ) : ?>

              <?php while ($featuredPostQuery->have_posts()) : $featuredPostQuery->the_post(); ?>
			

                  <div class="gallery-cell" id="<?php echo $post->post_name; ?>">
         			<img src="<?php echo hackeryou_get_thumbnail_url($post); ?>" alt="">
         			<div class="overlay">
         				<div class="tags">
         					<p>
         					<?php the_tags('', '<span>|</span>', ''); ?>
         					</p>
         				</div>

         				<div class="title">
         					<a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
         					  <?php the_title(); ?>
         					</a>
         				</div>

         				<div class="date">
         					<p>
         						<?php the_date('F j, Y'); ?>
         					</p>
         				</div>
         			</div>
         			                      
                  </div>

              <?php endwhile; ?>

              <?php wp_reset_postdata(); ?>

          <?php else:  ?>
              [stuff that happens if there aren't any posts]
          <?php endif; ?>

	</div> <!-- /.gallery -->
	
	<div class="recent">
          <!-- Loop for category posts -->
						
				<!-- FASHION -->
    		<?php get_template_part( 'loop', 'recentFashion' );	?>
          	
				<!-- BEAUTY -->
    		<?php get_template_part( 'loop', 'recentBeauty' );	?>

    		<!-- TRAVEL -->
    		<?php get_template_part( 'loop', 'recentTravel' );	?>

    		<!-- FOOD -->
    		<?php get_template_part( 'loop', 'recentFood' );	?>
          	

    </div> 
    <!-- End of recent div -->

    <?php endwhile; // end the loop?>



  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>