<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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

						<div class="row">

						<?php
						if ( have_posts() ) :

							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/*
								* Include the Post-Type-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Type name) and that will be used instead.
								*/
								get_template_part( 'template-parts/content', get_post_type() );

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
						?>

						</div><!--.row-->

						<a class="dplay-block btn-brdr-primary mt-20 mb-md-50" href="#"><b>CARGAR MÁS BLOG POST</b></a>

					</div><!--.col-md-12 col-lg-8-->	

					<!-- sidebar -->
					<div class="d-none d-md-block d-lg-none col-md-3"></div>
					
					<?php get_sidebar(); ?>
					
				</div><!--.row-->
			</div><!--.container-->


		</section>
	</main><!-- #main -->
	

<?php

get_footer();
