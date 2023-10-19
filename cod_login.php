<?php
include("conexion.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['password1'];

    // Conectar a la base de datos (ajusta los detalles de conexión según tu configuración)
    global $conex;

    if ($conex->connect_error) {
        die("Error de conexión: " . $conex->connect_error);
    }

    // Consulta SQL para verificar las credenciales
    $consulta = "SELECT * FROM tablaPassword WHERE usuario = '$usuario' AND password1 = '$contrasena'";  //mysqli_query()
    $resultado = $conex->query($consulta);

    if ($resultado->num_rows == 1) {  //cuántas filas se obtuvieron como resultado de una consulta
        $fila = $resultado->fetch_assoc(); //recupera una fila de datos como un array asociativo (col=clave; )
        /*         ID: 2
        Nombre: María
        Apellido: López
        Salario: 52000.00 */
        $_SESSION['id'] = $fila['id'];  // se almacenan ciertos datos de esa fila en las variables de sesión ($_SESSION).
        $_SESSION['tipoUsuario'] = $fila['tipoUsuario']; //asigna el valor del campo tipoUsuario obtenido de la fila de 
        //resultados de la consulta a una variable de sesión en PHP

        // Redirige según el tipo de usuario
        if ($_SESSION['tipoUsuario'] == "s") {
            header("Location: consulta.php");
        } elseif ($_SESSION['tipoUsuario'] == "a") {
            header("Location: consulta.php");
        } elseif ($_SESSION['tipoUsuario'] == "u") {
            header("Location:consulta.php");
        }
    } else {
        $mensaje_error = "Credenciales incorrectas. Inténtalo de nuevo.";
    }

    $conex->close();
}
