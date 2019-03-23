<?php
/**
* Template Name: Shop Page
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
                    <?php if( get_field('header_text') ): ?>
                        <?php the_field('header_text'); ?>
                    <?php endif; ?>

                    <?php if( get_field('subheader_text') ): ?>
                        <p><?php the_field('subheader_text'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <a href="/shop/30-day-contacts">
                        <div class="boxed imagebg text-center stat-simple bg--primary" data-overlay="7">
                            <div class="background-image-holder">
                                <img alt="image" src="<?php echo get_template_directory_uri() ?>/img/monthly-contacts-frisco-200x200.jpg">
                            </div>
                            <span class="h1 color--white">30-Day Contacts</span>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit deleniti ducimus incidunt. Animi accusamus dolorum suscipit ipsum veniam nisi aspernatur doloremque vel obcaecati molestiae quidem ducimus, non eaque soluta praesentium!</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="/shop/daily-contacts">
                        <div class="boxed imagebg text-center stat-simple" data-overlay="7">
                            <div class="background-image-holder">
                                <img alt="image" src="<?php echo get_template_directory_uri() ?>/img/daily-contacts-frisco-200x200.jpg">
                            </div>
                            <span class="h1 color--white">Daily Contacts</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quaerat debitis molestias natus provident tenetur obcaecati aliquid aspernatur a nihil impedit expedita porro velit quos illo ad exercitationem, esse nemo?</p>
                        </div>
                    </a>
                </div>
            </div>
            
        </div>
        
    </section>

    <?php get_template_part( '/template-parts/content', 'booking' ); ?>
    
</div>

<?php
    get_footer();
?>