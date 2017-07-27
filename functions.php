<?php
// cu = child unite
// parent theme = unite_theme

function cu_custom_styles() {
// enqueue google fonts
	wp_enqueue_style('k_unite_googleFonts', 'https://fonts.googleapis.com/css?family=Comfortaa:300,400,700&subset=cyrillic');

// enqueue parent styles
	wp_enqueue_style('unite_theme', get_template_directory_uri() .'/style.css');

// enqueue child styles
	$cache_buster = date("YmdHi", filemtime( get_stylesheet_directory() . '/style.css'));

	wp_enqueue_style('cu', get_stylesheet_directory_uri() .'/style.css', array(), 5.1, 'screen');

//enqueue child custom js
	wp_enqueue_script( 'cu', get_stylesheet_directory_uri(). '/assets/myScripts.js', array('jquery'), 0.3);
}

add_action('wp_enqueue_scripts', 'cu_custom_styles');


// adding post types

define('K_UNITE_INCLUDES_DIR', get_stylesheet_directory().'/inc');
define('K_UNITE_POSTS_DIR', K_UNITE_INCLUDES_DIR .'/post_types');

require_once( K_UNITE_POSTS_DIR . '/home_image.php' );

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');