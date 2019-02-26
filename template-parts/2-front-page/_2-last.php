<section class="last">

	<div class="last__description">
		<h2 class="heading-secondary"><?php the_field('front_page_last_works_title'); ?></h2>
		<p class="paragraph paragraph--dark"><?php the_field('front_page_last_works_subtitle'); ?></p>
	</div>

	<div class="last__content">

	<?php

	if( have_rows('last_works_images') ): 

		while ( have_rows('last_works_images') ) : the_row(); 
		
			$image = get_sub_field('single-image'); 

			?>

			<div class="last__single">
				<div class="last__image-box">
					<img class="gallery__image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				</div>
			</div>

		<?php endwhile;

	else :

	endif;

	?>

	</div>

</section>