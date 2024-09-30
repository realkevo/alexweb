<?php

function building_constructor_remove_customize_register() {
    global $wp_customize;
    $wp_customize->remove_section( 'construction_hub_about_section' );

    $wp_customize->remove_setting( 'construction_hub_slider_arrow' );
    $wp_customize->remove_control( 'construction_hub_slider_arrow' );
}
add_action( 'customize_register', 'building_constructor_remove_customize_register', 11 );

function building_constructor_customize_register( $wp_customize ) {

    // Register the custom control type.
    $wp_customize->register_control_type( 'Building_Constructor_Toggle_Control' );

    //Social Media
    $wp_customize->add_section( 'building_constructor_social_media', array(
        'title'      => __( 'Social Media Links', 'building-constructor' ),
        'priority' => 7,
        'description' => __( 'Add your Social Links', 'building-constructor' ),
        'panel' => 'construction_hub_panel_id'
    ) );
    $wp_customize->add_setting('building_constructor_facebook_url',array(
        'default'=> '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('building_constructor_facebook_url',array(
        'label' => __('Facebook Link','building-constructor'),
        'section'=> 'building_constructor_social_media',
        'type'=> 'url'
    ));
    $wp_customize->add_setting('building_constructor_twitter_url',array(
        'default'=> '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('building_constructor_twitter_url',array(
        'label' => __('Twitter Link','building-constructor'),
        'section'=> 'building_constructor_social_media',
        'type'=> 'url'
    ));
    $wp_customize->add_setting('building_constructor_instagram_url',array(
        'default'=> '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('building_constructor_instagram_url',array(
        'label' => __('Instagram Link','building-constructor'),
        'section'=> 'building_constructor_social_media',
        'type'=> 'url'
    ));
    $wp_customize->add_setting('building_constructor_youtube_url',array(
        'default'=> '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('building_constructor_youtube_url',array(
        'label' => __('YouTube Link','building-constructor'),
        'section'=> 'building_constructor_social_media',
        'type'=> 'url'
    ));
    $wp_customize->add_setting('building_constructor_pint_url',array(
        'default'=> '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('building_constructor_pint_url',array(
        'label' => __('Pinterest Link','building-constructor'),
        'section'=> 'building_constructor_social_media',
        'type'=> 'url'
    ));
    $wp_customize->add_setting('building_constructor_social_icon_fontsize',array(
        'default'=> '14',
        'sanitize_callback' => 'building_constructor_sanitize_number_absint'
        ));
    $wp_customize->add_control('building_constructor_social_icon_fontsize',array(
        'label' => __('Social Icons Font Size in PX','building-constructor'),
        'type'=> 'number',
        'section'=> 'building_constructor_social_media',
        'input_attrs' => array(
          'step' => 1,
          'min'  => 0,
          'max'  => 30,
            ),
    ));
    $wp_customize->add_setting( 'building_constructor_slider_show_hide', array(
        'default'           => false,
        'transport'         => 'refresh',
        'sanitize_callback' => 'construction_hub_sanitize_checkbox',
    ) );
    $wp_customize->add_control( new Building_Constructor_Toggle_Control( $wp_customize, 'building_constructor_slider_show_hide', array(
        'label'       => esc_html__( 'Show / Hide Slider section', 'building-constructor' ),
        'priority' => 1,
        'section'     => 'construction_hub_slider_section',
        'type'        => 'toggle',
        'settings'    => 'building_constructor_slider_show_hide',
    ) ) );

    //About Section
    $wp_customize->add_section('building_constructor_about_section',array(
        'title' => __('About Section','building-constructor'),
        'panel' => 'construction_hub_panel_id',
        'priority' => 9,
    ));
    $wp_customize->add_setting( 'building_constructor_about_show_hide', array(
        'default'           => false,
        'transport'         => 'refresh',
        'sanitize_callback' => 'construction_hub_sanitize_checkbox',
    ) );
    $wp_customize->add_control( new Building_Constructor_Toggle_Control( $wp_customize, 'building_constructor_about_show_hide', array(
        'label'       => esc_html__( 'Show / Hide section', 'building-constructor' ),
        'section'     => 'building_constructor_about_section',
        'type'        => 'toggle',
        'settings'    => 'building_constructor_about_show_hide',
    ) ) );
    $wp_customize->add_setting( 'building_constructor_about_page', array(
        'default'           => '',
        'sanitize_callback' => 'construction_hub_sanitize_dropdown_pages'
    ) );
    $wp_customize->add_control( 'building_constructor_about_page', array(
        'label'    => __( 'Select About Page', 'building-constructor' ),
        'section'  => 'building_constructor_about_section',
        'type'     => 'dropdown-pages'
    ) );
    $wp_customize->add_setting('building_constructor_about_tittle',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('building_constructor_about_tittle',array(
        'label' => __('Quote Line','building-constructor'),
        'section'   => 'building_constructor_about_section',
        'type'      => 'text'
    ));

    $wp_customize->add_setting('building_constructor_slider_top',array(
        'default'=> '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('building_constructor_slider_top',array(
        'label' => esc_html__('Add Slider Top Text','building-constructor'),
        'section'=> 'construction_hub_slider_section',
        'type'=> 'text'
    ));
}
add_action( 'customize_register', 'building_constructor_customize_register' );
