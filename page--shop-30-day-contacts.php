<?php
/**
* Template Name: Shop 30 Day Contacts Page
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

$args = array(
    'post_type' => 'product',
    'tax_query' => array(
        array(
            'taxonomy' => 'product-category',
            'field' => 'slug', //can be set to ID
            'terms' => '30-day-contacts' //Category
        )
    )
);
$query = new WP_Query( $args );
?>

<body <?php body_class('gradient--active'); ?>>

<?php get_template_part( '/template-parts/content', 'nav' ); ?>

<div class="main-container container-shop">
    <section>
        <div class="container">
            <div class="row">
                <?php
                    if ($query->have_posts()): 
                    while ( $query->have_posts() ) : $query->the_post();
                    $postid = get_the_ID();
                    $nonce = wp_create_nonce("post_purchase_product_nonce");
                ?>
                        <div class="col-sm-6 col-md-4">
                            <?php if( get_field('thumbnail_image') ): ?>
                                <img alt="image" src="<?php the_field('thumbnail_image'); ?>">
                            <?php endif; ?>
                            
                            <div class="pricing-option boxed boxed--sm bg--white text-center">
                                <h6><?php the_title() ?></h6>
                                <div class="pricing-option__price">
                                    <?php if( get_field('price') ): ?>
                                        <span>$</span>
                                        <span class="h1"><?php the_field('price'); ?></span>
                                    <?php endif; ?>
                                </div>
                                <a href="#" class="btn purchase-btn" data-postId="<?php echo $postid; ?>" data-nonce="<?php echo $nonce; ?>"><span class="btn__text">Buy now</span><i class="ion-android-checkmark-circle"></i></a>
                                <?php if( get_field('short_description') ): ?>
                                    <p><?php the_field('short_description'); ?></p>
                                <?php endif; ?>
                                <?php 
                                    $clean_title = str_replace(' ', '%20', get_the_title());
                                ?>
                                <div>
                                    <span class="type--fine-print">or <a class="link-underline" href="mailto:me@mysite.com&subject=Purchase%20Inquiry%20for%20<?php echo $clean_title; ?>">Get in touch</a> for more info
                                    </span>
                                </div>
                            </div>
                        </div>
                <?php 
                    endwhile;
                    endif;
                ?>
            </div> 
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Product Details</h4>
                    </div>
                    <div class="modal-body">
                        <div id="product-print" class="col-sm-12 col-md-6"></div>
                        <div class="product-table col-sm-12 col-md-6">
                            <table class="variations" cellspacing="0">
                                <tbody>
                                    <tr>
                                    <td class="label"><label for="left-eye">Left eye</label></td>
                                    <td class="value">
                                    <select id="left-eye" class="" name="attribute_left-eye" data-attribute_name="attribute_left-eye" data-show_option_none="yes"><option value="">Choose an option</option><option value="-9.0" class="attached enabled">-9.0</option><option value="-8.5" class="attached enabled">-8.5</option><option value="-8.0" class="attached enabled">-8.0</option><option value="-7.5" class="attached enabled">-7.5</option><option value="-7.0" class="attached enabled">-7.0</option><option value="-6.5" class="attached enabled">-6.5</option><option value="-6.0" class="attached enabled">-6.0</option><option value="-5.75" class="attached enabled">-5.75</option><option value="-5.5" class="attached enabled">-5.5</option><option value="-5.25" class="attached enabled">-5.25</option><option value="-5.0" class="attached enabled">-5.0</option><option value="-4.75" class="attached enabled">-4.75</option><option value="-4.5" class="attached enabled">-4.5</option><option value="-4.25" class="attached enabled">-4.25</option><option value="-4.0" class="attached enabled">-4.0</option><option value="-3.75" class="attached enabled">-3.75</option><option value="-3.5" class="attached enabled">-3.5</option><option value="-3.25" class="attached enabled">-3.25</option><option value="-3.0" class="attached enabled">-3.0</option><option value="-2.75" class="attached enabled">-2.75</option><option value="-2.5" class="attached enabled">-2.5</option><option value="-2.25" class="attached enabled">-2.25</option><option value="-2.0" class="attached enabled">-2.0</option><option value="-1.75" class="attached enabled">-1.75</option><option value="-1.5" class="attached enabled">-1.5</option><option value="-1.25" class="attached enabled">-1.25</option><option value="-1.0" class="attached enabled">-1.0</option><option value="-0.75" class="attached enabled">-0.75</option><option value="-0.5" class="attached enabled">-0.5</option><option value="+0.5" class="attached enabled">+0.5</option><option value="+0.75" class="attached enabled">+0.75</option><option value="+1.0" class="attached enabled">+1.0</option><option value="+1.25" class="attached enabled">+1.25</option><option value="+1.5" class="attached enabled">+1.5</option><option value="+1.75" class="attached enabled">+1.75</option><option value="+2.0" class="attached enabled">+2.0</option><option value="+2.25" class="attached enabled">+2.25</option><option value="+2.5" class="attached enabled">+2.5</option><option value="+2.75" class="attached enabled">+2.75</option><option value="+ 3.0" class="attached enabled">+ 3.0</option><option value="+3.25" class="attached enabled">+3.25</option><option value="+3.5" class="attached enabled">+3.5</option><option value="+3.75" class="attached enabled">+3.75</option><option value="+4.0" class="attached enabled">+4.0</option><option value="+4.25" class="attached enabled">+4.25</option><option value="+4.5" class="attached enabled">+4.5</option><option value="+4.75" class="attached enabled">+4.75</option><option value="+5.0" class="attached enabled">+5.0</option><option value="+5.25" class="attached enabled">+5.25</option><option value="+5.50" class="attached enabled">+5.50</option><option value="+5.75" class="attached enabled">+5.75</option><option value="+6.0" class="attached enabled">+6.0</option><option value="+6.5" class="attached enabled">+6.5</option><option value="+7.0" class="attached enabled">+7.0</option><option value="+7.5" class="attached enabled">+7.5</option><option value="+8.0" class="attached enabled">+8.0</option></select> </td>
                                    </tr>
                                    <tr>
                                    <td class="label"><label for="test1">Test1</label></td>
                                    <td class="value">
                                    <select id="test1" class="" name="attribute_test1" data-attribute_name="attribute_test1" data-show_option_none="yes"><option value="">Choose an option</option><option value="-0.75" class="attached enabled">-0.75</option><option value="-1.25" class="attached enabled">-1.25</option><option value="-1.75" class="attached enabled">-1.75</option><option value="-2.25" class="attached enabled">-2.25</option><option value="-2.75" class="attached enabled">-2.75</option></select> </td>
                                    </tr>
                                    <tr>
                                    <td class="label"><label for="test2">Test2</label></td>
                                    <td class="value">
                                    <select id="test2" class="" name="attribute_test2" data-attribute_name="attribute_test2" data-show_option_none="yes"><option value="">Choose an option</option><option value="10" class="attached enabled">10</option><option value="20" class="attached enabled">20</option><option value="30" class="attached enabled">30</option><option value="40" class="attached enabled">40</option><option value="50" class="attached enabled">50</option><option value="60" class="attached enabled">60</option><option value="70" class="attached enabled">70</option><option value="80" class="attached enabled">80</option><option value="90" class="attached enabled">90</option><option value="100" class="attached enabled">100</option><option value="110" class="attached enabled">110</option><option value="120" class="attached enabled">120</option><option value="130" class="attached enabled">130</option><option value="140" class="attached enabled">140</option><option value="150" class="attached enabled">150</option><option value="160" class="attached enabled">160</option><option value="170" class="attached enabled">170</option><option value="180" class="attached enabled">180</option></select> </td>
                                    </tr>
                                    <tr>
                                    <td class="label"><label for="test3">Test3</label></td>
                                    <td class="value">
                                    <select id="test3" class="" name="attribute_test3" data-attribute_name="attribute_test3" data-show_option_none="yes"><option value="">Choose an option</option><option value="0" class="attached enabled">0</option><option value="1" class="attached enabled">1</option><option value="2" class="attached enabled">2</option><option value="3" class="attached enabled">3</option><option value="4" class="attached enabled">4</option><option value="5" class="attached enabled">5</option><option value="6" class="attached enabled">6</option><option value="7" class="attached enabled">7</option><option value="8" class="attached enabled">8</option><option value="9" class="attached enabled">9</option><option value="10" class="attached enabled">10</option><option value="11" class="attached enabled">11</option><option value="12" class="attached enabled">12</option><option value="13" class="attached enabled">13</option><option value="14" class="attached enabled">14</option><option value="15" class="attached enabled">15</option><option value="16" class="attached enabled">16</option><option value="17" class="attached enabled">17</option><option value="18" class="attached enabled">18</option><option value="19" class="attached enabled">19</option><option value="20" class="attached enabled">20</option></select> </td>
                                    </tr>
                                    <tr>
                                    <td class="label"><label for="right-eye">Right eye</label></td>
                                    <td class="value">
                                    <select id="right-eye" class="" name="attribute_right-eye" data-attribute_name="attribute_right-eye" data-show_option_none="yes"><option value="">Choose an option</option><option value="-9.0" class="attached enabled">-9.0</option><option value="-8.5" class="attached enabled">-8.5</option><option value="-8.0" class="attached enabled">-8.0</option><option value="-7.5" class="attached enabled">-7.5</option><option value="-7.0" class="attached enabled">-7.0</option><option value="-6.5" class="attached enabled">-6.5</option><option value="-6.0" class="attached enabled">-6.0</option><option value="-5.75" class="attached enabled">-5.75</option><option value="-5.5" class="attached enabled">-5.5</option><option value="-5.25" class="attached enabled">-5.25</option><option value="-5.0" class="attached enabled">-5.0</option><option value="-4.75" class="attached enabled">-4.75</option><option value="-4.5" class="attached enabled">-4.5</option><option value="-4.25" class="attached enabled">-4.25</option><option value="-4.0" class="attached enabled">-4.0</option><option value="-3.75" class="attached enabled">-3.75</option><option value="-3.5" class="attached enabled">-3.5</option><option value="-3.25" class="attached enabled">-3.25</option><option value="-3.0" class="attached enabled">-3.0</option><option value="-2.75" class="attached enabled">-2.75</option><option value="-2.5" class="attached enabled">-2.5</option><option value="-2.25" class="attached enabled">-2.25</option><option value="-2.0" class="attached enabled">-2.0</option><option value="-1.75" class="attached enabled">-1.75</option><option value="-1.5" class="attached enabled">-1.5</option><option value="-1.25" class="attached enabled">-1.25</option><option value="-1.0" class="attached enabled">-1.0</option><option value="-0.75" class="attached enabled">-0.75</option><option value="-0.5" class="attached enabled">-0.5</option><option value="+0.5" class="attached enabled">+0.5</option><option value="+0.75" class="attached enabled">+0.75</option><option value="+1.0" class="attached enabled">+1.0</option><option value="+1.25" class="attached enabled">+1.25</option><option value="+1.5" class="attached enabled">+1.5</option><option value="+1.75" class="attached enabled">+1.75</option><option value="+2.0" class="attached enabled">+2.0</option><option value="+2.25" class="attached enabled">+2.25</option><option value="+2.5" class="attached enabled">+2.5</option><option value="+2.75" class="attached enabled">+2.75</option><option value="+ 3.0" class="attached enabled">+ 3.0</option><option value="+3.25" class="attached enabled">+3.25</option><option value="+3.5" class="attached enabled">+3.5</option><option value="+3.75" class="attached enabled">+3.75</option><option value="+4.0" class="attached enabled">+4.0</option><option value="+4.25" class="attached enabled">+4.25</option><option value="+4.5" class="attached enabled">+4.5</option><option value="+4.75" class="attached enabled">+4.75</option><option value="+5.0" class="attached enabled">+5.0</option><option value="+5.25" class="attached enabled">+5.25</option><option value="+5.50" class="attached enabled">+5.50</option><option value="+5.75" class="attached enabled">+5.75</option><option value="+6.0" class="attached enabled">+6.0</option><option value="+6.5" class="attached enabled">+6.5</option><option value="+7.0" class="attached enabled">+7.0</option><option value="+7.5" class="attached enabled">+7.5</option><option value="+8.0" class="attached enabled">+8.0</option></select> </td>
                                    </tr>
                                    <tr>
                                    <td class="label"><label for="test-1">Test 1</label></td>
                                    <td class="value">
                                    <select id="test-1" class="" name="attribute_test-1" data-attribute_name="attribute_test-1" data-show_option_none="yes"><option value="">Choose an option</option><option value="-0.75" class="attached enabled">-0.75</option><option value="-1.25" class="attached enabled">-1.25</option><option value="-1.75" class="attached enabled">-1.75</option><option value="-2.25" class="attached enabled">-2.25</option><option value="-2.75" class="attached enabled">-2.75</option></select> </td>
                                    </tr>
                                    <tr>
                                    <td class="label"><label for="test-2">Test 2</label></td>
                                    <td class="value">
                                    <select id="test-2" class="" name="attribute_test-2" data-attribute_name="attribute_test-2" data-show_option_none="yes"><option value="">Choose an option</option><option value="10" class="attached enabled">10</option><option value="20" class="attached enabled">20</option><option value="30" class="attached enabled">30</option><option value="40" class="attached enabled">40</option><option value="50" class="attached enabled">50</option><option value="60" class="attached enabled">60</option><option value="70" class="attached enabled">70</option><option value="80" class="attached enabled">80</option><option value="90" class="attached enabled">90</option><option value="100" class="attached enabled">100</option><option value="110" class="attached enabled">110</option><option value="120" class="attached enabled">120</option><option value="130" class="attached enabled">130</option><option value="140" class="attached enabled">140</option><option value="150" class="attached enabled">150</option><option value="160" class="attached enabled">160</option><option value="170" class="attached enabled">170</option><option value="180" class="attached enabled">180</option></select> </td>
                                    </tr>
                                    <tr>
                                    <td class="label"><label for="test-3">Test 3</label></td>
                                    <td class="value">
                                    <select id="test-3" class="" name="attribute_test-3" data-attribute_name="attribute_test-3" data-show_option_none="yes"><option value="">Choose an option</option><option value="0" class="attached enabled">0</option><option value="1" class="attached enabled">1</option><option value="2" class="attached enabled">2</option><option value="3" class="attached enabled">3</option><option value="4" class="attached enabled">4</option><option value="5" class="attached enabled">5</option><option value="6" class="attached enabled">6</option><option value="7" class="attached enabled">7</option><option value="8" class="attached enabled">8</option><option value="9" class="attached enabled">9</option><option value="10" class="attached enabled">10</option><option value="11" class="attached enabled">11</option><option value="12" class="attached enabled">12</option><option value="13" class="attached enabled">13</option><option value="14" class="attached enabled">14</option><option value="15" class="attached enabled">15</option><option value="16" class="attached enabled">16</option><option value="17" class="attached enabled">17</option><option value="18" class="attached enabled">18</option><option value="19" class="attached enabled">19</option><option value="20" class="attached enabled">20</option></select><a class="reset_variations" href="#" style="visibility: hidden;">Clear</a> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button id="purchaseSend" type="button" class="btn btn-primary">Submit purchase</button>
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