<?php

    function fs_enqueue() {
        //Register google fonts
        wp_register_style('fs_google_fonts', 'https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700" rel="stylesheet' );

        //Register icons
        wp_register_style('fs_ionicons', get_template_directory_uri() . '/assets/fonts/ionicons/css/ionicons.min.css' );
        wp_register_style('fs_fontawsome', get_template_directory_uri() . '/assets/fonts/fontawesome/css/font-awesome.min.css' );

        //Register 3rd party css
        wp_register_style('fs_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
        wp_register_style('fs_animate', get_template_directory_uri() . '/assets/css/animate.css');
        wp_register_style('fs_owlcarousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
        wp_register_style('fs_magnigic-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css');
        wp_register_style('fs_style', get_template_directory_uri() . '/assets/css/style.css');

        //Enqueue styles
        wp_enqueue_style('fs_google_fonts');
        wp_enqueue_style('fs_ionicons');
        wp_enqueue_style('fs_fontawsome');
        wp_enqueue_style('fs_bootstrap');
        wp_enqueue_style('fs_animate');
        wp_enqueue_style('fs_owlcarousel');
        wp_enqueue_style('fs_magnigic-popup');
        wp_enqueue_style('fs_style');

        //Register 3rd party js
        wp_register_script('fs_popper', get_template_directory_uri() . '/assets/js/popper.min.js', [], false, true);
        wp_register_script('fs_bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', [], false, true);
        wp_register_script('fs_owl_carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', [], false, true);
        wp_register_script('fs_waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', [], false, true);
        wp_register_script('fs_stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', [], false, true);
        wp_register_script('fs_magnific', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', [], false, true);
        wp_register_script('fs_magnific_options', get_template_directory_uri() . '/assets/js/magnific-popup-options.js', [], false, true);

        wp_register_script('fs_main', get_template_directory_uri() . '/assets/js/main.js', [], false, true);

        //Enqueue scripts
        wp_enqueue_script('jquery');
        wp_enqueue_script('fs_popper');
        wp_enqueue_script('fs_bootstrap_js');
        wp_enqueue_script('fs_owl_carousel');
        wp_enqueue_script('fs_waypoints');
        wp_enqueue_script('fs_stellar');
        wp_enqueue_script('fs_magnific');
        wp_enqueue_script('fs_magnific_options');
        wp_enqueue_script('fs_main');
    }