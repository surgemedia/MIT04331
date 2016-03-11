<?php 
// Register Custom Post Type
function forms_post_type() {

	$labels = array(
		'name'                => _x( 'Forms', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Form', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Useful Forms', 'text_domain' ),
		'name_admin_bar'      => __( 'Useful Forms', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Form:', 'text_domain' ),
		'all_items'           => __( 'All Forms', 'text_domain' ),
		'add_new_item'        => __( 'Add New Form', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'new_item'            => __( 'New Form', 'text_domain' ),
		'edit_item'           => __( 'Edit Form', 'text_domain' ),
		'update_item'         => __( 'Update Form', 'text_domain' ),
		'view_item'           => __( 'View Form', 'text_domain' ),
		'search_items'        => __( 'Search Form', 'text_domain' ),
		'not_found'           => __( 'Form Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Form Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Form', 'text_domain' ),
		'description'         => __( 'forms', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-clipboard',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'forms', $args );

}
add_action( 'init', 'forms_post_type', 0 );