<?php
class ControladorUsuarios{

    /*=============================================
    INGRESO DE USUARIO
    =============================================*/

    public function ctrIngresoUsuario(){

        if(isset($_POST["ingUsuario"])){

            if($_POST["ingUsuario"] &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])){

                $tabla = "usuarios";

                $item = "email";
                $valor = $_POST["ingUsuario"];

                $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);

                if (is_array($respuesta)) {

                    if (trim($respuesta["email"]) == $_POST["ingUsuario"] && trim($respuesta["pass"]) == $_POST["ingPassword"]) {
                        $_SESSION["iniciarSesion"] = "ok";
                        $_SESSION["email"] = $respuesta["email"];
                        $_SESSION["nombre"] = $respuesta["nombre"];
                        $_SESSION["id"] = $respuesta["id"];
                        $_SESSION["pass"] = $respuesta["pass"];

                        echo '<script>

						window.location = "inicio";

					</script>';

                    } else {
                        echo '<br><div class="alert alert-danger">Error al ingresar, la contraseña o usuario estan incorrectos</div>';
                    }
                } else {
                    echo '<div class="alert alert-danger">El correo no existe favor de registrarse</div>';
                }

            }

        }

    }

    public function ctrAltaUsuario(){
        if (isset($_POST["nuevoUsuario"])){

            if ($_POST['nuevoUsuario']){
                $tabla = "usuarios";

                $item = "email";
                $valor = $_POST["nuevoUsuario"];

                $resp = ModeloUsuarios::mdlMostrarUsuario($tabla, $item, $valor);
                if (is_array($resp)){
                    echo '<br><div class="alert alert-danger">Este Correo Ya existe</div>';
                }else{
                    if ($_POST['nuevoUsuario'] && $_POST['nuevoNombre'] && preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoPassword"])){

                        $tabla = 'usuarios';
                        $datos = array("nombre" => $_POST["nuevoNombre"],
                            "email"=>$_POST["nuevoUsuario"],
                            "pass"=>$_POST["nuevoPassword"]);

                        $respuesta = ModeloUsuarios::mdlIngresarUsuarios($tabla,$datos);
                        if ($respuesta == "ok"){
                            echo '<br><div class="alert alert-success">El usuario se guardo correctamente</div>';
                        }


                    }else{
                        echo '<br><div class="alert alert-danger">El usuario no puede ir vacio</div>';
                    }
                }

            }


        }
    }

    public function ctrCambiarPassword(){
        if (isset($_POST["editarContrasena"])){
            if ($_POST["editarContrasena"] && $_POST["valPass"]){

                $tabla = "usuarios";
                $id = $_POST["valPass"];

                $datos = array("pass"=>$_POST["editarContrasena"]);

                $resp = ModeloUsuarios::mdlCambiarPassword($tabla, $datos, $id);
                if ($resp == "ok"){
                    echo '<br><div class="alert alert-success">La contraseña se modifico correctamente</div>';
                }else{
                    echo '<br><div class="alert alert-danger">La contraseña no se modifico</div>';
                }

            }


        }
    }

}
