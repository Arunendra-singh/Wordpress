// how wo register in function.php file for parent theme - require get_template_directory() . '/sliders.php';     //

/* Register slider on dashboard for child theme */
require_once('sliders.php');

///////////////////////////////

<?php
//----------------------------------------------
//----------register and label Sliders post type
//----------------------------------------------
$Sliders_labels = array(
	'name' => _x('Sliders', 'post type general name'),
	'singular_name' => _x('Sliders', 'post type singular name'),
	'add_new' => _x('Add New', 'Sliders'),
	'add_new_item' => __("Add New Sliders"),
	'edit_item' => __("Edit Sliders"),
	'new_item' => __("New Sliders"),
	'view_item' => __("View Sliders"),
	'search_items' => __("Search Sliders"),
	'not_found' =>  __('No Sliders found'),
	'not_found_in_trash' => __('No Sliders found in Trash'), 
	'parent_item_colon' => ''
		
);
$Sliders_args = array(
	'labels' => $Sliders_labels,
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true, 
	'query_var' => true,
	'rewrite' => true,
	'hierarchical' => false,
	'menu_position' => null,
	'capability_type' => 'post',
	'supports' => array('title','editor','thumbnail', 'custom-fields'),
	'menu_icon' => 'dashicons-format-gallery' //16x16 png if you want an icon
); 
register_post_type('Sliders', $Sliders_args);
?>
