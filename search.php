<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
				<h1 class="text-dark text-center">BUSQUEDA</h1><br>
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

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'anana-mkt' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
<div class="d-none d-md-block d-lg-none col-md-3"></div>
					
					<?php get_sidebar(); ?>
					
				</div><!--.row-->
			</div><!--.container-->


		</section>
	</main><!-- #main -->
	


<?php

get_footer();
