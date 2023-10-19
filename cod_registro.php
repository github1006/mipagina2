<?php
include("conexion.php");
$v1 = $_POST['nombre'];
$v2 = $_POST['apat'];
$v3 = $_POST['amat'];
function insertar($v1, $v2, $v3)
{
    global $conex;
    if (!mysqli_query($conex, "INSERT INTO usuario(nombre, apat, amat) VALUES
      ('" . $v1 . "','" . $v2 . "','" . $v3 . "')")) {
        echo "ERROR!";
    } else {
        echo "Acción exitosa";
    }
}
insertar($v1, $v2, $v3);
header("Location: insertar.php");
