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
        $this->preguntes = [];
    }
    
    //mètodes accessrs
    public function getPreguntes(){
        return $this->preguntes;
    }

    public function setPreguntes($preguntes){
        $this->preguntes = $preguntes;
    }
        
    //Función que debe añadir la pregunta pasada por parámetro al final del vector de preguntes
    public function afegirPregunta(Pregunta $pregunta) {
        //array_push funcion para los array que me permite añadir datos a un objeto
        array_push( $this->preguntes = $pregunta);
    }
    
    //Función que seleccionará aleatoriamente una pregunta de las preguntas y la devolverá. 
    public function seleccionarPregunta(){
        //con array_rand escojo aleatoriamente el indice del vector
        $indice = array_rand($this->preguntes);
        return $this->preguntes[$indice];
    }

}
