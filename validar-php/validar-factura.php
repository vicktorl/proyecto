<?php
/**
 * muestra el nombre del usuario
 * @return String
 */
function mostrarUsuario(){
	include 'iniciar.php';
	session_start();
	$id=$_SESSION['usuario'];
	$sqlp="SELECT * from usuario where id='$id'";
	$result=mysqli_query($conectar,$sqlp);
	while($mostrar=mysqli_fetch_array($result)){
		$nombre=$mostrar['nombre'];
	}
	return "$nombre";
}
/**
 * muestra la informacion guardada en base de datos
 * @return void
 */
function mostrarFactura(){
	include 'iniciar.php';
	$id=$_SESSION['usuario'];
	$sqlp="SELECT * from usuario where id='$id'";
	$result=mysqli_query($conectar,$sqlp);
	while($mostrar=mysqli_fetch_array($result)){
		$id_cliente=$mostrar['id'];
		$nombre=$mostrar['nombre'];
	}
	$sqlp="SELECT * from factura where id_cliente='$id_cliente'";
	$result=mysqli_query($conectar,$sqlp);
	while($mostrar=mysqli_fetch_array($result)){
		?>
		<tr>
			<a href="index.php"><td class="tabla-casilla">Nombre</td></a>
			<td class="tabla-casilla"><?php echo $mostrar['nombre'] ?></td>	
		</tr>
		<tr>
			<td class="tabla-casilla">Apellido</td>
			<td class="tabla-casilla"><?php echo $mostrar['apellido'] ?></td>
		</tr>
		<tr>
			<td class="tabla-casilla">Correo</td>
			<td class="tabla-casilla"><?php echo $mostrar['correo'] ?></td>	
		</tr>
		<tr>
			<td class="tabla-casilla">Telefono</td>
			<td class="tabla-casilla"><?php echo $mostrar['telefono'] ?></td>
		</tr>
		<tr>
			<td class="tabla-casilla">Region</td>
			<td class="tabla-casilla"><?php echo $mostrar['region'] ?></td>
		</tr>
		<tr>
			<td class="tabla-casilla">Ciudad</td>
			<td class="tabla-casilla"><?php echo $mostrar['ciudad'] ?></td>	
		</tr>
		<?php
	}
}
?>