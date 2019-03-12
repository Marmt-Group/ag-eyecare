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

<body <?php body_class('gradient--active'); ?>>

<?php get_template_part( '/template-parts/content', 'nav' ); ?>

<div class="main-container">
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