<!-- COMPONENT // Services -->
<section class='section services services__details -bg-light'>

  <div class='services__section container'>

    <?php 
      if( have_rows('service_rows') ):
        while ( have_rows('service_rows') ) : the_row();
          $image = get_sub_field('service_image'); $image_url = $image['sizes']['thumbnail'];
    ?>
    <!-- Service Row -->
    <div class='services__row row'>

      <div class="col-3">
        <div class='services__image'>
          <img src='<?php echo $image_url; ?>' alt='<?php echo $image['alt']; ?>' data-focus-left=".5" data-focus-top=".5" data-focus-right=".5" data-focus-bottom=".5" class="responsify">
        </div>
      </div>

      <div class="col-1"></div>
      
      <div class="col-8">
        <h4><?php the_sub_field('service_title') ?></h4>
        <p class='-dark'><?php the_sub_field('service_details') ?></p>
        <?php if ( get_sub_field('service_link_url') ): ?>
          <p><a href='<?php the_sub_field('service_link_url') ?>'><?php the_sub_field('service_link_text') ?></a></p>
        <?php endif; ?>
      </div>

    </div>

    <?php endwhile; endif; ?>

  </div>

</section>