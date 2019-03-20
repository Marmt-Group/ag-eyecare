<?php

add_action( 'wp_ajax_nopriv_post_purchase_email', 'post_purchase_email' );
add_action( 'wp_ajax_post_purchase_email', 'post_purchase_email' );

function post_purchase_email() {

    if ( !wp_verify_nonce( $_REQUEST['nonce'], "post_purchase_email_nonce")) {
      exit("No naughty business please");
    }

    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

      $name = $_REQUEST['name'];
      $email = $_REQUEST['email'];
      $result['attribute_left-eye'] = $_REQUEST['attribute_left-eye'];
      $result['attribute_test1'] = $_REQUEST['attribute_test1'];
      $result['attribute_test2'] = $_REQUEST['attribute_test2'];
      $result['attribute_test3'] = $_REQUEST['attribute_test3'];
      $result['attribute_right-eye'] = $_REQUEST['attribute_right-eye'];
      $result['attribute_test-1'] = $_REQUEST['attribute_test-1'];
      $result['attribute_test-2'] = $_REQUEST['attribute_test-2'];
      $result['attribute_test-3'] = $_REQUEST['attribute_test-3'];

      $to = 'admin@marmt.io';
      $subject = 'AG Eyecare Product Inquiry';
      $body = serialize($result);
      $headers  = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      $headers .= "From: $name <$email> \r\n";
      $headers .= "Reply-To: $email \r\n";
      
      if( wp_mail($to, $subject, $body, $headers) ){
          echo "mail sent";
      } else {
          exit("Mail not sent.");
      }
   }

   die();
}

?>