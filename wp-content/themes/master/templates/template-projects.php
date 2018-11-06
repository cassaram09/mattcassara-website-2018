<?php
/*
Template Name: Projects
*/
?>

<?php get_header(); ?>

<!-- COMPONENT // Hero -->
<section class='section hero -content'>

  <div class='hero__content -content'>
    <div class='container'>

      <div class='row'>
        <div class='col-12'>

          <h6><?php wp_title("",true)?></h6>
          <h3>Every client project is a deeply customized approach  that utilizes research, collaboration, and execution.</h3>

        </div>
      </div>

    </div>
  </div>

  <ul class="hero__slideshow -content cycle-slideshow" data-cycle-fx="fade" data-cycle-speed="8000" data-cycle-timeout="50" data-cycle-slides="> li">
    <li style="background-image:url(<?php bloginfo('template_directory'); ?>/img/hero-test.jpg);"></li>
  </ul>

</section>

<!-- COMPONENT // Work Block -->
<section class='section work__wrapper -bg-grey'>
  <ul class="work__blocks">

    <?php query_posts( 'post_type=project&showposts=-1'); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <li>
      <div class='work__image'>
        <?php $image = get_field('featured_image'); $image_url = $image['sizes' ]['medium' ]; ?>
        <img src='<?php echo $image_url; ?>' data-focus-left=".5" data-focus-top=".5" data-focus-right=".5" data-focus-bottom=".5" class="responsify">
      </div>
      <div class='work__details'>
        <div class='work__details__inner'>
          <h6><?php the_field('subtitle'); ?></h6>
          <h3 class='-dark'><?php the_title(); ?></h3>
          <?php the_excerpt(); ?>
          <div class="button__block">
            <a href="<?php the_permalink(); ?>" class="button -small">View this project &rarr;</a>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </li>

    <?php endwhile; endif; ?>

  </ul>
  <div class="clear"></div>
</section>

<?php get_footer(); ?>