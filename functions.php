<?php
/**
 * Astra Giannis Child Theme Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Giannis Child Theme
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_GIANNIS_CHILD_THEME_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-giannis-child-theme-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_GIANNIS_CHILD_THEME_VERSION, 'all' );


	if ( is_page_template( 'home-template.php' ) ) {
	    // ΑΝ το page Template ειναι home-template.php

				//με αυτό φορτώνει το bootstrap 4 css
				wp_register_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css');
				wp_enqueue_style( 'bootstrap' );

				//με αυτό φορτώνει το bootstrap 4 js
				wp_register_script( 'bootstrap_js', get_stylesheet_directory_uri() . '/js/bootstrap.bundle.js' , '', '', true );
				wp_enqueue_script( 'bootstrap_js' );
	}


	//με αυτό φορτώνει το custom.css
	wp_register_style( 'giannis_css', get_stylesheet_directory_uri() . '/css/custom.css');
  wp_enqueue_style( 'giannis_css' );

	//με αυτό φορτώνει το fonts.css
	wp_register_style( 'giannis_fonts_css', get_stylesheet_directory_uri() . '/css/fonts.css');
	wp_enqueue_style( 'giannis_fonts_css' );



	if (is_front_page()){
			//με αυτό φορτώνει το https://github.com/scroll-out/scroll-out.github.io
			wp_register_script( 'scroll-out', get_stylesheet_directory_uri() . '/js/scroll-out.min.js' , '', '', true );
			wp_enqueue_script( 'scroll-out' );
	}

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );
