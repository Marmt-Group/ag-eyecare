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
                    <h3>We care top luxury brands<br class="hidden-xs hidden-sm">in all shapes and sizes.</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo obcaecati id quis distinctio! Repellendus veniam provident ipsam est commodi ab, debitis dolor tempora, ducimus architecto doloremque, expedita adipisci molestiae eligendi.</p>
                    <a href="#" class="btn btn--white">
                        <span class="btn__text">Start shopping now</span>
                        <i class="ion-arrow-right-c"></i>
                    </a>
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

    <section class="section-snippet-about-2 bg--secondary container-logos">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3 style="margin:1.5em 0 0;font-size:2em;">Top brands include:</h3>
                    <div class="partner-logos">
                        <img alt="Client" src="<?php echo get_template_directory_uri() ?>/img/Coach_New_Logo.svg">
                        <img alt="Client" src="<?php echo get_template_directory_uri() ?>/img/Gucci_logo.svg">
                        <img alt="Client" src="<?php echo get_template_directory_uri() ?>/img/lacoste-1-logo-svg-vector.svg">
                        <img alt="Client" src="<?php echo get_template_directory_uri() ?>/img/ray-ban-logo-svg-vector.svg">
                        <img alt="Client" src="<?php echo get_template_directory_uri() ?>/img/Tiffany_Logo.svg">
                        <img alt="Client" src="<?php echo get_template_directory_uri() ?>/img/Persol_logo.svg">
                        <img alt="Client" src="<?php echo get_template_directory_uri()  ?>/img/Prada-Logo.svg">
                        <img alt="Client" src="<?php echo get_template_directory_uri()  ?>/img/Dolce_and_Gabbana.svg">
                        <img alt="Client" src="<?php echo get_template_directory_uri()  ?>/img/Versace_logo.svg">
                        <img alt="Client" src="<?php echo get_template_directory_uri()  ?>/img/Burberry_Logo.svg">
                        <img alt="Client" src="<?php echo get_template_directory_uri()  ?>/img/Bulgari_logo.svg">
                        <img alt="Client" src="<?php echo get_template_directory_uri()  ?>/img/Fendi_logo.svg">
                    </div>
                    <h3 style="margin:1.5em 0 0;font-size:1em;">and many more</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="container-summary bg--primary">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p class="lead">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. <br>
                        Dolores itaque odit voluptatem unde provident quisquam molestias, <br>
                        deserunt voluptates quae quidem maxime cupiditate nesciunt velit, <br>
                        dignissimos, ad in vero placeat nobis.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="imagebg image--light gradient--bg-fade section-cta-bottom background--bottom">
        <div class="background-image-holder">
            <img alt="image" src="<?php echo get_template_directory_uri() ?>/img/about2.jpg" />
        </div>
        <div class="container">
            <div class="row">
            <div class="col-sm-12 text-center">
              <h2>
                Ready to see beyond the clouds?
              </h2>
              <p>
                Optometry services and much more - speak to an Avant-Garde
                associate today.
              </p>
              <a href="#" class="btn"
                ><span class="btn__text">Book a consultation</span
                ><i class="ion-arrow-right-c"></i
              ></a>
              <a href="#" class="btn btn--transparent"
                ><span class="btn__text">Explore our services</span>
              </a>
            </div>
            </div>
        </div>
    </section>

 </div>

<?php
    get_footer();
?>