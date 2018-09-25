<?php
include 'conexion.php';
class validarLogin{
    public function respuesta($usu_usuario, $pass) {
	$rpt = 2;
	try {
            $arreglo = null;
	    $conexion = new Conexion();
	    $cn = $conexion->getConexion();
	    $sql = "SELECT * FROM usuarios WHERE usuario=:usu_usuario  AND clave=:pass";
	    $statement = $cn->prepare($sql);
	    $statement->bindParam(":usu_usuario", $usu_usuario);
	    $statement->bindParam(":pass", $pass);
	    if($statement->execute()) {
	        while ($resultado = $statement->fetch()) {
	            $arreglo[] = $resultado;
	        }
	        if (count($arreglo) > 0) {
	            $_SESSION['usuario'] = $arreglo;
	            $rpt = 1; //busqueda exitosa  
	        } else {
	            $rpt = 2; //no hay registro
	        }
	    }
	    $cn = null;
	} catch (Exception $ex) {
	    echo $ex->getMessage();
	}

	return $rpt;
    }
}
$usuario= $_POST['user'];
$contraseña= $_POST['pass'];

$validar = new validarLogin();
$respuesta = $validar->respuesta($usuario,$contraseña);
echo $respuesta;
?>
