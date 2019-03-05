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

 /**
 * Enqueue scripts and styles.
 */
function ageyecare_scripts() {
    wp_enqueue_style( 'twentynineteen-style', get_template_directory_uri() . '/style.css' , array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'ageyecare_scripts' );

function ageyecare_styles() {
    // $handle = 'wpdocs';
    // wp_register_style( $handle, get_stylesheet_directory_uri().'/relative/path/to/stylesheet.css', array(), '', true );
    // if ( is_page_template( 'template-name.php' ) ) {
    //     wp_enqueue_style( $handle );
    // }
    //wp_enqueue_style( 'twentynineteen-editor-customizer-styles', get_theme_file_uri( '/style-editor-customizer.css' ), false, '1.1', 'all' );

}
add_action( 'wp_enqueue_scripts', 'ageyecare_styles' );

/**
 * Customizer additions.
 */
// require get_template_directory() . '/inc/customizer.php';