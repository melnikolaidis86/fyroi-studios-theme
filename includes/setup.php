<?php

    function fs_setup(){
        add_theme_support('menus');

        register_nav_menu(
            'primary',
            __('Primary Menu', 'fyroistudios')
        );
    }