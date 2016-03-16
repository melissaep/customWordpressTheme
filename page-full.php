<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>

<div class="main pageFull">
  <div class="container">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <div class="mainContent">
		<div class="innerWrapper">
			<?php if ( has_post_thumbnail() ) : ?>      
			      <figure>
			      	<img src="<?php echo hackeryou_get_thumbnail_url($post);?>" alt="">
			      </figure>
		    <?php endif; ?>
	      <?php the_content(); ?>
		</div>
	  </div>
    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>