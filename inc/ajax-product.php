<?php

add_action( 'wp_ajax_nopriv_post_purchase_product', 'post_purchase_product' );
add_action( 'wp_ajax_post_purchase_product', 'post_purchase_product' );

function post_purchase_product() {

    if ( !wp_verify_nonce( $_REQUEST['nonce'], "post_purchase_product_nonce")) {
      exit("No naughty business please");
    }

    $post_info = get_post($_REQUEST["post_id"]);
    $post_id =  $post_info->ID;
    $result['title'] = $post_info->post_title;
    $result['description'] = get_field('description', $post_id);
    $result['image_1'] = get_field('image_1', $post_id);
    $result['image_2'] = get_field('image_2', $post_id);
    $result['price'] = get_field('price', $post_id);

    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
      $result = json_encode($result);
      echo $result;
   }

   die();
}

?>