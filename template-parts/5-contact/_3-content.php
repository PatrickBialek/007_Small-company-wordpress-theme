<section class="contact">
	<div class="contact__content">
		<div class="contact__info-box">
			<?php if( get_field('contact_title') ): ?>
				<h2 class="heading-secondary"><?php the_field('contact_title'); ?></h2>
			<?php endif; ?>
			<?php if( get_field('contact_description') ): ?>
				<p class="paragraph paragraph--dark"><?php the_field('contact_description'); ?></p>
			<?php endif; ?>
			<div class="contact__contact-data">
				<?php if( get_field('contact_adres_1') ): ?>
					<span><?php the_field('contact_adres_1'); ?></span>
				<?php endif; ?>
				<?php if( get_field('contact_adres_2') ): ?>
					<span><?php the_field('contact_adres_2'); ?></span>
				<?php endif; ?>
				<?php if( get_field('contact_mail') ): ?>
					<span><?php the_field('contact_mail'); ?></span>
				<?php endif; ?>
				<?php if( get_field('contact_phone_1') ): ?>
					<span><?php the_field('contact_phone_1'); ?></span>
				<?php endif; ?>
				<?php if( get_field('contact_phone_2') ): ?>
					<span><?php the_field('contact_phone_2'); ?></span>
				<?php endif; ?>
			</div>
		</div>
		<div class="contact__form-box">
			<form>
				<div class="contact__form-row">
					<input class="contact__text contact__text--50" type="text" id="name-field" name="name" placeholder="imię i nazwisko">
					<input class="contact__text contact__text--50" type="text" id="phone-filed" name="phone" placeholder="numer telefonu">
				</div>
				<div class="contact__form-row">
					<input class="contact__text contact__text--100" type="text" id="mail-field" name="mail" placeholder="adres e-mail">	
				</div>
				<div class="contact__form-row">
					<textarea class="contact__textarea" id="message-field" name="message" placeholder="Treść wiadmości..."></textarea>
				</div>
				<div class="contact__form-row">
					<input class="contact__send" type="submit" value="Wyślij">
				</div>
			</form>
		</div>
	</div>
</section>