<?php

function bb_load_scripts() {

	// scripts
	wp_enqueue_script('jquery');
	wp_enqueue_script('scripts', EDDS_THEME_URL . '/js/scripts.js');
	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );		
	wp_enqueue_script('scripts', EDDS_THEME_URL . '/js/css3-mediaqueries.js');

	// styles
	wp_enqueue_style('styles', EDDS_THEME_URL . '/style.css');
	wp_enqueue_style('grid', EDDS_THEME_URL . '/css/960.css'); // 960 grid
	wp_enqueue_style('responsive', EDDS_THEME_URL . '/css/media-queries.css');
	
}
add_action('wp_enqueue_scripts', 'bb_load_scripts');