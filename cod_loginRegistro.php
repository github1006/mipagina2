<?php
include("conexion.php");
$v1 = $_POST['usuario'];
$v2 = $_POST['password1'];
$v3 = $_POST['password2'];
$v4 = $_POST['tipo_usuario'];
function insertar($v1, $v2, $v3, $v4)
{
    global $conex;
    if (!mysqli_query($conex, "INSERT INTO tablaPassword(usuario, password1 , password2, tipoUsuario) VALUES
      ('" . $v1 . "','" . $v2 . "','" . $v3 . "', '" . $v4 . "')")) {
        echo "ERROR!";
    } else {
        echo "Acción exitosa";
    }
}
insertar($v1, $v2, $v3, $v4);
header("Location:login.php");
#header("Location: insertar.php");
