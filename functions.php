<?php
/**
 *	Require Once
 */
require_once( 'includes/customizer.php' );

/**
 *	Theme Setup
 */
if( !function_exists( 'rifto_theme_setup' ) ) {
	add_action( 'after_setup_theme', 'rifto_theme_setup' );
	function rifto_theme_setup() {
		// Load theme Textdomain
		load_theme_textdomain( 'rifto', get_template_directory() . '/languages' );

		// Add Theme Support
		add_theme_support( 'title-tag' );
	}
}

/**
 *	WP Enqueue Style
 */
if( !function_exists( 'rifto_enqueue_styles' ) ) {
	add_action( 'wp_enqueue_scripts', 'rifto_enqueue_styles' );
	function rifto_enqueue_styles() {
        wp_enqueue_style( 'rifto-style', get_stylesheet_directory_uri() . '/style.css', array( 'zerif_style' ), '1.0.0', 'all' );
        wp_enqueue_style( 'zerif_style', get_template_directory_uri() . '/style.css' );
	}
}

/**
 *	WP Enqueue Scripts
 */
if( !function_exists( 'rifto_enqueue_scripts' ) ) {
	add_action( 'wp_enqueue_scripts', 'rifto_enqueue_scripts' );
	function rifto_enqueue_scripts() {
		wp_enqueue_script( 'rifto-scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array(), '1.0.0', true );
	}
}

/**
 *	WP Dequeue Scripts
 */
if( !function_exists( 'rifto_dequeue_scripts' ) ) {
	add_action( 'wp_print_scripts', 'rifto_dequeue_scripts', 100 );
	function rifto_dequeue_scripts() {
		wp_dequeue_script( 'zerif_script' );
	}
}

/**
 *	Customizer Stylesheet
 */
if( !function_exists( 'rifto_customizer_stylesheet' ) ) {
	add_action( 'wp_head', 'rifto_customizer_stylesheet');
	function rifto_customizer_stylesheet() {
		echo '<style type="text/css">';
			if( get_theme_mod( 'zerif_logo' ) ) {
				echo '.top-header .header-logo {background-image: url('. get_theme_mod( 'zerif_logo' ) .');}';
			} else {
				echo '.top-header .header-logo {background-image: url('. get_stylesheet_directory_uri() .'/images/logo.png);}';
			}

			if( get_theme_mod( 'rifto_headersticky_logo' ) ) {
				echo '.top-header.fixed .header-logo {background-image: url('. get_theme_mod( 'rifto_headersticky_logo' ) .');}';
			} else {
				echo '.top-header.fixed .header-logo {background-image: url('. get_stylesheet_directory_uri() .'/images/logo.png);}';
			}
		echo '</style>';
	}
}