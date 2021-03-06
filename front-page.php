<?php
/**
 * Homepage template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
    <section class="height-100 imagebg section-hero-1 bg--primary" data-overlay="7">
        <div class="background-image-holder">
            <div class="tv" data-video-id="-oeB49LF2k8" data-video-start="35" data-video-end="43" data-video-width-add="0" data-video-height-add="0">
            <div class="screen mute" id="tv"></div>
            </div>
        </div>

        <div class="container pos-vertical-center">
            <div class="row">
            <div class="col-sm-12">
                <?php if( get_field('headline') ): ?>
                    <?php the_field('headline'); ?>
                <?php endif; ?>
                <?php if( get_field('sub_headline') ): ?>
                    <?php the_field('sub_headline'); ?>
                <?php endif; ?>
                <?php if ( get_field('header_cta_url') ): ?>
                    <a href="<?php the_field('header_cta_url'); ?>" class="btn btn--white">
                    <span class="btn__text"><?php the_field('header_cta_url_text'); ?></span>
                    <i class="ion-arrow-right-c"></i>
                    </a>
                <?php endif; ?>
                <?php if ( get_field('header_secondary_cta_url')) : ?>
                    <a href="<?php the_field('header_secondary_cta_url'); ?>" class="btn btn--white btn--transparent">
                    <span class="btn__text"><?php the_field('header_secondary_cta_url_text'); ?></span>
                    </a>
                <?php endif; ?>
            </div>
            </div>
        </div>
    </section>

    <section class="section-snippet-services add-glasses-1">
        <div class="container">
            <div class="row">
            <div class="icon-title">
                <span class="h6">Your Guide</span>
                <i class="icon-compass icon"></i>
                <span class="h6">In optometry</span>
            </div>
            </div>

            <div class="row">
            <div class="col-sm-12 text-center">
                <?php if ( get_field('optometry_guide_header_text')) : ?>
                    <?php the_field('optometry_guide_header_text'); ?>
                <?php endif; ?>
            </div>
            </div>

            <div class="row">
            <div class="col-sm-6">
                <div class="hover-element service-element hover--active">
                <div class="hover-element__initial">
                    <?php if ( get_field('optometry_guide_block_1_header')) : ?>
                        <h3><?php the_field('optometry_guide_block_1_header'); ?></h3>
                    <?php endif; ?>
                    <?php if ( get_field('optometry_guide_block_1_text')) : ?>
                        <p><?php the_field('optometry_guide_block_1_text'); ?></p>
                        <a class="link-underline" href="<?php the_field('optometry_guide_block_1_url'); ?>">Tell Me More</a>
                    <?php endif; ?>
                </div>
                <div class="hover-element__reveal" data-overlay="7">
                    <div class="background-image-holder">
                    <img alt="image" src="<?php echo get_template_directory_uri() ?>/img/large-4.jpg" />
                    </div>
                </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="hover-element service-element hover--active">
                <div class="hover-element__initial">
                    <?php if ( get_field('optometry_guide_block_2_header')) : ?>
                        <h3><?php the_field('optometry_guide_block_2_header'); ?></h3>
                    <?php endif; ?>
                    <?php if ( get_field('optometry_guide_block_2_text')) : ?>
                        <p><?php the_field('optometry_guide_block_2_text'); ?></p>
                        <a class="link-underline" href="<?php the_field('optometry_guide_block_2_url'); ?>">Tell Me More</a>
                    <?php endif; ?>
                </div>
                <div class="hover-element__reveal" data-overlay="7">
                    <div class="background-image-holder">
                    <img alt="image" src="<?php echo get_template_directory_uri() ?>/img/large-13.jpg" />
                    </div>
                </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="hover-element service-element hover--active">
                <div class="hover-element__initial">
                    <?php if ( get_field('optometry_guide_block_3_header')) : ?>
                        <h3><?php the_field('optometry_guide_block_3_header'); ?></h3>
                    <?php endif; ?>
                    <?php if ( get_field('optometry_guide_block_3_text')) : ?>
                        <p><?php the_field('optometry_guide_block_3_text'); ?></p>
                        <a class="link-underline" href="<?php the_field('optometry_guide_block_3_url'); ?>">Tell Me More</a>
                    <?php endif; ?>
                </div>
                <div class="hover-element__reveal" data-overlay="7">
                    <div class="background-image-holder">
                    <img alt="image" src="<?php echo get_template_directory_uri() ?>/img/large-14.jpg" />
                    </div>
                </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="hover-element service-element hover--active">
                <div class="hover-element__initial">
                    <?php if ( get_field('optometry_guide_block_4_header')) : ?>
                        <h3><?php the_field('optometry_guide_block_4_header'); ?></h3>
                    <?php endif; ?>
                    <?php if ( get_field('optometry_guide_block_4_text')) : ?>
                        <p><?php the_field('optometry_guide_block_4_text'); ?></p>
                        <a class="link-underline" href="<?php the_field('optometry_guide_block_4_url'); ?>">Tell Me More</a>
                    <?php endif; ?>
                </div>
                <div class="hover-element__reveal" data-overlay="7">
                    <div class="background-image-holder">
                    <img alt="image" src="<?php echo get_template_directory_uri() ?>/img/service2.jpg" />
                    </div>
                </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="hover-element service-element hover--active">
                <div class="hover-element__initial">
                    <?php if ( get_field('optometry_guide_block_5_header')) : ?>
                        <h3><?php the_field('optometry_guide_block_5_header'); ?></h3>
                    <?php endif; ?>
                    <?php if ( get_field('optometry_guide_block_5_text')) : ?>
                        <p><?php the_field('optometry_guide_block_5_text'); ?></p>
                        <a class="link-underline" href="<?php the_field('optometry_guide_block_5_url'); ?>">Tell Me More</a>
                    <?php endif; ?>
                </div>
                <div class="hover-element__reveal" data-overlay="7">
                    <div class="background-image-holder">
                    <img alt="image" src="<?php echo get_template_directory_uri() ?>/img/large-9.jpg" />
                    </div>
                </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="hover-element service-element hover--active">
                <div class="hover-element__initial">
                    <?php if ( get_field('optometry_guide_block_6_header')) : ?>
                        <h3><?php the_field('optometry_guide_block_6_header'); ?></h3>
                    <?php endif; ?>
                    <?php if ( get_field('optometry_guide_block_6_text')) : ?>
                        <p><?php the_field('optometry_guide_block_6_text'); ?></p>
                        <a class="link-underline" href="<?php the_field('optometry_guide_block_6_url'); ?>">Tell Me More</a>
                    <?php endif; ?>
                </div>
                <div class="hover-element__reveal" data-overlay="7">
                    <div class="background-image-holder">
                    <img alt="image" src="<?php echo get_template_directory_uri() ?>/img/large17.jpg" />
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <section class="imageblock section-snippet-about bg--secondary add-glasses-3">
        <div class="imageblock__content pos-left hidden-sm hidden-xs allow-overflow col-md-6">
            <img alt="image" src="<?php echo get_template_directory_uri() ?>/img/dr-jamie-yee.png" style="right: 0; width: 80%; max-width: 600px;"/>
        </div>
        <div class="container">
            <div class="row">
            <div class="col-md-6 col-md-push-6 col-sm-8 col-sm-push-2">
                <?php if ( get_field('spotlight_optometrist_header')): ?>
                    <?php the_field('spotlight_optometrist_header'); ?>
                <?php endif; ?>
                
                <?php if ( get_field('spotlight_optometrist_text')): ?>
                    <?php the_field('spotlight_optometrist_text'); ?>
                <?php endif; ?>
                <img class="col-sm-4 col-xs-5" alt="image" src="<?php echo get_template_directory_uri() ?>/img/signature.png"/>
                <h5>Dr Jamie Yee - Owner & Founder</h5>
            </div>
            </div>
        </div>
    </section>

    <section class="section-instafeed">
        <div class="container">
            <h6>
            Avant-Garde Optometry in Action -
            <a href="https://www.instagram.com/avant_garde_optometry" target="_blank">View more on Instagram <i class="icon socicon socicon-instagram"></i></a>
            </h6>
            <div id="instafeed" class="instafeed-list"></div>
        </div>
    </section>

    <div id="map"></div>

    <?php get_template_part( '/template-parts/content', 'booking' ); ?>

</div>

<?php
    get_footer();
?>