<?php
include("conexion.php");
global $conex;
if(isset($_GET['id']) ){
$id = $_GET['id'];
if(!mysqli_query($conex,"DELETE FROM usuario where id='".$id."'"))
{
echo "Error!";
}
else
{
echo "Acción exitosa!";
}
}
else{
echo "No llego el valor";
}
?>