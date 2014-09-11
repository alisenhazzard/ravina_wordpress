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

	<body class="home-body" style="background-color: <?php the_field( 'home_color' ); ?>">
		<div class="home-wrapper">
			<header class="home-header">

			<img src="<?php the_field( 'home_image' ); ?>" class="home-background"/>
				<div class="home-title">
					<a href="http://localhost/Ravina/">
						<h2>Photography by</h2>
						<h1>Ravina Schneider</h1>
					</a>
				</div>
				<div class="home-nav">
					<a href="http://localhost/Ravina/gallery/">Gallery</a>
					<a href="http://localhost/Ravina/about/">About</a>
				</div>
			</header>
			<div class="clearfix"></div>

			<img src="<?php the_field( 'home_image' ); ?>" class="home-img" />
		</div>

		<footer class="home-footer">
			<p>
				Copyright &copy; Ravina Schneider 2014
			</p>
			<p>
				Web Design by <a href="http://theapplecartproject.com" target="blank">The Applecart Project</a>
			</p>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>