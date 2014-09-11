<!DOCTYPE html>
<html>
	<head>
		<title>
			<?php
				wp_title( '-', true, 'right');
				bloginfo( 'name' );
			?>
		</title>
		<meta name="viewport" content="width=device-width, initial-scale = 1.0">
		<?php wp_head(); ?>
	</head>

	<body>
		<div class="header-wrapper">
			<a href="http://localhost/Ravina/gallery/" class="web-nav">Gallery</a>
			<div class="site-title">
				<h2><?php bloginfo( 'description' ); ?></h2>
				<h1><a href="<?php bloginfo( 'siteurl' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			</div>
			<a href="http://localhost/Ravina/about/" class="web-nav">About</a>
			<nav>
				<a href="http://localhost/Ravina/gallery/">Gallery</a>
				<a href="http://localhost/Ravina/about/">About</a>
			</nav>
		</div>	