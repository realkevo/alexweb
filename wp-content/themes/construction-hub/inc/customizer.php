<?php
/**
 * Construction Hub: Customizer
 *
 * @package Construction Hub
 * @subpackage construction_hub
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function construction_hub_customize_register( $wp_customize ) {

	require get_parent_theme_file_path('/inc/controls/icon-changer.php');

	require get_parent_theme_file_path('/inc/controls/range-slider-control.php');

	// Register the custom control type.
	$wp_customize->register_control_type( 'Construction_Hub_Toggle_Control' );

	//Register the sortable control type.
	$wp_customize->register_control_type( 'Construction_Hub_Control_Sortable' );

	//add home page setting pannel
	$wp_customize->add_panel( 'construction_hub_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Custom Home page', 'construction-hub' ),
	    'description' => __( 'Description of what this panel does.', 'construction-hub' ),
	) );

	//tp typography option
	$construction_hub_font_array = array(
		''                       => 'No Fonts',
		'Abril Fatface'          => 'Abril Fatface',
		'Acme'                   => 'Acme',
		'Anton'                  => 'Anton',
		'Architects Daughter'    => 'Architects Daughter',
		'Arimo'                  => 'Arimo',
		'Arsenal'                => 'Arsenal',
		'Arvo'                   => 'Arvo',
		'Alegreya'               => 'Alegreya',
		'Alfa Slab One'          => 'Alfa Slab One',
		'Averia Serif Libre'     => 'Averia Serif Libre',
		'Bangers'                => 'Bangers',
		'Boogaloo'               => 'Boogaloo',
		'Bad Script'             => 'Bad Script',
		'Bitter'                 => 'Bitter',
		'Bree Serif'             => 'Bree Serif',
		'BenchNine'              => 'BenchNine',
		'Cabin'                  => 'Cabin',
		'Cardo'                  => 'Cardo',
		'Courgette'              => 'Courgette',
		'Cherry Swash'           => 'Cherry Swash',
		'Cormorant Garamond'     => 'Cormorant Garamond',
		'Crimson Text'           => 'Crimson Text',
		'Cuprum'                 => 'Cuprum',
		'Cookie'                 => 'Cookie',
		'Chewy'                  => 'Chewy',
		'Days One'               => 'Days One',
		'Dosis'                  => 'Dosis',
		'Droid Sans'             => 'Droid Sans',
		'Economica'              => 'Economica',
		'Fredoka One'            => 'Fredoka One',
		'Fjalla One'             => 'Fjalla One',
		'Francois One'           => 'Francois One',
		'Frank Ruhl Libre'       => 'Frank Ruhl Libre',
		'Gloria Hallelujah'      => 'Gloria Hallelujah',
		'Great Vibes'            => 'Great Vibes',
		'Handlee'                => 'Handlee',
		'Hammersmith One'        => 'Hammersmith One',
		'Inconsolata'            => 'Inconsolata',
		'Indie Flower'           => 'Indie Flower',
		'IM Fell English SC'     => 'IM Fell English SC',
		'Julius Sans One'        => 'Julius Sans One',
		'Josefin Slab'           => 'Josefin Slab',
		'Josefin Sans'           => 'Josefin Sans',
		'Kanit'                  => 'Kanit',
		'Lobster'                => 'Lobster',
		'Lato'                   => 'Lato',
		'Lora'                   => 'Lora',
		'Libre Baskerville'      => 'Libre Baskerville',
		'Lobster Two'            => 'Lobster Two',
		'Merriweather'           => 'Merriweather',
		'Monda'                  => 'Monda',
		'Montserrat'             => 'Montserrat',
		'Muli'                   => 'Muli',
		'Marck Script'           => 'Marck Script',
		'Noto Serif'             => 'Noto Serif',
		'Open Sans'              => 'Open Sans',
		'Overpass'               => 'Overpass',
		'Overpass Mono'          => 'Overpass Mono',
		'Oxygen'                 => 'Oxygen',
		'Orbitron'               => 'Orbitron',
		'Patua One'              => 'Patua One',
		'Pacifico'               => 'Pacifico',
		'Padauk'                 => 'Padauk',
		'Playball'               => 'Playball',
		'Playfair Display'       => 'Playfair Display',
		'PT Sans'                => 'PT Sans',
		'Philosopher'            => 'Philosopher',
		'Permanent Marker'       => 'Permanent Marker',
		'Poiret One'             => 'Poiret One',
		'Quicksand'              => 'Quicksand',
		'Quattrocento Sans'      => 'Quattrocento Sans',
		'Raleway'                => 'Raleway',
		'Rubik'                  => 'Rubik',
		'Rokkitt'                => 'Rokkitt',
		'Russo One'              => 'Russo One',
		'Righteous'              => 'Righteous',
		'Slabo'                  => 'Slabo',
		'Source Sans Pro'        => 'Source Sans Pro',
		'Shadows Into Light Two' => 'Shadows Into Light Two',
		'Shadows Into Light'     => 'Shadows Into Light',
		'Sacramento'             => 'Sacramento',
		'Shrikhand'              => 'Shrikhand',
		'Tangerine'              => 'Tangerine',
		'Ubuntu'                 => 'Ubuntu',
		'VT323'                  => 'VT323',
		'Varela Round'           => 'Varela Round',
		'Vampiro One'            => 'Vampiro One',
		'Vollkorn'               => 'Vollkorn',
		'Volkhov'                => 'Volkhov',
		'Yanone Kaffeesatz'      => 'Yanone Kaffeesatz'
	);

	$wp_customize->add_section('construction_hub_typography_option',array(
		'title'         => __('TP Typography Option', 'construction-hub'),
		'priority' => 2,
		'panel' => 'construction_hub_panel_id'
   	));

   	$wp_customize->add_setting('construction_hub_heading_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'construction_hub_sanitize_choices',
	));
	$wp_customize->add_control(	'construction_hub_heading_font_family', array(
		'section' => 'construction_hub_typography_option',
		'label'   => __('heading Fonts', 'construction-hub'),
		'type'    => 'select',
		'choices' => $construction_hub_font_array,
	));

	$wp_customize->add_setting('construction_hub_body_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'construction_hub_sanitize_choices',
	));
	$wp_customize->add_control(	'construction_hub_body_font_family', array(
		'section' => 'construction_hub_typography_option',
		'label'   => __('Body Fonts', 'construction-hub'),
		'type'    => 'select',
		'choices' => $construction_hub_font_array,
	));

	//TP Color Option
	$wp_customize->add_section('construction_hub_color_option',array(
		'title'         => __('TP Color Option', 'construction-hub'),
		'priority' => 2,
		'panel' => 'construction_hub_panel_id'
   ));

	$wp_customize->add_setting( 'construction_hub_tp_color_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'construction_hub_tp_color_option', array(
  		'label'     => __('Theme First Color', 'construction-hub'),
	    'description' => __('It will change the complete theme color in one click.', 'construction-hub'),
	    'section' => 'construction_hub_color_option',
	    'settings' => 'construction_hub_tp_color_option',
  	)));

  	$wp_customize->add_setting( 'construction_hub_tp_color_option_link', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'construction_hub_tp_color_option_link', array(
  		'label'     => __('Theme Second Color', 'construction-hub'),
	    'description' => __('It will change the complete theme color in one click.', 'construction-hub'),
	    'section' => 'construction_hub_color_option',
	    'settings' => 'construction_hub_tp_color_option_link',
  	)));

  	//TP Preloader Option
	$wp_customize->add_section('construction_hub_prealoader_option',array(
		'title' => __('TP Preloader Option', 'construction-hub'),
		'panel' => 'construction_hub_panel_id',
		'priority' => 3,
 	) );

	$wp_customize->add_setting( 'construction_hub_preloader_show_hide', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'construction_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Construction_Hub_Toggle_Control( $wp_customize, 'construction_hub_preloader_show_hide', array(
		'label'       => esc_html__( 'Show / Hide Preloader Option', 'construction-hub' ),
		'section'     => 'construction_hub_prealoader_option',
		'type'        => 'toggle',
		'settings'    => 'construction_hub_preloader_show_hide',
		) ) );

  	$wp_customize->add_setting( 'construction_hub_tp_preloader_color1_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'construction_hub_tp_preloader_color1_option', array(
	    'description' => __('It will change the complete theme preloader ring 1 color in one click.', 'construction-hub'),
	    'section' => 'construction_hub_prealoader_option',
	    'settings' => 'construction_hub_tp_preloader_color1_option',
  	)));

  	$wp_customize->add_setting( 'construction_hub_tp_preloader_color2_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'construction_hub_tp_preloader_color2_option', array(
	    'description' => __('It will change the complete theme preloader ring 2 color in one click.', 'construction-hub'),
	    'section' => 'construction_hub_prealoader_option',
	    'settings' => 'construction_hub_tp_preloader_color2_option',
  	)));

  	$wp_customize->add_setting( 'construction_hub_tp_preloader_bg_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'construction_hub_tp_preloader_bg_option', array(
	    'description' => __('It will change the complete theme preloader bg color in one click.', 'construction-hub'),
	    'section' => 'construction_hub_prealoader_option',
	    'settings' => 'construction_hub_tp_preloader_bg_option',
  	)));

  	//MENU TYPOGRAPHY
	$wp_customize->add_section( 'construction_hub_menu_typography', array(
    	'title'      => __( 'Menu Typography', 'construction-hub' ),
    	'priority' => 5,
		'panel' => 'construction_hub_panel_id'
	) );

	$wp_customize->add_setting('construction_hub_menu_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'construction_hub_sanitize_choices',
	));
	$wp_customize->add_control(	'construction_hub_menu_font_family', array(
		'section' => 'construction_hub_menu_typography',
		'label'   => __('Menu Fonts', 'construction-hub'),
		'type'    => 'select',
		'choices' => $construction_hub_font_array,
	));


	$wp_customize->add_setting('construction_hub_menu_font_weight',array(
        'default' => '500',
        'sanitize_callback' => 'construction_hub_sanitize_choices'
	));
	$wp_customize->add_control('construction_hub_menu_font_weight',array(
     'type' => 'radio',
     'label'     => __('Font Weight', 'construction-hub'),
     'section' => 'construction_hub_menu_typography',
     'type' => 'select',
     'choices' => array(
         '100' => __('100','construction-hub'),
         '200' => __('200','construction-hub'),
         '300' => __('300','construction-hub'),
         '400' => __('400','construction-hub'),
         '500' => __('500','construction-hub'),
         '600' => __('600','construction-hub'),
         '700' => __('700','construction-hub'),
         '800' => __('800','construction-hub'),
         '900' => __('900','construction-hub')
     ),
	) );

	$wp_customize->add_setting('construction_hub_menu_text_tranform',array(
		'default' => 'Capitalize',
		'sanitize_callback' => 'construction_hub_sanitize_choices'
 	));
 	$wp_customize->add_control('construction_hub_menu_text_tranform',array(
		'type' => 'select',
		'label' => __('Menu Text Transform','construction-hub'),
		'section' => 'construction_hub_menu_typography',
		'choices' => array(
			'Capitalize' => __('Capitalize','construction-hub'),
		   	'Uppercase' => __('Uppercase','construction-hub'),
		   	'Lowercase' => __('Lowercase','construction-hub'),
		),
	) );


	$wp_customize->add_setting('construction_hub_menu_font_size', array(
	'default' => 14,
    'sanitize_callback' => 'construction_hub_sanitize_number_range',
	));

	$wp_customize->add_control(new Construction_Hub_Range_Slider($wp_customize, 'construction_hub_menu_font_size', array(
    'section' => 'construction_hub_menu_typography',
    'label' => esc_html__('Font Size', 'construction-hub'),
    'input_attrs' => array(
        'min' => 0,
        'max' => 20,
        'step' => 1
    )
	)));


	//TP General Option
	$wp_customize->add_section('construction_hub_tp_general_settings',array(
        'title' => __('TP General Option', 'construction-hub'),
        'priority' => 1,
        'panel' => 'construction_hub_panel_id'
    ) );

	$wp_customize->add_setting('construction_hub_tp_body_layout_settings',array(
        'default' => 'Full',
        'sanitize_callback' => 'construction_hub_sanitize_choices'
	));
    $wp_customize->add_control('construction_hub_tp_body_layout_settings',array(
        'type' => 'radio',
        'label'     => __('Body Layout Setting', 'construction-hub'),
        'description'   => __('This option work for complete body, if you want to set the complete website in container.', 'construction-hub'),
        'section' => 'construction_hub_tp_general_settings',
        'choices' => array(
            'Full' => __('Full','construction-hub'),
            'Container' => __('Container','construction-hub'),
            'Container Fluid' => __('Container Fluid','construction-hub')
        ),
	) );

    // Add Settings and Controls for Post Layout
	$wp_customize->add_setting('construction_hub_sidebar_post_layout',array(
        'default' => 'right',
        'sanitize_callback' => 'construction_hub_sanitize_choices'
	));
	$wp_customize->add_control('construction_hub_sidebar_post_layout',array(
        'type' => 'radio',
        'label'     => __('Post Sidebar Position', 'construction-hub'),
        'description'   => __('This option work for blog page, blog single page, archive page and search page.', 'construction-hub'),
        'section' => 'construction_hub_tp_general_settings',
        'choices' => array(
            'full' => __('Full','construction-hub'),
            'left' => __('Left','construction-hub'),
            'right' => __('Right','construction-hub'),
            'three-column' => __('Three Columns','construction-hub'),
            'four-column' => __('Four Columns','construction-hub'),
            'grid' => __('Grid Layout','construction-hub')
        ),
	) );
	// Add Settings and Controls for Post sidebar Layout
	$wp_customize->add_setting('construction_hub_sidebar_single_post_layout',array(
        'default' => 'right',
        'sanitize_callback' => 'construction_hub_sanitize_choices'
	));
	$wp_customize->add_control('construction_hub_sidebar_single_post_layout',array(
        'type' => 'radio',
        'label'     => __('Single Post Sidebar Position', 'construction-hub'),
        'description'   => __('This option work for single blog page', 'construction-hub'),
        'section' => 'construction_hub_tp_general_settings',
        'choices' => array(
            'full' => __('Full','construction-hub'),
            'left' => __('Left','construction-hub'),
            'right' => __('Right','construction-hub'),
        ),
	) );

	// Add Settings and Controls for Page Layout
	$wp_customize->add_setting('construction_hub_sidebar_page_layout',array(
        'default' => 'right',
        'sanitize_callback' => 'construction_hub_sanitize_choices'
	));
	$wp_customize->add_control('construction_hub_sidebar_page_layout',array(
        'type' => 'radio',
        'label'     => __('Page Sidebar Position', 'construction-hub'),
        'description'   => __('This option work for pages.', 'construction-hub'),
        'section' => 'construction_hub_tp_general_settings',
        'choices' => array(
            'full' => __('Full','construction-hub'),
            'left' => __('Left','construction-hub'),
            'right' => __('Right','construction-hub')
        ),
	) );

	$wp_customize->add_section('construction_hub_mobile_media_option',array(
		'title'         => __('Mobile Responsive media', 'construction-hub'),
		'description' => __('Control will not function if the toggle in the main settings is off.', 'construction-hub'),
		'priority' => 10,
		'panel' => 'construction_hub_panel_id'
	) );

	$wp_customize->add_setting( 'construction_hub_return_to_header_mob', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'construction_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Construction_Hub_Toggle_Control( $wp_customize, 'construction_hub_return_to_header_mob', array(
		'label'       => esc_html__( 'Show / Hide Return to header', 'construction-hub' ),
		'section'     => 'construction_hub_mobile_media_option',
		'type'        => 'toggle',
		'settings'    => 'construction_hub_return_to_header_mob',
	) ) );

	$wp_customize->add_setting( 'construction_hub_slider_buttom_mob', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'construction_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Construction_Hub_Toggle_Control( $wp_customize, 'construction_hub_slider_buttom_mob', array(
		'label'       => esc_html__( 'Show / Hide Slider Button', 'construction-hub' ),
		'section'     => 'construction_hub_mobile_media_option',
		'type'        => 'toggle',
		'settings'    => 'construction_hub_slider_buttom_mob',
	) ) );
	$wp_customize->add_setting( 'construction_hub_related_post_mob', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'construction_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Construction_Hub_Toggle_Control( $wp_customize, 'construction_hub_related_post_mob', array(
		'label'       => esc_html__( 'Show / Hide Related Post', 'construction-hub' ),
		'section'     => 'construction_hub_mobile_media_option',
		'type'        => 'toggle',
		'settings'    => 'construction_hub_related_post_mob',
	) ) );

	//TP Blog Option
	$wp_customize->add_section('construction_hub_blog_option',array(
        'title' => __('TP Blog Option', 'construction-hub'),
        'priority' => 4,
        'panel' => 'construction_hub_panel_id'
    ) );
    /** Meta Order */
    $wp_customize->add_setting('blog_meta_order', array(
        'default' => array('date', 'author', 'comment','category'),
        'sanitize_callback' => 'construction_hub_sanitize_sortable',
    ));
    $wp_customize->add_control(new Construction_Hub_Control_Sortable($wp_customize, 'blog_meta_order', array(
    	'label' => esc_html__('Meta Order', 'construction-hub'),
        'description' => __('Drag & Drop post items to re-arrange the order and also hide and show items as per the need by clicking on the eye icon.', 'construction-hub') ,
        'section' => 'construction_hub_blog_option',
        'choices' => array(
            'date' => __('date', 'construction-hub') ,
            'author' => __('author', 'construction-hub') ,
            'comment' => __('comment', 'construction-hub') ,
            'category' => __('category', 'construction-hub') ,
        ) ,
    )));
    $wp_customize->add_setting( 'construction_hub_excerpt_count', array(
		'default'              => 35,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'construction_hub_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'construction_hub_excerpt_count', array(
		'label'       => esc_html__( 'Edit Excerpt Limit','construction-hub' ),
		'section'     => 'construction_hub_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );
	$wp_customize->add_setting('construction_hub_read_more_text',array(
		'default'=> __('Read More','construction-hub'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('construction_hub_read_more_text',array(
		'label'	=> __('Edit Button Text','construction-hub'),
		'section'=> 'construction_hub_blog_option',
		'type'=> 'text'
	));
	$wp_customize->add_setting( 'construction_hub_remove_read_button', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'construction_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Construction_Hub_Toggle_Control( $wp_customize, 'construction_hub_remove_read_button', array(
		'label'       => esc_html__( 'Show / Hide Read More Button', 'construction-hub' ),
		'section'     => 'construction_hub_blog_option',
		'type'        => 'toggle',
		'settings'    => 'construction_hub_remove_read_button',
	) ) );
	$wp_customize->selective_refresh->add_partial( 'construction_hub_remove_read_button', array(
		'selector' => '.readmore-btn',
		'render_callback' => 'construction_hub_customize_partial_construction_hub_remove_read_button',
		) );
	$wp_customize->add_setting( 'construction_hub_remove_tags', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'construction_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Construction_Hub_Toggle_Control( $wp_customize, 'construction_hub_remove_tags', array(
		'label'       => esc_html__( 'Show / Hide Tags Option', 'construction-hub' ),
		'section'     => 'construction_hub_blog_option',
		'type'        => 'toggle',
		'settings'    => 'construction_hub_remove_tags',
	) ) );
    $wp_customize->selective_refresh->add_partial( 'construction_hub_remove_tags', array(
		'selector' => '.box-content a[rel="tag"]',
		'render_callback' => 'construction_hub_customize_partial_construction_hub_remove_tags',
	) );
   	$wp_customize->add_setting( 'construction_hub_remove_category', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'construction_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Construction_Hub_Toggle_Control( $wp_customize, 'construction_hub_remove_category', array(
		'label'       => esc_html__( 'Show / Hide Category Option', 'construction-hub' ),
		'section'     => 'construction_hub_blog_option',
		'type'        => 'toggle',
		'settings'    => 'construction_hub_remove_category',
	) ) );
    $wp_customize->selective_refresh->add_partial( 'construction_hub_remove_category', array(
		'selector' => '.box-content a[rel="category"]',
		'render_callback' => 'construction_hub_customize_partial_construction_hub_remove_category',
	));
	$wp_customize->add_setting( 'construction_hub_remove_comment', array(
	 'default'           => true,
	 'transport'         => 'refresh',
	 'sanitize_callback' => 'construction_hub_sanitize_checkbox',
 	) );

	$wp_customize->add_control( new Construction_Hub_Toggle_Control( $wp_customize, 'construction_hub_remove_comment', array(
	 'label'       => esc_html__( 'Show / Hide Comment Form', 'construction-hub' ),
	 'section'     => 'construction_hub_blog_option',
	 'type'        => 'toggle',
	 'settings'    => 'construction_hub_remove_comment',
	) ) );

	$wp_customize->add_setting( 'construction_hub_remove_related_post', array(
	 'default'           => true,
	 'transport'         => 'refresh',
	 'sanitize_callback' => 'construction_hub_sanitize_checkbox',
 	) );

	$wp_customize->add_control( new Construction_Hub_Toggle_Control( $wp_customize, 'construction_hub_remove_related_post', array(
	 'label'       => esc_html__( 'Show / Hide Related Post', 'construction-hub' ),
	 'section'     => 'construction_hub_blog_option',
	 'type'        => 'toggle',
	 'settings'    => 'construction_hub_remove_related_post',
	) ) );

	$wp_customize->add_setting('construction_hub_related_post_heading',array(
		'default'=> __('Related Posts','construction-hub'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('construction_hub_related_post_heading',array(
		'label'	=> __('Related Posts Title','construction-hub'),
		'section'=> 'construction_hub_blog_option',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'construction_hub_related_post_per_page', array(
		'default'              => 3,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'construction_hub_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'construction_hub_related_post_per_page', array(
		'label'       => esc_html__( 'Related Post Per Page','construction-hub' ),
		'section'     => 'construction_hub_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 3,
			'max'              => 9,
		),
	) );

	$wp_customize->add_setting( 'construction_hub_related_post_per_columns', array(
		'default'              => 3,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'construction_hub_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'construction_hub_related_post_per_columns', array(
		'label'       => esc_html__( 'Related Post Per Row','construction-hub' ),
		'section'     => 'construction_hub_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 4,
		),
	) );
	
	$wp_customize->add_setting('construction_hub_post_layout',array(
        'default' => 'image-content',
        'sanitize_callback' => 'construction_hub_sanitize_choices'
	));
	$wp_customize->add_control('construction_hub_post_layout',array(
        'type' => 'radio',
        'label'     => __('Post Layout', 'construction-hub'),
        'description' => __( 'Control Works only for full,left and right sidebar position in archieve posts', 'construction-hub' ),
        'section' => 'construction_hub_blog_option',
        'choices' => array(
            'image-content' => __('Media-Content','construction-hub'),
            'content-image' => __('Content-Media','construction-hub'),
        ),
	) );


	// Top Bar
	$wp_customize->add_section( 'construction_hub_topbar', array(
    	'title'      => __( 'Contact Details', 'construction-hub' ),
    	'description' => __( 'Add your contact details', 'construction-hub' ),
    	'priority' => 6,
		'panel' => 'construction_hub_panel_id'
	) );

	$wp_customize->add_setting('construction_hub_call_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('construction_hub_call_text',array(
		'label'	=> __('Add Call Text','construction-hub'),
		'section'=> 'construction_hub_topbar',
		'type'=> 'text'
	));
	$wp_customize->selective_refresh->add_partial( 'construction_hub_call_text', array(
		'selector' => '.headerbox i',
		'render_callback' => 'construction_hub_customize_partial_construction_hub_call_text',
	) );

	$wp_customize->add_setting('construction_hub_call',array(
		'default'=> '',
		'sanitize_callback'	=> 'construction_hub_sanitize_phone_number'
	));
	$wp_customize->add_control('construction_hub_call',array(
		'label'	=> __('Add Phone Number','construction-hub'),
		'section'=> 'construction_hub_topbar',
		'type'=> 'text'
	));

	 $wp_customize->add_setting('construction_hub_phone_icon',array(
		'default'	=> 'fas fa-phone',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Construction_Hub_Icon_Changer(
        $wp_customize,'construction_hub_phone_icon',array(
		'label'	=> __('Phone Icon','construction-hub'),
		'transport' => 'refresh',
		'section'	=> 'construction_hub_topbar',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('construction_hub_mail_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('construction_hub_mail_text',array(
		'label'	=> __('Add Email Text','construction-hub'),
		'section'=> 'construction_hub_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('construction_hub_mail',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));
	$wp_customize->add_control('construction_hub_mail',array(
		'label'	=> __('Add Mail Address','construction-hub'),
		'section'=> 'construction_hub_topbar',
		'type'=> 'text'
	));
	 $wp_customize->add_setting('construction_hub_mail_icon',array(
		'default'	=> 'fas fa-at',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Construction_Hub_Icon_Changer(
        $wp_customize,'construction_hub_mail_icon',array(
		'label'	=> __('Mail Icon','construction-hub'),
		'transport' => 'refresh',
		'section'	=> 'construction_hub_topbar',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'construction_hub_search_icon', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'construction_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Construction_Hub_Toggle_Control( $wp_customize, 'construction_hub_search_icon', array(
		'label'       => esc_html__( 'Show / Hide Search Option', 'construction-hub' ),
		'section'     => 'construction_hub_topbar',
		'type'        => 'toggle',
		'settings'    => 'construction_hub_search_icon',
	) ) );

	//home page slider
	$wp_customize->add_section( 'construction_hub_slider_section' , array(
    	'title'      => __( 'Slider Section', 'construction-hub' ),
    	'priority' => 7,
		'panel' => 'construction_hub_panel_id'
	) );

	$wp_customize->add_setting( 'construction_hub_slider_arrow', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'construction_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Construction_Hub_Toggle_Control( $wp_customize, 'construction_hub_slider_arrow', array(
		'label'       => esc_html__( 'Show / Hide Slider', 'construction-hub' ),
		'priority' => 1,
		'section'     => 'construction_hub_slider_section',
		'type'        => 'toggle',
		'settings'    => 'construction_hub_slider_arrow',
	) ) );

	for ( $construction_hub_count = 1; $construction_hub_count <= 4; $construction_hub_count++ ) {

		$wp_customize->add_setting( 'construction_hub_slider_page' . $construction_hub_count, array(
			'default'           => '',
			'sanitize_callback' => 'construction_hub_sanitize_dropdown_pages'
		) );

		$wp_customize->add_control( 'construction_hub_slider_page' . $construction_hub_count, array(
			'label'    => __( 'Select Slide Image Page', 'construction-hub' ),
			'priority' => 1,
			'section'  => 'construction_hub_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting( 'construction_hub_slider_button', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'construction_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Construction_Hub_Toggle_Control( $wp_customize, 'construction_hub_slider_button', array(
		'label'       => esc_html__( 'Show / Hide Slider Button', 'construction-hub' ),
		'priority' => 1,
		'section'     => 'construction_hub_slider_section',
		'type'        => 'toggle',
		'settings'    => 'construction_hub_slider_button',
	) ) );

	$wp_customize->add_setting('construction_hub_slider_content_layout',array(
        'default' => 'CENTER-ALIGN',
        'sanitize_callback' => 'construction_hub_sanitize_choices'
	));
	$wp_customize->add_control('construction_hub_slider_content_layout',array(
        'type' => 'radio',
        'label'     => __('Slider Content Layout', 'construction-hub'),
        'section' => 'construction_hub_slider_section',
        'choices' => array(
            'CENTER-ALIGN' => __('CENTER-ALIGN','construction-hub'),
            'LEFT-ALIGN' => __('LEFT-ALIGN','construction-hub'),
            'RIGHT-ALIGN' => __('RIGHT-ALIGN','construction-hub'),
        ),
	) );

	//Our Project Section
	$wp_customize->add_section('construction_hub_about_section',array(
		'title'	=> __('Our Project Section','construction-hub'),
		'priority' => 8,
		'panel' => 'construction_hub_panel_id',
	));

	$wp_customize->add_setting( 'construction_hub_show_hide_project_secton', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'construction_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Construction_Hub_Toggle_Control( $wp_customize, 'construction_hub_show_hide_project_secton', array(
		'label'       => esc_html__( 'Show / Hide Project section', 'construction-hub' ),
		'section'     => 'construction_hub_about_section',
		'priority' => 1,
		'type'        => 'toggle',
		'settings'    => 'construction_hub_show_hide_project_secton',
	) ) );

	$wp_customize->add_setting('construction_hub_our_project_title',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('construction_hub_our_project_title',array(
		'label'	=> __('Section Title','construction-hub'),
		'section'	=> 'construction_hub_about_section',
		'priority' => 2,
		'type'		=> 'text'
	));
	$wp_customize->selective_refresh->add_partial( 'construction_hub_our_project_title', array(
		'selector' => '#our_project h3',
		'render_callback' => 'construction_hub_customize_partial_construction_hub_our_project_title',
	) );

	$wp_customize->add_setting('construction_hub_our_project_para',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('construction_hub_our_project_para',array(
		'label'	=> __('Subtitle','construction-hub'),
		'section'	=> 'construction_hub_about_section',
		'priority' => 3,
		'type'		=> 'text'
	));

	for ( $construction_hub_count = 1; $construction_hub_count <= 3; $construction_hub_count++ ) {

		$wp_customize->add_setting( 'construction_hub_about_page' . $construction_hub_count, array(
			'default' => '',
			'sanitize_callback' => 'construction_hub_sanitize_dropdown_pages'
		));
		$wp_customize->add_control( 'construction_hub_about_page' . $construction_hub_count, array(
			'label'    => __( 'Select Project Page', 'construction-hub' ),
			'section'  => 'construction_hub_about_section',
			'priority' => 5,
			'type'     => 'dropdown-pages'
		));
	}

	//footer
	$wp_customize->add_section('construction_hub_footer_section',array(
		'title'	=> __('Footer Text','construction-hub'),
		'description'	=> __('Add copyright text.','construction-hub'),
		'panel' => 'construction_hub_panel_id',
		'priority' => 9,
	));

	$wp_customize->add_setting('construction_hub_footer_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('construction_hub_footer_text',array(
		'label'	=> __('Copyright Text','construction-hub'),
		'section'	=> 'construction_hub_footer_section',
		'type'		=> 'text'
	));

	// footer columns
	$wp_customize->add_setting('construction_hub_footer_columns',array(
		'default'	=> 4,
		'sanitize_callback'	=> 'construction_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('construction_hub_footer_columns',array(
		'label'	=> __('Footer Widget Columns','construction-hub'),
		'section'	=> 'construction_hub_footer_section',
		'setting'	=> 'construction_hub_footer_columns',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 4,
		),
	));

	$wp_customize->selective_refresh->add_partial( 'construction_hub_footer_text', array(
		'selector' => '#footer p',
		'render_callback' => 'construction_hub_customize_partial_construction_hub_footer_text',
	) );

	$wp_customize->add_setting( 'construction_hub_tp_footer_bg_color_option', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'construction_hub_tp_footer_bg_color_option', array(
			'label'     => __('Footer Widget Background Color', 'construction-hub'),
			'description' => __('It will change the complete footer widget backgorund color.', 'construction-hub'),
			'section' => 'construction_hub_footer_section',
			'settings' => 'construction_hub_tp_footer_bg_color_option',
	)));

	$wp_customize->add_setting('construction_hub_footer_widget_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'construction_hub_footer_widget_image',array(
    'label' => __('Footer Widget Background Image','construction-hub'),
    'section' => 'construction_hub_footer_section'
	)));

		$wp_customize->add_setting( 'construction_hub_return_to_header', array(
			'default'           => true,
			'transport'         => 'refresh',
			'sanitize_callback' => 'construction_hub_sanitize_checkbox',
		) );
		$wp_customize->add_control( new Construction_Hub_Toggle_Control( $wp_customize, 'construction_hub_return_to_header', array(
			'label'       => esc_html__( 'Show / Hide Return to header', 'construction-hub' ),
			'section'     => 'construction_hub_footer_section',
			'type'        => 'toggle',
			'settings'    => 'construction_hub_return_to_header',
		) ) );

		 $wp_customize->add_setting('construction_hub_scroll_top_icon',array(
		'default'	=> 'fas fa-arrow-up',
		'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control(new Construction_Hub_Icon_Changer(
	        $wp_customize,'construction_hub_scroll_top_icon',array(
			'label'	=> __('Scroll to top Icon','construction-hub'),
			'transport' => 'refresh',
			'section'	=> 'construction_hub_footer_section',
			'type'		=> 'icon'
		)));

	    // Add Settings and Controls for Scroll top
		$wp_customize->add_setting('construction_hub_scroll_top_position',array(
	        'default' => 'Right',
	        'sanitize_callback' => 'construction_hub_sanitize_choices'
		));
		$wp_customize->add_control('construction_hub_scroll_top_position',array(
	        'type' => 'radio',
	        'label'     => __('Scroll to top Position', 'construction-hub'),
	        'description'   => __('This option work for scroll to top', 'construction-hub'),
	        'section' => 'construction_hub_footer_section',
	        'choices' => array(
	            'Right' => __('Right','construction-hub'),
	            'Left' => __('Left','construction-hub'),
	            'Center' => __('Center','construction-hub')
	        ),
		) );

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'construction_hub_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'construction_hub_customize_partial_blogdescription',
	) );

	
  	$wp_customize->add_setting( 'construction_hub_site_title_text', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'construction_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Construction_Hub_Toggle_Control( $wp_customize, 'construction_hub_site_title_text', array(
		'label'       => esc_html__( 'Show / Hide Site Title', 'construction-hub' ),
		'section'     => 'title_tagline',
		'type'        => 'toggle',
		'settings'    => 'construction_hub_site_title_text',
	) ) );

		// logo site title size
		$wp_customize->add_setting('construction_hub_site_title_font_size',array(
			'default'	=> 25,
			'sanitize_callback'	=> 'construction_hub_sanitize_number_absint'
		));
		$wp_customize->add_control('construction_hub_site_title_font_size',array(
			'label'	=> __('Site Title Font Size in PX','construction-hub'),
			'section'	=> 'title_tagline',
			'setting'	=> 'construction_hub_site_title_font_size',
			'type'	=> 'number',
			'input_attrs' => array(
				'step'             => 1,
				'min'              => 0,
				'max'              => 50,
			),
		));

		$wp_customize->add_setting( 'construction_hub_site_tagline_text', array(
			'default'           => false,
			'transport'         => 'refresh',
			'sanitize_callback' => 'construction_hub_sanitize_checkbox',
		) );
		$wp_customize->add_control( new Construction_Hub_Toggle_Control( $wp_customize, 'construction_hub_site_tagline_text', array(
			'label'       => esc_html__( 'Show / Hide Site Tagline', 'construction-hub' ),
			'section'     => 'title_tagline',
			'type'        => 'toggle',
			'settings'    => 'construction_hub_site_tagline_text',
		) ) );

		// logo site tagline size
		$wp_customize->add_setting('construction_hub_site_tagline_font_size',array(
		'default'	=> 10,
		'sanitize_callback'	=> 'construction_hub_sanitize_number_absint'
		));
		$wp_customize->add_control('construction_hub_site_tagline_font_size',array(
		'label'	=> __('Site Tagline Font Size in PX','construction-hub'),
		'section'	=> 'title_tagline',
		'setting'	=> 'construction_hub_site_tagline_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 30,
		),
		));


    $wp_customize->add_setting('construction_hub_logo_width',array(
		'default' => 50,
		'sanitize_callback'	=> 'construction_hub_sanitize_number_absint'
	));
	 $wp_customize->add_control('construction_hub_logo_width',array(
		'label'	=> esc_html__('Here You Can Customize Your Logo Size','construction-hub'),
		'section'	=> 'title_tagline',
		'type'		=> 'number'
	));

    $wp_customize->add_setting('construction_hub_per_columns',array(
		'default'=> 3,
		'sanitize_callback'	=> 'construction_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('construction_hub_per_columns',array(
		'label'	=> __('Product Per Row','construction-hub'),
		'section'=> 'woocommerce_product_catalog',
		'type'=> 'number'
	));

	$wp_customize->add_setting('construction_hub_product_per_page',array(
		'default'=> 9,
		'sanitize_callback'	=> 'construction_hub_sanitize_number_absint'
	));
	$wp_customize->add_control('construction_hub_product_per_page',array(
		'label'	=> __('Product Per Page','construction-hub'),
		'section'=> 'woocommerce_product_catalog',
		'type'=> 'number'
	));

    $wp_customize->add_setting( 'construction_hub_product_sidebar', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'construction_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Construction_Hub_Toggle_Control( $wp_customize, 'construction_hub_product_sidebar', array(
		'label'       => esc_html__( 'Show / Hide Shop page sidebar', 'construction-hub' ),
		'section'     => 'woocommerce_product_catalog',
		'type'        => 'toggle',
		'settings'    => 'construction_hub_product_sidebar',
	) ) );

	$wp_customize->add_setting('construction_hub_sale_tag_position',array(
        'default' => 'right',
        'sanitize_callback' => 'construction_hub_sanitize_choices'
	));
	$wp_customize->add_control('construction_hub_sale_tag_position',array(
        'type' => 'radio',
        'label'     => __('Sale Badge Position', 'construction-hub'),
        'description'   => __('This option work for Archieve Products', 'construction-hub'),
        'section' => 'woocommerce_product_catalog',
        'choices' => array(
            'left' => __('Left','construction-hub'),
            'right' => __('Right','construction-hub'),
        ),
	) );

    $wp_customize->add_setting( 'construction_hub_single_product_sidebar', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'construction_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Construction_Hub_Toggle_Control( $wp_customize, 'construction_hub_single_product_sidebar', array(
		'label'       => esc_html__( 'Show / Hide Product page sidebar', 'construction-hub' ),
		'section'     => 'woocommerce_product_catalog',
		'type'        => 'toggle',
		'settings'    => 'construction_hub_single_product_sidebar',
	) ) );

    $wp_customize->add_setting( 'construction_hub_related_product', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'construction_hub_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Construction_Hub_Toggle_Control( $wp_customize, 'construction_hub_related_product', array(
		'label'       => esc_html__( 'Show / Hide related product', 'construction-hub' ),
		'section'     => 'woocommerce_product_catalog',
		'type'        => 'toggle',
		'settings'    => 'construction_hub_related_product',
	) ) );

	// 404 PAGE
	$wp_customize->add_section('construction_hub_404_page_section',array(
		'title'         => __('404 Page', 'construction-hub'),
		'description'   => 'Here you can customize 404 Page content.',
	) );
	$wp_customize->add_setting('construction_hub_not_found_title',array(
		'default'=> __('Oops! That page cant be found.','construction-hub'),
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('construction_hub_not_found_title',array(
		'label'	=> __('Edit Title','construction-hub'),
		'section'=> 'construction_hub_404_page_section',
		'type'=> 'text',
	));
	$wp_customize->add_setting('construction_hub_not_found_text',array(
		'default'=> __('It looks like nothing was found at this location. Maybe try a search?','construction-hub'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('construction_hub_not_found_text',array(
		'label'	=> __('Edit Text','construction-hub'),
		'section'=> 'construction_hub_404_page_section',
		'type'=> 'text'
	));
}
add_action( 'customize_register', 'construction_hub_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Construction Hub 1.0
 * @see construction_hub_customize_register()
 *
 * @return void
 */
function construction_hub_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Construction Hub 1.0
 * @see construction_hub_customize_register()
 *
 * @return void
 */
function construction_hub_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

if ( ! defined( 'CONSTRUCTION_HUB_PRO_THEME_NAME' ) ) {
	define( 'CONSTRUCTION_HUB_PRO_THEME_NAME', esc_html__( 'Construction Hub Pro', 'construction-hub' ));
}
if ( ! defined( 'CONSTRUCTION_HUB_PRO_THEME_URL' ) ) {
	define( 'CONSTRUCTION_HUB_PRO_THEME_URL', esc_url('https://www.themespride.com/products/construction-wordpress-theme'));
}
if ( ! defined( 'CONSTRUCTION_HUB_DOCS_URL' ) ) {
	define( 'CONSTRUCTION_HUB_DOCS_URL', esc_url('https://page.themespride.com/demo/docs/construction-hub-lite/'));
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Construction_Hub_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Construction_Hub_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Construction_Hub_Customize_Section_Pro(
				$manager,
				'construction_hub_pro_section',
				array(
					'priority'   => 9,
					'title'    => CONSTRUCTION_HUB_PRO_THEME_NAME,
					'pro_text' => esc_html__( 'Upgrade Pro', 'construction-hub' ),
					'pro_url'  => esc_url( CONSTRUCTION_HUB_PRO_THEME_URL, 'construction-hub' ),
				)
			)
		);

		// Register sections.
		$manager->add_section(
			new Construction_Hub_Customize_Section_Pro(
				$manager,
				'construction_hub_pro_documentation',
				array(
					'priority'   => 500,
					'title'    => esc_html__( 'Theme Documentation', 'construction-hub' ),
					'pro_text' => esc_html__( 'Click Here', 'construction-hub' ),
					'pro_url'  => esc_url(CONSTRUCTION_HUB_DOCS_URL, 'construction-hub'),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'construction-hub-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'construction-hub-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Construction_Hub_Customize::get_instance();
