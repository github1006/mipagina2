<?php
include("conexion.php");
global $conex;

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apat = $_POST['apat'];
    $amat = $_POST['amat'];

    // Realiza la actualización en la base de datos
    $sql_actualiza = "UPDATE usuario SET nombre = '$nombre', apat = '$apat', amat = '$amat' WHERE id = $id";
    
    if(mysqli_query($conex, $sql_actualiza)){
        echo "Actualización exitosa!";
        header("Location: consulta.php");
    } else {
        echo "Error al actualizar: " . mysqli_error($conex);
    }
} else {
    echo "No se proporcionó un ID válido.";
}
?>
