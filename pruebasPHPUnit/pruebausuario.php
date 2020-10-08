<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class usuario {
 
	function mostrarUsuario($var1){
		$id=$var1;
		include 'iniciar.php';
		$sqlp="SELECT * from usuario where id='$id'";
		$result=mysqli_query($conectar,$sqlp);
		while($mostrar=mysqli_fetch_array($result)){
			$nombre=$mostrar['nombre'];
		}
		return "$nombre";
	}
}
?>