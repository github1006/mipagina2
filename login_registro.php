<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <title>Signin Template · Bootstrap v5.0</title>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="bootstrap/css/login.css" rel="stylesheet">
    </head>
    <body class="text-center">
        <main class="form-signin">
            <form action="cod_loginRegistro.php" method="post"  >
                <img class="mb-4" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                <h1 class="h3 mb-3 fw-normal">Registrese por favor</h1>
                <label for="inputEmail" >Usuario o email</label>
                <input type="text" name="usuario" id="inputEmail" class="form-control" placeholder="Su usuario" required="" autofocus="">

                <label for="inputPassword" >Contraseña</label>
                <input type="password" name="password1" id="" class="form-control" placeholder="Password" required="">

                <label for="inputPassword" >Repita contraseña</label>
                <input type="password" name="password2" id="" class="form-control" placeholder="Repita contraseña" required="">

                <label for="inputPassword">Tipo de usuario </label>
                <input type="text" name="tipo_usuario" id="" class="form-control" placeholder="Tipo de usuario" required="">
                <p> s=supe, a=admin, u=usuario</p>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Registrar</button>
                <li > <a class="nav-link " href="login.php">Ya estoy regisrado, ingresar</a></li> 
                            
                <p class="mt-5 mb-3 text-muted">© 2017-2021</p>
            </form>
        </main>
        <script src="assets/js/popper.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
