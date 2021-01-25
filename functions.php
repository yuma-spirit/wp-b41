<?php

// Including stylesheets and script files
function load_scripts() {
	wp_enqueue_style( 'template', get_template_directory_uri().'/css/template.css', array(), '1.0', 'all' );
	wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array( 'jquery' ), '4.0.0', true );
	wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );


//Main configuration function
if ( ! function_exists( 'learnwp_config' ) ) :
function learnwp_config() {

	//Registering our menus
	register_nav_menus(
		array(
			'my_main_menu' => 'Main Menu',
			'footer_menu' => 'Footer Menu',
		)
	);
	// add_theme_support custom-header;
	$args = array(
		'height' => 225,
		
		'width' => 1920
	);
	add_theme_support( 'custom-header', $args );
	add_theme_support( 'post-thumbnail' );
	add_theme_support( 'post-format' );
}
endif; // learnwp_config
add_action( 'after_setup_theme','learnwp_config', 0 );

