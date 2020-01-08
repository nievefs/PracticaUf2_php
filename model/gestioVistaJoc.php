<?php

/* 
*Script que:
 *  -Llegeix l'a pregunta'enunciat de la pregunta guardat a la sessió
 *  -Llegeix les respostes de les preguntes guardades a la sessió
 *  -Llegeix el missatge guardat a la sessió
 *  -Llegeix l'opció guardada a la sessió 
 *  -Assigna els resultats llegits a les variables corresponents de la vista.
 *Utilitzeu els mètodes necessaris de les classes creades.
 */
/* 
*Script que:
   Lee  la pregunta'enunciat de la pregunta guardado en la sesión
  -Lee las respuestas de las preguntas guardadas en la sesión
  -Lee el mensaje guardado en la sesión
  -Lee la opción guardada en la sesión
  Asignar los resultados leídos en las variables correspondientes de la vista.
 Utilice los métodos necesarios de las clases creadas.*/

 include __DIR__ . '/../constantes.php';

 require RUTA . '../controlador/controladorJoc.php';
 
 $opcio = $sessio->llegirContingutSessio('opcio');
 $missatge = $sessio->llegirContingutSessio('mensaje');
 $enunciat = $session->llegirContingutSessio('enunciat');
 

?>