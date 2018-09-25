<?php

class Colegio {
    private $nombre;
    /*CONSTRUCTOR*/ 
    function __construct($nombre) {
        $this->nombre = $nombre;
    }
    /* GET-SET */
    function getNombre() {
        return $this->nombre;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }
}
