<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php bloginfo( name ); ?></title>
		<link rel="stylesheet" href="<?php bloginfo(stylesheet_url) ?>">
		<link rel="stylesheet" href="<?php 	echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed" rel="stylesheet">
	</head>
	
	<!-- Llamada de encabezado de WP-->

	<?php wp_head(); ?>

	<body>
		<!--Padre Fondo-->

		<div class="container-fluid fondo">

			<!--Div padre contenedor-->
		<div class="padre-general container pt-1 pb-2">	
					
		<div class="container">

			

			<header>

				<!--Div busqueda y mapa del sitio (Principio del encabezado)-->

				<nav class="row barra-superior  navbar-expand-lg navbar-light bg-light" style="z-index: 100">

	  				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    					<span class="navbar-toggler-icon"></span>
	  				</button>

  					<div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
  						<ul>
  			     				<li class="nav-item">
       								 <a class="nav-link" href="#">Mapa del sitio</a>
      							</li>
  						</ul>

  						<!--Traductor de google (plugin)-->
					
						<?php dynamic_sidebar('topbar2'); ?>

						<!--Buscador interno-->

						<?php dynamic_sidebar('topbar'); ?>	

  					</div>
				
				</nav>



				<!--Encabezado-->	
				<div class="cabeza row mt-1 pt-2  rounded mb-1">

					<!--Contenedor de todos los elementos: titulo e imagenes de cabecera-->

					<div class="cont-cabeza row">

						<!--Contenedor del logo principal del sitio-->

						<div class="cont-logo col-12 col-md-3 col-lg-2 d-flex justify-content-center">

							<img
								class="logo ml-2"
								src="<?php 	echo get_template_directory_uri(); ?>/images/logo transito trans.png" 
								alt="logo del tránsito"
							>

						</div>

						<!--Llamada del titulo del sitio-->

						<div class=" d-none d-md-block col-12 col-md-9 col-lg-5 col-xl-6">
								
							<h1 class="titulo">
								<?php bloginfo( name ); ?>
							</h1>

						</div>
						
						<!--Imagenes secundarias de la cabecera-->

						<div class="d-block d-md-none d-lg-inline-flex  col-12 col-md-5 col-lg-5 col-xl-4 d-flex justify-content-between cont-images align-items-center">
 
							<div class="col-4 col-lg-4 col-xl-4  img-escudo">

								<img 
									
									src="<?php 	echo get_template_directory_uri(); ?>/images/Escudo_yarumal.png" 
									alt="logo del tránsito"
									style="width: 100%;"
								>

							</div>


							<div class="col-8 col-lg-8 col-xl-8 img-alcaldia">

								<img  
									
									src="<?php 	echo get_template_directory_uri(); ?>/images/logo-alcaldía-transparente.png" alt="logo del tránsito" 
									style="width:100%;"
								>

							</div>
						
						</div>

					</div>

				</div>
			<!--Llamada del menú principal-->

				<?php include TEMPLATEPATH . '/menu-ppal.php'; ?>
				
			</header>

		<!--Llamadas a los Scripts de JavaScript-->	
<script src="<?php 	echo get_stylesheet_directory_uri(); ?>/js/propios.js"></script>					
<script src="<?php 	echo get_stylesheet_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
<script src="<?php 	echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php 	echo get_stylesheet_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>	
			