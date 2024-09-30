<?php
/**
 * Construction Hub functions and definitions
 *
 * @package Construction Hub
 * @subpackage construction_hub
 */
function construction_hub_setup() {

	load_theme_textdomain( 'construction-hub', get_template_directory() . '/language' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_theme_support( "responsive-embeds" );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'construction-hub-featured-image', 2000, 1200, true );
	add_image_size( 'construction-hub-thumbnail-avatar', 100, 100, true );

	// Set the default content width.
	$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary-menu'    => __( 'Primary Menu', 'construction-hub' ),
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	add_theme_support( 'html5', array('comment-form','comment-list','gallery','caption',) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css', construction_hub_fonts_url() ) );
}
add_action( 'after_setup_theme', 'construction_hub_setup' );

/**
 * Register custom fonts.
 */
function construction_hub_fonts_url(){
	$construction_hub_font_url = '';
	$construction_hub_font_family = array();
	$construction_hub_font_family[] = 'Fira Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$construction_hub_font_family[] = 'Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';

	$construction_hub_font_family[] = 'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$construction_hub_font_family[] = 'Bad Script';
	$construction_hub_font_family[] = 'Bebas Neue';
	$construction_hub_font_family[] = 'Fjalla One';
	$construction_hub_font_family[] = 'PT Sans:ital,wght@0,400;0,700;1,400;1,700';
	$construction_hub_font_family[] = 'PT Serif:ital,wght@0,400;0,700;1,400;1,700';
	$construction_hub_font_family[] = 'Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900';
	$construction_hub_font_family[] = 'Roboto Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700';
	$construction_hub_font_family[] = 'Alex Brush';
	$construction_hub_font_family[] = 'Overpass:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$construction_hub_font_family[] = 'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$construction_hub_font_family[] = 'Playball';
	$construction_hub_font_family[] = 'Alegreya:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
	$construction_hub_font_family[] = 'Julius Sans One';
	$construction_hub_font_family[] = 'Arsenal:ital,wght@0,400;0,700;1,400;1,700';
	$construction_hub_font_family[] = 'Slabo 13px';
	$construction_hub_font_family[] = 'Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900';
	$construction_hub_font_family[] = 'Overpass Mono:wght@300;400;500;600;700';
	$construction_hub_font_family[] = 'Source Sans Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900';
	$construction_hub_font_family[] = 'Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$construction_hub_font_family[] = 'Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900';
	$construction_hub_font_family[] = 'Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$construction_hub_font_family[] = 'Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$construction_hub_font_family[] = 'Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700';
	$construction_hub_font_family[] = 'Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$construction_hub_font_family[] = 'Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$construction_hub_font_family[] = 'Playfair Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
	$construction_hub_font_family[] = 'Quicksand:wght@300;400;500;600;700';
	$construction_hub_font_family[] = 'Padauk:wght@400;700';
	$construction_hub_font_family[] = 'Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$construction_hub_font_family[] = 'Inconsolata:wght@200;300;400;500;600;700;800;900&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$construction_hub_font_family[] = 'Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$construction_hub_font_family[] = 'Pacifico';
	$construction_hub_font_family[] = 'Indie Flower';
	$construction_hub_font_family[] = 'VT323';
	$construction_hub_font_family[] = 'Dosis:wght@200;300;400;500;600;700;800';
	$construction_hub_font_family[] = 'Frank Ruhl Libre:wght@300;400;500;700;900';
	$construction_hub_font_family[] = 'Fjalla One';
	$construction_hub_font_family[] = 'Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$construction_hub_font_family[] = 'Oxygen:wght@300;400;700';
	$construction_hub_font_family[] = 'Arvo:ital,wght@0,400;0,700;1,400;1,700';
	$construction_hub_font_family[] = 'Noto Serif:ital,wght@0,400;0,700;1,400;1,700';
	$construction_hub_font_family[] = 'Lobster';
	$construction_hub_font_family[] = 'Crimson Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700';
	$construction_hub_font_family[] = 'Yanone Kaffeesatz:wght@200;300;400;500;600;700';
	$construction_hub_font_family[] = 'Anton';
	$construction_hub_font_family[] = 'Libre Baskerville:ital,wght@0,400;0,700;1,400';
	$construction_hub_font_family[] = 'Bree Serif';
	$construction_hub_font_family[] = 'Gloria Hallelujah';
	$construction_hub_font_family[] = 'Abril Fatface';
	$construction_hub_font_family[] = 'Varela Round';
	$construction_hub_font_family[] = 'Vampiro One';
	$construction_hub_font_family[] = 'Shadows Into Light';
	$construction_hub_font_family[] = 'Cuprum:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$construction_hub_font_family[] = 'Rokkitt:wght@100;200;300;400;500;600;700;800;900';
	$construction_hub_font_family[] = 'Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
	$construction_hub_font_family[] = 'Francois One';
	$construction_hub_font_family[] = 'Orbitron:wght@400;500;600;700;800;900';
	$construction_hub_font_family[] = 'Patua One';
	$construction_hub_font_family[] = 'Acme';
	$construction_hub_font_family[] = 'Satisfy';
	$construction_hub_font_family[] = 'Josefin Slab:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700';
	$construction_hub_font_family[] = 'Quattrocento Sans:ital,wght@0,400;0,700;1,400;1,700';
	$construction_hub_font_family[] = 'Architects Daughter';
	$construction_hub_font_family[] = 'Russo One';
	$construction_hub_font_family[] = 'Monda:wght@400;700';
	$construction_hub_font_family[] = 'Righteous';
	$construction_hub_font_family[] = 'Lobster Two:ital,wght@0,400;0,700;1,400;1,700';
	$construction_hub_font_family[] = 'Hammersmith One';
	$construction_hub_font_family[] = 'Courgette';
	$construction_hub_font_family[] = 'Permanent Marke';
	$construction_hub_font_family[] = 'Cherry Swash:wght@400;700';
	$construction_hub_font_family[] = 'Cormorant Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700';
	$construction_hub_font_family[] = 'Poiret One';
	$construction_hub_font_family[] = 'BenchNine:wght@300;400;700';
	$construction_hub_font_family[] = 'Economica:ital,wght@0,400;0,700;1,400;1,700';
	$construction_hub_font_family[] = 'Handlee';
	$construction_hub_font_family[] = 'Cardo:ital,wght@0,400;0,700;1,400';
	$construction_hub_font_family[] = 'Alfa Slab One';
	$construction_hub_font_family[] = 'Averia Serif Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700';
	$construction_hub_font_family[] = 'Cookie';
	$construction_hub_font_family[] = 'Chewy';
	$construction_hub_font_family[] = 'Great Vibes';
	$construction_hub_font_family[] = 'Coming Soon';
	$construction_hub_font_family[] = 'Philosopher:ital,wght@0,400;0,700;1,400;1,700';
	$construction_hub_font_family[] = 'Days One';
	$construction_hub_font_family[] = 'Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$construction_hub_font_family[] = 'Shrikhand';
	$construction_hub_font_family[] = 'Tangerine:wght@400;700';
	$construction_hub_font_family[] = 'IM Fell English SC';
	$construction_hub_font_family[] = 'Boogaloo';
	$construction_hub_font_family[] = 'Bangers';
	$construction_hub_font_family[] = 'Fredoka One';
	$construction_hub_font_family[] = 'Volkhov:ital,wght@0,400;0,700;1,400;1,700';
	$construction_hub_font_family[] = 'Shadows Into Light Two';
	$construction_hub_font_family[] = 'Marck Script';
	$construction_hub_font_family[] = 'Sacramento';
	$construction_hub_font_family[] = 'Unica One';
	$construction_hub_font_family[] = 'Dancing Script:wght@400;500;600;700';
	$construction_hub_font_family[] = 'Exo 2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$construction_hub_font_family[] = 'Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$construction_hub_font_family[] = 'Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$construction_hub_font_family[] = 'DM Serif Display:ital@0;1';
	$construction_hub_font_family[] = 'Open Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800';

	$construction_hub_query_args = array(
		'family'	=> rawurlencode(implode('|',$construction_hub_font_family)),
	);
	$construction_hub_font_url = add_query_arg($construction_hub_query_args,'//fonts.googleapis.com/css');
	return $construction_hub_font_url;
	$contents = wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
}

/**
 * Register widget area.
 */
function construction_hub_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'construction-hub' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'construction-hub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'construction-hub' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your sidebar on pages.', 'construction-hub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'construction-hub' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'construction-hub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'construction-hub' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'construction-hub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'construction-hub' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'construction-hub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'construction-hub' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'construction-hub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'construction-hub' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'construction-hub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );require get_parent_theme_file_path('/inc/wptt-webfont-loader.php' );
}
add_action( 'widgets_init', 'construction_hub_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function construction_hub_scripts() {

	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'construction-hub-fonts', construction_hub_fonts_url(), array(), null );

	// Bootstrap
	wp_enqueue_style( 'bootstrap-css', get_theme_file_uri( '/assets/css/bootstrap.css' ) );

	// Theme stylesheet.
	wp_enqueue_style( 'construction-hub-style', get_stylesheet_uri() );
	require get_parent_theme_file_path( '/tp-theme-color.php' );
	wp_add_inline_style( 'construction-hub-style',$construction_hub_tp_theme_css );
	require get_parent_theme_file_path( '/tp-body-width-layout.php' );
	wp_add_inline_style( 'construction-hub-style',$construction_hub_tp_theme_css );
	wp_style_add_data('construction-hub-style', 'rtl', 'replace');

	// Theme block stylesheet.
	wp_enqueue_style( 'construction-hub-block-style', get_theme_file_uri( '/assets/css/blocks.css' ), array( 'construction-hub-style' ), '1.0' );

	// Fontawesome
	wp_enqueue_style( 'fontawesome-css', get_theme_file_uri( '/assets/css/fontawesome-all.css' ) );

	wp_enqueue_script( 'bootstrap-js', get_theme_file_uri( '/assets/js/bootstrap.js' ), array( 'jquery' ), true );

	wp_enqueue_script( 'construction-hub-custom-scripts',( get_template_directory_uri() ) . '/assets/js/construction-hub-custom.js', array('jquery'), true);

	wp_enqueue_script( 'construction-hub-focus-nav',( get_template_directory_uri() ) . '/assets/js/focus-nav.js', array('jquery'), true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	$construction_hub_body_font_family = get_theme_mod('construction_hub_body_font_family', '');

	$construction_hub_heading_font_family = get_theme_mod('construction_hub_heading_font_family', '');

	$construction_hub_menu_font_family = get_theme_mod('construction_hub_menu_font_family', '');

	$construction_hub_tp_theme_css = '
		body{
		    font-family: '.esc_html($construction_hub_body_font_family).';
		}
		h1{
		    font-family: '.esc_html($construction_hub_heading_font_family).';
		}
		h2{
		    font-family: '.esc_html($construction_hub_heading_font_family).';
		}
		h3{
		    font-family: '.esc_html($construction_hub_heading_font_family).';
		}
		h4{
		    font-family: '.esc_html($construction_hub_heading_font_family).';
		}
		h5{
		    font-family: '.esc_html($construction_hub_heading_font_family).';
		}
		h6{
		    font-family: '.esc_html($construction_hub_heading_font_family).';
		}
		#theme-sidebar .wp-block-search .wp-block-search__label{
		    font-family: '.esc_html($construction_hub_heading_font_family).';
		}
		.main-navigation a{
		    font-family: '.esc_html($construction_hub_menu_font_family).';
		}
	';
	wp_add_inline_style('construction-hub-style', $construction_hub_tp_theme_css);

}
add_action( 'wp_enqueue_scripts', 'construction_hub_scripts' );




//Admin Enqueue for Admin
function construction_hub_admin_enqueue_scripts(){
	wp_enqueue_style('construction-hub-admin-style',( get_template_directory_uri() ) . '/assets/css/admin.css');
	wp_enqueue_script( 'construction-hub-custom-scripts',( get_template_directory_uri() ). '/assets/js/construction-hub-custom.js', array('jquery'), true);
	
	wp_register_script( 'construction-hub-admin-script', get_template_directory_uri() . '/assets/js/construction-hub-admin.js', array( 'jquery' ), '', true );

	wp_localize_script(
		'construction-hub-admin-script',
		'construction_hub',
		array(
			'admin_ajax'	=>	admin_url('admin-ajax.php'),
			'wpnonce'			=>	wp_create_nonce('construction_hub_dismissed_notice_nonce')
		)
	);
	wp_enqueue_script('construction-hub-admin-script');

    wp_localize_script( 'construction-hub-admin-script', 'construction_hub_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action( 'admin_enqueue_scripts', 'construction_hub_admin_enqueue_scripts' );

/*radio button sanitization*/
function construction_hub_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function construction_hub_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

function construction_hub_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function construction_hub_sanitize_checkbox( $input ) {
	// Boolean check
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function construction_hub_sanitize_number_absint( $number, $setting ) {
	// Ensure $number is an absolute integer (whole number, zero or greater).
	$number = absint( $number );

	// If the input is an absolute integer, return it; otherwise, return the default
	return ( $number ? $number : $setting->default );
}

// Category count 
function construction_hub_display_post_category_count() {
    $construction_hub_category = get_the_category();
    $construction_hub_category_count = ($construction_hub_category) ? count($construction_hub_category) : 0;
    $construction_hub_category_text = ($construction_hub_category_count === 1) ? 'category' : 'categories'; // Check for pluralization
    echo $construction_hub_category_count . ' ' . $construction_hub_category_text;
}

//post tag
function custom_tags_filter($construction_hub_tag_list) {
    // Replace the comma (,) with an empty string
    $construction_hub_tag_list = str_replace(', ', '', $construction_hub_tag_list);

    return $construction_hub_tag_list;
}
add_filter('the_tags', 'custom_tags_filter');

function custom_output_tags() {
    $construction_hub_tags = get_the_tags();

    if ($construction_hub_tags) {
        $construction_hub_tags_output = '<div class="post_tag">Tags: ';

        $construction_hub_first_tag = reset($construction_hub_tags);

        foreach ($construction_hub_tags as $tag) {
            $construction_hub_tags_output .= '<a href="' . esc_url(get_tag_link($tag)) . '" rel="tag" class="me-2">' . esc_html($tag->name) . '</a>';
            if ($tag !== $construction_hub_first_tag) {
                $construction_hub_tags_output .= ' ';
            }
        }

        $construction_hub_tags_output .= '</div>';

        echo $construction_hub_tags_output;
    }
}

function construction_hub_sanitize_number_range( $number, $setting ) {

	// Ensure input is an absolute integer.
	$number = absint( $number );

	// Get the input attributes associated with the setting.
	$atts = $setting->manager->get_control( $setting->id )->input_attrs;

	// Get minimum number in the range.
	$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );

	// Get maximum number in the range.
	$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );

	// Get step.
	$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );

	// If the number is within the valid range, return it; otherwise, return the default
	return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
}
// Sanitize Sortable control.
function construction_hub_sanitize_sortable( $val, $setting ) {
	if ( is_string( $val ) || is_numeric( $val ) ) {
		return array(
			esc_attr( $val ),
		);
	}
	$sanitized_value = array();
	foreach ( $val as $item ) {
		if ( isset( $setting->manager->get_control( $setting->id )->choices[ $item ] ) ) {
			$sanitized_value[] = esc_attr( $item );
		}
	}
	return $sanitized_value;
}
/* Excerpt Limit Begin */
function construction_hub_excerpt_function($excerpt_count = 35) {
    $construction_hub_excerpt = get_the_excerpt();

    $construction_hub_text_excerpt = wp_strip_all_tags($construction_hub_excerpt);

    $construction_hub_excerpt_limit = esc_attr(get_theme_mod('construction_hub_excerpt_count', $excerpt_count));

    $construction_hub_theme_excerpt = implode(' ', array_slice(explode(' ', $construction_hub_text_excerpt), 0, $construction_hub_excerpt_limit));

    return $construction_hub_theme_excerpt;
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'construction_hub_loop_columns');
if (!function_exists('construction_hub_loop_columns')) {
	function construction_hub_loop_columns() {
		$columns = get_theme_mod( 'construction_hub_per_columns', 3 );
		return $columns;
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'construction_hub_per_page', 20 );
function construction_hub_per_page( $construction_hub_cols ) {
  	$construction_hub_cols = get_theme_mod( 'construction_hub_product_per_page', 9 );
	return $construction_hub_cols;
}

/**
 * Use front-page.php when Front page displays is set to a static page.
 */
function construction_hub_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template','construction_hub_front_page_template' );


define('CONSTRUCTION_HUB_CREDIT',__('https://www.themespride.com/products/free-construction-wordpress-theme','construction-hub') );
if ( ! function_exists( 'construction_hub_credit' ) ) {
	function construction_hub_credit(){
		echo "<a href=".esc_url(CONSTRUCTION_HUB_CREDIT)." target='_blank'>".esc_html__(get_theme_mod('construction_hub_footer_text',__('Construction WordPress Theme','construction-hub')))."</a>";
	}
}

add_action( 'wp_ajax_construction_hub_dismissed_notice_handler', 'construction_hub_ajax_notice_handler' );

function construction_hub_ajax_notice_handler() {
	if (!wp_verify_nonce($_POST['wpnonce'], 'construction_hub_dismissed_notice_nonce')) {
		exit;
	}
    if ( isset( $_POST['type'] ) ) {
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function construction_hub_activation_notice() { 

	if ( ! get_option('dismissed-get_started', FALSE ) ) { ?>

    <div class="construction-hub-notice-wrapper updated notice notice-get-started-class is-dismissible" data-notice="get_started">
        <div class="construction-hub-getting-started-notice clearfix">
            <div class="construction-hub-theme-notice-content">
                <h2 class="construction-hub-notice-h2">
                    <?php
                printf(
                /* translators: 1: welcome page link starting html tag, 2: welcome page link ending html tag. */
                    esc_html__( 'Welcome! Thank you for choosing %1$s!', 'construction-hub' ), '<strong>'. wp_get_theme()->get('Name'). '</strong>' );
                ?>
                </h2>

                <p class="plugin-install-notice"><?php echo sprintf(__('Click here to get started with the theme set-up.', 'construction-hub')) ?></p>

                <a class="construction-hub-btn-get-started button button-primary button-hero construction-hub-button-padding" href="<?php echo esc_url( admin_url( 'themes.php?page=construction-hub-about' )); ?>" ><?php esc_html_e( 'Get started', 'construction-hub' ) ?></a><span class="construction-hub-push-down">
                <?php
                    /* translators: %1$s: Anchor link start %2$s: Anchor link end */
                    printf(
                        'or %1$sCustomize theme%2$s</a></span>',
                        '<a target="_blank" href="' . esc_url( admin_url( 'customize.php' ) ) . '">',
                        '</a>'
                    );
                ?>
            </div>
        </div>
    </div>
<?php }

}

add_action( 'admin_notices', 'construction_hub_activation_notice' );

add_action('after_switch_theme', 'construction_hub_setup_options');
function construction_hub_setup_options () {
    update_option('dismissed-get_started', FALSE );
}


/**
 * Logo Custamization.
 */

function construction_hub_logo_width(){

	$construction_hub_logo_width   = get_theme_mod( 'construction_hub_logo_width', 50 );

	echo "<style type='text/css' media='all'>"; ?>
		img.custom-logo {
		    width: <?php echo absint( $construction_hub_logo_width ); ?>px;
		    max-width: 100%;
		}
	<?php echo "</style>";
}

add_action( 'wp_head', 'construction_hub_logo_width' );

/**
 * Implement the Custom Header feature.
 */
require get_parent_theme_file_path( '/inc/custom-header.php' );

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path( '/inc/template-tags.php' );

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path( '/inc/template-functions.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer.php' );

/**
 * Load Theme About Page
 */
require get_parent_theme_file_path( '/inc/about-theme.php' );

/**
 * Load Theme About Page
 */
require get_parent_theme_file_path('/inc/wptt-webfont-loader.php' );
/**
 * Load Toggle file
 */
require get_parent_theme_file_path( '/inc/controls/customize-control-toggle.php' );

/**
 * load sortable file
 */
require get_parent_theme_file_path( '/inc/controls/sortable-control.php' );
