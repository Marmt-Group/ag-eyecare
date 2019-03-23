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
    wp_enqueue_script( 'ageyecare-scripts', get_theme_file_uri( '/js/scripts.min.js' ), array(), $version, true );
    wp_enqueue_script( 'ageyecare-custom', get_theme_file_uri( '/scripts/custom.js' ), array(), $version, true );

    if( is_front_page() ) {
        wp_enqueue_style( 'ageyecare-mapbox-style', 'https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' , array(), $version );
        wp_enqueue_script( 'ageyecare-mapbox-cdn', 'https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js', array(), $version, true );
        wp_enqueue_script( 'ageyecare-mapbox', get_theme_file_uri( '/scripts/mapbox.js' ), array(), $version, true );
    }

    if (is_page( 'designer-frames' ) || is_page('43678010234-2')) {
        wp_enqueue_script( 'designer-frames-js', get_theme_file_uri( '/scripts/pages/designer-frames.js' ), array(), $version, true );
        wp_enqueue_script( 'scrollmagic-js', get_theme_file_uri( '/scripts/ScrollMagic.min.js' ), array(), $version, true );

    }

    if (is_page( 'services' ) || is_page('213402308304-2')) {
        wp_enqueue_script( 'services-js', get_theme_file_uri( '/scripts/pages/services.js' ), array(), $version, true );
    }

    if (is_page('30-day-contacts') || is_page('daily-contacts')) {
        wp_enqueue_script( 'bootstrap-js', get_theme_file_uri( '/scripts/bootstrap.js' ), array(), $version, true );
        wp_enqueue_script( 'shop-ajax-script', get_template_directory_uri() . '/scripts/pages/shop-product.js');
        wp_localize_script( 'shop-ajax-script', 'shop_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
    }

}
add_action( 'wp_enqueue_scripts', 'ageyecare_scripts' );

function ageyecare_styles() {

    $version = wp_get_theme()->get( 'Version' );
    
    if ($_ENV["PHP_ENV"] === 'dev') {$version = time();}

    wp_enqueue_style( 'ageyecare-font-roboto', 'https://fonts.googleapis.com/css?family=Roboto+Slab:400,300|Source+Sans+Pro:400,300,600,400italic' , array(), $version );
    wp_enqueue_style( 'ageyecare-font-poppins', 'http://fonts.googleapis.com/css?family=Poppins:100,300,400,600,700' , array(), $version );
    wp_enqueue_style( 'ageyecare-style', get_template_directory_uri() . '/style.css' , array(), $version );

    if (is_page( 'designer-frames' ) || is_page('43678010234-2')) {
        wp_enqueue_style( 'ageyecare-designer-frame-style', get_template_directory_uri() . '/styles/pages/designer-frames.css' , array(), $version );
    }

    if (is_page( 'blog' ) || is_page('82328901239-2')) {
        wp_enqueue_style( 'ageyecare-blog-style', get_template_directory_uri() . '/styles/pages/blog.css' , array(), $version );
    }

    if (is_singular('post')) {
        wp_enqueue_style( 'ageyecare-blog-style', get_template_directory_uri() . '/styles/pages/blog.css' , array(), $version );
    }

    if (is_page( 'services' ) || is_page('213402308304-2')) {
        wp_enqueue_style( 'ageyecare-blog-style', get_template_directory_uri() . '/styles/pages/services.css' , array(), $version );
    }

    if (is_page('30-day-contacts') || is_page('daily-contacts') || is_page('shop')) {
        wp_enqueue_style( 'ageyecare-shop-style', get_template_directory_uri() . '/styles/pages/shop.css' , array(), $version );
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

// Enable post thumbnails
add_theme_support( 'post-thumbnails' ); 

function create_post_type() {
  register_post_type( 'product',
    array(
      'labels' => array(
        'name' => __( 'Products' ),
        'singular_name' => __( 'Product' )
      ),
      'rewrite' => array('slug' => 'product','with_front' => false),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title'),
      'menu_icon' => 'dashicons-products',
    )
  );
}
add_action( 'init', 'create_post_type' );

function create_product_taxonomy() {

    register_taxonomy(
        'product-category',
        'product',
        array(
            'label' => __( 'Category' ),
            'rewrite' => array( 'slug' => 'product' ),
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'create_product_taxonomy' );

//TODO: set the credentials below
add_action( 'phpmailer_init', 'configure_smtp' );
function configure_smtp( PHPMailer $phpmailer ){
    $phpmailer->isSMTP(); //switch to smtp
    $phpmailer->Host = 'mail.mydomain.com';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 25;
    $phpmailer->Username = 'Username Here';
    $phpmailer->Password = 'myemailpassword';
    $phpmailer->SMTPSecure = false;
    $phpmailer->From = 'From Email Here';
    $phpmailer->FromName='Sender Name';
}

require_once(get_template_directory() . "/inc/ajax-product.php");
require_once(get_template_directory() . "/inc/ajax-email.php");