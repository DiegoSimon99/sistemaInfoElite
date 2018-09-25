<?php
include("conexion.php");
require '../modelo/pagos.php';

        $boleta= $_POST['boleta'];
        $grado= $_POST['grado'];
        $pension= $_POST['pension'];
        $monto1= $_POST['monto1'];
        $condPago= $_POST['condPago'];
        $actCivicas= $_POST['actCivicas'];
        $matDidactico= $_POST['matDidactico'];
        $descri= $_POST['descri'];
        $copias= $_POST['copias'];
        $monto2= $_POST['monto2'];
        $nombres=$_POST['nombres'];
        $apellidos=$_POST['apellidos'];        
        
        
        if(!$pension){
            echo $pension="-";
        }
        if(!$monto1){
            echo $monto1=0;
        }
        if(!$condPago){
            echo $condPago=0;
        }
        if(!$actCivicas){
            echo $actCivicas="-";
        }
        if(!$matDidactico){
            echo $matDidactico=0;
        }
        if(!$descri){
            echo $descri="-";
        }
        if(!$copias){
            echo $copias=0;
        }
        if(!$monto2){
            echo $monto2=0;
        }
        
        /*MATRICULA*/        
        $query3="SELECT m.matriculaId FROM alumno a inner join matricula m on a.alumnoId=m.alumnoId WHERE a.nombres='$nombres' and a.apellidos='$apellidos'";
        $resultado4=$conection->query($query3);
        $row=$resultado4->fetch_assoc();
        $matriculaId=$row['matriculaId'];
        
/*PAGOS*/
$pag = new pagos($boleta,$monto1,$pension,$grado,$condPago,$actCivicas,$matDidactico,$descri,$copias,$monto2,$matriculaId);
$bolet = $pag->getNroBoleta();
$mont1 = $pag->getMontoPension();
$pensio = $pag->getMesPension();
$grad = $pag->getGrado();
$condPag = $pag->getMontoMatricula();
$actCivica = $pag->getMesActividades();
$matDidacti = $pag->getMontoMaterial();
$desc = $pag->getDescripcionActividades();
$cop = $pag->getMontoCopias();
$mont2 = $pag->getMontoActividades();
$matricId = $pag->getMatriculaId();
$query7="INSERT INTO pagos(nroBoleta,montoPension,mesPension,grado,montoMatricula,mesActividades,montoMaterial,descripcionActividades,montoCopias,montoActividades,matriculaId) VALUES('$bolet',$mont1,'$pensio','$grad',$condPag,'$actCivica',$matDidacti,'$desc',$cop,$mont2,$matricId)";
$resultado12= $conection->query($query7);

if ($resultado12){
    echo '<p class="alert alert-success agileits" role="alert">Pagos Realizado!p>';
    header("Location: ../vista/menuPagos.php");
    
}else {
    echo 'Inserccion no exitosa';
}
?>
