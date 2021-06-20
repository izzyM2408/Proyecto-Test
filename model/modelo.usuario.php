<?php

require_once "server/Server.php";

class   ModeloUsuarios{

    /*=============================================
    MOSTRAR USUARIOS
    =============================================*/

    static public function mdlMostrarUsuarios($tabla, $item, $valor){

        $stmt = Conectar::conectarUsuario()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

        $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

        $stmt -> execute();

        return $stmt -> fetch();



    }
    static public function mdlMostrarUsuario($tabla, $item, $valor){

        $stmt = Conectar::conectarUsuario()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

        $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

        $stmt -> execute();

        return $stmt -> fetch();



    }


    static public function mdlIngresarUsuarios($tabla, $datos){

        $stmt = Conectar::conectarUsuario()->prepare("INSERT INTO $tabla (nombre, email, pass) values (:nombre, :email, :pass)");

        $stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt -> bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt -> bindParam(":pass", $datos["pass"], PDO::PARAM_STR);

        if ($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }

        $stmt->close();
        $stmt = null;

    }

    static public function mdlCambiarPassword($tabla, $datos, $id){

        $stmt = Conectar::conectarUsuario()->prepare("UPDATE $tabla SET pass = :pass  WHERE id = $id");

        $stmt -> bindParam(":pass", $datos["pass"], PDO::PARAM_STR);

        if ($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }

        $stmt->close();
        $stmt = null;

    }
}
