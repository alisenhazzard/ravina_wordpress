<?php 

/*

	Template Name: Album Page

*/

get_header(); ?>

<div class="content-wrapper">
	<div class="single-album">

	<?php if( have_posts() ) : while ( have_posts() ) :the_post() ; ?>
		<div class="mobile-album">
			<?php the_content(); ?>
		</div>

	<?php endwhile; else: ?>

		<p>There are no posts or pages here.</p>

	<?php endif; ?>
	
	</div>
</div>

<?php get_footer(); ?>