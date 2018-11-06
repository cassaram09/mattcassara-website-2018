  <!-- SECTION: Project Navigation -->

  <section class="section project-navigation -bg-grey">
      <div class="container">
        <div class="row">
          <div class="col-4">
            <div class="project-nav left"><?php next_post_link('%link', '&larr; Previous project'); ?></div>
          </div>
          <div class="col-4">
            <a href="<?php bloginfo('url'); ?>/projects/" class="project-nav__all">View all of our projects</a>
          </div>
          <div class="col-4">
            <div class="project-nav right"><?php previous_post_link('%link', 'Next project &rarr;'); ?></div>
          </div>
        </div>
      </div>
  </section>