<?php
/**
* Template Name: Shop Daily Contacts Page
*
* @package WordPress
* @subpackage AG_Eyecare
* @since 1.0.0
*/

get_header();

// $terms = get_terms( array(
//     'taxonomy' => 'product-category',
//     'hide_empty' => true,
// ) );
// $termsArray = array();
// foreach ($terms as $term) {
//     array_push($termsArray, (object)array("name" => $term->name, "link" => $term->slug));
// }
// foreach ($termsArray as $item) {
//     var_dump($item);
// }
// $args = array(
//     'post_type' => 'product',
//     'tax_query' => array(
//         array(
//             'taxonomy' => 'product-category',
//             'field' => 'slug', //can be set to ID
//             'terms' => '30-day-contacts' //if field is ID you can reference by cat/term number
//         )
//     )
// );
// $query = new WP_Query( $args );

// // Get unique posts by category.
// if ( $query->have_posts() ) {
// 	echo '<ul>';
// 	while ( $query->have_posts() ) {
// 		$query->the_post();
// 		echo '<li>' . get_the_title() . '</li>';
// 	}
// 	echo '</ul>';
// 	/* Restore original Post Data */
// 	wp_reset_postdata();
// }
?>

<body <?php body_class('gradient--active'); ?>>

<?php get_template_part( '/template-parts/content', 'nav' ); ?>

<div class="main-container">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-1 col-sm-6">
                    <img alt="image" src="img/service1.jpg">
                    <div class="pricing-option boxed boxed--sm bg--white text-center">
                        <h6>Bare Essentials</h6>
                        <div class="pricing-option__price">
                            <span>$</span>
                            <span class="h1">14.99</span>
                            <span>per mo.</span>
                        </div>
                        <a href="#" class="btn"><span class="btn__text">Subscribe Now</span><i class="ion-android-checkmark-circle"></i>
                        </a>
                        <div>
                            <span class="type--fine-print">or<a class="link-underline" href="#">Get in touch</a> for more info
                            </span>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-5 col-sm-6">
                    <img alt="image" src="img/service2.jpg">
                    <div class="pricing-option boxed boxed--sm bg--white text-center">
                        <h6>Power User</h6>
                        <div class="pricing-option__price">
                            <span>$</span>
                            <span class="h1">39.99</span>
                            <span>per mo.</span>
                        </div>
                        <a href="#" class="btn"><span class="btn__text">Subscribe Now</span><i class="ion-android-checkmark-circle"></i>
                        </a>
                        <div>
                            <span class="type--fine-print">or<a class="link-underline" href="#">Get in touch</a> for more info
                            </span>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
        
    </section>
</div>

<?php
    get_footer();
?>