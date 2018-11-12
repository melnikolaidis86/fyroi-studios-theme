<?php

//  Setup

//  Includes
include get_template_directory() . '/includes/front/enqueue.php';
include get_template_directory() . '/includes/setup.php';
include get_template_directory() . '/includes/widgets.php';
include get_template_directory() . '/includes/theme-customizer.php';

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

//  Hooks
add_action('wp_enqueue_scripts', 'fs_enqueue');
add_action('after_setup_theme', 'fs_setup');
add_action('widgets_init', 'fs_widgets');
add_action( 'customize_register', 'fs_customize_register' );

//  Custom Post Types
function fs_rooms_posts() {

        // Set the labels, this variable is used in the $args array
        $labels = array(
            'name'               => __( 'Rooms', 'fyroi-studios' ),
            'singular_name'      => __( 'Room', 'fyroi-studios'),
            'add_new'            => __( 'Add New Room', 'fyroi-studios'),
            'add_new_item'       => __( 'Add New Room', 'fyroi-studios'),
            'edit_item'          => __( 'Edit Room', 'fyroi-studios'),
            'new_item'           => __( 'New Room', 'fyroi-studios'),
            'all_items'          => __( 'All Rooms', 'fyroi-studios'),
            'view_item'          => __( 'View Room', 'fyroi-studios'),
            'search_items'       => __( 'Search Rooms', 'fyroi-studios'),
            'featured_image'     => 'Room Image',
            'set_featured_image' => 'Add Room Image'
        );

        // The arguments for our post type, to be entered as parameter 2 of register_post_type()
        $args = array(
            'labels'            => $labels,
            'description'       => 'A custom post type to add a new room',
            'public'            => true,
            'menu_position'     => 5,
            'supports'          => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'has_archive'       => true,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'query_var'         => 'room'
        );

    // Call the actual WordPress function
    // Parameter 1 is a name for the post type
    // Parameter 2 is the $args array
    register_post_type( 'room', $args);
}

//  Hook to add the custom post type to wordpress
add_action( 'init', 'fs_rooms_posts' );