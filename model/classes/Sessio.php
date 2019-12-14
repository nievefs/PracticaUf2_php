<?php

class Sessio {

//Constructor
////Paràmaetres: ninguno
//Funcionalitat:inicio de sessión session_start()

    public function __construct()  {
        session_start();        
    }

//Funció que destrueix una sessió o sessions creades en un script
    public function destruirSessio() {
        session_destroy();
    }

// Función que añada un contenido a un índice determinado de $ _SESSION.
// Tanto el índice como el contenido se pasarán como parámetros.
    public function afegirContingutSessio($index, $contingut) {
         return $_SESSION[$index]=$contingut;
    }

// Función que añada un contenido al final de un vector que es el contenido de un
// los índices de $ _SESSION. Tanto el índice como el contenido se pasarán como
// parámetros.
    public function afegirContingutVectorSessio($index, $contingut) {
        $index =count($_SESSION);
        return $_SESSION[$index]=$contingut;
   }

//Función que devuelve el contenido de $ _SESSION por el índice pasado como parámetro.
// Si no hay mensaje guardado devuelve null.
    public function llegirContingutSessio($index) {
       return $_SESSION[$index];
    }

//Función para destruir una session , vaciar la variable $_SESSION
    public function tancarSessio() {
        $_SESSION=array();
        $this->destruirSessio();
	}
    
}
?>
