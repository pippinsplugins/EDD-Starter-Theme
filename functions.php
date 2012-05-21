<?php

$edds_options = get_option('edds_theme_settings');

if(!defined('EDDS_THEME_DIR')) {
	define('EDDS_THEME_DIR', dirname(__FILE__));
}
if(!defined('EDDS_THEME_URL')) {
	define('EDDS_THEME_URL', get_bloginfo('template_directory'));
}

// extra theme files
include(EDDS_THEME_DIR . '/includes/scripts.php');
include(EDDS_THEME_DIR . '/includes/edd-config.php');

if ( function_exists('register_sidebar') ) {
	register_sidebars(1, array(
		'name' => 'Sidebar Right',
		'id' => 'sidebar_right',
      'before_title' => '<h3 class="widget_title">',
      'after_title' => '</h3>',
		'before_widget' => '<li class="widget">',
		'after_widget' => '</li>'
    ));
    register_sidebars(1, array(
		'name' => 'Footer One',
		'id' => 'footer_one',
      'before_title' => '<h3 class="widget_title">',
      'after_title' => '</h3>',
		'before_widget' => '<li class="widget">',
		'after_widget' => '</li>'
    ));
    register_sidebars(1, array(
		'name' => 'Footer Two',
		'id' => 'footer_two',
      'before_title' => '<h3 class="widget_title">',
      'after_title' => '</h3>',
		'before_widget' => '<li class="widget">',
		'after_widget' => '</li>'
    ));
    register_sidebars(1, array(
		'name' => 'Footer Three',
		'id' => 'footer_three',
      'before_title' => '<h3 class="widget_title">',
      'after_title' => '</h3>',
		'before_widget' => '<li class="widget">',
		'after_widget' => '</li>'
    ));
    register_sidebars(1, array(
		'name' => 'Footer Four',
		'id' => 'footer_four',
      'before_title' => '<h3 class="widget_title">',
      'after_title' => '</h3>',
		'before_widget' => '<li class="widget">',
		'after_widget' => '</li>'
    ));
}
	
// set up custom nav menus
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'main_nav' => 'Main Nav',
		  'footer_nav' => 'Footer Nav'
		)
	);
}	

 //adds post thumbnail support - new in Wordpress 2.9
add_theme_support( 'post-thumbnails' );

function edds_image_sizes() {
	set_post_thumbnail_size( 649, 245, true ); // default post thumbnail size
	add_image_size( 'product-image',  199, 245, true ); // product thumbnail
	add_image_size( 'product-image-large',  627, 400, true ); // main product image
}
add_action('init', 'edds_image_sizes');