<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
class calificacion {

	function promedio($promediof,$suma){
		if ($suma<=0) {
			echo "no calificado";
			return null;
		}else if($suma>=0){

			$calificacion=$promediof/$suma;
			echo "$calificacion";
			return $calificacion;
		}else if($promediof>0 and $suma==0){
			echo"$promedio";
			return $promediof;
		}
	}
	function luthier_bajo(){
	include 'iniciar.php';
	$sqlp="SELECT * from calificacion_luthier where id_trabajador=2";
	$result=mysqli_query($conectar,$sqlp);
	$promedio=0;
	$contador=0;
	$promediof=0;
	while($mostrar=mysqli_fetch_array($result)){

		$promedio=$mostrar['calificacion'];
		$promediof+=$promedio;
		$contador++;
	}
	return $promediof;
	//promedio($promediof,$contador);
}
}
?>