<?php

function fs_setup()
{
    add_theme_support('menus');

    add_theme_support( 'custom-logo', array(
        'height'      => 120,
        'width'       => 120,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );

    register_nav_menu(
        'primary',
        __('Primary Menu', 'fyroistudios')
    );
}