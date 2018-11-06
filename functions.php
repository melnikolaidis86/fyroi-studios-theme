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

//  Shortcodes