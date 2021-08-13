<?php
require_once "controller/plantilla.controlador.php";

require_once "controller/formularios.controlador.php";
require_once "model/formularios.modelo.php";


require_once "model/conexion.php";
// $conexion=conexion::conectar();

$plantilla=new ControladorPlantillas();
$plantilla-> ctrTraerPlantilla();