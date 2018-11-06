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
          <h1>Search Results</h1>

        </div>
      </div>

    </div>
  </div>
</section>

<section class='blog-content'>

  <div class='container'>

    <div class="row">
      <div class="col-12">
        <p>You searched for:</p>
      </div>
    </div>

    <div class='row'>

      <div class='col-8'>

        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

              <article>
                <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                    <h3><?php the_title(); ?></h3>

                    <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
                    <div class="entry">
                        <?php the_excerpt(); ?>
                    </div>

                </div>
              </article>

            <?php endwhile; ?>

        <?php else : ?>

            <h2>No posts found.</h2>

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

<?php get_footer(); ?>

