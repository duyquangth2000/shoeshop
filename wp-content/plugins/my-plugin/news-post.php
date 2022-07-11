<?php
// Register Custom Post Type new
function create_new_cpt() {

	$labels = array(
		'name' => _x( 'news', 'Post Type General Name', 'shoe' ),
		'singular_name' => _x( 'new', 'Post Type Singular Name', 'shoe' ),
		'menu_name' => _x( 'news', 'Admin Menu text', 'shoe' ),
		'name_admin_bar' => _x( 'new', 'Add new on Toolbar', 'shoe' ),
		'archives' => __( 'new Archives', 'shoe' ),
		'attributes' => __( 'new Attributes', 'shoe' ),
		'parent_item_colon' => __( 'Parent new:', 'shoe' ),
		'all_items' => __( 'All news', 'shoe' ),
		'add_new_item' => __( 'Add new new', 'shoe' ),
		'add_new' => __( 'Add new', 'shoe' ),
		'new_item' => __( 'new new', 'shoe' ),
		'edit_item' => __( 'Edit new', 'shoe' ),
		'update_item' => __( 'Update new', 'shoe' ),
		'view_item' => __( 'View new', 'shoe' ),
		'view_items' => __( 'View news', 'shoe' ),
		'search_items' => __( 'Search new', 'shoe' ),
		'not_found' => __( 'Not found', 'shoe' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'shoe' ),
		'featured_image' => __( 'Featured Image', 'shoe' ),
		'set_featured_image' => __( 'Set featured image', 'shoe' ),
		'remove_featured_image' => __( 'Remove featured image', 'shoe' ),
		'use_featured_image' => __( 'Use as featured image', 'shoe' ),
		'insert_into_item' => __( 'Insert into new', 'shoe' ),
		'uploaded_to_this_item' => __( 'Uploaded to this new', 'shoe' ),
		'items_list' => __( 'news list', 'shoe' ),
		'items_list_navigation' => __( 'news list navigation', 'shoe' ),
		'filter_items_list' => __( 'Filter news list', 'shoe' ),
	);
	$rewrite = array(
		'slug' => 'new',
		'with_front' => true,
		'pages' => true,
		'feeds' => true,
	);
	$args = array(
		'label' => __( 'new', 'shoe' ),
		'description' => __( '', 'shoe' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-site-alt2',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'new', $args );

}
add_action( 'init', 'create_new_cpt', 0 );


// Register Taxonomy category
function create_category_tax() {

	$labels = array(
		'name'              => _x( 'categories', 'taxonomy general name', 'shoe' ),
		'singular_name'     => _x( 'category', 'taxonomy singular name', 'shoe' ),
		'search_items'      => __( 'Search categories', 'shoe' ),
		'all_items'         => __( 'All categories', 'shoe' ),
		'parent_item'       => __( 'Parent category', 'shoe' ),
		'parent_item_colon' => __( 'Parent category:', 'shoe' ),
		'edit_item'         => __( 'Edit category', 'shoe' ),
		'update_item'       => __( 'Update category', 'shoe' ),
		'add_new_item'      => __( 'Add new category', 'shoe' ),
		'new_item_name'     => __( 'new category Name', 'shoe' ),
		'menu_name'         => __( 'category', 'shoe' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( '', 'shoe' ),
		'hierarchical' => false,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
	);
	register_taxonomy( 'category', array('new'), $args );

}
add_action( 'init', 'create_category_tax' );

?>