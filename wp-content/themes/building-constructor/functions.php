<?php

require get_stylesheet_directory() . '/customizer/customizer.php';

add_action( 'after_setup_theme', 'building_constructor_after_setup_theme' );
function building_constructor_after_setup_theme() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( "responsive-embeds" );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'building-constructor-featured-image', 2000, 1200, true );
    add_image_size( 'building-constructor-thumbnail-avatar', 100, 100, true );

    // Set the default content width.
    $GLOBALS['content_width'] = 525;

    // Add theme support for Custom Logo.
    add_theme_support( 'custom-logo', array(
        'width'       => 250,
        'height'      => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ) );

    add_theme_support( 'custom-background', array(
        'default-color' => 'ffffff'
    ) );

    add_theme_support( 'html5', array('comment-form','comment-list','gallery','caption',) );

    add_editor_style( array( 'assets/css/editor-style.css') );
}

/**
 * Register widget area.
 */
function building_constructor_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'building-constructor' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'building-constructor' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Page Sidebar', 'building-constructor' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Add widgets here to appear in your sidebar on pages.', 'building-constructor' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Sidebar 3', 'building-constructor' ),
        'id'            => 'sidebar-3',
        'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'building-constructor' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 1', 'building-constructor' ),
        'id'            => 'footer-1',
        'description'   => __( 'Add widgets here to appear in your footer.', 'building-constructor' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 2', 'building-constructor' ),
        'id'            => 'footer-2',
        'description'   => __( 'Add widgets here to appear in your footer.', 'building-constructor' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 3', 'building-constructor' ),
        'id'            => 'footer-3',
        'description'   => __( 'Add widgets here to appear in your footer.', 'building-constructor' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 4', 'building-constructor' ),
        'id'            => 'footer-4',
        'description'   => __( 'Add widgets here to appear in your footer.', 'building-constructor' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'building_constructor_widgets_init' );

// enqueue styles for child theme
function building_constructor_enqueue_styles() {

    // Bootstrap
    wp_enqueue_style( 'bootstrap-css', get_theme_file_uri( '/assets/css/bootstrap.css' ) );

    // Theme block stylesheet.
    wp_enqueue_style( 'building-constructor-block-style', get_theme_file_uri( '/assets/css/blocks.css' ), array( 'building-constructor-child-style' ), '1.0' );

    // enqueue parent styles
    wp_enqueue_style('construction-hub-style', get_template_directory_uri() .'/style.css');

    // enqueue child styles
    wp_enqueue_style('building-constructor-child-style', get_stylesheet_directory_uri() .'/style.css', array('construction-hub-style'));
    
    require get_theme_file_path( '/tp-theme-color.php' );
    wp_add_inline_style( 'building-constructor-child-style',$construction_hub_tp_theme_css );


    wp_enqueue_script( 'comment-reply', '/wp-includes/js/comment-reply.min.js', array(), false, true );

    $construction_hub_body_font_family = get_theme_mod('construction_hub_body_font_family', '');

    

    $construction_hub_heading_font_family = get_theme_mod('construction_hub_heading_font_family', '');

    $construction_hub_tp_theme_css = '
        body{
            font-family: '.esc_html($construction_hub_body_font_family).'!important;
        }
        h1{
            font-family: '.esc_html($construction_hub_heading_font_family).' !important;
        }
        h2{
            font-family: '.esc_html($construction_hub_heading_font_family).' !important;
        }
        h3{
            font-family: '.esc_html($construction_hub_heading_font_family).'!important;
        }
        h4{
            font-family: '.esc_html($construction_hub_heading_font_family).'!important;
        }
        h5{
            font-family: '.esc_html($construction_hub_heading_font_family).'!important;
        }
        h6{
            font-family: '.esc_html($construction_hub_heading_font_family).'!important;
        }
        #theme-sidebar .wp-block-search .wp-block-search__label{
            font-family: '.esc_html($construction_hub_heading_font_family).'!important;
        }
    ';
    wp_add_inline_style('construction-hub-style', $construction_hub_tp_theme_css);

}
add_action('wp_enqueue_scripts', 'building_constructor_enqueue_styles');

function building_constructor_admin_scripts() {
    // Backend CSS
    wp_enqueue_style( 'building-constructor-backend-css', get_theme_file_uri( '/assets/css/customizer.css' ) );
}
add_action( 'admin_enqueue_scripts', 'building_constructor_admin_scripts' );

function building_constructor_header_style() {
    if ( get_header_image() ) :
    $custom_header = "
        .menubar{
            background-image:url('".esc_url(get_header_image())."');
            background-position: center top;
            background-size: cover;
        }";
        wp_add_inline_style( 'building-constructor-child-style', $custom_header );
    endif;
}
add_action( 'wp_enqueue_scripts', 'building_constructor_header_style' );

require get_theme_file_path( '/customizer/customize-control-toggle.php' );

if ( ! defined( 'CONSTRUCTION_HUB_PRO_THEME_NAME' ) ) {
    define( 'CONSTRUCTION_HUB_PRO_THEME_NAME', esc_html__( 'Building Constructor Pro', 'building-constructor' ));
}
if ( ! defined( 'CONSTRUCTION_HUB_PRO_THEME_URL' ) ) {
    define( 'CONSTRUCTION_HUB_PRO_THEME_URL', esc_url('https://www.themespride.com/products/constructor-wordpress-theme'));
}
if ( ! defined( 'CONSTRUCTION_HUB_FREE_THEME_URL' ) ) {
	define( 'CONSTRUCTION_HUB_FREE_THEME_URL', 'https://www.themespride.com/products/free-building-wordpress-theme' );
}
if ( ! defined( 'CONSTRUCTION_HUB_DEMO_THEME_URL' ) ) {
	define( 'CONSTRUCTION_HUB_DEMO_THEME_URL', 'https://page.themespride.com/building-constructor-pro/' );
}
if ( ! defined( 'CONSTRUCTION_HUB_DOCS_THEME_URL' ) ) {
    define( 'CONSTRUCTION_HUB_DOCS_THEME_URL', 'https://page.themespride.com/demo/docs/building-constructor/' );
}
if ( ! defined( 'CONSTRUCTION_HUB_DOCS_URL' ) ) {
    define( 'CONSTRUCTION_HUB_DOCS_URL', 'https://page.themespride.com/demo/docs/building-constructor/' );
}
if ( ! defined( 'CONSTRUCTION_HUB_RATE_THEME_URL' ) ) {
    define( 'CONSTRUCTION_HUB_RATE_THEME_URL', 'https://wordpress.org/support/theme/building-constructor/reviews/#new-post' );
}
if ( ! defined( 'CONSTRUCTION_HUB_SUPPORT_THEME_URL' ) ) {
    define( 'CONSTRUCTION_HUB_SUPPORT_THEME_URL', 'https://wordpress.org/support/theme/building-constructor' );
}
if ( ! defined( 'CONSTRUCTION_HUB_CHANGELOG_THEME_URL' ) ) {
    define( 'CONSTRUCTION_HUB_CHANGELOG_THEME_URL', get_stylesheet_directory() . '/readme.txt' );
}
define('BUILDING_CONSTRUCTOR_CREDIT',__('https://www.themespride.com/products/free-building-wordpress-theme','building-constructor') );
if ( ! function_exists( 'building_constructor_credit' ) ) {
    function building_constructor_credit(){
        echo "<a href=".esc_url(BUILDING_CONSTRUCTOR_CREDIT)." target='_blank'>".esc_html__(get_theme_mod('construction_hub_footer_text',__('Building Constructor WordPress Theme','building-constructor')))."</a>";
    }
}

function building_constructor_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function building_constructor_sanitize_number_absint( $number, $setting ) {
    // Ensure $number is an absolute integer (whole number, zero or greater).
    $number = absint( $number );

    // If the input is an absolute integer, return it; otherwise, return the default
    return ( $number ? $number : $setting->default );
}