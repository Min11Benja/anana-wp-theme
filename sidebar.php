<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package anana-mkt
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="col-md-6 col-lg-4">
                        <div class="pl-20 pl-md-0">

                            <div class="mtb-50 mb-md-0">
                                <h4 class="p-title"><b>BUSCAR</b></h4>

                                <form class="nwsltr-primary-1">
                                    <input type="text" placeholder="Tu busqueda" value="<?php the_search_query(); ?>" />
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
								
                            </div><!-- mtb-50 -->

                            <div class="mtb-50">
                                <h4 class="p-title"><b>ULTIMAS ENTRADAS</b></h4>

								<?php 
								// the query
								$the_query = new WP_Query( array(
									'posts_per_page' => 3,
								)); 
								?>

					<?php if ( $the_query->have_posts() ) : ?>
                      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					  <a class="oflow-hidden pos-relative  dplay-block" href="<?php the_permalink() ?>">
					  <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
					  <div class="min-h-65x">
                                        <h5 class="pt-10"><b><?php the_title(); ?></b></h5>
										<p><?php the_category(', '); ?></p>
                                        <h6 class="color-lite-black pb-10">
										Escrito por 
										<span class="color-black"><b><?php the_author_posts_link(); ?>,</b></span> 
										el <?php the_time('m/j/y g:i A') ?>
										
										</h6>
										
                        </div>
                      <?php endwhile; ?>
                      <?php wp_reset_postdata(); ?>

                    <?php else : ?>
                      <p><?php __('Sin entradas'); ?></p>
                    <?php endif; ?>

                        	</div><!-- mtb-50 -->

                            <div class="mtb-50 pos-relative">
                                <img src="https://via.placeholder.com/330x200" alt="" class="img-fluid">
                                <div class="abs-tblr bg-layer-7 text-center color-white">
                                    <div class="dplay-tbl">
                                        <div class="dplay-tbl-cell">
                                            <h4 class="text-white"><b>Descargable para buyer persona</b></h4>
                                            <a class="mt-15 color-primary link-brdr-btm-primary" href="#"><b>Descarga gratuita</b></a>
                                        </div><!-- dplay-tbl-cell -->
                                    </div><!-- dplay-tbl -->
                                </div><!-- abs-tblr -->
                            </div><!-- mtb-50 -->

                            <div class="mtb-50 mb-md-0">
                                <h4 class="p-title"><b>NEWSLETTER</b></h4>
                                <p class="mb-20 text-dark">Suscríbete a nuestro boletín mensual</p>
                                <form class="nwsltr-primary-1">
                                    <input type="text" placeholder="Tu email" />
                                    <button type="submit"><i class="fa fa-envelope"></i></button>
                                </form>
                            </div><!-- mtb-50 -->

                        </div><!--  pl-20 -->
                    </div><!-- col-md-3 -->
