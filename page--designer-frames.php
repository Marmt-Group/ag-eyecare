<?php
/**
* Template Name: Designer Frames Page
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
    <section class="section-snippet-about-2 bg--secondary container-header imagebg">
        <div class="container">
            <div class="row pos-vertical-align-columns">
                <div class="col-sm-5">
                    <?php if( get_field('headline') ): ?>
                        <?php the_field('headline'); ?>
                    <?php endif; ?>

                    <?php if( get_field('subheadline') ): ?>
                        <?php the_field('subheadline'); ?>
                    <?php endif; ?>

                    <?php if( get_field('header_cta_url') ): ?>
                    <a href="<?php the_field('header_cta_url'); ?>" class="btn btn--white">
                        <span class="btn__text"><?php the_field('header_cta_text'); ?></span>
                        <i class="ion-arrow-right-c"></i>
                    </a>
                    <?php endif; ?>
                </div>
                <div class="col-sm-6 col-md-push-1">
                    <div class="boxed imagebg text-center" data-overlay="3">
                        <div class="boxed-text">
                        <span class="h1 color--white">LUX-</span><br>
                        <span class="h1 color--white">URY</span><br>
                        <span class="h1 color--white">FRAMES</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-hero-3 section--card container-slider">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="slider box-shadow" data-animation="slide" data-arrows="true" data-timing="5000">
                        <ul class="slides">
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Designer Frames Trend Book image" src="<?php echo get_template_directory_uri() ?>/img/products_carousel.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Unmatched luxury from leading designers image" src="<?php echo get_template_directory_uri() ?>/img/products_carousel2.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Take on anything and stay on-trend image" src="<?php echo get_template_directory_uri() ?>/img/products_carousel3.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Dolce Y Gabbana prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel4.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Kate Spade prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel5.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Gucci prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel6.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Diane Von Furstenburg prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel7.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Marc Jacobs prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel8.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Miu Miu prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel9.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Etnia Barcelona prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel10.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Etnia Barcelona prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel11.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Tom Ford prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel12.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Tom Ford prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel13.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Coach prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel14.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Versace prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel15.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Ray Ban prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel16.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Ray Ban prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel17.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Skaga prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel18.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Michael Kors prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel19.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Persol prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel20.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Persol prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel21.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Persol prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel22.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Persol prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel23.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Fendi prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel24.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Burberry prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel25.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Tiffany & Co prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel26.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Polo prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel27.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Valentino prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel28.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Prada prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel29.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Prada prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel30.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Eco prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel31.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Eco prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel32.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Chloe prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel33.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Tory Burch prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel34.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Bvlgari prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel35.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Lacoste prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel36.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Fun styles for little ones prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel37.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Ray Ban prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel38.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Nike prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel39.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Lacoste prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel40.jpg">
                                </div>
                            </li>
                            <li class="imagebg" >
                                <div class="background-image-holder">
                                    <img alt="Disney prescription & sunglasses" src="<?php echo get_template_directory_uri() ?>/img/products_carousel41.jpg">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-summary bg--primary add-glasses-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <?php if( get_field('block_text_cta') ): ?>
                        <?php the_field('block_text_cta'); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part( '/template-parts/content', 'booking' ); ?>

 </div>

<?php
    get_footer();
?>