<?php get_header(); ?>

<div id='hero' class='hero' style='background-image: url("http:<?php bloginfo('template_directory'); ?>/img/home-bg_blue.png");' >
  <div class='hero__content -home'>
    <div class='container__wide'>
      <p class='hero__est'>Based in NYC | Est. 2016</p>
      <h1 class='hero__title'>A tiny team building digital  products with a big impact.</h1>
      <p class="hero__subtitle">We specialize in website design, front-end development,  and building mobile apps for the modern user.</p>

      <div class="hero__buttons">
        <a class='button -dark' href="<?php bloginfo('url'); ?>/work/">Our Work</a>
      </div>
    </div>
  </div>
</div>

<section class="work-block">
  <div class='work-block__inner'>
    <div class="work-block__image">
      <img src="https://www.cycleworld.com/sites/cycleworld.com/files/styles/1000_4x3/public/images/2017/08/harley-davidson-fat-bob-af.jpg">
    </div>

    <div class="work-block__content">
      <div class="work-block__content__inner">
      <h5>Featured Work</h5>
        <h2>I'm a real piece of work.</h2>
        <p>Lorem ipsum dolor sit amet, montes bibendum ornare adipiscing aliquam etiam, gravida nunc quam vel quam, praesent dui urna libero eu, imperdiet tincidunt in deserunt massa scelerisque massa, donec ac..</p>
        <a href="<?php the_permalink(); ?>" class="button small">View this project</a>
      </div>
    </div>
  </div>
</section>

<section class="work-block">
  <div class='work-block__inner'>
    <div class="work-block__image">
      <img src="https://www.cycleworld.com/sites/cycleworld.com/files/styles/1000_4x3/public/images/2017/08/harley-davidson-fat-bob-af.jpg">
    </div>

    <div class="work-block__content">
      <div class="work-block__content__inner">
      <h5>Featured Work</h5>
        <h2>I'm a real piece of work.</h2>
        <p>Lorem ipsum dolor sit amet, montes bibendum ornare adipiscing aliquam etiam, gravida nunc quam vel quam, praesent dui urna libero eu, imperdiet tincidunt in deserunt massa scelerisque massa, donec ac..</p>
        <a href="<?php the_permalink(); ?>" class="button small">View this project</a>
      </div>
    </div>
  </div>
</section>



<section class="clients">
  <div class='grid grid-pad'>

    <div class="grid">
      <div class="col-1-1">
        <h2 class='clients__title'>Our team has worked with clients such as:</h2>
      </div>
    </div>

    <div class="grid">
      <div class="col-1-1">
        <ul class="grid clients__logos">
          <li class='col-1-4 client__logos__logo'>
            <img src="<?php bloginfo('template_directory'); ?>/img/clients/client_the-allert-group.png">
          </li>
          <li class='col-1-4 client__logos__logo'>
            <img src="<?php bloginfo('template_directory'); ?>/img/clients/client_plansnap.png"></li>
          <li class='col-1-4 client__logos__logo'><img src="<?php bloginfo('template_directory'); ?>/img/clients/client_authenticid.png">
          </li>
          <li class='col-1-4 client__logos__logo'>
            <img src="<?php bloginfo('template_directory'); ?>/img/clients/client_upsilon.png">
          </li>
        </ul>
      </div>
    </div>

    <div class="grid">
      <div class="col-1-1">
        <div class="clients__buttons button-block centered">
          <a href="<?php bloginfo('url'); ?>/work/" class="button small">Check out our work</a>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="services">
  <div class="grid">

    <div class='grid grid-pad'>
      <div class="col-1-1">
        <h4 class='services__title'>Our Services</h4>
        <h2 class='services__subtitle'>Our product experience can help your next  project succeed and grow your business.</h2>
      </div>
    </div>

    <div class="grid grid-pad">
      <div class="col-1-3 services__item">
        <div class="service-icon">
          <span class="la la-sitemap"></span>
        </div>
        <h4 class='services__item__title'>Product Design</h4>
        <p class='services__item__text'>We take the time to learn about  your business goals, and design an  original product with your feedback.</p>
      </div>
      <div class="col-1-3 services__item">
        <div class="service-icon">
          <span class="la la-code-fork"></span>
        </div>
        <h4 class='services__item__title'>Front-End Development</h4>
        <p class='services__item__text'>We keep up with modern  best-practices, writing code that is responsive across OS’s and devices.</p>
      </div>
      <div class="col-1-3 services__item">
        <div class="service-icon">
          <span class="la la-mobile"></span>
        </div>
        <h4 class='services__item__title'>Mobile Apps</h4>
        <p class='services__item__text'>We build applications for Android  & iOS, following brand guidlines and  current industry standards.</p>
      </div>
    </div>

  </div>
</section>

<section class="cta">
  <div class="grid grid-pad">
    <div class='col-1-1'>
      <h2 class='cta__title'>Ready to start a project?</h2>
      <p class='cta__subtitle'>We're ready to help you out!</p>
      <div class="cta__buttons button-block centered">
        <a href="<?php bloginfo('url'); ?>/work/" class="button small">Contact Us Today</a>
      </div>
    </div>
  </div>
</section>






<section class='work-single-content' >
  <div class="grid grid-pad">
    <div class="col-8-12">
      <h2>I assisted with the redesign of their homepage to modernize the experience and encourage more leads.</h2>
      <p>Bride & Blossom approached me with a need to redesign key pages on their website to feel more modern, cohesive, and useable.</p>
    </div>
    <div class="col-1-12">
    </div>
    <div class="col-3-12">
      <p>Branding & Identity</p>
      <p>Branding & Identity</p>
      <p>Branding & Identity</p>
    </div>
  </div>
</section>

<section class='image-block' >
  <div class="grid grid-pad">
    <div class="col-1-1">
      <img id='moto' src="https://www.cycleworld.com/sites/cycleworld.com/files/styles/1000_4x3/public/images/2017/08/harley-davidson-fat-bob-af.jpg">
      <h4>Caption will go here</h4>
    </div>
  </div>
</section>





<?php get_footer();

