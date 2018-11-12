<?php

function fs_setup()
{
    //  Add Menu support
    add_theme_support('menus');

    //  Add thumbnails support
    add_theme_support( 'post-thumbnails' );

    //  Add custom logo support
    add_theme_support( 'custom-logo', array(
        'height'      => 120,
        'width'       => 120,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );

    //  Register Navigation
    register_nav_menu(
        'primary',
        __('Primary Menu', 'fyroistudios')
    );
}