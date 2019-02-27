<div class="header__top-bar">
	<div class="header__logo-box">
		<h2>Es-Daw</h2>
	</div>
	<nav class="header__nav">

	<?php wp_nav_menu( [ 
		'theme_location' => 'main-menu',
		'container'=> false,
		'items_wrap' => '<ul>%3$s</ul>'
	] ); ?>
	
	</nav>
	<div class="header__hamburger-container" id="hamburger-icon">
		<span></span>
    <span></span>
    <span></span>
	</div>
</div>