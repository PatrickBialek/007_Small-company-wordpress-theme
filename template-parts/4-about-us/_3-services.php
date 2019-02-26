<section class="services">
	<div class="services__content">
		<h2 class="heading-secondary margin-bottom-huge text-center">Czym się zajmujemy?</h2>

		<?php if( have_rows('about_us_section') ): 

			while( have_rows('about_us_section') ): the_row(); 

				if( have_rows('about_us_single_cell') ): 

					while( have_rows('about_us_single_cell') ): the_row();

					$title = get_sub_field('about_us_single_cell_title');
					$text = get_sub_field('about_us_single_cell_text');
					$image = get_sub_field('about_us_single_cell_image');

					?>

					<div class="services__section">

						<div class="services__box">
							<h2 class="heading-secondary margin-bottom-medium"><?php echo $title ?></h2>
							<div><?php echo $text ?></div>
						</div>

						<div class="services__image-box">
							<img class="services__image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						</div>

					</div>

					
			<?php endwhile; endif; ?>	

		<?php endwhile; endif; ?>	

	</div>
</section>