<?php 
// Register Custom Post Type
function useful_links_post_type() {

	$labels = array(
		'name'                => _x( 'Useful-links', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Useful-link', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Useful Links', 'text_domain' ),
		'name_admin_bar'      => __( 'Useful Links', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Useful Link:', 'text_domain' ),
		'all_items'           => __( 'All Useful Links', 'text_domain' ),
		'add_new_item'        => __( 'Add New Useful Link', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'new_item'            => __( 'New Useful Link', 'text_domain' ),
		'edit_item'           => __( 'Edit Useful Link', 'text_domain' ),
		'update_item'         => __( 'Update Useful Link', 'text_domain' ),
		'view_item'           => __( 'View Useful Link', 'text_domain' ),
		'search_items'        => __( 'Search Useful Link', 'text_domain' ),
		'not_found'           => __( 'Useful Link Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Useful Link Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Useful-link', 'text_domain' ),
		'description'         => __( 'useful-links', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-admin-links',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'useful-link', $args );

}
add_action( 'init', 'useful_links_post_type', 0 );