<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Blank Template for Bootstrap</title>
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
                        <li class="nav-item"> <a class="nav-link" href="#">Registro</a> 
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
        <h1 class="text-center">Registre su nombre</h1>
        <form action="cod_registro.php" method="post" role="form" class=" pe-5 ps-5" style="width: 534px; align-items: center; text-align: left; font-family: 'Titillium Web', sans-serif; float: none;"> 
            <div class="mb-3"> 
                <label for="nombre" class="fw-bold text-success"  require>Nombre</label>                 
                <input type="text" class="form-control" id="nombre" name="nombre" require placeholder="Nombre(s)"  aria-describedby="emailHelp"> 
            </div>
            <div class="mb-3"> 
                <label for="exampleInputEmail1" class="fw-bold text-success">Apellido paterno</label>                 
                <input type="text" class="form-control" id="apat" name="apat" placeholder="Apellido paterno" aria-describedby="emailHelp"> 
            </div>
            <div class="mb-3"> 
                <label for="exampleInputEmail1" class="fw-bold text-success">Apellido materno</label>                 
                <input type="text" class="form-control" id="amat" name="amat" require placeholder="Apellido materno" aria-describedby="emailHelp"> 
            </div>                                                    
            <button type="submit" class="btn btn-success">Registrar</button>             
        </form>
        <ul>
            <li><a href="consulta.php" >Consulta</a></li>
        </ul>
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/popper.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
