<?php
// crar coneccion con la db


class conexion
{

    public function conectar()
    {
        $ruta = "localhost";
        $name = "Crud";
        $user = "root";
        $password = "";
        
        $link = new PDO(
            "mysql:host=$ruta;dbname=$name",
            $user,
            $password
        );

        $link->exec("set names utf8");

        return $link;
    }
}
