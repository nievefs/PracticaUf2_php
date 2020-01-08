<?php
/*
  Este controlador debe controlar qué resultado le mostraremos al usuario según
  de donde recibe el control, es decir, si lo recibe desde juego, desde una respuesta seleccionada,
  desde la opción de salir o bien desde el inicio.
  En el caso de salir, al usuario se le debe volver a mostrar la página de inicio y cierre.
  En los demás casos el controlador debe llamar al script correspondiente de modelo
  para gestionar la vista para luego mostrarle de nuevo el portal con la vista gestionada.
 */
  
include __DIR__ . '/../constantes.php';

// define('RUTA', __DIR__);
// define('APP_URL', 'http://localhost/PHP_DAW2/PracticaUF2_PHP_copia');

require RUTA . '../model/classes/Sessio.php';

$sessio = new Sessio();

// controlar el post
require RUTA . '../model/gestioVistaPortal.php';
// require RUTA . '../model/gestioVistaJoc.php';

// crear funciones
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
           
  if (isset($_POST['sortir'])){
    $sessio->tancarSessio();
  }
  header('Location: ' . APP_URL . '/index.php');
}

require RUTA . '/vista/portal.php';
