<!-- COMPONENT // Testimonials -->
<section class='section testimonials -bg-light'>
  <div class="container">
    <div class="row">

    <div class="col-12">      

        <ul class="cycle-testimonials" data-cycle-slides="> li" data-cycle-pager=".testimonial-pager" data-cycle-speed="1000" data-cycle-timeout="6000">

          <?php if( have_rows('testimonials') ): ?>
            <?php while( have_rows('testimonials') ): the_row(); ?>

              <li>

                <?php $post_object = get_sub_field('testimonial_post'); if( $post_object ): 
                // override $post
                $post = $post_object; setup_postdata( $post ); ?>

                    <?php the_content(); ?>
                    <h6><?php the_field('credit'); ?></h6>

                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

                <?php endif; ?>

              </li>
              
            <?php endwhile; ?>
          <?php endif; ?>

        </ul>

        <div class="testimonial-pager"></div>

      </div>
    </div>
  </div>
</section>

