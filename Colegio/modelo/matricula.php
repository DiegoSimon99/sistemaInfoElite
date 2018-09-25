<?php
class matricula {
    private $alumnoId,$colegioId,$grado,$apoderadoId;
    /*CONSTRUCTOR*/
    function __construct($alumnoId, $colegioId, $grado, $apoderadoId) {
        $this->alumnoId = $alumnoId;
        $this->colegioId = $colegioId;
        $this->grado = $grado;
        $this->apoderadoId = $apoderadoId;
    }
    /* GET-SET */
    function getAlumnoId() {
        return $this->alumnoId;
    }

    function getColegioId() {
        return $this->colegioId;
    }

    function getGrado() {
        return $this->grado;
    }

    function getApoderadoId() {
        return $this->apoderadoId;
    }

    function setAlumnoId($alumnoId) {
        $this->alumnoId = $alumnoId;
    }

    function setColegioId($colegioId) {
        $this->colegioId = $colegioId;
    }

    function setGrado($grado) {
        $this->grado = $grado;
    }

    function setApoderadoId($apoderadoId) {
        $this->apoderadoId = $apoderadoId;
    }
}
