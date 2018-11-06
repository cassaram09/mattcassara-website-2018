<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

  <!-- COMPONENT // WORK Hero -->
  <section class='section hero -work'>
    
    <div class='hero__content -work u-prevent-jump'>
      <div class='container'>

        <div class='row'>
          <div class='col-12'>
            <h1><?php the_title()?></h1>
          </div>
        </div>

      </div>
    </div>

  	<ul class="hero__slideshow -work cycle-slideshow" data-cycle-fx='fade' data-cycle-speed='8000' data-cycle-timeout='50' data-cycle-slides='> li'>
  		<?php $image = get_field('featured_image'); $image_url = $image[ 'sizes' ][ 'large' ]; ?>
      <li style="background-image:url('<?php echo $image_url; ?>');"></li>
  	</ul>

  </section>

  <!-- COMPONENT // Content -->
	<section class="section content -padding100px -bg-grey">
		<div class="container">

				<div class="row">
					<div class="col-8">
						<h6><?php the_field('subtitle'); ?></h6>
						<h3><?php the_field('project_overview')?></h3>
					</div>
					<div class="col-1"></div>
					<div class="col-3">
						<?php if (get_field('website_link')){?>
							<a href="<?php the_field('website_link')?>" class="button -large" target="_blank"><?php the_field('button_link_text')?> <span>&rarr;</span></a>
						<? } ?>
					</div>
				</div>
			</div>
	</section>

  <!-- COMPONENT // Content -->
	<section class="section content -padding50px -bg-light">
			<div class="container">
				<div class="row">

					<div class="col-8 work__content">
						<h5>Overview</h5>
						<?php the_content(); ?>
					</div>

					<div class="col-1"></div>

					<div class="col-3">
						<h5>Scope</h5>
						<ul class="work__scope">
							<?php global $post; foreach(get_the_tags($post->ID) as $tag) { echo '<li>' . $tag->name . '</li>'; } ?>
						</ul>
					</div>

				</div>
			</div>
	</section>

	<?php include (TEMPLATEPATH . '/components/comp_project-content.php' ); ?>
	<?php include (TEMPLATEPATH . '/components/comp_project-navigation.php' ); ?>


<?php endwhile; endif; ?>

<?php get_footer(); ?>