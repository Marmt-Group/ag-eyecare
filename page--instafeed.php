
<?php
/**
* Template Name: Insta Feed Page
*
* @package WordPress
* @subpackage AG_Eyecare
* @since 1.0.0
*/

get_header();
?>

<body <?php body_class('bg--primary'); ?> style="height: 100%;">

<div class="main-container">
    <section class="section-hero-3 section--card section-instafeed instafeed-page">
    <div class="background-image-holder" style="background: url(&quot;https://wordpress-72542-741704.cloudwaysapps.com/wp-content/themes/ag-eyecare/img/about2.jpg&quot;); opacity: 1;">
        <img alt="image" src="https://wordpress-72542-741704.cloudwaysapps.com/wp-content/themes/ag-eyecare/img/about2.jpg">
    </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="slider box-shadow" data-animation="slide" data-arrows="false" data-timing="5000">
                        <ul id="instafeed-slides" class="slides"></ul>
                    </div>
                </div>
            </div>
        </div>
</section>

</div>

<?php wp_footer(); ?>