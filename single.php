<?php get_header(); ?>

<div class="main">
  <div class="container page">
    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div class="singlePost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h2 class="entry-title"><?php the_title(); ?></h2>

          <div class="category">
            <p><?php the_category('<span>|</span>'); ?></p>
          </div>

          <div class="date">
            <p><?php the_date(); ?></p>
          </div>

          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

          <section class="postFooter">
          <div>
            <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
          </div>
          <div>
            <p><?php the_tags('', '<span>|</span>', '<br>'); ?></p>
          </div>
          </section>
          
          <div class="entry-utility">
            <?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-utility -->
        </div><!-- #post-## -->

        <div id="nav-below" class="navigation entryNav">
          <div class="direction older">
            <p class="nav-previous">
              <?php previous_post_link('%link', '%title'); ?>
            </p>
          <i class="fa fa-angle-double-left"></i>
          </div>
          <div class="direction newer">
            <p class="nav-next direction newer">
              <?php next_post_link('%link', '%title'); ?>
            </p>
            <i class="fa fa-angle-double-right"></i>
          </div>
        </div><!-- #nav-below -->

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>