<!-- COMPONENT // Featured Project -->

<section class='section project__wrapper -bg-grey'>

  <ul class='project__blocks'>

  <?php $featured_project = get_sub_field('featured_project'); 

  if( $featured_project ): 
    $post = $featured_project;
    setup_postdata( $post ); 
  ?>

  <li>
    <div class='project__image'>
      <?php $image = get_field('featured_image'); $image_url = $image['sizes' ]['medium' ]; ?>
      <img src='<?php echo $image_url; ?>' data-focus-left='.5' data-focus-top='.5' data-focus-right='.5' data-focus-bottom='.5' class='responsify'>
    </div>
    <div class='project__details'>
      <div class='project__details__inner'>
        <h6><?php the_field('subtitle'); ?></h6>
        <h3><?php the_title(); ?></h3>
        <?php the_excerpt(); ?>
        <div class="button__block">
          <a href='<?php the_permalink(); ?>' class='button -small'>View this project &rarr;</a>
        </div>
      </div>
    </div>
  </li>

  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
  <?php endif; ?>

  </ul>

</section>