<?php

function university_post_types() {
//event post type
    register_post_type('event', array(
        'supports' => array('title', 'editor', 'excerpt'), // Change the documents editor, keep in mind to use 'editor'
        'rewrite' => array('slug' => 'events'),
        'has_archive' => true, // Don't forget to flush the permalinks in WP settings to view 'new' archive
        'public' => true,
        'show_in_rest' => true, // Force new block editor
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'add_new' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event',  
        ),
        'menu_icon' => 'dashicons-calendar',
    ));

//program post type
register_post_type('program', array(
        'supports' => array('title', 'editor'), // Change the document editor, keep in mind to use 'editor'
        'rewrite' => array('slug' => 'programs'),
        'has_archive' => true, // Don't forget to flush the permalinks in WP settings to view 'new' archive
        'public' => true,
        'show_in_rest' => true, // Force new block editor
        'labels' => array(
            'name' => 'Programs',
            'add_new_item' => 'Add New Program',
            'add_new' => 'Add New Program',
            'edit_item' => 'Edit Program',
            'all_items' => 'All Programs',
            'singular_name' => 'Program',  
        ),
        'menu_icon' => 'dashicons-book-alt',
    ));


    //professor post type
register_post_type('professor', array(
        'supports' => array('title', 'editor', 'thumbnail'), // Change the document editor, keep in mind to use 'editor'
        'public' => true,
        'show_in_rest' => true, // Force new block editor and WP API
        'labels' => array(
            'name' => 'Professors',
            'add_new_item' => 'Add New Professor',
            'add_new' => 'Add New Professor',
            'edit_item' => 'Edit Professor',
            'all_items' => 'All Professors',
            'singular_name' => 'Professor',  
        ),
        'menu_icon' => 'dashicons-welcome-learn-more', //Google for Wordpress Dashicons for more
    ));
}

add_action('init', 'university_post_types');
?>
