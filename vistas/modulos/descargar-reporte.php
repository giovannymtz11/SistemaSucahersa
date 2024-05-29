<?php

require_once "../../controladores/bajas.controlador.php";
require_once "../../modelos/bajas.modelo.php";
require_once "../../controladores/sucursales.controlador.php";
require_once "../../modelos/sucursales.modelo.php";
require_once "../../controladores/usuarios.controlador.php";
require_once "../../modelos/usuarios.modelo.php";

$reporte = new ControladorBajas();
$reporte -> ctrDescargarReporte();