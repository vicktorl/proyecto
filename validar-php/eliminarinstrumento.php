
<?php
include '../iniciar.php';
$id=$_GET['id'];
$sql="DELETE  from `instrumentos` where id='$id'";
$resultado=mysqli_query($conectar,$sql);
echo "$id";
if ($resultado) {

header("Location:../administrador.php");	
}echo "error";

?>