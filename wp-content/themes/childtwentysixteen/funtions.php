<?php

//function wpb_add_google_fontss()  {

wp_enqueue_style( 'wpb-google-fonts',"https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@700&display=swap", false );
 }

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts');

function my_theme_enqueue_styles() {

	$parent_style = 'twentysixteen-style'; // This is 'twentysixteen-style' for the Twenty Sixteen theme.
 
	wp_enqueue_style( $parent_style,get_template_directory_uri() .'/style.css' );
	wp_enqueue_style( 'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('version')
	);
}
add_action( 'wp_enqueue_scripta', 'my_theme_enqueue_styles' https://github.com/amblerolivia/Devtools2W20.git