<!-- COMPONENT // All Projects -->

<?php if( get_sub_field('show_projects') ): ?> <!-- Checkbox -->

<section class='section project__wrapper -bg-grey'>
  <ul class="project__blocks">

    <?php query_posts( 'post_type=projects&showposts=-1'); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <li>

      <div class='project__image'>
        <?php $image = get_field('featured_image'); $image_url = $image['sizes' ]['large' ]; ?>
        <img src='<?php echo $image_url; ?>' data-focus-left=".5" data-focus-top=".5" data-focus-right=".5" data-focus-bottom=".5" class="responsify">
      </div>

      <div class='project__details'>
        <div class='project__details__inner'>
          <h6><?php the_field('subtitle'); ?></h6>
          <h3><?php the_title(); ?></h3>
          <?php the_excerpt(); ?>
          <div class="button__block">
            <a href="<?php the_permalink(); ?>" class="button -small">View this project &rarr;</a>
          </div>
        </div>
      </div>

      <div class="clear"></div>

    </li>

    <?php endwhile; endif; ?>

    <?php wp_reset_query(); ?>

  </ul>

  <div class="clear"></div>

</section>

<?php endif; ?>