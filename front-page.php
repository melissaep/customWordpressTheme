<?php

/*
	Template Name: Front Page
*/

get_header();  ?>


<div class="main">
  <div class="container">

	<div class="gallery js-flickity">
	  <div class="gallery-cell"><img src="http://unsplash.it/400/400" alt=""></div>
	  <div class="gallery-cell"><img src="http://unsplash.it/400/400" alt=""></div>
	  <div class="gallery-cell"><img src="http://unsplash.it/400/400" alt=""></div>
	  <div class="gallery-cell"><img src="http://unsplash.it/400/400" alt=""></div>
	  <div class="gallery-cell"><img src="http://unsplash.it/400/400" alt=""></div>
	  <div class="gallery-cell"><img src="http://unsplash.it/400/400" alt=""></div>
	</div>
	
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>