<!-- COMPONENT // Content -->
<section class='section content <?php the_sub_field('section_padding');?> <?php the_sub_field('section_color');?>'>
  <div class='content__overview container'>
    <div class='row'>
      <div class="col-1"></div>
      <div class="col-10">

        <?php the_sub_field('call_out_content') ?>

				<?php if( get_sub_field('show_button_block') ): ?>
	        <div class="button__block">
	        	<?php if( have_rows('button_block') ): ?>
	            <?php while( have_rows('button_block') ): the_row(); ?>

	            	<?php if(get_sub_field('button_type') == 'internal'){ ?>
	                <a href="<?php the_sub_field('internal_url'); ?>" class="button -large -center-inline"><?php the_sub_field('button_text'); ?></a>
	              <?php } if(get_sub_field('button_type') == 'external'){ ?>
	                <a href="<?php the_sub_field('external_url'); ?>" target="_blank" class="button -large -center-inline"><?php the_sub_field('button_text'); ?></a>
	              <?php } ?>

	            <?php endwhile; ?>
	          <?php endif; ?>
	        </div>
        <?php endif; ?>

      </div>
      <div class="col-1"></div>
    </div>
  </div>
</section>
