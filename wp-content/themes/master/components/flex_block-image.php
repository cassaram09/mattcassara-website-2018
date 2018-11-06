<!-- COMPONENT // Image -->
<section class='image -bg-light'>
		<div class='container'>
			<div class='row'>
				<div class='col-12'>

					<div class='image__block'>

						<?php $image = get_sub_field('image'); $image_url = $image['sizes' ]['large' ]; $alt = $image['alt']; $description = $image['description']; ?>
						<img src='<?php echo $image_url; ?>' alt='<?php echo $alt; ?>'>

					</div>

					<p>
						<strong><?php if( $image['title'] ): ?><?php echo $image['title']; ?> / <?php endif; ?></strong>
						<?php if( $image['description'] ): ?><?php echo $image['description']; ?><?php endif; ?>
			    </p>
					
				</div>
			</div>
		</div>
</section>

