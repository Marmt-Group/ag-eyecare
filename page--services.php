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
    <section class="imageblock imageblock--lg section-snippet-services-2 bg--primary container-services-header">
        <div class="imageblock__content col-md-5 col-sm-4 pos-right hidden-xs">
            <div class="background-image-holder"></div>
        </div>
    
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6 col-sm-push-1">
                    <!-- <div class="section-title">
                        <h6>Diverse Financial Expertise</h6>
                        <hr>
                    </div> -->
                    <div class="slider" data-paging="true" data-animation="slide">
                        <ul class="slides">
                        <?php
                            if( have_rows('headline_text_slider') ):
                                while ( have_rows('headline_text_slider') ) : the_row();?>
                                     <li>
                                     <?php the_sub_field('headline'); ?>
                                     <?php the_sub_field('text'); ?>
                                     </li>
                         <?php
                                endwhile;
                            endif;
                        ?>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <section class="container-glasses">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="tabs-container">
                        <ul class="tabs text-center">
                            <li class="active">
                                <div class="tab__title">
                                    <img alt="icon" src="<?php echo get_template_directory_uri() ?>/img/glasses.svg">
                                    <h5>Prescription Lenses</h5>
                                </div>
                                <div class="tab__content">
                                    <?php if( get_field('prescription_lens_text') ): ?>
                                        <?php the_field('prescription_lens_text'); ?>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li>
                                <div class="tab__title">
                                    <img alt="icon" src="<?php echo get_template_directory_uri() ?>/img/contacts.svg">
                                    <h5>Contact Lenses</h5>
                                </div>
                                <div class="tab__content">
                                    <?php if( get_field('contact_lens_text') ): ?>
                                        <?php the_field('contact_lens_text'); ?>
                                    <?php endif; ?>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="section-team-small container-equipment add-glasses-1">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <?php if( get_field('equipment_headline') ): ?>
                        <h3><?php the_field('equipment_headline'); ?></h3>
                    <?php endif; ?>
                </div>
            </div>
            
            <div class="row">
                <?php
                    if( have_rows('equipment_blocks') ):
                        while ( have_rows('equipment_blocks') ) : the_row();?>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="team-member team-member--small">
                                        <img alt="Image" src="<?php the_sub_field('equipment_image') ?>">
                                        <h4><?php the_sub_field('equipment_headline') ?></h4>
                                        <p><?php the_sub_field('equipment_text') ?></p>
                                    </div>
                                    
                                </div>
                    <?php
                        endwhile;
                    endif;
                ?>
            </div>
            
        </div>
    </section>

    <section class="section-snippet-benefits imageblock bg--secondary container-encyclopedia hide-overflow">
			<div class="imageblock__content col-md-5 col-sm-3 pos-right hidden-xs">
				<div class="background-image-holder"></div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-8 text-center">
						<div class="icon-title">
							<span class="h6">Information</span>
							<i class="icon-quote icon"></i>
							<span class="h6">Center</span>
						</div>
                        
                        <?php if( get_field('encyclopedia_header_text') ): ?>
                            <h3><?php the_field('encyclopedia_header_text'); ?></h3>
                        <?php endif; ?>

                        <?php if( get_field('encyclopedia_body_text') ): ?>
                            <p><?php the_field('encyclopedia_body_text'); ?></p>
                        <?php endif; ?>
						
						<div class="boxed-holder text-center">
							<div class="boxed boxed--border encyclopedia" data-content="disease">
								<i class="icon icon--sm icon-anchor"></i>
								<span>Common Eye Diseases</span>
							</div>

							<div class="boxed boxed--border encyclopedia" data-content="evaluation">
								<i class="icon icon--sm icon-speedometer"></i>
								<span>Proficient Evaluation</span>
							</div>

							<div class="boxed boxed--border encyclopedia" data-content="insurance">
								<i class="icon icon--sm icon-strategy"></i>
								<span>Insurance</span>
							</div>

						</div>

					</div>
                </div>
                
                <div id="content-insurance" class="hidden bg--secondary content-reveal row">
                    <i class="ion-close"></i>
                    <div class="container">
                        <?php if( get_field('insurance_text') ): ?>
                            <?php the_field('insurance_text'); ?>
                        <?php endif; ?>
                    </div>
                </div>

                <div id="content-disease" class="hidden bg--secondary content-reveal row">
                    <i class="ion-close"></i>
                    <div class="container">
                    <?php if( get_field('common_eye_disease_text') ): ?>
                        <?php the_field('common_eye_disease_text'); ?>
                    <?php endif; ?>
                    </div>
                </div>

                <div id="content-evaluation" class="hidden bg--secondary content-reveal row">
                    <i class="ion-close"></i>
                    <div class="container">
                    <?php if( get_field('proficient_evaluation_text') ): ?>
                        <?php the_field('proficient_evaluation_text'); ?>
                    <?php endif; ?>
                    </div>
                </div>

			</div>
        </section>
        
        <section class="section-snippet-benefits-2 space--even bg--primary container-eco-frienldly">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
                        <i style="margin-bottom:30px;" class=" icon-recycle icon"></i>
                        <?php if( get_field('eco_friendly_headline') ): ?>
                            <h3 style="margin-bottom:0;"><?php the_field('eco_friendly_headline'); ?></h3>
                        <?php endif; ?>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-8">
						<div class="container">
							<div class="text-center">
                                <?php if( get_field('eco_friendly_text') ): ?>
                                    <?php the_field('eco_friendly_text'); ?>
                                <?php endif; ?>
                            </div>
						</div>

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