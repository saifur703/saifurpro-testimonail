<?php 

/*
Plugin Name: SaifurPro Testimonial
Plugin URI: https://github.com/saifur703/saifurpro-testimonail
Author: Saifur Rahman
Author URI: https://github.com/saifur703/
Description: WordPress Testimonial Plugin for Elementor Depends with Advanced Custom Fields (ACF)
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: saifurpro-testimonial
Domain Path: /languages
*/

function saifurpro_testimonial() {

/**
* Post Type: My Testimonials.
*/

$labels = [
"name" => __( "My Testimonials", "astra-child" ),
"singular_name" => __( "My Testimonial", "astra-child" ),
"menu_name" => __( "My Testimonials", "astra-child" ),
"all_items" => __( "All Testimonials", "astra-child" ),
"add_new" => __( "Add new", "astra-child" ),
"add_new_item" => __( "Add new Testimonial", "astra-child" ),
"edit_item" => __( "Edit Testimonial", "astra-child" ),
"new_item" => __( "New Testimonial", "astra-child" ),
"view_item" => __( "View Testimonial", "astra-child" ),
"view_items" => __( "View Testimonials", "astra-child" ),
"search_items" => __( "Search Testimonials", "astra-child" ),
"not_found" => __( "No Testimonials found", "astra-child" ),
"not_found_in_trash" => __( "No Testimonials found in trash", "astra-child" ),
"parent" => __( "Parent Testimonial:", "astra-child" ),
"featured_image" => __( "Featured image for this Testimonial", "astra-child" ),
"set_featured_image" => __( "Set featured image for this Testimonial", "astra-child" ),
"remove_featured_image" => __( "Remove featured image for this Testimonial", "astra-child" ),
"use_featured_image" => __( "Use as featured image for this Testimonial", "astra-child" ),
"archives" => __( "My Testimonial archives", "astra-child" ),
"insert_into_item" => __( "Insert into Testimonial", "astra-child" ),
"uploaded_to_this_item" => __( "Upload to this Testimonial", "astra-child" ),
"filter_items_list" => __( "Filter My Testimonials list", "astra-child" ),
"items_list_navigation" => __( "My Testimonials list navigation", "astra-child" ),
"items_list" => __( "My Testimonials list", "astra-child" ),
"attributes" => __( "My Testimonials attributes", "astra-child" ),
"name_admin_bar" => __( "My Testimonial", "astra-child" ),
"item_published" => __( "My Testimonial published", "astra-child" ),
"item_published_privately" => __( "My Testimonial published privately.", "astra-child" ),
"item_reverted_to_draft" => __( "My Testimonial reverted to draft.", "astra-child" ),
"item_scheduled" => __( "My Testimonial scheduled", "astra-child" ),
"item_updated" => __( "My Testimonial updated.", "astra-child" ),
"parent_item_colon" => __( "Parent Testimonial:", "astra-child" ),
];

$args = [
"label" => __( "My Testimonials", "astra-child" ),
"labels" => $labels,
"description" => "",
"public" => true,
"publicly_queryable" => true,
"show_ui" => true,
"show_in_rest" => true,
"rest_base" => "",
"rest_controller_class" => "WP_REST_Posts_Controller",
"has_archive" => false,
"show_in_menu" => true,
"show_in_nav_menus" => true,
"delete_with_user" => false,
"exclude_from_search" => false,
"capability_type" => "post",
"map_meta_cap" => true,
"hierarchical" => false,
"rewrite" => [ "slug" => "my-testimonials", "with_front" => true ],
"query_var" => true,
"menu_icon" => "dashicons-testimonial",
"supports" => [ "title" ],
];

register_post_type( "my-testimonials", $args );
}

add_action( 'init', 'saifurpro_testimonial' );

require_once plugin_dir_path( __FILE__ ) . 'acf.php';
