<?php
include 'iniciar.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title> Mantencion instrumentos musicales</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
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

		<div id="separador3">
			<div id="mapa">
				<div id="contenedor3">
					<div id="contenedor2">
						<img id="woods" src="imagenes/woods2.png">
						<img id="potenciometro" src="imagenes/potenciomentro.png">
						<img id="fondo" src="imagenes/fondo.png">
						<img id="maple" src="imagenes/maplef.png">
						<img id="trastes" src="imagenes/trastes.png">
						<img id="cuerdas" src="imagenes/cuerdasf.png">
						<img id="clavijero" src="imagenes/gibsonf.png">
						<div id="precio" >
							<h3 >Madera&nbsp; $</h3>
							<label id="lbResultado">~</label>
							<h3 >clavijero $</h3>
							<label id="lbResultado2">~</label>
						</div>
					</div>
					<div id="opcion">
						<div id="opciones2">
							<div class="btn-group" role="group">
								<button  id="btnGroupDrop1" type="button" class="btn btn-secondary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									Madera
								</button>
								<div id="mad"class="dropdown-menu" aria-labelledby="btnGroupDrop1">
									<div class="contenedor-img"><br>
										<a class="dropdown-item">Fresno &nbsp;<img onclick="setSrc('woods', this.src); cuerpo(madera);" src="imagenes/woods2"></a>
										<a class="dropdown-item">pantano<img onclick="setSrc('woods', this.src); cuerpo(madera2);" src="imagenes/woods3" > </a>
										<a class="dropdown-item">Aliso &nbsp;<img onclick="setSrc('woods', this.src); cuerpo(madera3);" src="imagenes/woods4"></a>

									</div>
								</div>
							</div>
						</div>
						     <!--  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                             consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                             cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                             proident, sunt in culpa qui officia deserunt mollit anim id est laborum.-->

                             <div id="opciones2">
                             	<div class="btn-group" role="group">
                             		<button id="btnGroupDrop1" type="button" class="btn btn-secondary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                             			clavijero
                             		</button>
                             		<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                             			<div class="contenedor-img"><br>

                             				<a class="dropdown-item">gipson <img onclick="setSrc('clavijero', this.src);clavijero(clavijero1);" src="imagenes/gibsonf" ></a>
                             				<a class="dropdown-item">fender <img onclick="setSrc('clavijero', this.src); clavijero(clavijero2);" src="imagenes/fender"></a>
                             				<a class="dropdown-item">jackson<img onclick="setSrc('clavijero', this.src); clavijero(clavijero3);" src="imagenes/jackson"> </a>

                             			</div>
                             		</div>
                             	</div>
                             </div>
                             <script src="javascript/validar-guitarra.js"></script>
                                <div id="opciones2">
                                	<?php
                                	$id_usuario=$_SESSION['usuario'];
                                	?>
                             	<a href="compraguitarra.php?usuario=<?php echo$id_usuario;?>"><input class="btn btn-primary btn-lg" type="submit" value="siguiente"></a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="clear"></div>
         <footer>
         	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
         		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
         		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
         		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
         		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
         	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
         </footer>
     </body>
     </html>