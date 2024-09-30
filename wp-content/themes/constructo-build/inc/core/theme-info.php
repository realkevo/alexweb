<?php
/**
 * Add theme page
 */


/**
 * Display About page
 */

function constructobuild_admin_plugin_notice() {
	$theme = wp_get_theme();
	$hide_notice_bar = get_user_meta( get_current_user_id(), 'constructobuild_hide_theme_info_noticebar', true );
	if ( '1' !== $hide_notice_bar ) {
		wp_enqueue_style( 'constructobuild-admin-style' );
		wp_enqueue_script( 'constructobuild-admin' );
		include 'templates/admin-plugin-notice.php';
	}
}
add_action( 'admin_notices', 'constructobuild_admin_plugin_notice' );


function constructobuild_hide_theme_info_noticebar() {
	check_ajax_referer( 'constructobuild-nonce', 'constructobuild-nonce-name' );
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		wp_die( -1 );
	}

	update_user_meta( get_current_user_id(), 'constructobuild_hide_theme_info_noticebar', 1 );

	wp_die( 1 );
}
add_action( 'wp_ajax_constructobuild_hide_theme_info_noticebar', 'constructobuild_hide_theme_info_noticebar' );
