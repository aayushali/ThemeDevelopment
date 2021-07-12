<?php
/*
  *  Plugin Name: AKA Custom Functionality
  *  Description: Contains Custom Post type and taxonomy registrations
  * Version: 1.0.0
  * Author:  Aayush Ali
  * Author URI: https://aayushali.com.np
  * Text Domain: codewithme
  * License: GPL2
  * License URI: https://www.gnu.org/licenses/gpl-2.0.html
  */


/**
 * Register Custom Post Types
 */
function aka_register_custom_post_types()
{
    // Register Reviews Post Type
    register_post_type('aka_reviews',
        array(
            'labels' =>
                array(
                    'name' => __('Reviews', 'codewithme'),
                    'singular_name' => __('Review', 'codewithme'),
                    'add_new' => __('Add Review', 'codewithme'),
                    'add_new_item' => __('Add New Review', 'codewithme'),
                    'edit_item' => __('Edit Reviews', 'codewithme'),
                    'all_items' => __('All Reviews', 'codewithme'),
                    'not_found' => __(' No Reviews Found', 'codewithme'),
                    ),
            'menu_icon' => 'dashicons-format-quote',
            'public' => true,
            'exclude_from_search' => false,
            'has_archive' => true,
            'hierarchical' => false,
            'show_in_rest' => true,
            'rewrite' => array('slug' => 'reviews'),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'excerpt', 'revisions', 'page-attributes'),
            //'taxonomies' => array('category', 'post_tag')
        ));
}

add_action('init', 'aka_register_custom_post_types');


function aka_register_custom_taxonomies()
{
    //Adding new taxonomy, make it hierarchical (like categories)
    $labels = array('name' => _x('Review Sources', 'taxonomy general name', 'codewithme'),
        'singular_name ' => _x('Review Source', 'taxonomy singular name', 'codewithme'),
        'search_items' => __('Search Review Sources', 'codewithme'),
        'all_items' => __('All Review Source', 'codewithme'),
        'edit_item' => __('Edit Review Source', 'codewithme'),
        'update_item' => __('Update Review Source', 'codewithme'),
        'add_new_item' => __('Add New Source', 'codewithme'),
        'not_found' => __('No Review Sources Found!', 'codewithme'),);
    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'review-source'));
    register_taxonomy('aka_review_source', array('aka_reviews'), $args);
}

add_action('init', 'aka_register_custom_taxonomies');

