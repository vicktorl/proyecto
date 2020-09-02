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
		<?php
		$id_trabajador=$_SESSION['usuario'];
		$sqlp="SELECT * from trabajador where id='$id_trabajador'";	
		$result=mysqli_query($conectar,$sqlp);
		$nombre="";
		while($mostrar=mysqli_fetch_array($result)){

			$nombre=$mostrar['nombre'];	
		}
		?>
		<aside id="atencion">
			<h5>medios de pago</h5>
			<a href="https://www.webpay.cl/"><img id="pago"src="imagenes/pago.jpg"></a>
			<form id="horario">
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
				<h1 id=datusuario>Bienvenido: <?php echo "$nombre" ?>  </h1>
				<h1 id=datusuario>Datos de cliente</h1>
				<div class="tabla-1">
					<table class="tabla-2">
						<?php	
						$sqlp2="SELECT * from factura where id_trabajador='$id_trabajador'";
						$result=mysqli_query($conectar,$sqlp2);
						$cliente=1;
						while($mostrar=mysqli_fetch_array($result)){
							?>
							<tr>
								<td class="tabla-casilla">Cliente:<?php echo "$cliente"?></td>
								<td  class="tabla-casilla"><a href="trabajadorfactura.php?id2=<?php echo$mostrar['id_factura'];?>"><?php echo $mostrar['nombre'] ?></a></td>
							</tr>
							<?php
							$cliente++;		
						}
						?>
					</table>
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