<?php

	
	function cargaUsuario(){

		$id =$_SESSION['usuario'];
		$total=$_GET['clav'];
		$madera=$_GET['madera'];
		$clavijero=$_GET['clavijer'];
		guardaUsuario($id,$total,$madera,$clavijero);
	}
	function guardaUsuario($id,$total,$madera,$clavijero){
		include 'iniciar.php';
		$insertar= "INSERT INTO `detallefactura`( `id_cliente`,`total`,`madera`,`clavijero`) VALUES ('$id','$total','$madera','$clavijero')";
		$resultado = mysqli_query($conectar,$insertar);
		if($resultado){
			echo "<p class='exito'>*El registro se ha realizado con exito</p>";

		}else{

			echo "<p class='error'>*error</p>";
		}
	}

?>