<section class="contact">
	<div class="contact__content">
		<div class="contact__info-box">

			<?php if( get_field('contact_title') ): ?>
				<h2 class="heading-secondary"><?php the_field('contact_title'); ?></h2>
			<?php endif;

			if( get_field('contact_description') ): ?>
				<p class="paragraph paragraph--dark"><?php the_field('contact_description'); ?></p>
			<?php endif; ?>

			<div class="contact__contact-data">

				<?php if( get_field('contact_adres_1') ): ?>
					<span><?php the_field('contact_adres_1'); ?></span>
				<?php endif;

				if( get_field('contact_adres_2') ): ?>
					<span><?php the_field('contact_adres_2'); ?></span>
				<?php endif;

				if( get_field('contact_mail') ): ?>
					<span><?php the_field('contact_mail'); ?></span>
				<?php endif;

				if( get_field('contact_phone_1') ): ?>
					<span><?php the_field('contact_phone_1'); ?></span>
				<?php endif;

				if( get_field('contact_phone_2') ): ?>
					<span><?php the_field('contact_phone_2'); ?></span>
				<?php endif; ?>

			</div>
		</div>

		<div class="contact__form-box">
			<?php 

				$short_code = get_field('contact_form');
			
				echo do_shortcode( $short_code ); 
			
			?>
		</div>
		
	</div>
</section>