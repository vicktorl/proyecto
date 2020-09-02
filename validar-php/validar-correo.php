<?php
/**
 * enviar un correo electronico con los datos del usuario
 * @return void
 */
function mostrar(){
	if ($_POST) {
		$nombre=$_POST['nombre'];
		$correo=$_POST['correo'];
		$telefono=$_POST['telefono'];
		$mensaje=$_POST['mensaje'];
		
		$to       = 'v.lenam01@ufromail.cl';
		$headers  = 'From: [v.lenam01]@ufromail.cl' . "\r\n" .
		'MIME-Version: 1.0' . "\r\n" .
		'Content-type: text/html; charset=utf-8';
		$contenido = "De: $nombre " ."<br>"."telefono: $telefono"."<br>" . "Correo: $correo"."<br>"." Mensaje: $mensaje";
		if(mail($to, "contacto", $contenido, $headers))
			echo "<p class='exito'>*Email enviado</p>";
		else
			echo "<p class='error'>*Email no enviado</p>";
	}}
	?>