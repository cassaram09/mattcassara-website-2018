<!-- COMPONENT // Recent Blog Posts -->
<?php $show_recent_posts = get_sub_field('show_recent_posts') ?> 

<?php if ( $show_recent_posts == true ): ?>

<section class='section blog__preview'>
  <div class='container'>

    <div class="row">
      <div class="col-12">
        <h3>Recent Thoughts</h3>
        <div class='line-break'></div>
      </div>
    </div>

    <div class='row'>
      <?php query_posts( 
        array( 
        'orderby' => 'date',
        'posts_per_page' => 2,
        'order' => 'DESC',
        'ignore_sticky_posts' => 1
        )
      ); ?>
    
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="col-6">
          <a href='<?php the_permalink(); ?>'>
            <div class="blog__preview--post-tile">
              <div class="blog__preview--image">
                <?php the_post_thumbnail(); ?>
              </div>
              <div class="blog__preview--content">
                <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
                <h4><?php the_title(); ?></h4>
                <p><?php $content = get_the_content(); echo wp_trim_words( $content , '20' ); ?></p>
                <p><a href='<?php the_permalink(); ?>' class="blog__readmore">Read &rarr;</a><p>
              </div>
            </div>
          </a>
        </div>

      <?php endwhile; endif; wp_reset_query(); ?>
    </div>

  </div>
</section>

<?php endif; ?>