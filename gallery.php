<?php 

/*

	Template Name: Gallery Page

*/

get_header(); ?>

<?php

	$args = array(
		'post_type' => 'album'
	);

	$the_query = new WP_Query( $args );

?>

<div class="content-wrapper">
	<div class="gallery-wrapper">
		<?php if( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post() ; ?>
			<article class="album-wrapper">
				<a href="<?php the_field( 'album_link' ); ?>">
					<img class="cover" src="<?php the_field( 'cover_photo' ); ?>" />
				</a>
				<div class="album-info">
					<h3>
						<a href="<?php the_field( 'album_link' ); ?>"><?php the_title(); ?></a>
					</h3>
					<?php the_field( 'date' ); ?> | <?php the_field( 'category' ); ?>
				</div>
			</article>

		<?php endwhile; else: ?>

			<p>There are no posts or pages here.</p>

		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>