<?php
/*
Template Name: Services
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
          <h1 class='-light'>Why choose us?</h1>
        </div>
      </div>

    </div>
  </div>

  <ul class="hero__slideshow -content cycle-slideshow" data-cycle-fx="fade" data-cycle-speed="8000" data-cycle-timeout="50" data-cycle-slides="> li">
    <li style="background-image:url(<?php bloginfo('template_directory'); ?>/img/hero-test.jpg);"></li>
  </ul>

</section>

<!-- COMPONENT // Content -->
<section class='section content -bg-grey'>
  <div class='content__overview container'>
    <div class='row'>
      <div class="col-1"></div>
      <div class="col-10">
        <h3>Working with you from start-to-finish, we create tailored products that are 100% custom and built with your business in mind.</h3>
        <h6>No outsourcing, no code bloat, no nonsense.</h6>
      </div>
      <div class="col-1"></div>
    </div>
  </div>
</section>

<!-- COMPONENT // Services -->
<section class='section services services__details -bg-light'>

  <div class='services__section container'>

    <!-- Service Row -->
    <div class='services__row row'>
      <div class="col-3">
        <div class='services__image'>
          <img src='<?php bloginfo('template_directory'); ?>/img/services/service_consulting.png' data-focus-left=".5" data-focus-top=".5" data-focus-right=".5" data-focus-bottom=".5" class="responsify">
        </div>
      </div>
      <div class="col-1"></div>
      <div class="col-8">
        <h4>Digital Product Consulting</h4>
        <p class='-dark'>Do you have an existing website or digital product that needs work or technical help, but you're not sure where to start? We can help provide insight into today's best practices for having an online presence. We can also assist with technical challenges, such as managing domains, hosting accounts, and social profiles.</p>
        <p><a href='<?php bloginfo('url'); ?>/contact/'>Let us help you out &rarr;</a></p>
      </div>

    </div>

    <!-- Service Row -->
    <div class='services__row row'>
      <div class="col-3">
        <div class='services__image'>
          <img src='<?php bloginfo('template_directory'); ?>/img/services/service_product-design.png' data-focus-left=".5" data-focus-top=".5" data-focus-right=".5" data-focus-bottom=".5" class="responsify">
        </div>
      </div>
      <div class="col-1"></div>
      
      <div class="col-8">
        <h4>Product Design</h4>
        <p class='-dark'>It is crucial to have a modern website if you want to be recognized and taken seriously by your customers.  We take the time to learn about your business goals, and design an original product that follows modern design trends, user experience guidelines, and accessibility requirements, all while listening your feedback along the way.</p>
        <p><a href='<?php bloginfo('url'); ?>/work/'>Check out our portfolio &rarr;</a></p>
      </div>


    </div>

    <!-- Service Row -->
    <div class='services__row row'>
      <div class="col-3">
        <div class='services__image'>
          <img src='<?php bloginfo('template_directory'); ?>/img/services/service_development.png' data-focus-left=".5" data-focus-top=".5" data-focus-right=".5" data-focus-bottom=".5" class="responsify">
        </div>
      </div>
      <div class="col-1"></div>
      <div class="col-8">
        <h4>Full-Stack Development</h4>
        <p class='-dark'>We specialize in developing beautiful, useable websites that fit your budget and needs while allowing you to stand out from the competition. We have extensive experience working with Wordpress, a variety of web hosting companies, and website builder platforms such as Squarespace. We also offer custom development solutions, using libraries like Ruby on Rails, Angular, and React.</p>
        <p><a href='<?php bloginfo('url'); ?>/contact/'>We'll find the right platform for you &rarr;</a></p>
      </div>

    </div>

  </div>

</section>

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
          $image = get_sub_field('icon_image')
    ?>
       <div class='col-3'>
        <div class="services__tile-detail">
          <div class="services__tile-icon">
            <img src='<?php echo $image['url']; ?>' alt='<?php echo $image['alt']; ?>' data-focus-left=".5" data-focus-top=".5" data-focus-right=".5" data-focus-bottom=".5" class="responsify">
          </div>
          <h6><?php the_sub_field('icon_text') ?></h6>
        </div>
      </div>

    <?php endwhile; endif; ?>

    </div>
  </div>
</section>


<!-- COMPONENT // Content -->
<section class='section content -bg-primary'>
  <div class='content__overview container'>
    <div class='row'>
      <div class="col-2"></div>
      <div class="col-8">
        <h4 class='-light'>Don't see a service that you're looking for?</h4>
        <p class='-light'>We understand that our clients may have special requests that require resources outside of our skillsets. We can leverage our close network of creative professionals in animation, photography, video editing, and development (to name a few) to assist with your next project.</p>
        <div class="button__block">
          <a href='#' class='button -large'>Get in touch &rarr;</a>
        </div>
      </div>
      <div class="col-2"></div>
    </div>
  </div>
</section>


<?php get_footer(); ?>