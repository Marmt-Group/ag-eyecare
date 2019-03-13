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
                    <div class="section-title">
                        <h6>Diverse Financial Expertise</h6>
                        <hr>
                    </div>
                    <div class="slider" data-paging="true" data-animation="slide">
                        <ul class="slides">
                            <li>
                                <i class="icon icon-compass"></i>
                                <h2>Tax Management<br class="hidden-xs"> and Advice</h2>
                                <p>We offer you choices that range from the simplest to the most sophisticated eye care procedures and products. We can evaluate, present options and recommendations, but you make the decisions</p>
                                <a href="#" class="link-underline">Tell Me More</a>
                            </li>
                            <li>
                                <i class="icon icon-strategy"></i>
                                <h2>Business Growth<br class="hidden-xs"> and Strategy</h2>
                                <p>
                                    Growing a business and forming a sound business strategy requires considered planning and forethought. Partner teams you up with a business finance expert to build the tailored solution your business requires.
                                </p>
                                <a href="#" class="link-underline">Tell Me More</a>
                            </li>
                            <li>
                                <i class="icon icon-linegraph"></i>
                                <h2>Investment<br class="hidden-xs"> and Superannuation</h2>
                                <p>
                                    Identifying and managing Superannuation effectively is a common difficulty for many business owners — Partner's investment experts assist you to find a sensible investment plan for you and your staff.
                                </p>
                                <a href="#" class="link-underline">Tell Me More</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
</div>


<?php
    get_footer();
?>