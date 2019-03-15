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
			the_title( '<h1 class="pt-20"><b>', '</b></h1>' );
		else :
			the_title( '<h1 class="pt-20"><b>', '</b></h1>' );
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
		
		<!-- blgo text -->
		<p class="text-dark">
		<?php the_content(); ?>
		</p>
		
		<!--author box-->
		<div class="author-card pt-10">
			<div class="card" style="width: 90%;">
				
				<div class="card-body">

				<?php 

				// only output if gravatar function exists
				if (function_exists('get_avatar')) { ?>

					<?php
					// Convert email into md5 hash and set image size to 32px
					$gravatar = 'http://www.gravatar.com/avatar/' . md5(strtolower($user_email)) . '&s=32';
				
					// Convert email into md5 hash and remove image size to use as post image
					$gravatar_bg = 'http://www.gravatar.com/avatar/' . md5(strtolower($user_email)) . '';
					?>
					<!-- Output the gravatar as img src -->
					<img src="<?php echo "$gravatar";?>" class="rounded float-left" alt="foto-autor-anana">
				
					<?php } ?>
					<h5 class="card-title">Acerca de <?php the_author() ?></h5>
					<p class="card-text"><?php echo nl2br(get_the_author_meta('description')); ?></p>
						
				</div><!--.card-body-->
			</div><!--.card-->
			
		</div><!--.author-card-->

		<h4 class="p-title mt-30"><b>A LO MEJOR TAMBIEN TE AGRADE</b></h4>

		<div class="row">
		<?php

$related = new WP_Query(
    array(
        'category__in'   => wp_get_post_categories( $post->ID ),
        'posts_per_page' => 5,
        'post__not_in'   => array( $post->ID )
    )
);

if( $related->have_posts() ) { 
    while( $related->have_posts() ) { 
        $related->the_post(); 
        /*whatever you want to output*/
         get_template_part( 'template-parts/content-split', get_post_type() );
    }
    wp_reset_postdata();
}

?>
</div><!--.row-->
</div><!--.col-sm-12-->
		
						
