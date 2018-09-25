<?php
include("conexion.php");
require '../modelo/alumno.php';
require '../modelo/apoderado.php';
require '../modelo/colegio.php';
require '../modelo/matricula.php';

$nombres= $_POST['nombres'];
$apellidos= $_POST['apellidos'];
$grado= $_POST['grado'];
$fechNac= $_POST['fechNac'];
$dni= $_POST['dni'];
$coleProc= $_POST['coleProc'];
$direcDomi= $_POST['direcDomi'];
$nomApo= $_POST['nomApo'];
$telfApo= $_POST['telfApo'];
$dniApo= $_POST['dniApo'];

/*ALUMNO*/
$al = new Alumno($nombres,$apellidos,$direcDomi,$dni,$fechNac);
$nom = $al->getNombres();
$ape = $al->getApellidos();
$dn = $al->getDni();
$fecha = $al->getFecha();
$direccion = $al->getDireccion();
$query="INSERT INTO alumno(nombres,apellidos,dni,fechaNac,direccion) VALUES('$nom','$ape','$dn','$fecha','$direccion')";
$resultado01= $conection->query($query);

/*APODERADO*/
$apo = new Apoderado($nomApo, $dniApo, $telfApo);
$nomAp = $apo->getNombres();
$dnApo = $apo->getDni();
$telApo = $apo->getTelefono();
$query01="INSERT INTO apoderado(nombres,dni,telefono) VALUES('$nomAp','$dnApo','$telApo')";
$resultado02= $conection->query($query01);

/*COLEGIO*/
$col = new Colegio($coleProc);
$nomCol = $col->getNombre();
$query6="INSERT INTO colegio(nombre) VALUES('$nomCol')";
$resultado03= $conection->query($query6);

/*OBTENER ID ULTIMA FILA*/
/*Alumno*/
$query1="SELECT MAX(alumnoId) as id FROM alumno";
$resultado1=$conection->query($query1);
$row1=$resultado1->fetch_assoc();
$alumnoId=$row1['id'];
/*Colegio*/
$query2="SELECT MAX(colegioId) as id FROM colegio";
$resultado2=$conection->query($query2);
$row2=$resultado2->fetch_assoc();
$colegioId=$row2['id'];
/*Apoderado*/
$query3="SELECT MAX(apoderadoId) as id FROM apoderado";
$resultado3=$conection->query($query3);
$row3=$resultado3->fetch_assoc();
$apoderadoId=$row3['id'];

/*MATRICULA*/
$matr = new matricula($alumnoId, $colegioId, $grado, $apoderadoId);
$alumId = $matr->getAlumnoId();
$coleId = $matr->getColegioId();
$grad = $matr->getGrado();
$apoId = $matr->getApoderadoId();
$query4="INSERT INTO matricula(alumnoId,colegioId,grado,apoderadoId) VALUES('$alumId','$coleId','$grad','$apoId')";
$resultado= $conection->query($query4);

if ($resultado){
    header("Location: ../vista/menuMatricula.php");
    echo '<p class="alert alert-success agileits" role="alert">Alumno matriculado correctamente!p>';
}else {
    echo 'Inserccion no exitosa';
}
?>
