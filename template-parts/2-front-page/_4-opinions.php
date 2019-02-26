<?php

if( have_rows('opinions_section') ): 

	while( have_rows('opinions_section') ): the_row(); ?>

	<section class="opinions">

		<?php

		if( have_rows('opinions_single') ): 

			while( have_rows('opinions_single') ): the_row(); 
			
			$author = get_sub_field('opinions_author');
			$opnion = get_sub_field('opinions_quote');
			
			?>

			<div class="opinions__single">
				<span class="opinions__quotension-mark">"</span>
				<p class="opinions__quote"><?php echo $opnion ?></p>
				<h4 class="opinions__author"><?php echo $author ?><h4>
			</div>

		<?php endwhile; endif; ?>	

	</section>

<?php endwhile; endif; ?>	