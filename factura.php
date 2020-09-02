<?php
include 'validar-php/validar-factura.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
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
		<div id="separador2">
			<fieldset id="mapa">
				<h1 id=datusuario>Hola: <?php echo mostrarUsuario(); ?>  </h1>
				<h1 id=datusuario>Direccion de factura</h1>
				<div class="tabla-1">
					<table class="tabla-2">
						<?php	
						mostrarFactura();
						?>
					</table>
					<h1 id=datusuario>seguimiento</h1>
					<div class="tabla-1">
						<table class="tabla-2">
						</table>
					</div>
				</div>
			</fieldset>
		</div>
		<div class="clear"></div>
	</div><footer>
		<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</footer>
</body>
</html>