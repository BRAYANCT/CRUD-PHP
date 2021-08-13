<?php

require_once "conexion.php";

class ModeloFormularios
{

    static public function mdlRegistro($tabla, $datos)
    {
        $stmt = conexion::conectar()->prepare("INSERT INTO $tabla(nombre,correo,password) VALUE(:nombre,:correo,:password) ");

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "ok";
        } else {
            print(conexion::conectar()->errorInfo());
        }
        $stmt->close();
        $stmt = null;
    }
    static public function mdlSeleccionarRegistros($tabla, $item,$valor)
    {
        if ($item==null && $valor==null) {
        
            $stmt = conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha,'%d/%m/%Y')AS fecha FROM $tabla ORDER BY id DESC");
            $stmt->execute();
            return $stmt->fetchAll();
         

        }else{

            $stmt = conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha,'%d/%m/%Y')AS fecha FROM $tabla WHERE $item=:$item ORDER BY id DESC");
          
            $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

            $stmt->execute();
            return $stmt->fetch();
            
        }
        $stmt->close();
        $stmt = null;
    
    }
    static public function mdlActualizar($tabla, $datos)
    {
        $stmt = conexion::conectar()->prepare("UPDATE  $tabla SET nombre=:nombre,correo=:correo,password=:password WHERE id=:id ");

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "ok";
        } else {
            print(conexion::conectar()->errorInfo());
        }
        $stmt->close();
        $stmt = null;
    }
}
