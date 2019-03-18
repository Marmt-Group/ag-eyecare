<?php
/**
* Template Name: Services Page
*
* @package WordPress
* @subpackage AG_Eyecare
* @since 1.0.0
*/

get_header();
?>

<body <?php body_class('gradient--active'); ?>>

<?php get_template_part( '/template-parts/content', 'nav' ); ?>
		
<div class="main-container">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="boxed imagebg text-center stat-simple bg--primary" data-overlay="7">
                        <div class="background-image-holder">
                            <img alt="image" src="img/old.jpg">
                        </div>
                        <span class="h1 color--white">1984</span>
                        <p>
                            Our doors are open to all businesses -<br class="hidden-xs hidden-sm"> the diversity of our client base makes us<br class="hidden-xs"> better at what we do.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="boxed imagebg text-center stat-simple" data-overlay="7">
                        <div class="background-image-holder">
                            <img alt="image" src="img/case-study-4.jpg">
                        </div>
                        <span class="h1 color--white">350+</span>
                        <p>
                            We believe strong business relationships<br class="hidden-xs hidden-sm"> are founded on honest and transparent<br class="hidden-xs"> practice.
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
        
    </section>
    
    <!-- <section>
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
        
    </section> -->
</div>



<?php
    get_footer();
?>