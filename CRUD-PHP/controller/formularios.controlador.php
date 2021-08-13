<?php
class ControladorFormularios
{
    /* registro */
    static public function ctrRegistro()
    {

        if (isset($_POST['registroNombre'])) {
            $tabla = "usuarios";
            $encriptar = crypt($_POST["registroPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

            $datos = array(
                "nombre" => $_POST['registroNombre'],
                "correo" => $_POST['registroEmail'],
                "password" => $encriptar
            );
            $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);
            return $respuesta;
        }
    }
    static public function ctrSeleccionarRegistros($item, $valor)
    {

        $tabla = "usuarios";
        /* $item =null;
        $valor =null; */
        $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);
        return $respuesta;
    }

    static public function ctrIngreso()
    {
        if (isset($_POST['ingresoEmail'])) {
            $tabla = "usuarios";
            $item = "correo";
            $valor = $_POST['ingresoEmail'];

            $encriptar = crypt($_POST["ingresoPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

            $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);
            if ($respuesta["correo"] == $_POST["ingresoEmail"] && $respuesta["password"] == $_POST["ingresoPassword"]) {
                echo 'ingreso al sistema';
            } else {
                echo 'no se registro';
            }
        }
    }
    static public function ctrActualizarRegistro()
    {
        if (isset($_POST['actualizarNombre'])) {
            if (isset($_POST['actualizarPassword']) != "") {
                $encriptar = crypt($_POST["actualizarPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
            } else {
                $encriptar = $_POST['passwordNormal'];
            }
            $tabla = "usuarios";

            $datos = array(
                "id" => $_POST['idUser'],
                "nombre" => $_POST['actualizarNombre'],
                "correo" => $_POST['actualizarEmail'],
                "password" => $encriptar
            );
            $respuesta = ModeloFormularios::mdlActualizar($tabla, $datos);
            if ($respuesta = "ok") {
            }
            return $respuesta;
        }
    }
}
