
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

<body <?php body_class(); ?> style="background: #242A2D;">

<div class="main-container">
    <section class="section-instafeed">
        <div class="container">
            <h6>
            Avant-Garde Optometry in Action -
            <a href="https://www.instagram.com/avant_garde_optometry" target="_blank">View more on Instagram <i class="icon socicon socicon-instagram"></i></a>
            </h6>
            <div id="instafeed" class="instafeed-list"></div>
        </div>
    </section>
</div>

</body>
</html>

<?php wp_footer(); ?>