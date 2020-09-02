<?php
/**
 * guarda los datos del usuario en variables simples
 * @return void
 */
function cargaUsuario(){

	session_start();
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$correo=$_POST['correo'];
	$contraseha=$_POST['contraseha'];
	guardaUsuario($nombre,$apellido,$correo,$contraseha);
}
/**
 * guarda usuario en base de datos
 * @param String $nombre  nombre del usuario
 * @param  String $apellido  Apellido del usuario
 * @param  String $correo  Correo del usuario
 * @param  String $contraseha  Contraseha del usuario
 * @return void
 */
function guardaUsuario($nombre,$apellido,$correo,$contraseha){

	include 'iniciar.php';
	$insertar= "INSERT INTO `usuario`(`nombre`, `apellido`,`correo`,`contraseha`) VALUES ('$nombre','$apellido','$correo','$contraseha')";
	$resultado = mysqli_query($conectar,$insertar);
	redirecciona($nombre,$apellido,$correo,$contraseha);
}
/**
* si el usuario tiene una factura lo redireciona a su factura de lo contrario debe crear una
* @param  String $nombre  nombre del usuario
* @param  String $apellido  Apellido del usuario
* @param  String $correo  Correo del usuario
* @param  String $contraseha  Contraseha del usuario
* @return void
*/
function redirecciona($nombre,$apellido,$correo,$contraseha){
	
	include 'iniciar.php';
	$usuario= "SELECT * FROM usuario where nombre ='$nombre' and contraseha ='$contraseha'";
	$query= mysqli_query($conectar,$usuario);
	$tupla=mysqli_num_rows($query);
	if($tupla>0){
		while($mostrar=mysqli_fetch_array($query)){
			$_SESSION['usuario']=$mostrar['id'];
		}
		$id=$_SESSION['usuario'];
		echo "$id";
		header("Location:formulario.php");	
			//echo "su registro se ha realizado con exito ";
	}else{
		echo "error";
	}
}
?>