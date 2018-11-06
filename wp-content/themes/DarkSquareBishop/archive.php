<?php get_header(); ?>

<!-- COMPONENT // Hero -->
<section class='hero -about'>
  <div class='hero__content -about'>
    <div class='container'>

      <div class='row'>
        <div class='col-12'>

          <div class="hero__diamond">
            <div class="hero__diamond-inner">Blog</div>
          </div>
          <h1 class='-light'>Tidbits</h1>

        </div>
      </div>

    </div>
  </div>
</section>

<section class='blog-content'>

  <div class='container'>

    <div class='row'>

      <div class='col-8'>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
            <h3>
              <a href="<?php the_permalink() ?>">
                <?php the_title(); ?>
              </a>
            </h3>
            <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

            <?php if ( has_post_thumbnail()) : ?>
              <div class="blog__featured-image -preview">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                  <?php the_post_thumbnail(); ?>
                </a>
              </div>
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
