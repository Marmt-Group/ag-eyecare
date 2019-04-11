<?php
/**
* Template Name: Contact Page
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

    <section class="section-snippet-about-2 bg--secondary container-header imagebg" data-overlay="7">
        <div class="container">
            <div class="row pos-vertical-align-columns">
                <div class="col-sm-5 text-center">
                    <h3>Send us an inquiry</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="section-contact-1">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 centered">
                    <!-- <h6 class="text-center">Send An Inquiry</h6>
                    <hr> -->
                    <?php echo do_shortcode('[ninja_form id=2]'); ?>
                </div>
            </div>
            
        </div>
	</section>
    <?php get_template_part( '/template-parts/content', 'booking' ); ?>
</div>

<?php
    get_footer();
?>