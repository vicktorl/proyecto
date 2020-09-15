<?php
include 'iniciar.php';
$query=mysqli_query($conectar,"SELECT * FROM instrumentos");
session_start();
?>
<?php 
include 'validar-php/validar-formulario.php'
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
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
		<section id ="content">
			<h5 id="style-text5">ubicacion</h5>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5084.253318815904!2d-70.65470252493091!3d-33.459178399328685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c50ee9d096c1%3A0xed06b9126a372c30!2sLB%20Luthier!5e0!3m2!1ses!2scl!4v1598811776840!5m2!1ses!2scl" width="270" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			<article class="articulo">
				<img id="tarjetas" width="50" src="imagenes/tarjetas.png">
				<h4 id="#style-text4">Trasnferencias a:</h4>
				<p id="style-text-p">Rut: 15.278.xxx-x</p>
				<p id="style-text-p"> Cuenta Corriente: 02-34002xx-x</p>
				<p id="style-text-p">Razon social: Francisco Mesko xxxxx.</p>
				<p id="style-text-p">Email: contacto@mesko.cl</p><br>
				<p id="style-text-p">nota: </p>
				<p id="style-text-p">solo despachos a regiones dentro del pais</p>
			</article>
		</section>
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
		<div id="separador">
			<fieldset id="mapa">
				<h1 id=datusuario>Detalle de la factura</h1>
				<p id="consulta">para realizar una factura de compra porfavor llene los datos:</p>
				<form id="campo" action="formulario.php" method="POST">
					<p>
						<label for="inputEmail4">Nombre*</label>
						<input required name="nombre" class="form-control" type="text" >
					</p><p>
						<label>Apellido*</label>
						<input required name="apellido"class="form-control" type="text">
					</p><p>
						<label>Correo electronico*</label>
						<input required name="correo"class="control form-control" type="text">
					</p><p>
						<label>telefono*</label>
						<input required name="telefono"class=" form-control" ></input>
					</p><p>
						<label>Region*</label>
						<input required name="region"class="control form-control" ></input>
					</p><p>
						<label>Ciudad*</label>
						<input required name="ciudad"class="control form-control" ></input>
					</p>	<p>
						<label>Tipo de intrumento</label>
						<select  class="form-control instrumento" id="inputState"name="instrumento">
							<?php 
							while($datos = mysqli_fetch_array($query))
							{
								?>
								<option value="<?php echo $datos['instrumento']?>"> <?php echo $datos['instrumento']?> </option>
							}
							<?php
						}
						?> 
					</select>
				</p>
				<p>
					<label>Servicio</label>
					<select  name="servicio"class="instrumento form-control " >
						<option value="calibracion">calibración</option>
						<option value="mantencion">mantencion</option>
						<option value="reparacion">reparacion</option>
					</select>
				</p><p id="block">
					<label>Nota del pedido</label>
					<textarea id="exampleFormControlTextarea1" class="form-control" required name="nota" placeholder="ingrese alguna nota"></textarea>
					<p id="button">
						<input type="submit" class="btn btn-primary" value="Enviar">
					</p>
					<p></p>
					<?php
					if ($_POST) {
						cargaUsuario();
					}
					?>
				</form>
			</fieldset>
			<div class="clear"></div>
			<footer>
				<p> diseo de pagina web</p>
			</footer>
		</div>
	</body>
	</html>