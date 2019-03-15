<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package anana-mkt
 */
?>

<?php 

 get_header('blog');

?>

<main id="blog-cat-page">

        <div class="container_styled_1">
            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="text-dark text-center">BLOG</h1><br>
                    </div>
                </div>
                <!-- End row -->
            </div>
        </div>

        <section>
            <div class="container">
                <div class="row">
				<div class="col-md-12 col-lg-8">

				<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content-single', get_post_type() );

					
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
				?>

				</div><!--.col-md-12 col-lg-8-->

				<?php get_sidebar(); ?>
				</div><!--.row-->

			</div><!--.container-->	
		</section><!--section-->
</main><!--#blog-cat-page-->	

<?php

get_footer();
