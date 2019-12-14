<?php
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

 Class Controladorinici{
       private $opcio;
       private $missatge;

       public  function __construct($opcio, $missatge){
        $this->opcio = $opcio;
        $this->missatge = $missatge;
	}
	

 public function jugar(){
     
 }

 public function afegir_prgunta($opcio, $missatge){
    $missatge = 'Estas afegint una pregunta'; //Estas escogiendo una Pregunta
    $this->opcio = $opcio;
    $this->missatge = $missatge;
 }


?>
