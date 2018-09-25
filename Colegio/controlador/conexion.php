<?php
$conection = mysqli_connect('localhost','root','','colegio');

class Conexion {

    public $host = "localhost";
    public $user = "root";
    public $pass = "";
    public $db = "colegio";

    function __construct() {
        
    }

    public function getConexion() {
        try {
            $conexion = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db . ";", $this->user, $this->pass, array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
            ));
        } catch (Exception $ex) {
            throw $ex;
        }
        return $conexion;
    }
    
}

?>
