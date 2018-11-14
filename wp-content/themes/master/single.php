<?php get_header(); ?>

<!-- COMPONENT // Hero -->
<section class='hero -blog'>
  <div class='hero__content -blog'>
  </div>
</section>

<section class='blog-content -bg-light'>
  <div class='container'>

    <div class='row blog-content__header'>
      <div class='col-12'>
        <h1><?php the_title()?></h1>
        <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
      </div>
    </div>
 
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <!-- Post Image (Optional) -->
    <?php if ( has_post_thumbnail()) : ?>
    <div class="row">
      <div class='col-1'></div>
      <div class='col-10'>
                    
        <a class="blog__featured-image__single" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
          <?php the_post_thumbnail(); ?>
        </a>
            
      </div>
      <div class='col-1'></div>
    </div>
    <?php endif; ?>

    <div class='row'>
      <div class='col-12'>

        <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
            
          <div class="text -single">
            <?php the_content(); ?>
          </div>
          
          <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
          <?php edit_post_link('Edit post','','.'); ?>
            
        </article>

        <div class="tags"><?php the_tags( 'Tags: ', ' ', ''); ?></div>
      </div>
    </div>
    <?php endwhile; endif; ?>

  </div>
</section>

<?php include (TEMPLATEPATH . '/components/comp_related-posts.php' ); ?>

<?php get_footer(); ?>
