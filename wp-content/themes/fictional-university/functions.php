<?php
/**
 * Functions for fictional university theme
 *
 * @package fictional_univeristy
 */

/**
 * Undocumented function
 *
 * @return void
 */
function theme_fictional_university_files() {
	wp_enqueue_script( 'main-university-js', get_theme_file_uri( '/js/scripts-bundled.js' ), null, microtime(), true );
	wp_enqueue_style( 'custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i', null, '1.0' );
	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', null, '1.0' );
	wp_enqueue_style( 'university_main_styles', get_stylesheet_uri(), null, '1.0' );
}

add_action( 'wp_enqueue_scripts', 'theme_fictional_university_files' );

/**
 * Undocumented function
 *
 * @return void
 */
function theme_fictional_university_feature() {
	register_nav_menu( 'header-menu-location', 'Main Menu' );
	add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'theme_fictional_university_feature' );

/**
 * Then fu_esc_html escapes html to custom allowed html elements
 *
 * @return array
 */
function fu_allowed_html() {
	$allowed_html = array(
		'a'      => array(
			'href'  => array(),
			'title' => array(),
		),
		'br'     => array(),
		'em'     => array(),
		'strong' => array(),
	);

	return $allowed_html;
}





