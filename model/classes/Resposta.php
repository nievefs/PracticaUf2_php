<?php
/*
 * Una respuesta se define por su contenido si es verdadera o falsa
 */

/**
 * Description of Categoria
  * @author cesca
 */

class Resposta {
    private $contingut;
    private $esVerdadera;
    
    //Constructor
    //Pàrametres: $contingut i $esVerdader
    //Funcionalidad: inicialización de los atributos con los valores pasados ​​por parámetro
    public function __construct($contingut, $esVerdadera){
           $this->contingut = $contingut;
           $this->esVerdadera = $esVerdadera;
    } 
    
    //mètodes accessors


}
