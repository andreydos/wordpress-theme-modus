<?php 

/*============ Scripts ============*/

function modusThemeScripts() {
	// Font-awesome
	wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array(), '1.0.0');
	// Font Google
	wp_enqueue_style('font-google', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic', array(), '1.0.0');
	// Styles
	wp_enqueue_style('font-main', get_stylesheet_uri(), array(), '1.0.0');
	wp_enqueue_style('font-theme', get_template_directory_uri() . '/css/main.css', array(), '1.0.0');
	// JS
	wp_enqueue_script('jquery-main', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js', array(), '3.0.0', true);	
	wp_enqueue_script('js-carousel', get_template_directory_uri() . '/js/carousel.js', array(), '1.0.0', true);	
	wp_enqueue_script('js-slider', get_template_directory_uri() . '/js/slider.js', array(), '1.0.0', true);	
}

add_action( 'wp_enqueue_scripts', 'modusThemeScripts' );

/*============ Images ============*/

function modusThemeImages(){
	// add_theme_support('post-formats', array('video','gallery'));
	// Add thumbnail support
	add_theme_support('post-thumbnails');
	// Thumbnails
	add_image_size('post-index-page', 600, 400, true);
	add_image_size('single-page-img', 1260);
	add_image_size('post-blog-footer', 70, 70, true);
}
add_action('after_setup_theme', 'modusThemeImages');

/*============ Menu ============*/

function modusThemeRegisterMenu() {
  register_nav_menu('main-menu',__('Верхнее меню'));
}

add_action( 'init', 'modusThemeRegisterMenu' );

