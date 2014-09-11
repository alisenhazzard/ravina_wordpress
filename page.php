<?php get_header(); ?>

<div class="content-wrapper">
	<div class="profile-wrapper">
		<?php if( have_posts() ) : while ( have_posts() ) :the_post() ; ?>
			<div class="profile-pic">
				<img src="<?php the_field( 'profile_picture' ); ?>" />
			</div>

			<div class="about-text">
				<p>
					<?php the_field( 'about_text' ); ?>
				</p>
			</div>

			<div class="clearfix"></div>

			<div class="bottom-wrapper">
				<div class="col">
					<?php if( dynamic_sidebar( 'footer_left' ) ): ?>

					<?php else: ?>

						<h3>Request Info:</h3>
						<p>
							<a href="#">Tell Me More</a> about your photo shoot!
						</p>
					<?php endif; ?>
				</div>
				<div class="col">
					<?php if( dynamic_sidebar( 'footer_middle' ) ): ?>

					<?php else: ?>
						<h3>Contact:</h3>
						<p>
							<a href="mailto:ravinasniper@gmail.com">ravinasniper@gmail.com</a>
						</p>
						<p>
							<a href="tel:707.477.7602">707.477.7602</a>
						</p>
					<?php endif; ?>
				</div>
				<div class="lastcol">
					<?php if( dynamic_sidebar( 'footer_right' ) ): ?>

					<?php else: ?>
						<h3>Connect:</h3>
						<p>
							<a href="#">Facebook</a>
						</p>
						<p>
							<a href="#">Instagram</a>
						</p>
					<?php endif; ?>
				</div>	
			<div class="clearfix"></div>
		</div>

	<?php endwhile; else: ?>

		<p>There are no posts or pages here.</p>

	<?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>