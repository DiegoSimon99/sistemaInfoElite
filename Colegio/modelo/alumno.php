<?php
class Alumno {
    private $nombres,$apellidos,$direccion,$dni,$fecha;
    /*CONSTRUCTOR*/
    function __construct($nombres, $apellidos, $direccion, $dni, $fecha) {
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->direccion = $direccion;
        $this->dni = $dni;
        $this->fecha = $fecha;
    }
    /* GET-SET */
    function getNombres() {
        return $this->nombres;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getDni() {
        return $this->dni;
    }

    function getFecha() {
        return $this->fecha;
    }

    function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setDni($dni) {
        $this->dni = $dni;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }
}
?>