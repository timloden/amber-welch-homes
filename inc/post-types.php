<?php
/**
 * Custom post types
 */

function custom_post_type_team_members() {

	$labels = array(
		'name'                  => _x( 'Team Members', 'Post Type General Name', 'simple-pest' ),
		'singular_name'         => _x( 'Team Member', 'Post Type Singular Name', 'simple-pest' ),
		'menu_name'             => __( 'Team Members', 'simple-pest' ),
		'name_admin_bar'        => __( 'Team Members', 'simple-pest' ),
		'archives'              => __( 'Team Member Archives', 'simple-pest' ),
		'attributes'            => __( 'Team Member Attributes', 'simple-pest' ),
		'parent_item_colon'     => __( 'Parent Team Member:', 'simple-pest' ),
		'all_items'             => __( 'All Team Members', 'simple-pest' ),
		'add_new_item'          => __( 'Add New Team Member', 'simple-pest' ),
		'add_new'               => __( 'Add Team Member', 'simple-pest' ),
		'new_item'              => __( 'New Team Member', 'simple-pest' ),
		'edit_item'             => __( 'Edit Team Member', 'simple-pest' ),
		'update_item'           => __( 'Update Team Member', 'simple-pest' ),
		'view_item'             => __( 'View Team Member', 'simple-pest' ),
		'view_items'            => __( 'View Team Members', 'simple-pest' ),
		'search_items'          => __( 'Search Team Members', 'simple-pest' ),
		'not_found'             => __( 'Not found', 'simple-pest' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'simple-pest' ),
		'featured_image'        => __( 'Featured Image', 'simple-pest' ),
		'set_featured_image'    => __( 'Set featured image', 'simple-pest' ),
		'remove_featured_image' => __( 'Remove featured image', 'simple-pest' ),
		'use_featured_image'    => __( 'Use as featured image', 'simple-pest' ),
		'insert_into_item'      => __( 'Insert into Team Member', 'simple-pest' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Team Member', 'simple-pest' ),
		'items_list'            => __( 'Team Member list', 'simple-pest' ),
		'items_list_navigation' => __( 'Team Member list navigation', 'simple-pest' ),
		'filter_items_list'     => __( 'Filter Team Members', 'simple-pest' ),
	);
	$args = array(
		'label'                 => __( 'Team Member', 'simple-pest' ),
		'description'           => __( 'Amber Welch Homes Team', 'simple-pest' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail','excerpt' ),
		//'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'team-members', $args );

}
add_action( 'init', 'custom_post_type_team_members', 0 );

// function custom_post_type_pests() {

// 	$labels = array(
// 		'name'                  => _x( 'Pests', 'Post Type General Name', 'simple-pest' ),
// 		'singular_name'         => _x( 'Pest', 'Post Type Singular Name', 'simple-pest' ),
// 		'menu_name'             => __( 'Pests', 'simple-pest' ),
// 		'name_admin_bar'        => __( 'Pests', 'simple-pest' ),
// 		'archives'              => __( 'Pest Archives', 'simple-pest' ),
// 		'attributes'            => __( 'Pest Area Attributes', 'simple-pest' ),
// 		'parent_item_colon'     => __( 'Parent Pest:', 'simple-pest' ),
// 		'all_items'             => __( 'All Pests', 'simple-pest' ),
// 		'add_new_item'          => __( 'Add New Pest', 'simple-pest' ),
// 		'add_new'               => __( 'Add Pest', 'simple-pest' ),
// 		'new_item'              => __( 'New Pest', 'simple-pest' ),
// 		'edit_item'             => __( 'Edit Pest', 'simple-pest' ),
// 		'update_item'           => __( 'Update Pest', 'simple-pest' ),
// 		'view_item'             => __( 'View Pest', 'simple-pest' ),
// 		'view_items'            => __( 'View Pests', 'simple-pest' ),
// 		'search_items'          => __( 'Search Pests', 'simple-pest' ),
// 		'not_found'             => __( 'Not found', 'simple-pest' ),
// 		'not_found_in_trash'    => __( 'Not found in Trash', 'simple-pest' ),
// 		'featured_image'        => __( 'Featured Image', 'simple-pest' ),
// 		'set_featured_image'    => __( 'Set featured image', 'simple-pest' ),
// 		'remove_featured_image' => __( 'Remove featured image', 'simple-pest' ),
// 		'use_featured_image'    => __( 'Use as featured image', 'simple-pest' ),
// 		'insert_into_item'      => __( 'Insert into Pest', 'simple-pest' ),
// 		'uploaded_to_this_item' => __( 'Uploaded to this Pest', 'simple-pest' ),
// 		'items_list'            => __( 'Pests list', 'simple-pest' ),
// 		'items_list_navigation' => __( 'Pests list navigation', 'simple-pest' ),
// 		'filter_items_list'     => __( 'Filter Pests', 'simple-pest' ),
// 	);
// 	$args = array(
// 		'label'                 => __( 'Pest', 'simple-pest' ),
// 		'description'           => __( 'Simple Pest Management pests', 'simple-pest' ),
// 		'labels'                => $labels,
// 		'supports'              => array( 'title', 'editor', 'thumbnail' ),
// 		//'taxonomies'            => array( 'category', 'post_tag' ),
// 		'hierarchical'          => false,
// 		'public'                => true,
// 		'show_ui'               => true,
// 		'show_in_menu'          => true,
//         'menu_position'         => 5,
//         'menu_icon'             => 'dashicons-buddicons-replies',
// 		'show_in_admin_bar'     => true,
// 		'show_in_nav_menus'     => true,
// 		'can_export'            => true,
// 		'has_archive'           => true,
// 		'exclude_from_search'   => false,
// 		'publicly_queryable'    => true,
// 		'capability_type'       => 'page',
// 		'show_in_rest'          => true,
// 	);
// 	register_post_type( 'pests', $args );

// }
// add_action( 'init', 'custom_post_type_pests', 0 );