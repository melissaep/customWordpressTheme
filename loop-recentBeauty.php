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



        </div>
                              
            </div>

        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

    <?php else:  ?>
        [stuff that happens if there aren't any posts]
    <?php endif; ?>