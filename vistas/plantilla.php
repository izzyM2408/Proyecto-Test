<?php
session_start();

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
<?php
if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok" ){

    echo '<div class="d-flex flex-column flex-root">
        <div class="d-flex flex-row flex-column-fluid page">';



    echo '        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">';

    if (isset($_GET["ruta"])){
        if ($_GET["ruta"] == "inicio"||
            $_GET["ruta"] == "pass"

        )

        {

            include $_GET["ruta"].".php";


        }
        elseif ($_GET["ruta"] == "salir"){
            include "".$_GET["ruta"].".php";
        }

        else{
            include 'modulos/error.php';
        }
    }else{
        include 'inicio.php';
    }





    echo '<!--end::Footer--></div>';
    echo '    <!--end::Wrapper--></div>';
    echo '    <!--end::Page--></div>';
}else{
    include 'modulos/login.php';
}
?>

</body>
</html>
