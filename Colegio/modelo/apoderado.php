<?php
class Apoderado{
    private $nombres,$dni,$telefono;
    /*CONSTRUCTOR*/
    function __construct($nombres, $dni, $telefono) {
        $this->nombres = $nombres;
        $this->dni = $dni;
        $this->telefono = $telefono;
    }
    /* GET-SET */
    function getNombres() {
        return $this->nombres;
    }

    function getDni() {
        return $this->dni;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    function setDni($dni) {
        $this->dni = $dni;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }
}
