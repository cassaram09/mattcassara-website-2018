<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<!-- COMPONENT // Hero -->
<section class='section hero -home'>
	
	<div class='hero__content -home'>
		<div class='container'>

			<div class='row'>
				<div class='col-12'>
					<h6>EST 2016</h6>
					<h1>We’re a nimble team that makes thoughtful design & development decisions.</h1>
					<p class='hero__tagline'>We specialize in creating digital products for modern users and businesses.</p>

					<div class="button__block">
						<a href='<?php bloginfo('url'); ?>/services/' class='button -large -inline'>Our services &rarr;</a>
						<a href='<?php bloginfo('url'); ?>/projects/' class='button -large -inline'>Our projects &rarr;</a>
					</div>
				</div>
			
			</div>
		</div>

	</div>

	<ul class='hero__slideshow -home cycle-slideshow' data-cycle-fx='fade' data-cycle-speed='8000' data-cycle-timeout='50' data-cycle-slides='> li'>
		<li style='background-image:url(<?php bloginfo('template_directory'); ?>/img/chess_slide2.jpg);'></li>
		<li style='background-image:url(<?php bloginfo('template_directory'); ?>/img/chess_slide1.jpg);'></li>
	</ul>

</section>

<!-- COMPONENT // Services -->
<section class='section services services__overview -bg-light'>

	<div class='container'>

		<div class='row'>
			<div class='col-12'>

				<h2>Our real-world industry experience can help your next  project succeed.</h2>
				<p>Our team has worked with clients in a range of industries, including real estate, law, hospitality, events, and technology.</p>
				<div class='line-break'></div>

			</div>
		</div>

		<div class='row'>
			<div class='col-4'>
				<div class='services__icon'>
      		<img src='<?php bloginfo('template_directory'); ?>/img/services/service_consulting.png' data-focus-left='.5' data-focus-top='.5' data-focus-right='.5' data-focus-bottom='.5' class='responsify'>
      	</div>
				<h5>Digital Consulting</h5>
				<p>We can help you navigate through web property setups, maintenance, or provide the latest industry advice.</p>
			</div>

			<div class='col-4'>
				<div class='services__icon'>
      		<img src='<?php bloginfo('template_directory'); ?>/img/services/service_product-design.png' data-focus-left='.5' data-focus-top='.5' data-focus-right='.5' data-focus-bottom='.5' class='responsify'>
      	</div>
				<h5>Product Design</h5>
				<p>We take the time to learn about  your business goals, and design original products with your feedback.</p>
			</div>

			<div class='col-4'>
				<div class='services__icon'>
      		<img src='<?php bloginfo('template_directory'); ?>/img/services/service_development.png' data-focus-left='.5' data-focus-top='.5' data-focus-right='.5' data-focus-bottom='.5' class='responsify'>
      	</div>
				<h5>Front-End Development</h5>
				<p>We keep up with modern  best-practices, writing clean code that responsive across OS’s and devices.</p>
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

<!-- COMPONENT // Work Block -->
<section class='section work__wrapper -bg-grey'>
  <ul class='work__blocks'>

    <?php query_posts( 'post_type=project&showposts=1'); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <li>
      <div class='work__image'>
        <?php $image = get_field('featured_image'); $image_url = $image['sizes' ]['medium' ]; ?>
        <img src='<?php echo $image_url; ?>' data-focus-left='.5' data-focus-top='.5' data-focus-right='.5' data-focus-bottom='.5' class='responsify'>
      </div>
      <div class='work__details'>
        <div class='work__details__inner'>
          <h6><?php the_field('subtitle'); ?></h6>
          <h3><?php the_title(); ?></h3>
          <?php the_excerpt(); ?>
          <div class="button__block">
          	<a href='<?php the_permalink(); ?>' class='button -small'>View this project &rarr;</a>
        	</div>
        </div>
      </div>
      <div class='clear'></div>
    </li>

    <?php endwhile; endif; ?>

  </ul>
  <div class='clear'></div>
</section>

<?php include (TEMPLATEPATH . '/components/comp_testimonials.php' ); ?>


<section class='section blog__preview -bg-grey'>
  <div class='container'>
<div class='row'>
      <div class='col-12'>
        <div class="button__block -centered --no-margin">
          <a href='<?php bloginfo('url'); ?>/services/' class='button -large '>Get the nitty gritty details</a>
        </div>
      </div>
    </div>
</div>
</section>
<!-- <section class='section blog__preview -bg-grey'>
	<div class='container'>

		<div class="row">
			<div class="col-12">
				<h3>Recent Thoughts</h3>
				<div class='line-break'></div>
			</div>
		</div>

		<div class='row'>
				<?php query_posts( 
          array( 
          'orderby' => 'date',
          'posts_per_page' => 2,
          'order' => 'DESC',
          'ignore_sticky_posts' => 1
          )
        ); ?>
      
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        	<div class="col-6">
        		<a href='<?php the_permalink(); ?>'>
		        	<div class="blog__preview--post-tile">
		        		<div class="blog__preview--image">
		        			<?php the_post_thumbnail(); ?>
		        		</div>
		        		<div class="blog__preview--content">
			        		<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
			        		<h4><?php the_title(); ?></h4>
			        		<p><?php $content = get_the_content(); echo wp_trim_words( $content , '20' ); ?></p>
			        		<p><a href='<?php the_permalink(); ?>' class="blog__readmore">Read &rarr;</a><p>
			        	</div>
		        	</div>
	        	</a>
        	</div>

        <?php endwhile; endif; wp_reset_query(); ?>
		</div>

	</div>
</section> -->

<?php include (TEMPLATEPATH . '/components/flex_cta.php' ); ?>

<?php get_footer(); ?>
