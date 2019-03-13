<?php
/**
 * Single blog post page
 *
 * @package WordPress
 * @subpackage AG_Eyecare
 * @since Twenty Fourteen 1.0
 */
get_header(); 

while ( have_posts() ) : the_post();
$the_title = get_the_title();
endwhile;
?>

<body <?php body_class(); ?>>

<?php get_template_part( '/template-parts/content', 'nav' ); ?>

<div class="main-container">
    <section class="container-blog-single">
        <div class="container-single-header bg--primary">
            <h1><?php echo $the_title; ?></h1>
        </div>
        <div class="container">
            <div class="row">

                <?php while ( have_posts() ) : the_post(); ?>

                    <div class="row pos-vertical-align-columns">
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <?php the_content(); ?>
                        </article>
                    </div>

                <?php endwhile; ?>

                <hr>
                <div class="text-center">
                    <a href="/blog" class="btn">
                        <span class="btn__text">
                            Back to all articles
                        </span>
                        <i class="ion-arrow-left-c"></i>
                    </a>
                </div>
            </div>
            
        </div>
    </section>
</div>

<?php
    get_footer();
?>