<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<meta name="keywords" content="Zakład tapiceski, pracownia tapicerska, tapicer, zakład tapicerski Poznań, pracownia tapicerska Poznań, tapicer Poznań, tapicer Swarzędz">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900|Poppins:300,400,500,700" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body>
<header class="header" id="main-header">
<?php

include get_template_directory() . '/template-parts/1-header/_1-header-nav.php';

?>
</header>