<?php
/*
Template Name: Contacto
*/
/**

 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package anana-mkt
 */

get_header();
?>

<main id="general_page">

<section id="contacto-hero">

	<div class="container pl-center">

		<div class="row">
			<div class="col-lg-6">
				<h1 class="text-white text-center">CONT@CTO</h1><br>
				<p class="text-white">Estamos muy entusiasmados por ser parte
					de tu proyecto, siéntete en confianza
					de comunicarte con nosotros.</p>
			</div>


			<div class="col-lg-6 hidden-md-down">
				<img src="<?php bloginfo('template_directory');?>/assets/img/phobe-bg.png" alt="" class="img-responsive" style="margin: 0 auto;">
			</div>

		</div>
		<!-- End row -->
	</div>
</section>
<!-- /section -->

<section id="contact-map">
	<div class="mapouter">
		<div class="gmap_canvas">
			
			<iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Arrollo%20canta%20la%20piedra%2C%20111a%20%20Lomas%20del%20Tecnologico%2C%20%20San%20Luis%20Potos%C3%AD%2C%20Mexico%20&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
			
			<a href="http://www.anana.mx/">Anana agencia marketing digital</a>
		
		</div>
		<style>.mapouter{text-align:right;height:252px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:252px;width:100%!important;}</style>
	</div>
</section>

<!-- end map-->

<div class="container margin_60_35">

	<div class="row">
		<div class="col-lg-8">
			<img src="<?php bloginfo('template_directory');?>/assets/img/map-icon-01.png" class="responsive">
			<h3>Contáctanos</h3>
			<p class="text-dark">
				¿Qué podemos hacer por ti?
			</p>
			<div>
				<div id="message-contact"></div>
				<form method="post" action="assets/contact.php" id="contactform">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Nombre</label>
								<input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="Escribe tu nombre aquí">
							</div>
						</div>

					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Email</label>
								<input type="email" id="email_contact" name="email_contact" class="form-control" placeholder="Escribe tu correo aquí">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Télefono</label>
								<input type="text" id="phone_contact" name="phone_contact" class="form-control" placeholder="Escribe tu numero de télefono celular aquí">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Mensaje</label>
								<textarea rows="5" id="message_contact" name="message_contact" class="form-control" style="height:100px;" placeholder="Escribe tu mensaje aquí"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>¿Eres humano? 2 + 1 =</label>
								<input type="text" id="verify_contact" class=" form-control" placeholder="Prueba que no eres un bot, por favor">
							</div>
							
							<p><input type="submit" value="Enviar" class="btn btn-outline-secondary mb5 btn-rounded" id="submit-contact"></p>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- End col lg 9 -->
		<aside class="col-lg-4">
			<div class="box_style_2">
				<h4>También puedes visitarnos en nuestras instalaciones:</h4>
				<p class="text-dark">
					Arrollo canta la piedra, 111a
					<br>Lomas del Tecnológico,
					<br>San Luis Potosí, México 
					<br>C.P. 78215
				</p>
				<h5>¿Cómo llegar?</h5>
				<form action="http://maps.google.com/maps" method="get" target="_blank">
					<div class="form-group">
						<input type="text" name="saddr" placeholder="Escribe aqui tu ubicación" class="form-control" style="background:none;">
						<input type="hidden" name="daddr" value="Arrollo canta la piedra 111a, San Luis Potosi, Mexico">
						<!-- Write here your end point -->
					</div>
					<input type="submit" value="Obtén mapa" class="btn btn-outline-secondary mb5 btn-rounded">
				</form>
				<hr class="styled">
				<h4>Información de contacto</h4>
				<ul class="contacts_info">
					<li>
						<p class="text-dark">Teléfono: <a href="https://web.whatsapp.com/send?phone=+52%444%195%1052&text=">+52 (444) 195 1052</a></p>

						<p class="text-dark">Correo: contacto@anana.mx</p>
						<p class="text-dark">Redes Sociales: <a href="https://www.facebook.com/ananacomunicacionestrategica/" target="_blank"><i class="fa fa-facebook"></i></a>
							<a href="https://www.instagram.com/anana.casacreativa/" target="_blank"><i class="fa fa-instagram"></i></a>

						</p>
						
						<small>HORARIO: lunes a viernes 9:30 am - 5:00 pm</small>
						
					</li>

				</ul>
			</div>
		</aside>
		<!--End aside -->
	</div>
	<!-- end row-->
</div>
<!-- end container-->

</main>	

<?php

get_footer();
