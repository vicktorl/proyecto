<?php
/**
 * guarda la informacion de la factura variables simples
 * @return void
 */
function cargaUsuario(){
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$correo=$_POST['correo'];
	$telefono=$_POST['telefono'];
	$region=$_POST['region'];
	$ciudad=$_POST['ciudad'];
	$nota=$_POST['nota'];
	$id =$_SESSION['usuario'];
	$instrumento=$_POST['instrumento'];	
	$servicio=$_POST['servicio'];
	guardaUsuario($nombre,$apellido,$correo,$telefono,$region,$ciudad,$nota,$id,$instrumento,$servicio);
}
/**
 * Guarda la factura del cliente
 * @param String $nombre  nombre del usuario
 * @param  String $apellido  Apellido del usuario
 * @param  String $correo  Correo del usuario
 * @param String $telefono  Telefono del Usuario
 * @param String $region   region del usuario
 * @param String $ciudad  ciudad del usuario
 * @param String $nota  nota del usuario
 * @param Integer $id  id del usuario
 * @param String $instrumento  instrumento del usuario
 * @param String $servicio  servicio al usuario
 * @return void
 */
function guardaUsuario($nombre,$apellido,$correo,$telefono,$region,$ciudad,$nota,$id,$instrumento,$servicio){
	include 'iniciar.php';
	
	$sqlp="SELECT * from instrumentos";
	$result=mysqli_query($conectar,$sqlp);
	while($mostrar=mysqli_fetch_array($result)){
		if ($instrumento==$mostrar['instrumento']) {
				$id_trabajador=$mostrar['id_trabajador'];
			}
		}
		$insertar= "INSERT INTO `factura`(`nombre`,`apellido`,`correo`,`telefono`,`region`,`ciudad`,`nota`,`id_cliente`,`instrumento`,`servicio`,`id_trabajador`) VALUES ('$nombre','$apellido','$correo','$telefono','$region','$ciudad','$nota','$id','$instrumento','$servicio','$id_trabajador')";
		$resultado = mysqli_query($conectar,$insertar);
		if($resultado){
			echo "<p class='exito'>*El registro se ha realizado con exito</p>";
		}else{

			echo "<p class='error'>*error</p>";
		}
	}
	?>