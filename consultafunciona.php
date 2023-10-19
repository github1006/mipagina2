<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Consulta para super usuario</title>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap_theme/bootstrap.css" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template -->
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
</div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
            <div class="container-fluid"> 
                <img src="img/logo.avif" width="41">
                <a class="navbar-brand" href="#">Barra de navegación</a> 
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler6" aria-controls="" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> 
                </button>                 
                <div class="collapse navbar-collapse" id="navbarToggler6"> 
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0"> 
                        <li class="nav-item"> <a class="nav-link active" href="index.html">Casa</a> 
                        </li>                         
                        <li class="nav-item"> <a class="nav-link" href="insertar.php">Registro</a> 
                        </li>                         
                        <li class="nav-item"> <a class="nav-link " href="opinion.php">Opinion</a> 
                        </li>                         
                        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mas</a> 
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink7"> <a class="dropdown-item" href="#">Libros</a> <a class="dropdown-item" href="#">Devil Doll</a> <a class="dropdown-item" href="#">Pupusa</a> 
                            </div>                             
                        </li>                         
                    </ul>                     
                    <form class="d-flex"> 
                        <input class="form-control me-2" type="search" placeholder="Busca" aria-label="Search"> 
                        <button class="btn btn-outline-success" type="submit">Buscar</button>                         
                    </form>                     
                </div>                 
            </div>             
        </nav>
        <h1 class="bg-info-subtle h1 text-center text-success">Registros realizados</h1>

        <!-------------------------codigo php inicio------------------------------ -->
        
        <?php
        include ("conexion.php");
        global $conex;
        echo '<table class="table">';
        echo"    <thead> ";
        echo"       <tr> ";
        echo '<th scope="col">Nombre</th>';
        echo '<th scope="col">Apellido paterno</th>';
        echo '<th scope="col">Apellido materno</th>';
        echo"        </tr>   " ; 
        echo"    </thead>         " ; 

       
        $sql = mysqli_query($conex, "SELECT * FROM usuario");
        while ($row = mysqli_fetch_array($sql)) {
            echo "<tr>";
            echo "<td align='center'>" . $row['nombre'] . "</td>";
            echo "<td align='center'>" . $row['apat'] . "</td>";
            echo "<td align='center'>" . $row['amat'] . "</td>";
            echo '<td><a href="cod_eliminar.php?id=' . $row['id'] . '">Eliminar usuario</a></td>';
            echo '<td><a href="editar.php?id=' . $row['id'] . '">Editar usuario</a></td>';
            echo "</tr>";
        }
        ?>
        <!-------------------------codigo php fin------------------------------ -->
    </tbody>            
        </table>
        
        <h2>Vea todo los registros en pdf y descargue si desea</h2>
        <ul class="fs-4 placeholder-glow shadow-sm text-center text-success text-uppercase"> 
            <li><a href="pdfconsulta.php">Ver en pdf</a>
            </li>             
        </ul>
        <picture>
            <img src="https://pinegrow.com/placeholders/img12.jpg">
        </picture>
        <footer class="bg-dark pb-3 pt-5 text-center text-white"> 
            <div class="container pb-4 pt-4"> <a class="align-items-center d-inline-flex flex-column fs-2 fw-bold lh-1 link-secondary mb-4 text-decoration-none text-uppercase" href="#"> <img src="img/logo.avif" width="63"><span>sof2295</span></a>
                <nav class="justify-content-center mb-4 nav"><a class="link-light nav-link " aria-current="page" href="#" target>Negocios</a><a class="link-light nav-link " href="#" target>Música</a><a class="link-light nav-link " href="#">Materias</a><a class="link-light nav-link " href="#">Fotos</a><a class="link-light nav-link " href="#">Películas</a><a class="link-light nav-link " href="#">Pasatiempos</a>
                </nav>
                <div class="d-inline-flex flex-wrap"> <a href="#" class="link-light p-1 pb-1 pe-2 ps-2 pt-1" aria-label="facebook"> <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"> 
                            <path d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5z"/> 
                        </svg> </a> <a href="#" class="link-light p-1 pb-1 pe-2 ps-2 pt-1" aria-label="twitter"> <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"> 
                            <path d="M22.162 5.656a8.384 8.384 0 0 1-2.402.658A4.196 4.196 0 0 0 21.6 4c-.82.488-1.719.83-2.656 1.015a4.182 4.182 0 0 0-7.126 3.814 11.874 11.874 0 0 1-8.62-4.37 4.168 4.168 0 0 0-.566 2.103c0 1.45.738 2.731 1.86 3.481a4.168 4.168 0 0 1-1.894-.523v.052a4.185 4.185 0 0 0 3.355 4.101 4.21 4.21 0 0 1-1.89.072A4.185 4.185 0 0 0 7.97 16.65a8.394 8.394 0 0 1-6.191 1.732 11.83 11.83 0 0 0 6.41 1.88c7.693 0 11.9-6.373 11.9-11.9 0-.18-.005-.362-.013-.54a8.496 8.496 0 0 0 2.087-2.165z"/> 
                        </svg> </a> <a href="#" class="link-light p-1 pb-1 pe-2 ps-2 pt-1" aria-label="instagram"> <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"> 
                            <path d="M12 2c2.717 0 3.056.01 4.122.06 1.065.05 1.79.217 2.428.465.66.254 1.216.598 1.772 1.153a4.908 4.908 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428.047 1.066.06 1.405.06 4.122 0 2.717-.01 3.056-.06 4.122-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 0 1-1.153 1.772 4.915 4.915 0 0 1-1.772 1.153c-.637.247-1.363.415-2.428.465-1.066.047-1.405.06-4.122.06-2.717 0-3.056-.01-4.122-.06-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 0 1-1.772-1.153 4.904 4.904 0 0 1-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.013 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122.05-1.066.217-1.79.465-2.428a4.88 4.88 0 0 1 1.153-1.772A4.897 4.897 0 0 1 5.45 2.525c.638-.248 1.362-.415 2.428-.465C8.944 2.013 9.283 2 12 2zm0 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm6.5-.25a1.25 1.25 0 0 0-2.5 0 1.25 1.25 0 0 0 2.5 0zM12 9a3 3 0 1 1 0 6 3 3 0 0 1 0-6z"/> 
                        </svg> </a> <a href="#" class="link-light p-1 pb-1 pe-2 ps-2 pt-1" aria-label="linkedin"> <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"> 
                            <path d="M6.94 5a2 2 0 1 1-4-.002 2 2 0 0 1 4 .002zM7 8.48H3V21h4V8.48zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-4 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.72-2.91l.04-1.68z"/> 
                        </svg> </a> <a href="#" class="link-light pb-1 pe-2 ps-2 pt-1" aria-label="youtube"> <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"> 
                            <path d="M21.543 6.498C22 8.28 22 12 22 12s0 3.72-.457 5.502c-.254.985-.997 1.76-1.938 2.022C17.896 20 12 20 12 20s-5.893 0-7.605-.476c-.945-.266-1.687-1.04-1.938-2.022C2 15.72 2 12 2 12s0-3.72.457-5.502c.254-.985.997-1.76 1.938-2.022C6.107 4 12 4 12 4s5.896 0 7.605.476c.945.266 1.687 1.04 1.938 2.022zM10 15.5l6-3.5-6-3.5v7z"/> 
                        </svg> </a> 
                </div>                 
            </div>
            <hr>
            <div class="container small text-md-start">
                <div class="align-items-center row">
                    <div class="col-md pb-2 pt-2">
                        <p class="mb-0">&copy; 2002 - 2028. Todos los derechos no reservados - SOF2295</p>
                    </div>
                    <div class="col-md-auto pb-2 pt-2"><a href="#" class="link-light">Políticas de privacidad</a> | <a href="#" class="link-light">Términos de uso</a>
                    </div>
                </div>
            </div>             
        </footer>
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/popper.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
