
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
    <section class="section-instafeed instafeed-page">
        <div class="container">
            <div id="instafeed" class="instafeed-list"></div>
        </div>
    </section>
</div>

</body>
</html>

<?php wp_footer(); ?>