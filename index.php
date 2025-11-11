<?php
session_start();
$isLoggedIn = isset($_SESSION["usuario"]);
?>

<!DOCTYPE html>
<html lang="es">
<!-- Encabezado -->

<head>
	<meta charset="UTF-8" />
	<title>Portafolio Pedro Antonio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<link href="css/index.css" rel="stylesheet" />
	<link href="css/animate.css" rel="stylesheet" />
	<!-- <link href="css/styles.css" rel="stylesheet" /> -->
</head>


<!-- Cuerpo de la pagina -->

<body data-spy="scroll" data-target="#navbar-scroll">

	<!-- Menu superior -->
	<div id="menu">
		<nav class="navbar-wrapper navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<a class="logo" href="#top"><img src="images/logo.png" alt="logo" /></a>
					<span class="navbar-text">Pedro Antonio De Los Santos</span>
				</div>
				<div id="navbar-scroll" class="navbar-collapse navbar-right">
					<a href="#top">Inicio</a>
					<a href="#about">Acerca De Mi</a>
					<a href="#habilidades">Habilidades</a>
					<a href="#portafolio">Portafolio</a>
					<a href="#contacto">Contacto</a>
					<?php if ($isLoggedIn): ?>
						<a href="php/logout.php" class="">Cerrar sesión</a>
					<?php else: ?>
						<a href="registro.php" class="">Iniciar sesión</a>
					<?php endif; ?>

				</div>
			</div>
		</nav>
	</div>

	<!-- Bienvenida -->
	<section id="top" class="fullscreen landing parallax banner" data-img-width="2000" data-img-height="1325"
		data-diff="100">
		<div class="overlay">
			<div class="container banner-content">
				<div class="row align-items-center justify-content-center">
					<div class="col-md-12 text-center">
						<h1 class="wow fadeInLeft">Bienvenido</h1>
						<p class="wow fadeInRight">
							Este es el portafolio digital de Pedro Antonio De Los Santos Aguilar<br>
							Ingeniero en Sistemas Computacionales graduado de la UPVE<br>
							Desarrollador y diseñador de software, con experiencia en distintas
							tecnologías de desarrollo web y móvil.
						</p>
						<a href="#about" class="btn-primary">Conóceme</a>

						<!-- Boton de inicio de seion o cerrar sesion  -->
						<?php if ($isLoggedIn): ?>
							<a href="php/logout.php" class="btn-primary">Cerrar sesión</a>}
						<?php else: ?>
							<a href="registro.php" class="btn-primary">Iniciar sesión / Registrarse</a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Acerca De Mi -->
	<section id="about" class="section-red">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 text-center">
					<img src="images/retrato.jpg" alt="Retrato" class="banner-img">
				</div>
				<div class="col-md-6 text-center text-md-left">
					<h2 class="wow fadeInUp">Acerca de mí</h2>
					<div class="title-line wow fadeInRight"></div>
					<p class="wow fadeInUp">
						Soy <strong>Pedro Antonio De Los Santos Aguilar</strong>, Ingeniero
						en Sistemas Computacionales con pasión por el desarrollo de software
						y diseño de soluciones tecnológicas. Me especializo en aplicaciones
						web y móviles, con experiencia en distintos lenguajes y frameworks
						que me permiten crear productos innovadores y funcionales.
					</p>
					<p class="wow fadeInUp">
						Además, disfruto aprender nuevas tecnologías, realizar proyectos creativos,
						tengo experiencia trabajando en equipo y bajo presión, y he dirigido distintos proyectos de
						desarrollo de software.
					</p>
				</div>
			</div>
		</div>
	</section>


	<!-- Habilidades  -->
	<section id="habilidades" class="container">
		<div class="text-center">
			<h2 class="wow fadeInUp">Habilidades</h2>
			<div class="title-line wow fadeInRight"></div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
				<div class="skill">
					<h4>Java <span class="pull-right">75%</span></h4>
					<div class="progress">
						<div class="progress-bar wow slideInLeft" role="progressbar" style="width: 75%"></div>
					</div>
				</div>

				<div class="skill">
					<h4>HTML, CSS, JavaScript <span class="pull-right">60%</span></h4>
					<div class="progress">
						<div class="progress-bar wow slideInLeft" role="progressbar" style="width: 60%"></div>
					</div>
				</div>

				<div class="skill">
					<h4>Python <span class="pull-right">85%</span></h4>
					<div class="progress">
						<div class="progress-bar wow slideInLeft" role="progressbar" style="width: 85%"></div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<!-- Portafolio de proyectos -->
	<section id="portafolio" class="section-red full-width-section">
		<div class="container text-center">
			<h2 class="wow fadeInUp">Portafolio</h2>
			<div class="title-line wow fadeInRight"></div>
			<p>Aquí se muestran algunos de los proyectos en los que he trabajado:</p>

			<div class="tarjetas-container">
				<div class="tarjeta">
					<img src="images/GraficaRica.png" alt="Grafica Rica Proyecto LudoReads">
					<h4>Analisis De Requisitos LudoReads</h4>
					<h6>Desarrollo del documento de requisitos de LudoRead, aplicacion de biblioteca digital que fomenta la lectura mediante recompensas.</h6>
					<br>
					<?php if (isset($_SESSION['usuario'])): ?>
						<a href="descargas/RequisitosLudoReads.pdf" class="btn-descargar" download>Descargar</a>
					<?php else: ?>
						<a href="registro.php" class="btn-disabled">Inicia sesión para descargar</a>
					<?php endif; ?>
				</div>

				<div class="tarjeta">
					<img src="images/DndIcon.png" alt="Icono Dungeon And Dragons">
					<h4>Gestor de Personajes DnD</h4>
					<h6>Aplicación para crear y organizar personajes de Dungeons & Dragons programada con Java, jswing y sql</h6>
					<br>
					<?php if (isset($_SESSION['usuario'])): ?>
						<a href="descargas/ProyectoDnd.zip" class="btn-descargar" download>Descargar</a>
					<?php else: ?>
						<a href="registro.php" class="btn-disabled">Inicia sesión para descargar</a>
					<?php endif; ?>
				</div>

				<div class="tarjeta">
					<img src="images/Everlight.png" alt="Funeraria Everlight">
					<h4>Funeraria Everlight</h4>
					<h6>Desarrollo de proyecto de Funeraria Everlight, incluyendo analisis de mercado, diseño de logo y encuestas de factibilidad</h6>
					<br>
					<?php if (isset($_SESSION['usuario'])): ?>
						<a href="descargas/ProyectoFunerariaEverlight.pdf" class="btn-descargar" download>Descargar</a>
					<?php else: ?>
						<a href="registro.php" class="btn-disabled">Inicia sesión para descargar</a>
					<?php endif; ?>
				</div>

				<div class="tarjeta">
					<img src="images/chat.png" alt="Chat Web">
					<h4>Chat Web</h4>
					<h6>Aplicacion web para chatear mediante una red local, programada con HTML, CSS, JavaScript y PHP</h6>
					<br>
					<?php if (isset($_SESSION['usuario'])): ?>
						<a href="descargas/chat.zip" class="btn-descargar" download>Descargar</a>
					<?php else: ?>
						<a href="registro.php" class="btn-disabled">Inicia sesión para descargar</a>
					<?php endif; ?>
				</div>

			</div>
		</div>
	</section>



	<!-- Informacion de contacto -->
	<section id="contacto" class="contacto-formulario">
		<div class="ubicacion text-center">
			<h2>Ubicacion</h2>
			<p>Calle Miguel Hidalgo #17. Angostura Centro, Angostura</p>
			<br>
			<br>
			<h2>Sigueme</h2>
			<div class="redes-sociales">
				<a href="peterdeag">Ig<i class="bi bi-instagram"></i></a>
				<a href="PedroAguilar">Facebook<i class="bi bi-instagram"></i></a>
				<a href="peterdeag">YT<i class="bi bi-instagram"></i></a>
			</div>
		</div>
		<div class="formulario text-center">
			<h2>Contacto</h2>
			<form action="https://formsubmit.co/39b264a7e5136b3044e7aa7e4aad386d" method="POST" target="_blank">
				<input type="text" class="formulario-text" name="usuario" placeholder="Nombre" id=""> <br>
				<input type="email" class="formulario-text" name="email" placeholder="Correo" id=""> <br>
				<input type="tel" class="formulario-text" name="telefono" placeholder="Telefono" id=""> <br>
				<input type="textarea" class="formulario-text"><br>
				<input type="submit" value="Enviar" class="formulario-text">
			</form>
		</div>
	</section>


	<!-- Pie de pagina -->
	<footer id="footer">
		<div class="container text-center">
			<p>© 2025 Pedro Antonio De Los Santos</p>
			<a href="#top" class="scrollToTop"><i class="fa fa-arrow-circle-o-up"></i></a>
		</div>
	</footer>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/descarga.js"></script>
	<script>
		new WOW().init();
	</script>
	<script>
		window.addEventListener("beforeunload", function() {
			// Llamamos al archivo PHP de logout cuando se cierre la pestaña
			navigator.sendBeacon("php/logout.php");
		});
	</script>

</body>


</html>