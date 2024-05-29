<?php

/*=============================================
Mostrar errores
=============================================*/
ini_set('display_errors', 1); // coloca 0 si no deseas que aparezcan los errores también en el navegador
ini_set("log_errors", 1); // con esta línea estamos diciendo que queremos crear un nuevo archivo de errores
ini_set("error_log",  "D:/xampp/htdocs/errores/php_error_log"); // con esta línea le decimos a PHP donde queremos que se guarde ese archivo, lo recomendado es que sea al lado del archivo index.php

require_once "controladores/bajas.controlador.php";
require_once "controladores/categorias.controlador.php";
require_once "controladores/plantilla.controlador.php";
require_once "controladores/productos.controlador.php";
require_once "controladores/productos2.controlador.php";
require_once "controladores/proveedores.controlador.php";
require_once "controladores/reportes.controlador.php";
require_once "controladores/sucursales.controlador.php";
require_once "controladores/usuarios.controlador.php";

require_once "modelos/bajas.modelo.php";
require_once "modelos/categorias.modelo.php";
require_once "modelos/productos.modelo.php";
require_once "modelos/productos2.modelo.php";
require_once "modelos/proveedores.modelo.php";
require_once "modelos/reportes.modelo.php";
require_once "modelos/sucursales.modelo.php";
require_once "modelos/usuarios.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();