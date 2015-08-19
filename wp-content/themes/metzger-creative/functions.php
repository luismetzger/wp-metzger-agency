<?php
	
function wpm_theme_styles() {
	
	wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
}

add_action( 'wp_enqueue_scripts', 'wpm_theme_styles' );
	
?>