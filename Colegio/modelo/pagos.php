<?php
class pagos {
    private $nroBoleta,$montoPension,$mesPension,$grado,$montoMatricula,$mesActividades,
            $montoMaterial,$descripcionActividades,$montoCopias,$montoActividades,$matriculaId;
    /*CONSTRUCTOR*/
    function __construct($nroBoleta, $montoPension, $mesPension, $grado, $montoMatricula, $mesActividades, $montoMaterial, $descripcionActividades, $montoCopias, $montoActividades, $matriculaId) {
        $this->nroBoleta = $nroBoleta;
        $this->montoPension = $montoPension;
        $this->mesPension = $mesPension;
        $this->grado = $grado;
        $this->montoMatricula = $montoMatricula;
        $this->mesActividades = $mesActividades;
        $this->montoMaterial = $montoMaterial;
        $this->descripcionActividades = $descripcionActividades;
        $this->montoCopias = $montoCopias;
        $this->montoActividades = $montoActividades;
        $this->matriculaId = $matriculaId;
    }
    /* GET-SET */
    function getNroBoleta() {
        return $this->nroBoleta;
    }

    function getMontoPension() {
        return $this->montoPension;
    }

    function getMesPension() {
        return $this->mesPension;
    }

    function getGrado() {
        return $this->grado;
    }

    function getMontoMatricula() {
        return $this->montoMatricula;
    }

    function getMesActividades() {
        return $this->mesActividades;
    }

    function getMontoMaterial() {
        return $this->montoMaterial;
    }

    function getDescripcionActividades() {
        return $this->descripcionActividades;
    }

    function getMontoCopias() {
        return $this->montoCopias;
    }

    function getMontoActividades() {
        return $this->montoActividades;
    }

    function getMatriculaId() {
        return $this->matriculaId;
    }

    function setNroBoleta($nroBoleta) {
        $this->nroBoleta = $nroBoleta;
    }

    function setMontoPension($montoPension) {
        $this->montoPension = $montoPension;
    }

    function setMesPension($mesPension) {
        $this->mesPension = $mesPension;
    }

    function setGrado($grado) {
        $this->grado = $grado;
    }

    function setMontoMatricula($montoMatricula) {
        $this->montoMatricula = $montoMatricula;
    }

    function setMesActividades($mesActividades) {
        $this->mesActividades = $mesActividades;
    }

    function setMontoMaterial($montoMaterial) {
        $this->montoMaterial = $montoMaterial;
    }

    function setDescripcionActividades($descripcionActividades) {
        $this->descripcionActividades = $descripcionActividades;
    }

    function setMontoCopias($montoCopias) {
        $this->montoCopias = $montoCopias;
    }

    function setMontoActividades($montoActividades) {
        $this->montoActividades = $montoActividades;
    }

    function setMatriculaId($matriculaId) {
        $this->matriculaId = $matriculaId;
    }
}
