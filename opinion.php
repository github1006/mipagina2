<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Editar</title>
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
                <a class="navbar-brand" href="#">SOF2295</a> 
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler6" aria-controls="" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> 
                </button>                 
                <div class="collapse navbar-collapse" id="navbarToggler6"> 
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0"> 
                        <li class="nav-item"> <a class="nav-link active" href="index.html">Casa</a> 
                        </li>                         
                        <li class="nav-item"> <a class="nav-link" href="insertar.php">Registro</a> 
                        </li>                         
                        <li class="nav-item"> <a class="nav-link " href="#">Opinion</a> 
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
        <h1 class="text-center">Dejenos su opinión a cerca del diseño de la página web</h1>
        <form role="form" action="cod_opinionRegistro.php" method="post" class="pe-5 ps-5 text-start w-50" id="form-editar" style="margin-left: 276px; padding: 0px; object-position: 1px !important;"> 
            <div class="mb-3"> 
                <label for="nombre" class="fw-bold text-success">Nombre</label>                 
                <input type="text" class="form-control" id="nombre" name="nombre" required placeholder="Nombre" aria-describedby="emailHelp"> 
            </div>
            <div class="mb-3"> 
                <label for="correo" class="fw-bold text-success">Correo electrónico</label>                 
                <input type="email" class="form-control" id="correo" name="correo" required placeholder="Ingrese su correo" aria-describedby="emailHelp"> 
            </div>
            <div class="mb-3"> 
                <label for="opinion" class="form-label">Dejenos su opinión</label>                 
                <textarea class="form-control" id="opinion" name="opinion" rows="3"></textarea> 
            </div>             
            <button type="submit" class="btn btn-success">Actualizar</button>             
        </form>
        <ul>
            <li><a href="pdfOpinion.php">Ver en pdf</a></li>
       </ul>
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/popper.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
