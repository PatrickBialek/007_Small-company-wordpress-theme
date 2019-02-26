<section class="gallery">
	<h2 class="heading-secondary margin-bottom-huge"><?php the_field('gallery_title'); ?></h2>

	<?php

	if( have_rows('gallery') ): 

		while( have_rows('gallery') ): the_row(); ?>

		<div class="gallery__content">
			<div class="gallery__row">

			<?php if( have_rows('gallery_row') ): 

				while( have_rows('gallery_row') ): the_row(); ?>

				
				<?php if( have_rows('gallery_box') ): 

					while( have_rows('gallery_box') ): the_row(); 

					$image = get_sub_field('single_gallery_image');
					$bg_color = get_sub_field('background_single_image_color');

					?>

					<div class="gallery__cell gallery__cell--<?php echo $bg_color ?>">
						<img class="gallery__image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					</div>

				<?php endwhile; endif; endwhile; endif; ?>

			</div>
		</div>

	<?php endwhile; endif; ?>	

</section>