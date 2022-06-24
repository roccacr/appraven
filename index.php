<?php

/*=============================================
Mostrar errores
=============================================*/

ini_set('display_errors', 1);
/* Establecer el valor de la directiva de configuración log_errors. */
ini_set("log_errors", 1);
/* Establecer el archivo de registro de errores en la ruta especificada. */
ini_set("error_log",  "D:/xampp/htdocs/apirest-dinamica/php_error_log");

/*=============================================
CORS
=============================================*/

/* Un encabezado CORS. */
/* Un encabezado CORS. Permite que el navegador realice solicitudes de origen cruzado. */
header('Access-Control-Allow-Origin: *');
/* Este es un encabezado CORS. Permite que el navegador realice solicitudes de origen cruzado. */
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
/* Este es un encabezado CORS. Permite que el navegador realice solicitudes de origen cruzado. */
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
/* Establecer el tipo de contenido en JSON y el juego de caracteres en UTF-8. */
header('content-type: application/json; charset=utf-8');

/*=============================================
Requerimientos
=============================================*/

require_once "controllers/routes.controller.php";

$index = new RoutesController();
$index -> index();