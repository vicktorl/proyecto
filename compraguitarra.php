<?php
include 'iniciar.php';
session_start();
?>
<?php 
include 'validar-php/validar-compra.php'
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Mantencion instrumentos musicales</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body id="bodystyle" >
	<div id="container">
		<header>
			<a href="index.php"><img id="imagen"width="50"src="imagenes/pastilla.jpg"></a>
			<h2 id="tituloinicio">LB Luthier</h2>
			<a href="loging.php"><img  id="inicio" width="50" src="imagenes/inicio.png"></a>
		</header>
		<nav class="pv-3 navbar-expand-lg auto-hiding-navbar " >
			<ul class="navbar-nav ml-auto nav justify-content-center" >
				<a class="nav-link active" href="index.php"><li class="nav item" >Inicio</li></a>
				<a class="nav-link active"  href="somos.php"><li class="nav item" >¿Quienes somos?</li></a>
				<a class="nav-link active"  href="Videos.php"><li class="nav item" >Videos</li></a>
				<a class="nav-link active"  href="Contactos.php"><li class="nav item" >Contactos</li></a>
			</ul>
		</nav>
		<div class="clear"></div>
		<aside id="atencion">
			<h5 id="style-text5">medios de pago</h5>
			<a href="https://www.webpay.cl/"><img id="pago"src="imagenes/pago.jpg"></a>
			<form id="horario">
				<h5 id="style-text5">horarios</h5>
				<h4 id="style-text4">Horarios de atencion</h4>
				<p id="style-text-p">Lun a Vie: 10:00 a 19:30</p>
				<p id="style-text-p">Sábados: 10:00 a 14:00</p>
				<h4 id="style-text4">Teléfonos:</h4>
				<p id="style-text-p">Teléfono: +56 2 2639xxxx</p>
				<p id="style-text-p">Móvil: +56 9 92228xxx</p>
				<h4 id="style-text4">Email:</h4>
				<p id="style-text-p">contacto@gmail.com</p>
			</form>
		</aside>
		<div id="separador2">
			<fieldset id="mapa">
				<h1 id=datusuario>Datos de cliente</h1>
				<form id="campo2" action="compraguitarra.php" method="POST">
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="validationDefault01">nombre</label>
							<input autocomplete="off" type="text" class="form-control" id="validationDefault01"required name="nombre" >
						</div>
						<div class="col-md-6 mb-3">
							<label for="validationDefault02">apellido</label>
							<input autocomplete="off" type="text" class="form-control" id="validationDefault02" required name="apellido">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="validationDefault03">ciudad</label>
							<input type="text" class="form-control" id="validationDefault03" required name="ciudad">
						</div>
						<div class="col-md-3 mb-3">
							<label for="validationDefault04">region</label>
							<select class="custom-select" id="validationDefault04" required name="region">
								<option selected  value="1">I</option>
								<option selected  value="2">II</option>
								<option selected  value="3">III</option>
								<option selected  value="4">IV</option>
								<option selected  value="5">V</option>
								<option selected  value="6">VI</option>
								<option selected  value="7">VII</option>
								<option selected  value="8">VII</option>
								<option selected  value="9">XI</option>
							</select>
						</div>
						<div class="col-md-3 mb-3">
							<label for="validationDefault05">codigo postal</label>
							<input type="text" class="form-control" id="validationDefault05" required name="codigopostal">
						</div>
					</div>
					<div class="form-group">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
							<label class="form-check-label" for="invalidCheck2">
								Acepta los terminos y condiciones
							</label>
						</div>
					</div>
					<input type="submit" class="btn btn-primary" value="Enviar">
					<?php
				if ($_POST) {
					cargaUsuario();
				}
				?>
				</form>
				
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