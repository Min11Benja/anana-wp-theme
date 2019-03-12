<?php
/*
Template Name: Inicio
*/
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package anana-mkt
 */

get_header();
?>

<main id="general_page">

<section id="hero">
	<div class="container-fluid ">
		<div class="row">
			<div class="col">
				<div class="sub_content_in">
					<h1><strong>ANANÁ </strong>ES<br>EXPERIENCIA <br>ES <strong>PASIÓN</strong></h1>
					<p>Son tus <strong>sueños</strong> materializados por la manos
						especialistas en <strong>comunicación</strong>, imagen y
						mercadotecnia.</p>
					<div class="float-left pt10">
					
						<a href="#servicios" data-scroll class="btn btn-outline-secondary mb5 btn-rounded">ACERCA DE NOSOTROS</a>

					</div>

				</div>
			</div>
			<div class="col-lg-6 img-box">
				<img src="<?php bloginfo('template_directory');?>/assets/img/home-laptop-01.png" alt="imagen laptop anana inicio">
			</div>

		</div>
	</div>
</section>
<!-- /section -->


<section id="servicios">
	<div class="container">
		<div class="row">
			
			<div class="col-lg-6 col-xs-12 ">
				<div id="service-box" class="text-box pb10 ">
				 
						<h2 class="text-white">SERVICIOS</h2>
						<p class="hidden-md-down text-white">Son tus sueños materializados por las manos
							especialistas en comunicación, imagen y
							mercadotecnia.</p>
						<!--change page link id servicios-->
					   <div class="float-left pt10">
							<a href="<?php echo get_page_link(24); ?>" class="btn btn-outline-secondary mb5 btn-rounded">CONOCER MÁS</a>
						</div>
				</div>
			</div><!--.col-lg-6 .col-xs-12-->
			
			<div class="col-lg-6 col-xs-12">
				<div class=" icon-box">
					
					<div class="row">
						<div class="col col-md-4 col-lg-4 pb5">
							<img src="<?php bloginfo('template_directory');?>/assets/img/redes-icon-01.png" alt="" class="img-responsive" style="margin: 0 auto;">
							<br>
							<span>GESTIÓN DE <br>REDES SOCIALES</span>
						</div>

						<div class="col col-md-4 col-lg-4 pb5">
							<img src="<?php bloginfo('template_directory');?>/assets/img/redes-360-icon-01.png" alt="" class="img-responsive" style="margin: 0 auto;">
							<br>
							<span>MARKETING <br>360º</span>
						</div>

						<div class="col col-md-4 col-lg-4 pb5">
							<img src="<?php bloginfo('template_directory');?>/assets/img/posicionamiento-01.png" alt="" class="img-responsive" style="margin: 0 auto;">
							<br>
							<span>POSICIONAMIENTO <br>DE MARCA</span>
						</div>
					</div><!--.row-->
					
					<div class="row">
						
						<div class="col col-md-4 col-lg-4 pb5">
							<img src="<?php bloginfo('template_directory');?>/assets/img/web-icon-01.png" alt="">
							<br>
							<span>ELABORACIÓN DE PAGINAS WEB</span>
						</div>

						<div class="col col-md-4 col-lg-4 pb5">
							<img src="<?php bloginfo('template_directory');?>/assets/img/diseno-icon-01.png" alt="" class="img-responsive" style="margin: 0 auto;">
							<br>
							<span>IDENTIDAD <br>CORPORATIVA</span>
						</div>

						<div class="col col-md-4 col-lg-4 pb5">
							<img src="<?php bloginfo('template_directory');?>/assets/img/inbound-icon-01.png" alt="" class="img-responsive" style="margin: 0 auto;">
							<br>
							<span>INBOUND <br>MARKETING</span>
						</div>
						
					</div><!--.row-->
					
				</div><!--.icon-box-->
			</div><!--.col-lg-6 .col-xs-12-->

		</div><!--.row-->
	</div><!--.container-fluid-->
</section>
<!-- /section -->

<section id="about">
	<div class="container-fluid ">
		<div class="row ">

			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="d-flex justify-content-end">
					<img src="<?php bloginfo('template_directory');?>/assets/img/about-bg-icon-01.png" alt="">
				</div>

			</div>

			<div class="col-lg-9 col-md-6 col-sm-12">
				<div id="about-box" class="text-box pb10">

					<h2>QUIENES <strong>SOMOS</strong></h2>
					<p>Somos la agencia externa de marketing que quiere ayudarte a encontrar la esencia y valor de tu negocio para comunicarlo por medio de experiencias y comunicación estratégica.
					</p>
					<!--change page link id about-->
					<a href="<?php echo get_page_link(18); ?>" class="animated_link">Conoce al equipo</a>
				</div>

			</div>


		</div>
	</div>
</section>
<!-- /section -->


<section id="numbers">
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="container__counter text-center mt-2">
					<div class="icon"><img src="<?php bloginfo('template_directory');?>/assets/img/cofe-icon-01.png" alt="" role="0"></div>
					<div class="counter">
						<div class="count" data-number="250">0</div>
					</div>
					<div class="category text-uppercase">
						<Total>TAZAS DE CAFÉ</Total>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="container__counter text-center mt-2">
					<div class="icon"><img src="<?php bloginfo('template_directory');?>/assets/img/proyect-icon-01.png" alt="" role="1"></div>
					<div class="counter">
						<div class="count" data-number="75">0</div>
					</div>
					<div class="category text-uppercase">
						<Total>PROYECTOS</Total>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="container__counter text-center mt-2">
					<div class="icon"><img src="<?php bloginfo('template_directory');?>/assets/img/calendar-icon-01.png" alt="" role="2"></div>
					<div class="counter">
						<div class="count" data-number="508">0</div>
					</div>
					<div class="category text-uppercase">
						<Total>DÍAS TRABAJADOS</Total>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="container__counter text-center mt-2">
					<div class="icon"><img src="<?php bloginfo('template_directory');?>/assets/img/client-icon-01.png" alt="" role="3"></div>
					<div class="counter">
						<div class="count" data-number="32">0</div>
					</div>
					<div class="category text-uppercase">
						<Total>CLIENTES</Total>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

<!-- /section -->

<section id="portafolio">
	<div class="container-fluid ">
		<div class="row">

			<div class="col-lg-6 hidden-md-down">
				<img src="<?php bloginfo('template_directory');?>/assets/img/phone-mockup.png" alt="">
			</div>


			<div class="col">
				<div id="portfolio-box" class="sub_content_in pb10">
					<h2>ÚLTIMOS <strong>TRABAJOS</strong></h2>
					<p>Entendemos la pasión de cada uno de nuestros clientes satisfechos.
						<br>
						Somos orgullosos colaboradores de proyectos como:
					</p>
					 <div class="float-left">
					 <!--change page id portafolio-->
						<a href="<?php echo get_page_link(20); ?>" class="btn btn-outline-secondary mb5 btn-rounded">VER PORTAFOLIO</a>

					</div>

				</div>
			   
			</div>

		</div>
	</div>
</section>
<!-- /section -->

</main>

<?php

get_footer();
