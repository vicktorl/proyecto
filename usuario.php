<?php
include 'validar-php/validar-usuario.php'
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title> Mantencion instrumentos musicales</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="container">
		<header>
			<a href="index.php"><img id="imagen"width="50"src="imagenes/pastilla.jpg"></a>
			<h2 id="tituloinicio">LB Luthier</h2>
			<a href="loging.php"><img  id="inicio" width="50" src="imagenes/inicio.png"></a>
		</header>
		<nav>
			<ul>
				<a href="index.php"><li>Inicio</li></a>
				<a href="somos.php"><li>¿Quienes somos?</li></a>
				<a href="Videos.php"><li>Videos</li></a>
				<a href="Contactos.php"><li>Contactos</li></a>
			</ul>
		</nav>

		<div class="clear"></div>
		<section id ="content">
			<h5>ubicacion</h5>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5084.253318815904!2d-70.65470252493091!3d-33.459178399328685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c50ee9d096c1%3A0xed06b9126a372c30!2sLB%20Luthier!5e0!3m2!1ses!2scl!4v1598811776840!5m2!1ses!2scl" width="270" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			<article class="articulo">
				<img id="tarjetas" src="imagenes/tarjetas.png">
				<h2>Trasnferencias a:</h2><br>
				<p>Rut: 15.278.xxx-x</p>
				<p> Cuenta Corriente:5335-4034-1633-0729</p>
				<p>Razon social: Jair Messias Bolsonaro</p>
				<p>Email: contacto@mesko.cl</p><br>
				<p>nota: </p>
				<p>solo despachos a regiones dentro del pais</p>
			</article>
		</section>
		<aside id="atencion">
				<h5>medios de pago</h5>
			<a href="https://www.webpay.cl/"><img id="pago"src="imagenes/pago.jpg"></a>
			<form id="horario">
				<h5>horarios</h5>
				<h4>Horarios de atencion</h4>
				<p>Lun a Vie: 10:00 a 19:30</p>
				<p>Sábados: 10:00 a 14:00</p>
				<h4>Teléfonos:</h4>
				<p>Teléfono: +56 2 2639xxxx</p>
				<p>Móvil: +56 9 92228xxx</p>
				<h4>Email:</h4>
				<p>contacto@gmail.com</p>
			</form>
		</aside>
		<div id="separador">
			<fieldset id="mapa">
				<h1 id=datusuario>registro</h1>
				<form  id="usuario"action="usuario.php" method="POST">
					<h2>Inicie sesion</h2>
					<input required name="nombre"class="control" type="text" placeholder="Ingrese su nombre">
					<input required name="contraseha" class="control" type="text" placeholder="Ingrese su contraseha">
					<input id="boton" type="submit" value="Ingresar">
					<p></p>
					<?php 
					if ($_POST) {
							administrador();
					}
					?>
				</form>

			</fieldset>
			<div class="clear"></div>
			<footer>
				<p> diseno de pagina web</p>
			</footer>
		</div>
	</body>
</html>