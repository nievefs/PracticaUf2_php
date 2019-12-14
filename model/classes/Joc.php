<?php
// Un juego se define por un vector de preguntas
/**
 * Description of Joc
 * @author cesca
 */

class Joc {
    //Atribut:
    // $preguntes -> vector de preguntes
    private $preguntes;
    
    //Constructor
    //Paràmetres: ninguno
    //Funcionalidad: inicializacion a vacio el vector de preguntas
    public function __construct(){
        $this->preguntas = [];
    }
    
    //mètodes accessrs
    
    //Función que debe añadir la pregunta pasada por parámetro al final del vector de preguntes
    public function afegirPregunta(Pregunta $pregunta) {
        
    }
    
    //Función que seleccionará aleatoriamente una pregunta de las preguntas y la devolverá. 
    public function seleccionarPregunta(){
       
    }

}
