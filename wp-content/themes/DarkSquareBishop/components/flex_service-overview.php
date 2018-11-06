<?php $show_recent_posts = get_sub_field('show_service_overview') ?> 

<?php if ( $show_recent_posts == true ): ?>

<!-- COMPONENT // Service Overview -->
<section class='section services services__overview -bg-light'>

  <div class='container'>

    <div class='row'>
      <div class='col-12'>

        <h2>Our real-world industry experience can help your next  project succeed.</h2>
        <p>We have worked with clients in a range of industries, including real estate, law, hospitality, events, and technology.</p>
        <div class='line-break'></div>

      </div>
    </div>

    <div class='row'>
      <div class='col-4'>
        <div class='services__icon'>
          <img src='<?php bloginfo('template_directory'); ?>/img/services/service_consulting.png' data-focus-left='.5' data-focus-top='.5' data-focus-right='.5' data-focus-bottom='.5' class='responsify'>
        </div>
        <h5>Consulting</h5>
        <p>We can help you navigate through web property setups, maintenance, or provide the latest industry advice.</p>
      </div>

      <div class='col-4'>
        <div class='services__icon'>
          <img src='<?php bloginfo('template_directory'); ?>/img/services/service_product-design.png' data-focus-left='.5' data-focus-top='.5' data-focus-right='.5' data-focus-bottom='.5' class='responsify'>
        </div>
        <h5>Design</h5>
        <p>We take the time to learn about  your business goals, and design original products with your feedback.</p>
      </div>

      <div class='col-4'>
        <div class='services__icon'>
          <img src='<?php bloginfo('template_directory'); ?>/img/services/service_development.png' data-focus-left='.5' data-focus-top='.5' data-focus-right='.5' data-focus-bottom='.5' class='responsify'>
        </div>
        <h5>Development</h5>
        <p>We keep up with modern  best-practices, writing clean code that is responsive across OS’s and devices.</p>
      </div>
    </div>

    <div class='row'>
      <div class='col-12'>
        <div class="button__block -centered">
          <a href='<?php bloginfo('url'); ?>/services/' class='button -large -centered'>Get the nitty gritty details</a>
        </div>
      </div>
    </div>

  </div>

</section>

<?php endif; ?>