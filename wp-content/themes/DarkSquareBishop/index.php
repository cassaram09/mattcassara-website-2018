<?php get_header(); ?>

<!-- COMPONENT // Hero -->
<section class='hero -content'>
  <div class='hero__content -content'>
    <div class='container'>

      <div class='row'>
        <div class='col-12'>

          <h6><?php wp_title("",true)?></h6>
          <h1>The Latest</h1>

        </div>
      </div>

    </div>
  </div>

  <ul class="hero__slideshow -content cycle-slideshow" data-cycle-fx="fade" data-cycle-speed="8000" data-cycle-timeout="50" data-cycle-slides="> li">
    <li style="background-image:url(<?php bloginfo('template_directory'); ?>/img/hero_dsb_blog.jpg);"></li>
  </ul>

</section>

<section class='blog-content -bg-light'>

  <div class='container'>

    <div class='row'>

      <div class='col-8'>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
            
            <a href="<?php the_permalink() ?>">
              <h3><?php the_title(); ?></h3>
            </a>
            
            <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

            <?php if ( has_post_thumbnail()) : ?>
              <a class="blog__featured-image" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                <?php the_post_thumbnail(); ?>
              </a>
            <?php endif; ?>

            <div class="entry text">
              <?php the_excerpt(); ?>
              <p><a href='<?php the_permalink(); ?>'>Read more &rarr;</a></p>
            </div>

            <!-- <div class="postmetadata">
              <?php the_tags('Tags: ', ', ', '<br />'); ?>
              Posted in <?php the_category(', ') ?> | 
              <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
            </div> -->
          </article>

          <?php endwhile; ?>

        <?php else : ?>
            <h4>Not Found</h4>
        <?php endif; ?>

        <?php wpbeginner_numeric_posts_nav(); ?>

      </div>

      <div class='col-1'></div>

      <div class='col-3'>
        <?php get_sidebar(); ?>
      </div>

    </div>

  </div>

</section>

<?php get_footer();
