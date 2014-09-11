<?php 

function theme_styles() {
	wp_enqueue_style('main', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'theme_styles');

//Enable custom menus
add_theme_support( 'menus');

function creat_widget( $name, $id, $description ) {	
	$args = array(
		'name'          => __( $name ),
		'id'            => $id,
		'description'   => $description,
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>' 
	); 

	register_sidebar( $args );
}

creat_widget( 'Left Footer', 'footer_left', 'Displays in the bottom left footer');
creat_widget( 'Middle Footer', 'footer_middle', 'Displays in the bottom middle footer');
creat_widget( 'Right Footer', 'footer_right', 'Displays in the bottom right footer');

?>