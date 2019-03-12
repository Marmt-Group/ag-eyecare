<?php
/**
* Template Name: Blog Page
*
* @package WordPress
* @subpackage AG_Eyecare
* @since Twenty Fourteen 1.0
*/

get_header();
?>

<body <?php body_class(); ?>>

<?php get_template_part( '/template-parts/content', 'nav' ); ?>

<div class="main-container">
        <section class="section-snippet-about-2 bg--secondary container-header imagebg" data-overlay="7">
            <div class="container">
                <div class="row pos-vertical-align-columns">
                    <div class="col-sm-5 text-center">
                        <h3>We care top luxury brands<br class="hidden-xs hidden-sm">in all shapes and sizes.</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo obcaecati id quis distinctio! Repellendus veniam provident ipsam est commodi ab, debitis dolor tempora, ducimus architecto doloremque, expedita adipisci molestiae eligendi.</p>
                    </div>
                </div>
            </div>
        </section>

		<section>
		  <div class="container">
		      <div class="row">
		          <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1"> 

                    <?php
                    global $post;
                    $args = array( 'posts_per_page' => 10 );
                    $lastposts = get_posts( $args );
                    $author = get_the_author();
                    foreach ( $lastposts as $post ) :
                    setup_postdata( $post ); ?>
		
		
                      <a class="col-sm-12 news-article-link" href="<?php the_permalink(); ?>">
                        <?php if ($bgimage): ?>
                            <div class="news-article-snippet boxed imagebg" data-scrim-bottom="9">
                                <div class="background-image-holder">
                                    <img alt="image" src="img/home2.jpg">
                                </div>
                                <h6><?php echo get_the_date(); ?></h6>
                                <h3><?php the_title(); ?></h3>
                                <span>Written by <?php the_author(); ?></span>
                            </div>
                        <?php else: ?>
		                  <div class="news-article-snippet boxed bg--white">
		                      <h6><?php echo get_the_date(); ?></h6>
		                      <h3><?php the_title(); ?></h3>
		                      <span>Written by <?php the_author(); ?></span>
                          </div>
                        <?php endif; ?>
		              </a>
                    
                    
                <?php endforeach; 
                wp_reset_postdata(); ?>

            </div>
            </div>
            
        </div>
        
    </section>
</div>

<?php
    get_footer();
?>