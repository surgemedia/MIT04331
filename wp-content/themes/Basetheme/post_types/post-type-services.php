<?php 
// Register Custom Taxonomy
function services_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Services', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Service', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Services', 'text_domain' ),
		'all_items'                  => __( 'All Services', 'text_domain' ),
		'parent_item'                => __( 'Parent Service', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Service:', 'text_domain' ),
		'new_item_name'              => __( 'New Service Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Service', 'text_domain' ),
		'edit_item'                  => __( 'Edit Service', 'text_domain' ),
		'update_item'                => __( 'Update Service', 'text_domain' ),
		'view_item'                  => __( 'View Service', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Services with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Services', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Services', 'text_domain' ),
		'search_items'               => __( 'Search Services', 'text_domain' ),
		'not_found'                  => __( 'Service Not Found', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,

	);
	register_taxonomy( 'services', array(), $args );

}
add_action( 'init', 'services_taxonomy', 0 );

// Register Custom Post Type
function services_post_type() {

	$labels = array(
		'name'                => _x( 'Services', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Service', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Services', 'text_domain' ),
		'name_admin_bar'      => __( 'Services', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Service:', 'text_domain' ),
		'all_items'           => __( 'All Services', 'text_domain' ),
		'add_new_item'        => __( 'Add New Service', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'new_item'            => __( 'New Service', 'text_domain' ),
		'edit_item'           => __( 'Edit Service', 'text_domain' ),
		'update_item'         => __( 'Update Service', 'text_domain' ),
		'view_item'           => __( 'View Service', 'text_domain' ),
		'search_items'        => __( 'Search Service', 'text_domain' ),
		'not_found'           => __( 'Service Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Service Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Service', 'text_domain' ),
		'description'         => __( 'Services', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'          => array( 'services','post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-screenoptions',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'show_in_rest'       => true,
    'rest_base'          => 'services-api',
    'rest_controller_class' => 'WP_REST_Posts_Controller',
	);
	register_post_type( 'service', $args );

}
add_action( 'init', 'services_post_type', 0 );