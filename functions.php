<?php
/**
 * Twenty Nineteen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage AG_Eyecare
 * @since 1.0.0
 */
$mode = 'dev';
$_ENV["PHP_ENV"]=$mode;

 /**
 * Enqueue scripts and styles.
 */
function ageyecare_scripts() {
    $version = wp_get_theme()->get( 'Version' );
    
    if ($_ENV["PHP_ENV"] === 'dev') {$version = time();}

    wp_enqueue_script( 'ageyecare-jquery', get_theme_file_uri( '/scripts/jquery-2.1.4.min.js' ), array(), $version, true );
    wp_enqueue_script( 'ageyecare-flexslider', get_theme_file_uri( '/scripts/flexslider.min.js' ), array(), $version, true );
    wp_enqueue_script( 'ageyecare-scripts', get_theme_file_uri( '/scripts/scripts.js' ), array(), $version, true );
    wp_enqueue_script( 'ageyecare-custom', get_theme_file_uri( '/scripts/custom.js' ), array(), $version, true );

    if( is_front_page() ) {
        wp_enqueue_style( 'ageyecare-mapbox-style', 'https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' , array(), $version );
        wp_enqueue_script( 'ageyecare-mapbox-cdn', 'https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js', array(), $version, true );
        wp_enqueue_script( 'ageyecare-mapbox', get_theme_file_uri( '/scripts/mapbox.js' ), array(), $version, true );
    }

}
add_action( 'wp_enqueue_scripts', 'ageyecare_scripts' );

function ageyecare_styles() {

    $version = wp_get_theme()->get( 'Version' );
    
    if ($_ENV["PHP_ENV"] === 'dev') {$version = time();}

    wp_enqueue_style( 'ageyecare-font-roboto', 'https://fonts.googleapis.com/css?family=Roboto+Slab:400,300|Source+Sans+Pro:400,300,600,400italic' , array(), $version );
    wp_enqueue_style( 'ageyecare-font-poppins', 'http://fonts.googleapis.com/css?family=Poppins:100,300,400,600,700' , array(), $version );
    wp_enqueue_style( 'ageyecare-style', get_template_directory_uri() . '/style.css' , array(), $version );

    if (is_page( 'designer-frames' )) {
        wp_enqueue_style( 'ageyecare-designer-frame-style', get_template_directory_uri() . '/styles/pages/designer-frames.css' , array(), $version );
    }

}
add_action( 'wp_enqueue_scripts', 'ageyecare_styles' );

/**
 * Customizer additions.
 */

 function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

// require get_template_directory() . '/inc/customizer.php';