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
?>