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
    <section class="section-snippet-about-2 bg--secondary container-header imagebg" style="background-image: url(<?php the_field('header_image'); ?>);">
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

    <?php if( have_rows('brands') ): ?>
    <section class="section-snippet-about-2 bg--secondary container-logos">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3 style="margin:1.5em 0 0;font-size:2em;">Top brands include:</h3>
                    <div class="partner-logos">
                      <?php while ( have_rows('brands') ) : the_row(); 
                        $logo = get_sub_field('logo');
                      ?>
                        <img alt="" src="<?php echo $logo; ?>">
                      <?php endwhile; ?>
                    </div>
                    <h3 style="margin:1.5em 0 0;font-size:1em;">and many more</h3>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php if( have_rows('slides') ): ?>
      <section class="section-hero-3 section--card container-slider add-glasses-2">
          <div class="container">
              <div class="row">
                  <div class="col-sm-12">
                      <div class="slider box-shadow" data-animation="slide" data-arrows="true" data-timing="5000">
                          <ul class="slides">
                            <?php while ( have_rows('slides') ) : the_row(); 
                              $image = get_sub_field('image');
                            ?>
                              <li class="imagebg" >
                                  <div class="background-image-holder">
                                      <img alt="<?php echo $image['alt']; ?>" src="<?php echo $image['url']; ?>">
                                  </div>
                              </li>
                            <?php endwhile; ?>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </section>
    <?php endif; ?>

    <section class="container-summary bg--primary">
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