<?php
/**
 * entra como administrador de lo contrario pasa a la siguiente funcion
 * @return void
 */
function administrador(){
	include 'iniciar.php';
	$nombre=$_POST['nombre'];
	$contraseha=$_POST['contraseha'];
	$admin= "SELECT * FROM administrador where nombre ='$nombre' and contraseha ='$contraseha'";//compara contraseha y nombre
	$query5= mysqli_query($conectar,$admin);
	$tupla_admin=mysqli_num_rows($query5);															//encuentra una tupla 
	if ($tupla_admin>0) {
		header("Location:administrador.php");
	}
	trabajador($nombre,$contraseha);
	die();
}
/**
 * entra como trabajador de lo contrario pasa a la siguiennte funcion
 * @param Strin $nombre  nombre del trabajador
 * @param String $contraseha  contraseha del trabajador
 * @return void
 */
function trabajador($nombre,$contraseha){
	session_start();
	include 'iniciar.php';
	
	$trabajador="SELECT * FROM trabajador where nombre ='$nombre' and contraseha ='$contraseha'";//compara nombre y contraseha
	$query2= mysqli_query($conectar,$trabajador);
	$tupla_trabaj=mysqli_num_rows($query2);
	if ($tupla_trabaj>0) {
		while($mostrar=mysqli_fetch_array($query2)){
			$_SESSION['usuario']=$mostrar['id'];
		}
		$id=$_SESSION['usuario'];
		echo "$id";
		header("Location:trabajador.php");
		die();
	}
	usuario($nombre,$contraseha,$id_cliente);
	die();
}
/**
 * entra como usuario de lo contrario muestra un mensaje por pantalla
 * @param Strin $nombre  nombre del usuario
 * @param Strin $contraseha  contraseha del usuario
 * @param Integer $id_cliente  id del usuario
 * @param Integer $id_factura  id del usuario en la factura
 * @return void
 */
function usuario($nombre,$contraseha,$id_cliente){

	include 'iniciar.php';
	$id_cliente="";
	$usuario2= "SELECT * FROM usuario where nombre ='$nombre' and contraseha ='$contraseha'"; 
	$query4= mysqli_query($conectar,$usuario2);
	while($mostrar=mysqli_fetch_array($query4)){											
			$id_cliente=$mostrar['id'];															//toma la id del cliente
		}
		$id_factura="";
		$factur= "SELECT * FROM factura ";
		$query3= mysqli_query($conectar,$factur);
		while($mostrar=mysqli_fetch_array($query3)){
		if ($id_cliente==$mostrar['id_cliente']) {									//usuario pose una factura
			$id_factura=$mostrar['id_cliente'];	
		}
	}
	$usuario= "SELECT * FROM usuario where nombre ='$nombre' and contraseha ='$contraseha'";
	$query= mysqli_query($conectar,$usuario);
	$tupla_usuario=mysqli_num_rows($query);	
	if ($tupla_usuario>0) {																	//si encuentra una tupla entra
		while($mostrar=mysqli_fetch_array($query)){
		if($id_cliente==$id_factura){							    	//compara la id del cliente en la id de la factura
			$_SESSION['usuario']=$mostrar['id'];
			header("Location:factura.php");								//muestra la factura
			die();
		}
		$_SESSION['usuario']=$mostrar['id'];
	}	
	header("Location:formulario.php");										//si no tiene una factura abre un formulario 
}echo "<p class='error'>*nombre o contrasena incorrecta. Por favor intenta nuevamente</p>";
}
?>