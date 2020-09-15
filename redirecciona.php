<?php
include 'iniciar.php';
session_start();
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
		<?php
		$id_usuario=$_SESSION['usuario'];
		$sqlp="SELECT * from usuario where id='$id_usuario'";	
		$result=mysqli_query($conectar,$sqlp);
		$nombre="";
		while($mostrar=mysqli_fetch_array($result)){

			$nombre=$mostrar['nombre'];	
		}
		?>
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
				<h1 id=datusuario>Bienvenido: <?php echo "$nombre" ?>  </h1>
				<h1 id=datusuario>Datos de cliente</h1>
				
				<a  href="crearguitarra.php?usuario=<?php echo$id_usuario;?>" class="text-center"><h2>crear guitarra</h2></a>
				<a  href="formulario.php?usuario=<?php echo$id_usuario;?>" class="text-center"><h2>formulario</h2></a>
					
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