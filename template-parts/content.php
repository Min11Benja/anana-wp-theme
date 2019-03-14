<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package anana-mkt
 */

?>
 	<div class="col-sm-12">
                                
		<h4 class="p-title mt-30"></h4>
		
		<!--image thumbnail-->
		<?php if ( has_post_thumbnail() ) { // check for feature image ?>
        <a class="post-thumb mb10" href="<?php the_permalink(); ?>">

			<img src="<?php the_post_thumbnail_url();?>" alt="anana-post thumbnail" class="img-fluid mb30">

        </a>
        <?php } ?>	
		
		<!--titulo de blog post-->
		<?php
		if ( is_singular() ) :
			the_title( '<h4 class="pt-20"><a href="' . esc_url( get_permalink() ) . '"><b>', '</b></a></h4>' );
		else :
			the_title( '<h4 class="pt-20"><a href="' . esc_url( get_permalink() ) . '"><b>', '</b></a></h4>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
		<!-- .entry-meta -->
			<ul class="list-li-mr-20 pt-10 ">
			<li class="color-lite-black">por <a href="#" class="color-black"><b><?php anana_mkt_posted_by(); ?></b></a>
				<?php anana_mkt_posted_on(); ?></li>
			</ul>

		<?php endif; ?>
		<!-- .entry-meta -->
		
		<p class="text-dark">
		<?php the_excerpt('new_excerpt_more'); ?>
		</p>
		
		<a href="<?php the_permalink(); ?>" class="animated_link">Leer más</a>
		
	</div><!-- col-sm-6 -->
