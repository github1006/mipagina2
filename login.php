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
            <form action="cod_login.php" method="post" name="formulario_login"  >
                <img class="mb-4" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                <h1 class="h3 mb-3 fw-normal">Logeese por favor</h1>

                <label for="usuario" class="visually-hidden">Usuario</label>
                <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" required="" autofocus="">
                <label for="pasword1" class="visually-hidden">Contraseña</label>
                <input type="password" id="inputPassword" name="password1" class="form-control" placeholder="Password" required="">
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Recuerdame
                    </label>
                    <li class="nav-item"> <a class="nav-link " href="login_registro.php">Registrarse</a> </li>
                            
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Ingresar</button>
                <p class="mt-5 mb-3 text-muted">© 2017-2021</p>
            </form>
        </main>
        <script src="assets/js/popper.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
