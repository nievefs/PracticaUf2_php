<?php

/* 
 *Script que:
  -Lee el mensaje guardado en la sesión.
  -Lee la opción guardada en la sesión
  Asignar los resultados leídos en las variables correspondientes de la vista.
  Utilice los métodos necesarios de las clases creadas.
 */

$opcio = $sessio->llegirContingutSessio('opcio');
$missatge = $sessio->llegirContingutSessio('mensaje');

