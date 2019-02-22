<?php get_header(); ?>
<main class="main">
	<?php 

	include get_template_directory() . '/template-parts/2-front-page/_1-heading.php';

	include get_template_directory() . '/template-parts/2-front-page/_2-latest.php';

	include get_template_directory() . '/template-parts/2-front-page/_3-visit-gallery.php';

	include get_template_directory(). '/template-parts/2-front-page/_4-opinions.php';

	?>
</main>
<?php get_footer(); ?>