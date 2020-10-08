<?php
/**
 * guarda los datos del usuario en variables simples
 * @return void
 */
function cargaUsuario(){

	//zsession_start();
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$ciudad=$_POST['ciudad'];
	$region=$_POST['region'];
	$codigopostal=$_POST['codigopostal'];
	$contraseha=$_POST['contraseha'];
	guardaUsuario($nombre,$apellido,$region,$ciudad,$codigopostal,$contraseha);
}
/**
 * guarda usuario en base de datos
 * @param String $nombre  nombre del usuario
 * @param  String $apellido  Apellido del usuario
 * @param  String $region  region del usuario
 * @param  String $ciudad  ciudad del usuario
 * @param  String $contraseha  Contraseha del usuario
 * @return void
 */
function guardaUsuario($nombre,$apellido,$region,$ciudad,$codigopostal,$contraseha){

	include 'iniciar.php';
	$insertar= "INSERT INTO `usuario`(`nombre`, `apellido`,`ciudad`,`region`,`codigopostal`,`contraseha`) VALUES ('$nombre','$apellido','$ciudad','$region','$codigopostal','$contraseha')";
	$resultado = mysqli_query($conectar,$insertar);
	if($resultado){
			echo "<p class='exito'>*El registro se ha realizado con exito</p>";
			
		}else{

			echo "<p class='error'>*error</p>";
		}
}
?>