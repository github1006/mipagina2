<?php
include("conexion.php");
$vnombre=$_POST['nombre'];
$vcorreo=$_POST['correo'];
$vopinion=$_POST['opinion'];
insertar($vnombre,$vcorreo,$vopinion);
function insertar($vnombre, $vcorreo, $vopinion){
    global $conex;
if(!mysqli_query($conex, "INSERT INTO tablaOpinion(nombre, correo, opinion) VALUES
('".$vnombre."','".$vcorreo."','".$vopinion."')"))
{
echo "ERROR!";
}
else
{
echo "Acción exitosa";
}
}
?>