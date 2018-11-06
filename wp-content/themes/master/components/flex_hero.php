<?php $type = get_sub_field('hero_type') ?> 

<?php if ( $type == 'home' ): ?>

  <!-- COMPONENT // HOME Hero -->
  <section class='section hero -home'>
    
    <div class='hero__content -home'>
      <div class='container'>

        <div class='row'>
          <div class='col-12'>
            <h1><?php the_sub_field('hero_title') ?></h1>
            <p class='hero__tagline'><?php the_sub_field('hero_subtitle') ?></p>

            <div class="button__block">
              <a href='<?php bloginfo('url'); ?>/about/' class='button -large -left-inline'>About &rarr;</a>
              <a href='<?php bloginfo('url'); ?>/projects/' class='button -large -left-inline'>Projects &rarr;</a>
            </div>
          </div>
        
        </div>
      </div>

    </div>

    <?php $image = get_sub_field('hero_image'); ?>

    <ul class='hero__slideshow -home cycle-slideshow' data-cycle-fx='fade' data-cycle-speed='8000' data-cycle-timeout='50' data-cycle-slides='> li'>
      <li style="background-image:url(<?php echo $image['url']; ?>);"></li>
    </ul>

  </section>

<?php endif; ?>

<?php if ( $type == 'standard' ): ?>

  <!-- COMPONENT // STANDARD Hero -->
  <section class='section hero -content'>

    <div class='hero__content -content'>
      <div class='container'>

        <div class='row'>
          <div class='col-12'>
            <h6><?php wp_title("",true)?></h6>
            <h1><?php the_sub_field('hero_text') ?></h1>
          </div>
        </div>

      </div>
    </div>

    <?php $image = get_sub_field('hero_image'); ?>

    <ul class="hero__slideshow -content cycle-slideshow" data-cycle-fx="fade" data-cycle-speed="8000" data-cycle-timeout="50" data-cycle-slides="> li">
      <li style="background-image:url(<?php echo $image['url']; ?>);"></li>
    </ul>

  </section>

<?php endif; ?>

<?php if ( $type == 'content' ): ?>

  <!-- COMPONENT // CONTENT Hero -->
  <section class='section hero -content'>

    <div class='hero__content -content'>
      <div class='container'>

        <div class='row'>
          <div class='col-12'>
            <h6><?php wp_title("",true)?></h6>
            <h3><?php the_sub_field('hero_text')?></h3>
          </div>
        </div>

      </div>
    </div>

    <?php $image = get_sub_field('hero_image'); ?>

    <ul class="hero__slideshow -content cycle-slideshow" data-cycle-fx="fade" data-cycle-speed="8000" data-cycle-timeout="50" data-cycle-slides="> li">
      <li style="background-image:url(<?php echo $image['url']; ?>);"></li>
    </ul>

  </section>

<?php endif; ?>

