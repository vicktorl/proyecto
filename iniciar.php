<?php

$conectar=@mysqli_connect('localhost','root','',"luthier");

if (!$conectar) {
	echo "Nose pudo conectar con el servidor";
}else{

	$base=mysqli_select_db($conectar,'luthier');
	if(!$base){
		echo "no se encontro la base de batos";
	}
	}
?>