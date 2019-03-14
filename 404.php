<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
    <meta name="description" content="Pagina 404 para Ananá, agencia de marketing digital en San Luis Potosí México">
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

    <!-- YOUR CUSTOM CSS -->
    <link href="<?php bloginfo('template_directory');?>/assets/css/404-style.css" rel="stylesheet">


</head>

<body>
<style type="text/css" media="screen">

body,
html {
  padding: 0;
  margin: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
  background-color: rgba(255, 193, 45, 0.85);
  font-family: 'Montserrat', sans-serif;
  color: #fff
}

html {
  background: url('https://static.pexels.com/photos/818/sea-sunny-beach-holiday.jpg');
  background-size: cover;
  background-position: bottom
}

.error {
  text-align: center;
  padding: 16px;
  position: relative;
  top: 50%;
  transform: translateY(-50%);
  -webkit-transform: translateY(-50%)
}

h1 {
  margin: -10px 0 -30px;
  font-size: calc(17vw + 40px);
  opacity: .8;
  letter-spacing: -17px;
}

p {
  opacity: .8;
  font-size: 20px;
  margin: 8px 0 38px 0;
  font-weight: bold
}

input,
button,
input:focus,
button:focus {
  border: 0;
  outline: 0!important;
}

input {
  width: 300px;
  padding: 14px;
  max-width: calc(100% - 80px);
  border-radius: 6px 0 0 6px;
  font-weight: 400;
  font-family: 'Montserrat', sans-serif;
}

button {
  width: 40px;
  padding: 14.5px 16px 14.5px 12.5px;
  vertical-align: top;
  border-radius: 0 6px 6px 0;
  color: grey;
  background: silver;
  cursor: pointer;
  transition: all 0.4s
}

button:hover {
  color: white;
  background: #F9B500
}

.fa-arrow-left {
  position: fixed;
  top: 30px;
  left: 30px;
  font-size: 2em;
  color:white;
  text-decoration:none
}


</style>
	<!--dinamyc link ref to home-->
    <a href="<?php echo get_page_link(16); ?>" class="fa fa-arrow-left"></a>
    
	<div class="error">
       
	    <h1>404</h1>
       
	    <p>Lo sentimos pero parece que esa página ya no existe.</p>
		<?php get_search_form(); ?>
		
    </div>

</body>

</html>