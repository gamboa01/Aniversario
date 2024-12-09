<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE HTML>
<html>

<head>
	<title>1 Año</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="main.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<div id="rain-container"></div>	
<body>
	<div id="contenido">
		<!-- Banner -->
		<section id="banner"
			class="d-flex flex-column justify-content-center align-items-center min-vh-100 w-100 text-center">
			<div class="row">
				<div class="col-12 text-center titulo">
					<h2 class="fs-1">¡¡¡CUMPLIMOS UN AÑO!!!</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-12 text-center contenido">
					<p class="fs-3">
						Hoy es un día muy especial porque...<br/>
						estamos cumpliendo 12 meses juntos,<br/>
						muchas experiencias a tu lado.
					</p>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-12">
					<button class="btn btn-primary contenido">
						<a href="#sect1" class="text-white text-decoration-none fs-3">Comencemos...</a>
					</button>
				</div>
			</div>
		</section>


		<!-- Sección #1 -->
		<section id="sect1"
			class="d-flex flex-column justify-content-center align-items-center min-vh-100 w-100 text-center px-3">
			<div class="row mb-5">
				<div class="col-12 text-center">
					<h2 class="titulo fs-1 mb-4">
						Ha sido un año largo...<br />
						Han habido muchos aprendizajes, emociones e historias que recordar.
					</h2>
				</div>
			</div>

			<div class="row mb-5">
				<div class="col-12 text-center">
					<p class="fs-2 contenido">
						¡Hemos crecido como pareja en comprensión y mucho amor! <br />
						Y esta es una fecha importante, ¡así que hay que celebrarlo! <br>
					</p>
					<p class="fs-3 fw-bold contenido">
						He encontrado en ti muchas cosas que hoy quiero decirte...
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col-12 text-center contenido">
					<ul class="row list-unstyled">
						<!--Íconos-->
						<li class="col-4 text-center">
							<div class="icon-wrapper">
								<i class="bi bi-heart-fill"></i>
							</div>
						</li>
						<li class="col-4 text-center">
							<div class="icon-wrapper">
								<i class="bi bi-heart-half"></i>
							</div>
						</li>
						<li class="col-4 text-center">
							<div class="icon-wrapper">
								<i class="bi bi-heart"></i>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</section>


		<!-- Sección #2 -->
		<section id="sect2"
		class="d-flex flex-column justify-content-center align-items-center w-100 text-center px-3 py-5">
			<div class="row align-items-center w-100">
				<!-- Imagen -->
				<div class="col-sm-12 col-md-6 text-center mb-4 mb-md-0">
					<div class="image">
						<img src="Imagenes/Secciones/ElAmor.png" alt="Imagen decorativa"
							class="img-fluid rounded">
					</div>
				</div>

				<!-- Contenido de texto -->
				<div class="col-sm-12 col-md-6 text-center">
					<h2 class="titulo fs-1">
						He encontrado en ti...<br />
						¡El amor!
					</h2>
					<blockquote class="contenido fs-3 fst-italic">
						Una persona que me ha demostrado su amor, que a lo largo de este año he sido amado en 
						gran manera por ti, cada atención y muestra de afecto la llevo en mi corazón.
					</blockquote>
					<p class="contenido fs-4 text-dark fw-light">-> Mi Amor Bonito <-</p>
					<ul class="row list-unstyled justify-content-center mt-4">
						<li class="text-center">
							<div class="icon-wrapper">
								<i class="bi bi-arrow-through-heart-fill"></i>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</section>

		<!-- Sección #3 -->
		<section id="sect3"
		class="d-flex flex-column justify-content-center align-items-center w-100 text-center px-3 py-5">
			<div class="row align-items-center w-100">
				<!-- Imagen -->
				<div class="col-sm-12 col-md-6 text-center mb-4 mb-md-0 order-1 order-md-2">
					<div class="image">
						<img src="Imagenes/Secciones/LaFelicidad.png" alt="Imagen decorativa"
							class="img-fluid rounded">
					</div>
				</div>

				<!-- Contenido de texto -->
				<div class="col-sm-12 col-md-6 text-center order-2 order-md-1">
					<h2 class="titulo fs-1">
						He encontrado en ti...<br />
						¡La felicidad!
					</h2>
					<blockquote class="contenido fs-3 fst-italic">
						Cuando estoy contigo, siento una felicidad enorme dentro de mi corazón, 
						con cada ocurrencia, cada broma, cada chiste, cada anécdota son momentos
						tan felices para mí, pero que mejor que compartirlos junto a ti.
					</blockquote>
					<p class="contenido fs-4 text-dark fw-light">-> Mi Sonrisita de Luna <-</p>
					<ul class="row list-unstyled justify-content-center mt-4">
						<li class="text-center">
							<div class="icon-wrapper">
								<i class="bi bi-emoji-laughing-fill"></i>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</section>


		<!-- Sección #4 -->
		<section id="sect4"
		class="d-flex flex-column justify-content-center align-items-center w-100 text-center px-3 py-5">
			<div class="row align-items-center w-100">
				<!-- Imagen -->
				<div class="col-sm-12 col-md-6 text-center mb-4 mb-md-0">
					<div class="image">
						<img src="Imagenes/Secciones/Cariño.png" alt="Imagen decorativa"
							class="img-fluid rounded">
					</div>
				</div>

				<!-- Contenido de texto -->
				<div class="col-sm-12 col-md-6 text-center">
					<h2 class="titulo fs-1">
						He encontrado en ti...<br />
						¡Cariño!
					</h2>
					<blockquote class="contenido fs-3 fst-italic">
						El tiempo a tu lado es tan agradable, cada abrazo me hace no querer soltarte, 
						cada beso solo me hace querer estar junto a ti cada momento de mi vida, el cariño que 
						me das con cada caricia y cada palabra se sienten tan bonito. 
					</blockquote>
					<p class="contenido fs-4 text-dark fw-light">-> Mi Lugar Seguro <-</p>
					<ul class="row list-unstyled justify-content-center mt-4">
						<li class="text-center">
							<div class="icon-wrapper">
								<i class="bi bi-person-heart"></i>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</section>


		<!-- Sección #5 -->
		<section id="sect5"
		class="d-flex flex-column justify-content-center align-items-center w-100 text-center px-3 py-5">
			<div class="row align-items-center w-100">
				<!-- Imagen -->
				<div class="col-sm-12 col-md-6 text-center mb-4 mb-md-0 order-1 order-md-2">
					<div class="image">
						<img src="Imagenes/Secciones/GrandesMomentos.png" alt="Imagen decorativa"
							class="img-fluid rounded">
					</div>
				</div>

				<!-- Contenido de texto -->
				<div class="col-sm-12 col-md-6 text-center order-2 order-md-1">
					<h2 class="titulo fs-1">
						He encontrado en ti...<br />
						¡Grandes Momentos!
					</h2>
					<blockquote class="contenido fs-3 fst-italic">
						Tan bonito es que es compartir mi tiempo junto a ti, cada comida, cada cafecito, 
						cada platica, esas salidas bonitas y cada momento vivido a tu lado es inexplicable, 
						no se puede definir con palabras porque me quedaría corto en describir la sensación de 
						cada momento que vivo junto a ti. 
					</blockquote>
					<p class="contenido fs-4 text-dark fw-light">-> Mi Apoyo Incondicional <-</p>
					<ul class="row list-unstyled justify-content-center mt-4">
						<li class="text-center">
							<div class="icon-wrapper">
								<i class="bi bi-box2-heart-fill"></i>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</section>

		<!-- Sección #6 -->
		<section id="sect6"
		class="d-flex flex-column justify-content-center align-items-center w-100 text-center px-3 py-5">
			<div class="row align-items-center w-100">
				<!-- Imagen -->
				<div class="col-sm-12 col-md-6 text-center mb-4 mb-md-0">
					<div class="image">
						<img src="Imagenes/Secciones/Sueños.png" alt="Imagen decorativa"
							class="img-fluid rounded">
					</div>
				</div>

				<!-- Contenido de texto -->
				<div class="col-sm-12 col-md-6 text-center">
					<h2 class="titulo fs-1">
						He encontrado en ti...<br />
						¡Sueños!
					</h2>
					<blockquote class="contenido fs-3 fst-italic">
						Es hermoso ponerse a pensar en el futuro, pero más hermoso es verte 
						reflejada en ese futuro, un tiempo en el que estamos juntos y plenos, 
						compartiendo momentos especiales y logrando todas aquellas metas que nos 
						hemos propuesto, seguimos mejorando y avanzando juntos como un equipos que somos.
					</blockquote>
					<p class="contenido fs-4 text-dark fw-light">-> Mi Compañera de Vida <-</p>
					<ul class="row list-unstyled justify-content-center mt-4">
						<li class="text-center">
							<div class="icon-wrapper">
								<i class="bi bi-stars"></i>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</section>


		<!-- Sección #7 -->
		<section id="sect7"
			class="d-flex flex-column justify-content-center align-items-center w-100 text-center px-3 py-5">
			<div class="row align-items-center w-100">
				<!-- Imagen -->
				<div class="col-sm-12 col-md-6 text-center mb-4 mb-md-0 order-1 order-md-2">
					<div class="image">
						<img src="Imagenes/Secciones/Aniversario.png" alt="Imagen decorativa"
							class="img-fluid rounded">
					</div>
				</div>

				<!-- Contenido de texto -->
				<div class="col-sm-12 col-md-6 text-center order-2 order-md-1">
					<h2 class="titulo fs-1">
						Y por todo esto te deseo...<br />
						¡Un feliz aniversario!
					</h2>
					<blockquote class="contenido fs-3 fst-italic">
						Que Dios nos permita cumplir más años juntos, compartiendo nuestro amor,
						nuestra felicidad, nuestro cariño, nuestros momentos, nuestros sueños, 
						nuestras metas y que juntos como un equipo podamos superar todas las 
						adversidades que se puedan poner por delante. 
					</blockquote>
					<p class="contenido fs-4 text-dark fw-light">
						-> Mi <span id="highlighted-word" class="contenido fw-bold cursor-pointer">Novia</span> Hermosa <-
					</p>				
					<ul class="row list-unstyled justify-content-center mt-4">
						<li class="text-center">
							<div class="icon-wrapper">
								<i class="bi bi-hearts"></i>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</section>

		<!-- Sección #8 -->
		<section id="sect8" class="d-flex justify-content-center align-items-center py-5">
			<div class="contador-container text-center">
				<h2 class="titulo mb-4">Cumplimos 2 años en...</h2>
				<div class="contador-calendario d-flex align-items-center justify-content-center">
					<div class="cuadro-calendario me-3">
						<span id="contador-numero" class="numero fs-1">0</span>
					</div>
					<div class="texto-dias fs-3 titulo">días</div>
				</div>
			</div>
		</section>
		
		
		<!-- Sección #9 -->
		<footer id="sect9"
			class="d-flex flex-column justify-content-center align-items-center w-100 text-center px-3 py-4">
			<div class="row align-items-center w-100">
				<ul class="list-unstyled d-flex flex-wrap justify-content-center align-items-center gap-3 m-0 p-0">
					<!-- Íconos (12 en total, con diseño ajustado) -->
					<li class="text-center" data-imagen="Diciembre">
						<div class="icon-footer">
							<i class="bi bi-balloon-heart-fill"></i>
						</div>
					</li>
					<li class="text-center" data-imagen="Enero">
						<div class="icon-footer">
							<i class="bi bi-balloon-heart-fill"></i>
						</div>
					</li>
					<li class="text-center" data-imagen="Febrero">
						<div class="icon-footer">
							<i class="bi bi-balloon-heart-fill"></i>
						</div>
					</li>
					<li class="text-center" data-imagen="Marzo">
						<div class="icon-footer">
							<i class="bi bi-balloon-heart-fill"></i>
						</div>
					</li>
					<li class="text-center" data-imagen="Abril">
						<div class="icon-footer">
							<i class="bi bi-balloon-heart-fill"></i>
						</div>
					</li>
					<li class="text-center" data-imagen="Mayo">
						<div class="icon-footer">
							<i class="bi bi-balloon-heart-fill"></i>
						</div>
					</li>
					<li class="text-center" data-imagen="Junio">
						<div class="icon-footer">
							<i class="bi bi-balloon-heart-fill"></i>
						</div>
					</li>
					<li class="text-center" data-imagen="Julio">
						<div class="icon-footer">
							<i class="bi bi-balloon-heart-fill"></i>
						</div>
					</li>
					<li class="text-center" data-imagen="Agosto">
						<div class="icon-footer">
							<i class="bi bi-balloon-heart-fill"></i>
						</div>
					</li>
					<li class="text-center" data-imagen="Septiembre">
						<div class="icon-footer">
							<i class="bi bi-balloon-heart-fill"></i>
						</div>
					</li>
					<li class="text-center" data-imagen="Octubre">
						<div class="icon-footer">
							<i class="bi bi-balloon-heart-fill"></i>
						</div>
					</li>
					<li class="text-center" data-imagen="Noviembre">
						<div class="icon-footer">
							<i class="bi bi-balloon-heart-fill"></i>
						</div>
					</li>
				</ul>
			</div>
			<div class="mt-3">
				<p class="m-0 contenido fs-5">&copy; Guillermo Gamboa</p>
			</div>
			<div id="popup" class="popup">
				<span class="close">&times;</span>
				<img id="popup-image" src="" alt="Imagen emergente">
				<h3 id="popup-title" class="popup-title">Título de la imagen</h3>
			</div>
		</footer>
	</div>

	<!-- Scripts -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>
	<script src="script.js"></script>
</body>

</html>