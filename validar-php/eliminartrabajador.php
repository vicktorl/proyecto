<?php
include '../iniciar.php';
$id=$_GET['id'];
$sql="DELETE  FROM trabajador WHERE id=$id";
$resultado=mysqli_query($conectar,$sql);
if ($resultado) {
header("Location:../administrador.php");	
}
header("Location:../administrador.php");	
echo "error";

?>