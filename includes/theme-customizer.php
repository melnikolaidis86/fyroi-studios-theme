<?php
/*
 *
 * Initialize Customizer options to add content to front page dynamically
 *
 */

function fs_customize_register( $wp_customize ) {

    /*
     *  Front Page Customization
     */

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

    //Add parallax section
    $wp_customize->add_section('fs_parallax_section', array(
        'title'         =>      __('Front Page Parallax Section', 'fyroi-studios'),
        'priority'      =>      20,
        'panel'         =>      'fs_front_page'
    ));

    //Add parallax section
    $wp_customize->add_section('fs_information_section', array(
        'title'         =>      __('Front Page Information Section', 'fyroi-studios'),
        'priority'      =>      30,
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
            'label'             =>      __( 'Hero Background Image', 'fyroi-studios' ),
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
                'label'             =>      __( 'Check Our Rooms Permalink', 'fyroi-studios' ),
                'section'           =>      'fs_hero_section',
                'settings'          =>      'fs_hero_link',
            ))
    );

    //Add hero parallax setting
    $wp_customize->add_setting('fs_parallax_title', array(
        'default'       =>      ''
    ));

    //Add parallax subtitle setting
    $wp_customize->add_setting('fs_parallax_subtitle', array(
        'default'       =>      ''
    ));

    //Add parallax background image setting
    $wp_customize->add_setting('fs_parallax_background_image', array(
        'default'       =>      ''
    ));

    //Add parallax title control
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'fs_parallax_title_id',
            array(
                'label'         =>      __('Parallax Title','fyroi-studios'),
                'section'       =>      'fs_parallax_section',
                'settings'      =>      'fs_parallax_title'
            )
        )
    );

    //Add parallax subtitle control
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'fs_parallax_subtitle_id',
            array(
                'label'         =>      __('Parallax Subtitle','fyroi-studios'),
                'section'       =>      'fs_parallax_section',
                'settings'      =>      'fs_parallax_subtitle'
            )
        )
    );

    //Add parallax background image control
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'fs_parallax_background_image_id',
            array(
                'label'             =>      __( 'Parallax Background Image', 'fyroi-studios' ),
                'section'           =>      'fs_parallax_section',
                'settings'          =>      'fs_parallax_background_image',
            ))
    );

    //Add information setting
    $wp_customize->add_setting('fs_information_title', array(
        'default'       =>      ''
    ));

    //Add information subtitle setting
    $wp_customize->add_setting('fs_information_subtitle', array(
        'default'       =>      ''
    ));

    //Add information subtitle setting
    $wp_customize->add_setting('fs_information_description', array(
        'default'       =>      ''
    ));

    //Add information background image setting
    $wp_customize->add_setting('fs_information_image', array(
        'default'       =>      ''
    ));

    //Add information title control
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'fs_information_title_id',
            array(
                'label'         =>      __('Information Title','fyroi-studios'),
                'section'       =>      'fs_information_section',
                'settings'      =>      'fs_information_title'
            )
        )
    );

    //Add information subtitle control
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'fs_information_subtitle_id',
            array(
                'label'         =>      __('Information Subtitle','fyroi-studios'),
                'section'       =>      'fs_information_section',
                'settings'      =>      'fs_information_subtitle'
            )
        )
    );

    //Add parallax subtitle control
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'fs_information_description_id',
            array(
                'label'         =>      __('Information Description','fyroi-studios'),
                'section'       =>      'fs_information_section',
                'settings'      =>      'fs_information_description'
            )
        )
    );

    //Add parallax background image control
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'fs_information_image_id',
            array(
                'label'             =>      __( 'Information Image', 'fyroi-studios' ),
                'section'           =>      'fs_information_section',
                'settings'          =>      'fs_information_image',
            ))
    );
}