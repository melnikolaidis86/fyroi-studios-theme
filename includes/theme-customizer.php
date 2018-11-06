<?php
/*
 *
 * Initialize Customizer options to add content to front page dynamically
 *
 */

function fs_customize_register( $wp_customize ) {

    //Add front page panel
    $wp_customize->add_panel( 'fs_front_page', array(
        'capability'     =>     'edit_theme_options',
        'title'          =>     __('Edit Front Page', 'fyroi-studios'),
        'priority'       =>     50
    ) );

    //Add hero section
    $wp_customize->add_section('fs_hero_section', array(
        'title'         =>      __('Front Page Hero Section', 'fyroi-studios'),
        'priority'      =>      10,
        'panel'         =>      'fs_front_page'
    ));

    //Add hero title setting
    $wp_customize->add_setting('fs_hero_title', array(
        'default'       =>      ''
    ));

    //Add hero subtitle setting
    $wp_customize->add_setting('fs_hero_subtitle', array(
        'default'       =>      ''
    ));

    //Add hero background image setting
    $wp_customize->add_setting('fs_hero_background_image', array(
        'default'       =>      ''
    ));

    //Add hero permalink setting
    $wp_customize->add_setting('fs_hero_link', array(
        'default'       =>      ''
    ));

    //Add hero title control
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'fs_hero_title_id',
            array(
                'label'         =>      __('Hero Title','fyroi-studios'),
                'section'       =>      'fs_hero_section',
                'settings'      =>      'fs_hero_title'
            )
        )
    );

    //Add hero subtitle control
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'fs_hero_subtitle_id',
            array(
                'label'         =>      __('Hero Subtitle','fyroi-studios'),
                'section'       =>      'fs_hero_section',
                'settings'      =>      'fs_hero_subtitle'
            )
        )
    );

    //Add hero background image control
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'fs_hero_background_image_id',
            array(
            'label'             =>      __( 'Hero Background Image', 'theme-slug' ),
            'section'           =>      'fs_hero_section',
            'settings'          =>      'fs_hero_background_image',
        ))
    );

    //Add hero permalink control
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'fs_hero_link_id',
            array(
                'label'             =>      __( 'Check Our Rooms Permalink', 'theme-slug' ),
                'section'           =>      'fs_hero_section',
                'settings'          =>      'fs_hero_link',
            ))
    );
}