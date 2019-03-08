<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage AG_Eyecare
 * @since 1.0.0
 */

get_header();
?>

<div class="main-container">
	<section class="height-100 bg--primary">
		<div class="container pos-vertical-center">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h2>
						<i class="icon--lg icon-lifesaver"></i>
					</h2>
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'ageyecare' ); ?></h1>
					<p>
						The page you were attempting to visit doesn't exist.
						<br> What now?
						<a class="link-underline" href="index.html">Go back home</a> or
						<a class="link-underline" href="#">Contact Us</a> if you think this might be a mistake.
					</p>
				</div>
			</div>
			
		</div>
		
	</section>
</div>

<?php
get_footer();