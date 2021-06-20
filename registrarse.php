<?php
require_once 'controller/controlador.usuario.php';


require_once 'model/modelo.usuario.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="card" style="width: 18rem; margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added *">
    <div class="card-body">
        <!--begin::Login Sign in form-->
        <div class="login-signin">
            <div class="mb-20">
                <h3 class="opacity-40 font-weight-normal">Registro</h3>

            </div>
            <form method="post">
                <div class="form-group">
                    <input id="nuevoUsuario" class="form-control " type="text" placeholder="Nombre" name="nuevoNombre" autocomplete="off"/>
                </div>
                <br>
                <div class="form-group">
                    <input class="form-control " type="email" placeholder="Correo" name="nuevoUsuario" autocomplete="off"/>
                </div>
                <br>
                <div class="form-group">
                    <input class="form-control " type="text" placeholder="Contraseña" name="nuevoPassword"/>
                </div>
                <br>

                <div class="form-group text-center mt-10">
                    <!--<button type="submit" id="" class="btn btn-pill btn-primary opacity-90 px-15 py-3">Ingresar</button>-->
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
                </div>
                <?php
                $login = new ControladorUsuarios();
                $login -> ctrAltaUsuario();
                ?>

            </form>
            <a href="index.php">Iniciar Sesion</a>

        </div>
        <!--end::Login Sign in form-->

    </div>
</div>

</body>
</html>
