<?php
/*
Template Name: About
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
          <h1 class='-light'>What's our deal?</h1>

        </div>
      </div>

    </div>
  </div>

  <ul class="hero__slideshow -content cycle-slideshow" data-cycle-fx="fade" data-cycle-speed="8000" data-cycle-timeout="50" data-cycle-slides="> li">
    <li style="background-image:url(<?php bloginfo('template_directory'); ?>/img/hero-test.jpg);"></li>
  </ul>

</section>

<!-- COMPONENT // Content -->
<section class='section content -bg-light'>
  <div class='content__overview container'>
    <div class='row'>
      <div class="col-1"></div>
      <div class="col-10">
        <h3>Dark Square Bishop was founded by siblings Matt and Allison Cassara, with the goal of providing meaningful and custom digital solutions with their complementing professional skillsets.</h3>
        <br>
        <h6>Made in Brooklyn.</h6>
        <p></p>
      </div>
      <div class="col-1"></div>
    </div>
  </div>
</section>

<?php include (TEMPLATEPATH . '/components/comp_team.php' ); ?>


<!-- 
<section class='section team -bg-grey'>
  <ul class="team__profile-blocks">

    <li>
      <div class='team__image cover' style="background-image:url(<?php bloginfo('template_directory'); ?>/img/team_bg.jpg);">
        <div class="team__profile-image">
          <img src='<?php bloginfo('template_directory'); ?>/img/team_matt.jpg' data-focus-left=".5" data-focus-top=".5" data-focus-right=".5" data-focus-bottom=".5" class="responsify">
        </div>
      </div>
      <div class='team__profile-details'>
        <div class='team__profile-details__inner'>
          <h4>Matt Cassara</h4>
          <h6>CEO & Lead Developer, Co-Founder</h6>
          <p>Matt is an adaptable full stack web developer specializing in Ruby and Javascript. He holds a B.S. in Business Administration and has over 5 years of experience working in various roles across a number of different fields, including marketing, project management, operations management, and web development.</p>
          <p>He also works as a Technical Coach at the prestigious Flatiron School in NYC, guiding students in the online programs through their various curriculum tracks.</p>
          <ul class="team__social">
            <li><a href="https://github.com/cassaram09"><span class="la la-github-alt"></span>cassaram09</a></li>
          </ul>
        </div>
      </div>
      <div class="clear"></div>
    </li>

    <li>
      <div class='team__image cover' style="background-image:url(<?php bloginfo('template_directory'); ?>/img/team_bg.jpg);">
        <div class="team__profile-image">
          <img src='<?php bloginfo('template_directory'); ?>/img/team_allison.jpg' data-focus-left=".5" data-focus-top=".5" data-focus-right=".5" data-focus-bottom=".5" class="responsify">
        </div>
      </div>
      <div class='team__profile-details'>
        <div class='team__profile-details__inner'>
          <h4>Allison Cassara</h4>
          <h6>Lead UI/UX Product Designer, Co-Founder</h6>
          <p>Allison is a Visual & UI/UX Designer with over 6 years of agency and professional freelance design experience, designing digital product experiences for responsive websites and mobile applications. She holds a BFA in Graphic Design, and has designed several award winning sites in the hospitality and science industries. She also provides front-end development support for client projects.</p>
          <p>In 2015, she was a featured artist in that year's release of Adobe InCopy CC.</p>
          <ul class="team__social">
            <li><a href="https://twitter.com/acassarawr"><span class="la la-twitter"></span>acassarawr</a></li>
            <li><a href="https://github.com/acassara"><span class="la la-github-alt"></span>acassara</a></li>
          </ul>
        </div>
      </div>
      <div class="clear"></div>
    </li>

  </ul>
  <div class="clear"></div>
</section> -->

<?php include (TEMPLATEPATH . '/components/flex_cta.php' ); ?>

<?php get_footer(); ?>