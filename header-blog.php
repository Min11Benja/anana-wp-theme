<?php
/*
Template Name: header-blog
*/
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package anana-mkt
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Anana, agencia marketing digital, branding, redes sociales, relaciones publicas, diseño grafico, inbound marketing">
    <meta name="author" content="min11benja">

    <!--SEO Meta tags-->
    <meta name="keywords" content="anana, agencia marketing slp, marketing digital slp, paginas web slp, redes sociales slp, san luis potosi" />
    
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Brand Name | Major Product Category - Minor Product Category - Name of Product -->

    <!--Primary Keyword - Secondary Keyword | Brand Name 8-foot Green Widgets - Widgets & Tools | primary keyword-->
    
    <title>Ananá | Agencia Marketing Digital | San Luis Potosí</title>
    <meta name="description" content="Pagina inicio para Ananá, agencia de marketing digital en San Luis Potosí México">
    <meta name="robots" content="index,follow" />
    <meta name="googlebot" content="index,follow" />
    <meta name="revisit-after" content="7 days" />
    <meta name="location" content="San Luis Potosi Mexico" />
    <meta name="rating" content="General" />
    <meta name="url" content="http://www.anana.mx/" />
    <meta name="content-language" content="Spanish" />

    <!-- Favicons-->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory');?>/assets/img/anana-fav-icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory');?>/assets/img/anana-fav-icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory');?>/assets/img/anana-fav-icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory');?>/assets/img/anana-fav-icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory');?>/assets/img/anana-fav-icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory');?>/assets/img/anana-fav-icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory');?>/assets/img/anana-fav-icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory');?>/assets/img/anana-fav-icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory');?>/assets/img/anana-fav-icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_directory');?>/assets/img/anana-fav-icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory');?>/assets/img/anana-fav-icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_directory');?>/assets/img/anana-fav-icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory');?>/assets/img/anana-fav-icons/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_directory');?>/assets/img/anana-fav-icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_directory');?>/assets/img/anana-fav-icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
    <!-- Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- GOOGLE WEB FONT MONTSERRAT & IBM Plex Sans Condensed-->
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans+Condensed" rel="stylesheet">
    
    <!-- BASE CSS -->
    <link href="<?php bloginfo('template_directory');?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/assets/css/menu.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/assets/css/vendors.css" rel="stylesheet">
    
    <!-- MODERNIZR MENU -->
    <script src="<?php bloginfo('template_directory');?>/assets/js/modernizr.js"></script>

       <!-- YOUR CUSTOM CSS -->
       <link href="<?php bloginfo('template_directory');?>/assets/css/blog-cat.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/assets/css/custom.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/assets/css/responsive.css" rel="stylesheet">

</head>

<body <?php body_class(); ?>>

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div><!-- /Preload -->

    <div id="loader_form">
        <div data-loader="circle-side-2"></div>
    </div><!-- /loader_form -->

    <header>

        <div class="container-fluid">
            
            <div class="row">

                <div class="col">
                    
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hidden-md-up"><img src="<?php bloginfo('template_directory');?>/assets/img/anana-letra.png" alt="logo-anana" ></a>

                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hidden-md-down"><img src="<?php bloginfo('template_directory');?>/assets/img/anana-letra.png" alt="logo-anana" ></a>

                </div>

                <div class="col-9 hidden-md-down">
                    
                  <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'primary',
                        'container'         => 'nav',     
                        'menu_class'        => 'menu-left',  
                    ) );
                    ?>

                </div>

                <div class="col">
                    <!-- /social -->
                    <a href="#0" class="cd-nav-trigger hidden-md-up">Menu<span class="cd-icon"></span></a>
                    <!-- /menu button -->
                   <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'sub-menu',
                        'container'         => 'nav',   
                        'container_class'   => 'hidden-md-up',
                        'menu_class'        => 'cd-primary-nav',  
                    ) );
                    ?>
                    <!-- /menu -->
                </div>
                
            </div>
        </div>
        <!-- /container -->

    </header>
    <!-- /Header -->
