<!-- COMPONENT // Team-->
<section class='section team -bg-grey'>

  <ul class="team__profile-blocks">

    <?php 
      if( have_rows('team') ):
        while ( have_rows('team') ) : the_row();
         
        $post = get_sub_field('team_member');
        setup_postdata( $post ); 
    ?>

    <?php $image = get_field('image'); $image_url = $image['sizes' ]['medium' ]; ?>

    <li>
      <div class='team__image'>
        <div class="team__profile-image">
          <img src='<?php echo $image_url; ?>' data-focus-left=".5" data-focus-top=".5" data-focus-right=".5" data-focus-bottom=".5" class="responsify">
        </div>
      </div>
      <div class='team__profile-details'>
        <div class='team__profile-details__inner'>
          <h4><?php the_title() ?></h4>
          <h6><?php the_field('role') ?></h6>
          <div><?php the_field('bio')?> </div>
          <ul class="team__social">
            <?php if( have_rows('team_social') ): ?>
              <?php while( have_rows('team_social') ): the_row(); ?>
                <li><a href="<?php the_sub_field('team_social_url')?>"><span class="la <?php the_sub_field('team_social_icon')?>"></span><?php the_sub_field('team_social_handle')?></a></li>
              <?php endwhile; ?>
            <?php endif; ?>
          </ul>
        </div>
      </div>
      <div class="clear"></div>
    </li>

    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

    <?php endwhile; endif; ?>
  </ul>
  <div class="clear"></div>
  
</section>