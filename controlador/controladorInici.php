<?php
// include RUTA . '/vista/inici.php';

/*
  Este controlador debe controlar si el usuario ha seleccionado jugar o añadir
  pregunta.
  Si ha seleccionado jugar, se guardará la opción 1 y el mensaje "Estás jugando",
  en la sesión mediante las variables "opción" y "mensaje".
  Si ha seleccionado añadir pregunta, se guardará la opción 2 y el mensaje "¿Estás añadiendo una pregunta",
  en la sesión mediante las variables "opción" y "mensaje".
  Si accedemos por primera vez en la aplicación, mostraremos la página inici.php
  Utilice los métodos necesarios de las clases creadas.
  Piense que una vez guardados los datos necesarios en la sesión, pasaremos el control
  de la aplicación a controladorPortal.
 */

// include __DIR__ . '/../constantes.php'; 


require RUTA . '/model/classes/Sessio.php';

$sessio = new Sessio();

if ($sessio->llegirContingutSessio('opcio') !== null) {
    header('Location: ' . APP_URL . '/controlador/controladorPortal.php');
  
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                       
    if (isset($_POST['jugar'])){
       $sessio->afegirContingutSessio('opcio', 1);
       $sessio->afegirContingutSessio('mensaje', 'Estas jugando');
    }

    if (isset($_POST['afegirPregunta'])){
        $sessio->afegirContingutSessio('opcio', 2);
        $sessio->afegirContingutSessio('mensaje', 'Estas añaniendiendo una pregunta');

    }
    header('Location: ' . APP_URL . '/controlador/controladorPortal.php');
}

include RUTA . '/vista/inici.php';


