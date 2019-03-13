<?php
/**
* Template Name: Blog Page
*
* @package WordPress
* @subpackage AG_Eyecare
* @since 1.0.0
*/

get_header();
require_once(get_template_directory() . "/classes/class.blog.php");
$blog = new AgBlog();
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
                    $lastposts = get_posts($args);
                    $author = get_the_author();
                    foreach ($lastposts as $post) :
                    setup_postdata($post); 
                    $catched_image = $blog->catch_that_image($post);;
                    ?>
		
		
                      <a class="col-sm-12 news-article-link" href="<?php the_permalink(); ?>">
                        <?php if (get_the_post_thumbnail($post_id) != ''): ?>
                            <div class="news-article-snippet boxed imagebg" data-scrim-bottom="9">
                                <div class="background-image-holder">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <h6><?php echo get_the_date(); ?></h6>
                                <h3><?php the_title(); ?></h3>
                                <span>Written by <?php the_author(); ?></span>
                            </div>
                        <?php elseif ($catched_image != '' ): ?>
		                  <div class="news-article-snippet boxed imagebg" data-scrim-bottom="9">
                              <div class="background-image-holder">
                                    <?php 
                                    echo '<img src="';
                                    echo $catched_image;
                                    echo '" alt="" />';
                                    ?>
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