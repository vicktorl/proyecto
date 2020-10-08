<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class cliente {

	function factura($var1,$var2){
		include 'iniciar.php';
			
		$id_cliente="";	
		$factur= "SELECT * FROM factura ";
		$query3= mysqli_query($conectar,$factur);
		while($mostrar=mysqli_fetch_array($query3)){
		if ($id_cliente==$mostrar['id_cliente']) {
			$id_factura=$mostrar['id_cliente'];	
		}
		$nombre=$var1;
		$contraseha=$var2;
		$id_factura="";
		$usuario= "SELECT * FROM usuario where nombre ='$nombre' and contraseha ='$contraseha'";
		$query= mysqli_query($conectar,$usuario);
		$tupla_usuario=mysqli_num_rows($query);	
		if ($tupla_usuario>0) {
			while($mostrar=mysqli_fetch_array($query)){
		if($id_cliente==$id_factura){
			return true;
		}
		return false;
	}
}
return null;
}
}}
?>
