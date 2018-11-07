<!-- COMPONENT // Related Posts -->
<section class='section related -bg-grey'>

  <div class='container'>
    <div class='row'>

        <h4>Want more?</h4>

        <ul class="related__posts">

          <?php
            $orig_post = $post;
            global $post;
            $tags = wp_get_post_tags($post->ID);
             
            if ($tags) {
            $tag_ids = array();
            foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
            $args=array(
            'tag__in' => $tag_ids,
            'post__not_in' => array($post->ID),
            'posts_per_page'=>3, // Number of related posts to display.
            'caller_get_posts'=>1
            );
             
            $my_query = new wp_query( $args );
           
            while( $my_query->have_posts() ) {
            $my_query->the_post();
            ?>
             
              <li>
                <a rel="external" href="<? the_permalink()?>">
                  <div class="related__image">
                    <?php the_post_thumbnail(); ?>
                  </div>
                  <div class="related__content">
                    <h5><?php the_title(); ?></h5>
                    <p class="blog__readmore button">Read More</p>
                  </div>
                </a>
              </li>
             
            <? }
            }
            $post = $orig_post;
            wp_reset_query();
            ?>

          </ul>

    </div>
  </div>

</section>