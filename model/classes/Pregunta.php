<?php
/*
 Una pregunta se define por un código que generará automáticamente el constructor,
 el enunciado de la pregunta (la pregunta en sí), una lista con las 4 respuestas posibles
 y la categoría a la que pertenece.
 */
/**
 * Description of Pregunta
 * @author cesca
 */
class Pregunta {
    //Atributos:
    //$codi -> codi de la resposta que es generà automàticament
    //$proximCodi -> atribut estàtic que indicara quin serà el valor de la pròxima resposta.
    //               L'inicialitzarem a 1.
    //$enunciat -> cadena que correspon a l'enunciat de la pregunta.
    //$respotes -> vector amb les respostes de la pregunta.
    //$categoria -> categoria a la que pertany la pregunta.
    private $codi;
    private $proximCodi;
    private $enunciat;
    private $respotes;
    private $categoria;
        //Constructor
    ////Paràmetres: $enunciat i $categoria
    //Funcionalidad: inicialización de los atributos con los valores puestos por parámetros
    //menos en el caso de:
    // - $codi que se inicializará con el valor del próximo código para luego aumentar
    //   en 1 el valor de proximCodi.
    // - $proximCodi que, como hemos visto antes, aumentará su valor en 1 para generar
    //    los códigos de las preguntas automáticamente.
    // - respostes l'inicialitzarem com un vector buit.
    public function __construct($enunciat, $categoria){
        $this->enunciat = $enunciat;
        $this->categoria = $categoria;
        $this->codi = md5(time()); //un has
        $this->respotes = [];
    } 
    //mètodes accessors,menos los de proximCodi
    public function getCodi(){
        return $this->codi;
        
    }
    public function setCodi($codi){   /*DUDA DE INICIALIZAR $codi segun el enunciado */
        $this->codi = $codi;
    }
    public function getEnunciat(){
        return $this->enunciat;
    }
    public function setEnunciat($enunciat){
        $this->enunciat = $enunciat;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function setCategoria($categoria){
        $this->categoria= $categoria;
    }
    public function getRespotes(){
        return $this->respostes;
    }
    // Función que debe añadir la respuesta pasada por parámetro al final del vector de respostes.
    // El control para añadir sólo 4 respuestas y que solamente 1 sea verdadera, lo haremos mediante
    // la aplicación, en la próxima UF.
    public function afegirResposta(Resposta $resposta) { //añadirRespuesta
                $this->respostes[] =  $resposta;
    }
    // Función que mezclará las 4 respuestas del vector de respuestas.
    public function barrejarRespostes(){
        // shuffle, funcion que cambiar aleatoriamente el orden de un array
        shuffle($this->respostes);
    }
}
