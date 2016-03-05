<?php

/*
	Template Name: Front Page
*/

get_header();  ?>


<div class="main">

    
  
  <!-- Get posts only with a tag of 'Featured' -->
    
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <!-- <h2><?php the_title(); ?></h2> -->
      <!-- <?php the_content(); ?> -->
<section class="featured">
  <div class="container">
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
    </div> <!-- /.container -->
    <div class="background"></div>
	</section>

	<section class="recent">
    <div class="container">
    <p class="heading">Our recent posts in...</p>
      <div class="categories">
        <!-- Loop for category posts -->
          <div class="mostRecentGrouping">
            <div class="recentTitle">
              <h3>Fashion</h3>
              <div class="line"></div>

            </div>
                    <!-- FASHION -->
                            <?php
                                  $fashionPostQuery = new WP_Query(
                                  array(
                                      'posts_per_page' => 1,
                                      'category_name' => 'fashion',
                                      'order' => 'ASC'
                                      )
                              ); ?>
                    
                              <?php if ( $fashionPostQuery->have_posts() ) : ?>
                    
                                  <?php while ($fashionPostQuery->have_posts()) : $fashionPostQuery->the_post(); ?>
                    
                    
                                      <div class="mostRecent" id="<?php echo $post->post_name; ?>">
                    
                                  <div class="image">
                                    <img src="<?php echo hackeryou_get_thumbnail_url($post); ?>" alt="">
                                  </div>
                    
                                  <div class="overlay">
                    
                                    <div class="title">
                                      <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
                                        <?php the_title(); ?>
                                      </a>
                                      <p>
                                        <?php the_date('F j, Y'); ?>
                                      </p>
                                    </div>
                    
                                    <div class="tags">
                                      <p>
                                      <!-- <?php the_tags('', '<span>|</span>', ''); ?> -->
                                      <?php
                                      $posttags = get_the_tags();
                                      $count=0;
                                      if ($posttags) {
                                        foreach($posttags as $tag) {
                                          $count++;
                                          echo '<a class="tag" href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a>';
                                          if( $count > 2 ) break;
                                        }
                                      }
                                      ?>
                                      </p>
                                    </div>

                                    <a href="<?php the_permalink(); ?>" class="button">Read More</a>

                    
                    
                    
                                  </div>
                                                        
                                      </div>
                    
                                  <?php endwhile; ?>
                    
                                  <?php wp_reset_postdata(); ?>
                    
                              <?php else:  ?>
                                  [stuff that happens if there aren't any posts]
                              <?php endif; ?>
                  </div>
                      
                  <!-- BEAUTY -->
                  <div class="mostRecentGrouping">
                    <div class="recentTitle">
                            <h3>Beauty</h3>
                            <div class="line"></div>
                            </div>
                    
                            <?php
                                  $beautyPostQuery = new WP_Query(
                                  array(
                                      'posts_per_page' => 1,
                                      'category_name' => 'beauty',
                                      'order' => 'ASC'
                                      )
                              ); ?>
                    
                              <?php if ( $beautyPostQuery->have_posts() ) : ?>
                    
                                  <?php while ($beautyPostQuery->have_posts()) : $beautyPostQuery->the_post(); ?>
                    
                    
                                      <div class="mostRecent" id="<?php echo $post->post_name; ?>">
                    
                                  <div class="image">
                                    <img src="<?php echo hackeryou_get_thumbnail_url($post); ?>" alt="">
                                  </div>
                    
                                  <div class="overlay">
                    
                                    <div class="title">
                                      <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
                                        <?php the_title(); ?>
                                      </a>
                                      <p>
                                        <?php the_date('F j, Y'); ?>
                                      </p>
                                    </div>
                    
                                    <div class="tags">
                                      <p>
                                      <?php
                                      $posttags = get_the_tags();
                                      $count=0;
                                      if ($posttags) {
                                        foreach($posttags as $tag) {
                                          $count++;
                                          echo '<a class="tag" href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a>';
                                          if( $count > 2 ) break;
                                        }
                                      }
                                      ?>
                                      </p>
                                    </div>
                    
                                    <a href="<?php the_permalink(); ?>" class="button">Read More</a>
                                    
                    
                                  </div>
                                                        
                                      </div>
                    
                                  <?php endwhile; ?>
                    
                                  <?php wp_reset_postdata(); ?>
                    
                              <?php else:  ?>
                                  [stuff that happens if there aren't any posts]
                              <?php endif; ?>
                      </div>
                  <!-- TRAVEL -->
                  <div class="mostRecentGrouping">
                      <div class="recentTitle">
                            <h3>Travel</h3>
                            <div class="line"></div>

                            </div>
                    
                            <?php
                                  $travelPostQuery = new WP_Query(
                                  array(
                                      'posts_per_page' => 1,
                                      'category_name' => 'travel',
                                      'order' => 'ASC'
                                      )
                              ); ?>
                    
                              <?php if ( $travelPostQuery->have_posts() ) : ?>
                    
                                  <?php while ($travelPostQuery->have_posts()) : $travelPostQuery->the_post(); ?>
                    
                    
                                      <div class="mostRecent" id="<?php echo $post->post_name; ?>">
                    
                                  <div class="image">
                                    <img src="<?php echo hackeryou_get_thumbnail_url($post); ?>" alt="">
                                  </div>
                    
                                  <div class="overlay">
                    
                                    <div class="title">
                                      <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
                                        <?php the_title(); ?>
                                      </a>
                                      <p>
                                        <?php the_date('F j, Y'); ?>
                                      </p>
                                    </div>
                    
                                    <div class="tags">
                                      <p>
                                      <!-- <?php the_tags('', '<span>|</span>', ''); ?> -->
                                      <?php
                                      $posttags = get_the_tags();
                                      $count=0;
                                      if ($posttags) {
                                        foreach($posttags as $tag) {
                                          $count++;
                                          echo '<a class="tag" href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a>';
                                          if( $count > 2 ) break;
                                        }
                                      }
                                      ?>
                                      </p>
                                    </div>

                                    <a href="<?php the_permalink(); ?>" class="button">Read More</a>

                    
                    
                    
                                  </div>
                                                        
                                      </div>
                    
                                  <?php endwhile; ?>
                    
                                  <?php wp_reset_postdata(); ?>
                    
                              <?php else:  ?>
                                  [stuff that happens if there aren't any posts]
                              <?php endif; ?>
                              </div>
                  <!-- FOOD -->
                  <div class="mostRecentGrouping">
                      <div class="recentTitle">
                            <h3>Food</h3>
                            <div class="line"></div>

                        </div>
                    
                            <?php
                                  $foodPostQuery = new WP_Query(
                                  array(
                                      'posts_per_page' => 1,
                                      'category_name' => 'food',
                                      'order' => 'ASC'
                                      )
                              ); ?>
                    
                              <?php if ( $foodPostQuery->have_posts() ) : ?>
                    
                                  <?php while ($foodPostQuery->have_posts()) : $foodPostQuery->the_post(); ?>
                    
                    
                                      <div class="mostRecent" id="<?php echo $post->post_name; ?>">
                    
                                  <div class="image">
                                    <img src="<?php echo hackeryou_get_thumbnail_url($post); ?>" alt="">
                                  </div>
                    
                                  <div class="overlay">
                    
                                    <div class="title">
                                      <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
                                        <?php the_title(); ?>
                                      </a>
                                      <p>
                                        <?php the_date('F j, Y'); ?>
                                      </p>
                                    </div>
                    
                                    <div class="tags">
                                      <p>
                                      <!-- <?php the_tags('', '<span>|</span>', ''); ?> -->
                                      <?php
                                      $posttags = get_the_tags();
                                      $count=0;
                                      if ($posttags) {
                                        foreach($posttags as $tag) {
                                          $count++;
                                          echo '<a class="tag" href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a>';
                                          if( $count > 2 ) break;
                                        }
                                      }
                                      ?>
                                      </p>
                                    </div>

                                    <a href="<?php the_permalink(); ?>" class="button">Read More</a>

                    
                    
                    
                                  </div>
                                                        
                                      </div>
                    
                                  <?php endwhile; ?>
                    
                                  <?php wp_reset_postdata(); ?>
                    
                              <?php else:  ?>
                                  [stuff that happens if there aren't any posts]
                              <?php endif; ?>
                              </div>
        </div>
    </div> <!-- /.container -->
    </section> <!-- /.recent --> 
    
    <section class="instagram">
      <h3>The latest on our instagram</h3>
      <div class="background"></div>
      <div class="feed">
        <?php the_content(); ?>
      </div>
    </section>
    <?php endwhile; // end the loop?>



</div> <!-- /.main -->

<?php get_footer(); ?>