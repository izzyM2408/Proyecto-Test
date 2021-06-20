<?php
class Conectar{


    /**
     * Conectar constructor.
     */
    public function __construct()
    {
    }

    static public function conectarUsuario(){

        $usuario = "root";
        $nombreBaseDeDatos = "testphp";
        $rutaServidor = "localhost";

        $link = new PDO("mysql:host=$rutaServidor; dbname=$nombreBaseDeDatos", $usuario, "");

        $link->exec("set names utf8");

        return $link;

    }

}

