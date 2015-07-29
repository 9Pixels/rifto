<?php

/**
 *	Theme Setup
 */
if( !function_exists( 'rifto_theme_setup' ) ) {
	add_action( 'after_setup_theme', 'rifto_theme_setup' );
	function rifto_theme_setup() {
		load_theme_textdomain( 'minimalzerif', get_template_directory() . '/languages' );
	}
}

/**
 *	Enqueue Style
 */
if( !function_exists( 'rifto_enqueue_styles' ) ) {
	add_action( 'wp_enqueue_scripts', 'rifto_enqueue_styles' );
	function rifto_enqueue_styles() {
        wp_enqueue_style( 'minimalzerif-style', get_stylesheet_directory_uri() . '/style.css', array( 'zerif_style' ), '1.0.0', 'all' );
        wp_enqueue_style( 'zerif_style', get_template_directory_uri() . '/style.css' );
	}
}

/**
 *	Enqueue Scripts
 */
if( !function_exists( 'rifto_enqueue_scripts' ) ) {
	add_action( 'wp_enqueue_scripts', 'rifto_enqueue_scripts' );
	function rifto_enqueue_scripts() {
		wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array(), '1.0.0', true );
	}
}

/**
 *	Dequeue Scripts
 */
if( !function_exists( 'rifto_dequeue_scripts' ) ) {
	add_action( 'wp_print_scripts', 'rifto_dequeue_scripts', 100 );
	function rifto_dequeue_scripts() {
		wp_dequeue_script( 'zerif_script' );
	}
}