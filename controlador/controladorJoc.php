<?php
/*
 Este controlador debe generar la pregunta y posibles respuestas que le mostraremos
  al usuario en portal.php.
  Como habéis visto, las preguntas del juego se guardan en el vector de preguntas de la
  clase juego, por lo tanto la pregunta que le mostramos al usuario debemos seleccionarlo
  de este vector. La selección de la pregunta la ha de hacer de manera aleatoria mediante
  el método correspondiente de la clase Juego.
  Como ya sabéis, la pregunta tiene asociadas 4 posibles respuestas, donde una de las 4 es la verdadera.
  Estas son las respuestas que le deberá mostrar al usuario. para que estas
  respuestas no se muestren siempre con el mismo orden, antes de mostrarle las habremos
  de mezclar mediante el método adecuado de la clase Pregunta.
  De momento, como se ha visto, nosotros todavía no sabemos añadir preguntas al juego, por lo tanto,
  para probar que todo funciona bien, debe crear un conjunto de preguntas con sus respuestas
  y añadirlas a las preguntas del juego.
  En este caso este resultado (pregunta más respuestas) corresponde a la opción 3 de portal.php.
  Debe guardar la pregunta, el enunciado de la pregunta, respuestas y opción en la sesión mediante las variables "pregunta", "enunciado"
  "Respuestas" y "opción".
  Utilice los métodos necesarios de las clases creadas.
  Piense que una vez guardados los datos necesarios en la sesión, pasaremos el control
  de la aplicación a controladorPortal.
 */
include __DIR__ . '/../constantes.php';
require RUTA . '../model/classes/Sessio.php';

require RUTA . '../model/classes/Joc.php';
require RUTA . '../model/classes/Pregunta.php';
require RUTA . '../model/classes/Resposta.php';

$joc = new Joc();

$pregunta1 = new Pregunta('Pregunta 1', 'Cinema');
$pregunta1->afegirResposta(new Resposta('Opcion A', False));
$pregunta1->afegirResposta(new Resposta('Opcion B', False));
$pregunta1->afegirResposta(new Resposta('Opcion C', true));
$pregunta1->afegirResposta(new Resposta('Opcion D', False));

$joc->afegirPregunta($pregunta1);

$pregunta2 = new Pregunta('Pregunta 2', 'Música');
$pregunta2->afegirResposta(new Resposta('Opcion A', False));
$pregunta2->afegirResposta(new Resposta('Opcion B', False));
$pregunta2->afegirResposta(new Resposta('Opcion C', true));
$pregunta2->afegirResposta(new Resposta('Opcion D', False));

$joc->afegirPregunta($pregunta2);

$pregunta3 = new Pregunta('Pregunta 3', 'Jocs');
$pregunta3->afegirResposta(new Resposta('Opcion A', False));
$pregunta3->afegirResposta(new Resposta('Opcion B', False));
$pregunta3->afegirResposta(new Resposta('Opcion C', true));
$pregunta3->afegirResposta(new Resposta('Opcion D', False));

$joc->afegirPregunta($pregunta3);

$pregunta4 = new Pregunta('Pregunta 4', 'Informatica');
$pregunta4->afegirResposta(new Resposta('Opcion A', False));
$pregunta4->afegirResposta(new Resposta('Opcion B', False));
$pregunta4->afegirResposta(new Resposta('Opcion C', true));
$pregunta4->afegirResposta(new Resposta('Opcion D', False));

$joc->afegirPregunta($pregunta4);

$pregunta5 = new Pregunta('Pregunta 5', 'Sport');
$pregunta5->afegirResposta(new Resposta('Opcion A', False));
$pregunta5->afegirResposta(new Resposta('Opcion B', False));
$pregunta5->afegirResposta(new Resposta('Opcion C', true));
$pregunta5->afegirResposta(new Resposta('Opcion D', False));

$joc->afegirPregunta($pregunta5);

// En este caso este resultado (pregunta más respuestas) corresponde a la opción 3 de portal.php.
//   Debe guardar la pregunta, el enunciado de la pregunta, respuestas y opción en la sesión mediante las variables "pregunta", "enunciado"
//   "Respuestas" y "opción".

$session = new Sessio();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                       
   if (isset($_POST['enviarCategoria'])){
      $sessio->afegirContingutSessio('opcio', 3);
      $sessio->afegirContingutVectorSessio('enunciat', 'Pregunta1');
      $sessio->afegirContingutVectorSessio('resposta', 'Opcion A');
      $sessio->afegirContingutVectorSessio('resposta', 'Opcion B');
      $sessio->afegirContingutVectorSessio('resposta', 'Opcion C');
      $sessio->afegirContingutVectorSessio('resposta', 'Opcion D');
      
   }   
   
   header('Location: ' . APP_URL . '../controlador/controladorPortal.php');
}

require RUTA . '/vista/portal.php';
?>