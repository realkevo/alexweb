<?php
/**
 * constructobuild functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package constructobuild
 */

if ( ! function_exists( 'constructobuild_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function constructobuild_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on constructobuild, use a find and replace
		 * to change 'constructo-build' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'constructo-build', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'align-wide' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Experimental support for adding blocks inside nav menus
		add_theme_support( 'block-nav-menus' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Load theme main style in editor.
		add_editor_style('css/font-awesome/css/all.css');

		// Load theme main style in editor.
		add_editor_style('style.css');
	}
endif;
add_action( 'after_setup_theme', 'constructobuild_setup' );

/**
 * Theme Fonts.
 *
 * @return array
 */
function constructobuild_theme_font_families() {
	return array_filter( array( '' ) );
}

if ( ! function_exists( 'constructobuild_fonts_url' ) ) :
	/**
	 * Register Google fonts for constructobuild
	 *
	 * Create your own constructobuild_fonts_url() function to override in a child theme.
	 *
	 * @since 1.0
	 *
	 * @return string Google fonts URL for the theme.
	 */
	function constructobuild_fonts_url() {
		$fonts_url = '';

		/* Translators: If there are characters in your language that are not
		* supported by Poppins, translate this to 'off'. Do not translate
		* into your own language.
		*/
		$font_families = constructobuild_theme_font_families();

		if ( ! empty( $font_families ) ) {

			$query_args = array(
				'family' => implode( '&family=', $font_families ), //urlencode( implode( '|', $font_families ) ),
				// 'subset' => urlencode( 'latin,latin-ext' ),
				'display' => 'swap',
			);

			$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css2' );
		}

		if ( ! class_exists( 'WPTT_WebFont_Loader' ) ) {
			// Load Google fonts from Local.
			require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );
		}

		return esc_url( wptt_get_webfont_url( $fonts_url ) );
	}
endif;

/**
 * Enqueue scripts and styles.
 */
function constructobuild_scripts() {
	$min  = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	// Register theme stylesheet.
	$theme_version = wp_get_theme()->get( 'Version' );

	$font_families = constructobuild_theme_font_families();
	if ( ! empty( $font_families ) ) {
		wp_enqueue_style( 'constructobuild-fonts', constructobuild_fonts_url(), array(), null );
	}

	if ( file_exists( get_template_directory() . '/js/animate' . $min . '.js' ) ) {
		$deps = array( 'jquery' );
		wp_enqueue_script( 'constructobuild-animate', get_template_directory_uri() . '/js/animate' . $min . '.js', $deps, date( 'Ymd-Gis', filemtime( get_theme_file_path( 'style.css' ) ) ) );
	}

}
add_action( 'wp_enqueue_scripts', 'constructobuild_scripts' );

/**
 * Enqueue admin scripts and styles.
 */
function constructobuild_admin_scripts() {
	$min  = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	// Register theme stylesheet.
	$theme_version = wp_get_theme()->get( 'Version' );

	$deps = array();

	// FontAwesome.
	wp_register_style( 'constructobuild-admin-style', get_template_directory_uri() . '/css/admin-style.css', $deps, date( 'Ymd-Gis', filemtime( get_theme_file_path( 'style.css' ) ) ) );

	$deps = array( 'wp-api-fetch' );
	$handle = 'constructobuild-admin';
	wp_register_script( $handle, get_template_directory_uri() . '/js/admin' . $min . '.js', $deps, date( 'Ymd-Gis', filemtime( get_theme_file_path( 'js/admin.js' ) ) ) );

	wp_localize_script( $handle, 'constructo-build',
        array(
            'constructobuild_kit_gallery' => esc_url( admin_url( 'admin.php?page=constructobuild-template-kits' ) ),
            'constructobuild_nonce' => wp_create_nonce( "constructobuild-nonce" ),
        )
    );

	if ( ! empty( $_GET['page'] ) && 'constructobuild-info' === $_GET['page'] ) {
		wp_enqueue_style( 'constructobuild-admin-style' );
		wp_enqueue_script( 'constructobuild-admin' );
	}

}
add_action( 'admin_enqueue_scripts', 'constructobuild_admin_scripts' );

/**
 *
 * Enqueue scripts and styles.
 */
function constructobuild_editor_styles() {
	$font_families = constructobuild_theme_font_families();
	if ( empty( $font_families ) ) {
		return false;
	}
	// Enqueue editor styles.
	add_editor_style(
		array(
			constructobuild_fonts_url(),
		)
	);
}
add_action( 'admin_init', 'constructobuild_editor_styles' );

/**
 *
 * Register scripts and styles.
 */
function constructobuild_register_assets() {
	$min  = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	// FontAwesome.
	wp_register_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome/css/all' . $min . '.css', array(), '5.15.3', 'all' );

	$deps = array( 'font-awesome' );

	if ( file_exists( get_template_directory() . '/css/animate.css' ) ) {
		wp_register_style( 'constructobuild-animate', get_template_directory_uri() . '/css/animate.css', array(), filemtime( get_theme_file_path( '/css/animate.css' ) ), 'all' );
		$deps[] = 'constructobuild-animate';
	}

	global $wp_styles;
	if ( in_array( 'wc-blocks-vendors-style', $wp_styles->queue ) ) {
		$deps[] = 'wc-blocks-vendors-style';
	}

	wp_register_style( 'constructobuild-style', get_stylesheet_uri(), $deps, date( 'Ymd-Gis', filemtime( get_theme_file_path( 'style.css' ) ) ) );
	wp_style_add_data( 'constructobuild-style', 'rtl', 'replace' );

	if ( file_exists( get_template_directory() . '/css/theme-style.css' ) ) {
		wp_register_style( 'constructobuild-theme-style', get_template_directory_uri() . '/css/theme-style.css',  array(), date( 'Ymd-Gis', filemtime( get_theme_file_path( 'css/theme-style.css' ) ) ) );
	}

}
add_action( 'init', 'constructobuild_register_assets' );

/**
 *
 * Enqueue blocks scripts and styles.
 */
function constructobuild_enqueue_block_assets() {
	wp_enqueue_style( 'constructobuild-style' );
	wp_enqueue_style( 'constructobuild-theme-style' );
}
add_action( 'wp_enqueue_scripts', 'constructobuild_enqueue_block_assets' );

/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/core/bootstrap.php';

/**
 * Theme info
 */
require get_theme_file_path( '/inc/theme-info/theme-info.php' );

/**
 * Getting started notification
 */
require get_theme_file_path( '/inc/getting-started/getting-started.php' );