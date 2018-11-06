<!-- COMPONENT // Clients -->
<section class='section clients -bg-grey'>

  <div class='container'>

    <div class='row'>
      <div class='col-12'>
        <ul class='clients__logos'>

          <!-- Set up repeater -->
          <?php 
            if( have_rows('client_logos') ):
              while ( have_rows('client_logos') ) : the_row();
          ?>

              <!-- Set up post object -->
              <?php $project_logo_image = get_sub_field('project_logo_image'); 

              if( $project_logo_image ): 
                $post = $project_logo_image;
                setup_postdata( $post ); 
              ?>

              <li>
                <a href='<?php the_permalink(); ?>'>
                  <?php $image = get_field('project_logo'); $image_url = $image['sizes' ]['medium' ]; ?>
                  <img src='<?php echo $image_url; ?>' data-focus-left='.5' data-focus-top='.5' data-focus-right='.5' data-focus-bottom='.5' class='responsify'>
                </a>
              </li>

              <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
              <?php endif; ?>

          <?php endwhile; endif; ?>

        </ul>
      </div>
    </div>

  </div>

</section>