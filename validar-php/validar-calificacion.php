<?php


/**
 * toma las calificaciones del trabajador_arpa, suma los valores
 * @return void
 */
function luthier_arpa(){
	include 'iniciar.php';
	$sqlp="SELECT * from calificacion_luthier where id_trabajador=1";
	$result=mysqli_query($conectar,$sqlp);
	$promedio=0;
	$contador=0;
	$promediof=0;
	while($mostrar=mysqli_fetch_array($result)){
		$promedio=$mostrar['calificacion'];
		$promediof+=$promedio;
		$contador++;
	}

	calificacion($promediof,$contador);
}
/**
 * retorna el nombre del trabajador_arpa
 * @return void
 */
function nombre_trabajador_arpa(){
	include 'iniciar.php';
	$sqlp="SELECT * from trabajador where id=1";
	$result2=mysqli_query($conectar,$sqlp);
	while($mostrar=mysqli_fetch_array($result2)){
		$nombre=$mostrar['nombre'];
	}
	echo $nombre;
}
/**
 * toma las calificaciones del trabajador_bajo, suma los valores
 * @return void
 */
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
	calificacion($promediof,$contador);
}
/**
 * retorna el nombre del trabajador_bajo
 * @return void
 */
function nombre_trabajador_bajo(){
	include 'iniciar.php';
	$sqlp="SELECT * from trabajador where id=2";
	$result2=mysqli_query($conectar,$sqlp);
	while($mostrar=mysqli_fetch_array($result2)){
		$nombre=$mostrar['nombre'];
	}
	echo $nombre;
}
/**
 * toma las calificaciones del trabajador_bajo, suma los valores
 * @return void
 */
function luthier_guitarra(){
	include 'iniciar.php';
	$sqlp="SELECT * from calificacion_luthier where id_trabajador=3";
	$result=mysqli_query($conectar,$sqlp);
	$promedio=0;
	$contador=0;
	$promediof=0;
	while($mostrar=mysqli_fetch_array($result)){

		$promedio=$mostrar['calificacion'];
		$promediof+=$promedio;
		$contador++;
	}
	calificacion($promediof,$contador);
}
/**
 * retorna el nombre del trabajador_guitarra
 * @return void
 */
function nombre_trabajador_guitarra(){
	include 'iniciar.php';
	$sqlp="SELECT * from trabajador where id=3";
	$result2=mysqli_query($conectar,$sqlp);
	while($mostrar=mysqli_fetch_array($result2)){
		$nombre=$mostrar['nombre'];
	}
	echo $nombre;
}
/**
 * saca el promedio segun las calificaciones del trabajador
 * @return void
 */
function calificacion($promediof,$suma){
	if ($suma<=0) {
	echo "no calificado";
	}else if($suma>=0){

	$calificacion=$promediof/$suma;
	echo "$calificacion";
	}elseif($promedio>0 and $suma=0){
	echo"$promedio";
	}
}

?>