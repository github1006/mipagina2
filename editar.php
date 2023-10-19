<html>
    <head>
        <title>Actualizar</title>
    </head>
    <body>
        <?php
    include("conexion.php");
    global $conex;
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        // Obtiene datos actuales del registro
        $sql_select = "SELECT nombre, apat, amat FROM usuario WHERE id = $id";
        $result = mysqli_query($conex, $sql_select);

        if($result){
            $row = mysqli_fetch_assoc($result);
            $nombre_actual = $row['nombre'];
            $apat_actual = $row['apat'];
            $amat_actual = $row['amat'];
        } else {
            echo "Error al obtener los datos actuales: " . mysqli_error($conex);
            exit;
        }
    } else {
        echo "No se proporcionó un ID válido.";
        exit;
    }
    ?>
        <!-- formulario HTML -->
        <form action="cod_editar.php" method="post">
            <h2>Editar usuario</h2>
            <input type="text" id="nombre" name="nombre" value="<?php echo $nombre_actual; ?>">
            <input type="text" id="apat" name="apat" value="<?php echo $apat_actual; ?>">
            <input type="text" id="amat" name="amat" value="<?php echo $amat_actual; ?>">
            <!-- Campo oculto para enviar el ID -->
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <button type="submit">Actualizar</button>
        </form>
        
    </body>
</html>
