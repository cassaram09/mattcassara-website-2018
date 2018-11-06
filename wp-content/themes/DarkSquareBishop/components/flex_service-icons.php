<!-- COMPONENT // Services -->
<section class='section services services__tiles -bg-grey'>
  <div class='container'>

    <div class='row'>
      <div class="col-12">
        <h3>Core solutions we offer</h3>
      </div>
    </div>

    <div class='row'>
    <?php 
      if( have_rows('service_icons') ):
        while ( have_rows('service_icons') ) : the_row();
          $image = get_sub_field('icon_image'); $image_url = $image['sizes']['thumbnail'];
    ?>
       <div class='col-3'>
        <div class="services__tile-detail">
          <div class="services__tile-icon">
            <img src='<?php echo $image_url ?>' alt='<?php echo $image['alt']; ?>' data-focus-left=".5" data-focus-top=".5" data-focus-right=".5" data-focus-bottom=".5" class="responsify">
          </div>
          <h6><?php the_sub_field('icon_text') ?></h6>
        </div>
      </div>

    <?php endwhile; endif; ?>

    </div>
  </div>
</section>