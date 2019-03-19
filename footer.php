<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package anana-mkt
 */

?>


<footer class="clearfix">

    <div class="container">

        <div class="row">

            <div class="col-lg-5 col-md-6 mb40">
                <h3>Ananá</h3>
                <p class="pt10">
                    Somos la agencia externa de marketing que quiere ayudarte a encontrar la esencia y valor de tu negocio para comunicarlo por medio de experiencias y las mejores de las estrategias digitales.
                </p>

            </div>

            <div class="col-lg-4 col-md-6 mb40">
                <h3>Ligas</h3>
                
                
                <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'footer-menu',
                        'menu_class'        => 'list-unstyled footer-list-item pt10',  
                    ) );
                    ?>
                    <!-- /menu -->
        

            </div>

            <div class="col-lg-3 col-md-6 mb40 pt30">
                <div class="">
                    <img src="<?php bloginfo('template_directory');?>/assets/img/anana-logo-vertical.png" alt="">
                </div>
            </div>



        </div>
        <hr class="mb40">
        <div class="row">
            <div class="col-lg-6  ml-auto mr-auto text-center">

                <div class="hidden-md-down">
                    <p>&copy; Página web diseñada por <a target="_blank" href="<?php echo esc_url( home_url( '/' ) ); ?>" class="animated_link">Ananá Marketing Digital</a></p>
                </div>
                <div class="hidden-md-up">
                    <p>&copy; Página web diseñada por<br> <a target="_blank" href="<?php echo esc_url( home_url( '/' ) ); ?>" class="animated_link">Ananá Marketing Digital</a></p>
                </div>
                
            </div>
     
        </div>
    </div>

</footer>
<!-- end footer-->

<div class="cd-overlay-nav">
    <span></span>
</div>
<!-- /cd-overlay-nav -->

<div class="cd-overlay-content">
    <span></span>
</div>
<!-- /cd-overlay-content -->

<!-- COMMON SCRIPTS -->
<script src="<?php bloginfo('template_directory');?>/assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/common_scripts.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/velocity.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/functions.js"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="<?php bloginfo('template_directory');?>/assets/js/parallax.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/owl-carousel.js"></script>

<!-- NUMBERS -->
<script src="<?php bloginfo('template_directory');?>/assets/js/numbers.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.5.1/velocity.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.5.1/velocity.ui.min.js'></script>
<script>
    "use strict";
    $(".team-carousel").owlCarousel({
        items: 1,
        loop: false,
        margin: 10,
        autoplay: false,
        smartSpeed: 300,
        responsiveClass: false,
        responsive: {
            320: {
                items: 1,
            },
            768: {
                items: 2,
            },
            1000: {
                items: 3,
            }
        }
    });

</script>

</body>

</html>
