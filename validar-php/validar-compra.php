<?php

function cargaUsuario(){
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$ciudad=$_POST['ciudad'];
	$region=$_POST['region'];
	$codigopostal=$_POST['codigopostal'];
	$id =$_SESSION['usuario'];
	guardaUsuario($nombre,$apellido,$region,$ciudad,$id,$codigopostal);
}
function guardaUsuario($nombre,$apellido,$region,$ciudad,$id,$codigopostal){
	include 'iniciar.php';
		$insertar= "INSERT INTO `detallefactura`(`nombre`, `apellido`, `ciudad`, `region`, `codigopostal`, `id_cliente`) VALUES ('$nombre','$apellido','$ciudad','$region','$codigopostal','$id')";
		$resultado = mysqli_query($conectar,$insertar);
		if($resultado){
			echo "<p class='exito'>*El registro se ha realizado con exito</p>";
		}else{

			echo "<p class='error'>*error</p>";
		}
	}

?>