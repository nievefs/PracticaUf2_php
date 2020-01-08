<?php
/* 
 * Inici de l'aplicació que ens condueix directament al controlador d'inci.
 */
// include __DIR__ . '/constantes.php';
define('RUTA', __DIR__);
define('APP_URL', 'http://localhost/PHP_DAW2/PracticaUF2_PHP_copia');

include RUTA . "/controlador/controladorInici.php";


//$session = new Sessio();
// php lo que hace es controlar si la sesion existe (coleccion de datos que guardo para la aplicación)

?>
