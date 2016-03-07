<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Not Found</h1>
		<section class="entry-content">
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>

<?php while ( have_posts() ) : the_post(); ?>

		<article class="postPreview" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="date">
			<p><?php the_date(); ?></p>
		</div>
			<h3 class="entry-title">
        <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
          <?php the_title(); ?>
        </a>
      </h3>
      <div class="category">
      	<p><?php the_category('<span>|</span>'); ?></p>
      </div>

			<section class="entry-content">
				<img src="<?php echo hackeryou_get_thumbnail_url(); ?>" alt="">
				<?php the_excerpt(); ?>
				<?php wp_link_pages( array(
          'before' => '<div class="page-link"> Pages:',
          'after' => '</div>'
        )); ?>
			</section><!-- .entry-content -->

			<section class="postFooter">
			<div>
				<a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
			</div>
			<div>
				<p><?php the_tags('', '<span>|</span>', '<br>'); ?></p>
			</div>
        <!-- <p><?php comments_popup_link('Respond to this post &raquo;', '1 Response &raquo;', '% Responses &raquo;'); ?></p> -->
        <!-- <p><?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?></p> -->
			</section>

		</article><!-- #post-## -->

		<?php comments_template( '', true ); ?>


<?php endwhile; // End the loop. Whew. ?>

<?php // Display navigation to next/previous pages when applicable ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <div class="entryNav">
  	<div class="older direction">
  		<p class="alignleft"><?php next_posts_link('Older Posts<i class="fa fa-angle-double-left"></i>'); ?></p>
  	</div>
  	<div class="newer direction">
  		<p class="alignright"><?php previous_posts_link('Newer Posts<i class="fa fa-angle-double-right"></i>'); ?></p>
  	</div>
  </div>
<?php endif; ?>
