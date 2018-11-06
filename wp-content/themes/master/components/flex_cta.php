<!-- COMPONENT // Call To Action -->
<section class='section content -bg-primary'>
  <div class='content__overview container'>
    <div class='row'>
      <div class="col-2"></div>
      <div class="col-8">
        <h4 class='-light'><?php the_sub_field('call_to_action_title'); ?></h4>
        <p class='-light'><?php the_sub_field('call_to_action_text'); ?></p>
        <div class="button__block">
          <a href='<?php the_sub_field('call_to_action_link'); ?>' class='button -large'>Get in touch &rarr;</a>
        </div>
      </div>
      <div class="col-2"></div>
    </div>
  </div>
</section>
