<?php
// Easy Digital Downloads specific settings / functions
if( function_exists('edd_get_settings') ) {
	
	/************************************************
	* Constants
	************************************************/	
	
	// use this to set the slug to something other than "downloads"
	//define('EDD_SLUG', 'products');	
	
	// set this to TRUE in order to disable the "download" post type archive
	//define('EDD_DISABLE_ARCHIVE', true);	
	
	/************************************************
	* Post Type Labels
	************************************************/
	
	function edds_set_download_labels($labels) {
		$labels = array(
			'name' => _x('Products', 'post type general name', 'dsc'),
			'singular_name' => _x('Product', 'post type singular name', 'dsc'),
			'add_new' => __('Add New', 'dsc'),
			'add_new_item' => __('Add New Product', 'dsc'),
			'edit_item' => __('Edit Product', 'dsc'),
			'new_item' => __('New Product', 'dsc'),
			'all_items' => __('All Products', 'dsc'),
			'view_item' => __('View Product', 'dsc'),
			'search_items' => __('Search Products', 'dsc'),
			'not_found' =>  __('No Products found', 'dsc'),
			'not_found_in_trash' => __('No Products found in Trash', 'dsc'), 
			'parent_item_colon' => '',
			'menu_name' => __('Products', 'dsc')
		);
		return $labels;
	}
	// uncomment the following line to enable the labels above
	//add_filter('edd_download_labels', 'edds_set_download_labels');
	
	/************************************************
	* Taxonomy Labels
	************************************************/
	
	function edds_set_category_labels($labels) {
		$labels = array(
			'name' => _x( 'Types', 'taxonomy general name', 'edds' ),
			'singular_name' => _x( 'Type', 'taxonomy singular name', 'edds' ),
			'search_items' =>  __( 'Search Types', 'edds'  ),
			'all_items' => __( 'All Types', 'edds'  ),
			'parent_item' => __( 'Parent Type', 'edds'  ),
			'parent_item_colon' => __( 'Parent Type:', 'edds'  ),
			'edit_item' => __( 'Edit Type', 'edds'  ), 
			'update_item' => __( 'Update Type', 'edds'  ),
			'add_new_item' => __( 'Add New Type', 'edds'  ),
			'new_item_name' => __( 'New Type', 'edds'  ),
			'menu_name' => __( 'Types', 'edds'  ),
		);
		return $labels;
	}
	// uncomment the following line to enable the labels above
	//add_filter('edd_download_category_labels', 'edds_set_category_labels');
	
	function edds_set_tag_labels($labels) {
		$labels = array(
			'name' => _x( 'Features', 'taxonomy general name', 'edds' ),
			'singular_name' => _x( 'Feature', 'taxonomy singular name', 'edds' ),
			'search_items' =>  __( 'Search Features', 'edds'  ),
			'all_items' => __( 'All Features', 'edds'  ),
			'parent_item' => __( 'Parent Feature', 'edds'  ),
			'parent_item_colon' => __( 'Parent Feature:', 'edds'  ),
			'edit_item' => __( 'Edit Feature', 'edds'  ), 
			'update_item' => __( 'Update Feature', 'edds'  ),
			'add_new_item' => __( 'Add New Feature', 'edds'  ),
			'new_item_name' => __( 'New Feature', 'edds'  ),
			'menu_name' => __( 'Features', 'edds'  ),
		);
		return $labels;
	}
	// uncomment the following line to enable the labels above
	//add_filter('edd_download_tag_labels', 'edds_set_tag_labels');
	
	/************************************************
	* Post Type Support Options (extras)
	************************************************/	
	
	// add comment support to products
	function edds_set_edd_product_supports($supports) {
		$supports[] = 'comments';
		return $supports;	
	}
	add_filter('edd_download_supports', 'edds_set_edd_product_supports');
	
	/************************************************
	* Scripts
	************************************************/	
	
	// uncomment the following line to remove and deactivate all styling included with EDD
	//remove_action('wp_enqueue_scripts', 'edd_register_styles');
	
	/************************************************
	* Misc
	************************************************/	
	
	// remove the automatic purchase link
	remove_filter('the_content', 'edd_append_purchase_link');
}
?>