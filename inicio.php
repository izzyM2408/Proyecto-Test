<?php

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
<h1>Bienvenido <?php echo $_SESSION["nombre"]?> </h1>


<br>

<a class="btn btn-success" href="salir">Cerrar Sesion</a>
<br>
<button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">Cambiar Contraseña</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Ingresa Nueva Contraseña" name="editarContrasena" autocomplete="off"/>
                    </div>
                    <br>
                    <div class="form-group">
                        <input value="<?php echo $_SESSION["id"]?>" class="form-control" type="hidden" placeholder="Contraseña" name="valPass"/>
                    </div>
                    <br>
                    <?php
                    $login = new ControladorUsuarios();
                    $login -> ctrCambiarPassword();
                    ?>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Guardar Contraseña</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
