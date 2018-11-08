<section class="footer">

  <div class='container'>

    <div class='row'>
      
      <div class='col-6'>
        <div class="footer__credits">
          © <?php echo date("Y") ?> Matt Cassara. All rights reserved.
        </div>
      </div>

      <div class='col-4'>
          <!-- Sitemap -->
          <!-- <ul class="footer__sitemap">
            <?php wp_nav_menu( array( 'menu' => 'footer site map', 'sort_column' => 'menu_order', 'container' => '', 'items_wrap' => '%3$s' ) ); ?>
          </ul> -->
      </div>

      <div class='col-2'>
        <!-- Social -->
          <ul class="footer__social">
            <?php if (get_field('github' , 'option')): ?>
            <li>
              <a href="<?php the_field('github' , 'option'); ?>" class="-github transition" target="_blank"></a>
            </li>
            <?php endif; ?>

            <?php if (get_field('linkedin' , 'option')): ?>
            <li>
              <a href="<?php the_field('linkedin' , 'option'); ?>" class="-linkedin transition" target="_blank"></a>
            </li>
            <?php endif; ?>
          </ul>
      </div>
    </div>

  </div>
  
</section>

<?php wp_footer(); ?>

<script type="text/javascript" src='<?php bloginfo('template_directory'); ?>/js/jquery.customSelect.min.js'></script>
<script type="text/javascript" src='<?php bloginfo('template_directory'); ?>/js/jquery.viewportchecker.js'></script>