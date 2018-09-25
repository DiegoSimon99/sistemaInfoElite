<html>
<head>
    <title>Matricula</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="../js/datatables.js"></script>
</head>
<body>
    <?php
	include("../estructura/header.php");
	include("../estructura/nav.php");
        include("../estructura/jsfooter.php");
        include("../controlador/conexion.php");
    ?>
    <main role="main" class="col-sm-9 ml-sm-auto col-md-12 pt-3">
        <div class="row">
            <div class="col-md-12 text-right">
                <a href="menuRegistrarPagos.php"><button type="button" class="btn btn-success">Nuevo Registro</button></a>
            </div>
        </div>
        <h1>Pagos</h1>
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Nº Boleta</th>
                    <th>Apellidos y Nombres</th>
                    <th>Grado</th>
                    <th>Telf. Apoderado</th>
                    <th>Pago Matricula</th>                    
                    <th>Mes Pension</th>
                    <th>Pago Pension</th>
                    <th>Pago Copias</th>
                    <th>Pago Mat. Didactico</th>
                    <th>Mes Act. Civicas</th>
                    <th>Pago Act. Civicas</th>
                    <th>Descripcion</th>
                    
                    
                </tr>
                <?php
                    $query = "SELECT p.pagosId,p.nroBoleta,concat_ws(', ',a.apellidos,a.nombres) nombres,m.grado,ap.telefono,p.montoMatricula,p.mesPension,p.montoPension,p.montoCopias,p.montoMaterial,p.mesActividades,p.montoActividades,p.descripcionActividades FROM pagos p inner join matricula m on p.matriculaId=m.matriculaId inner join alumno a on m.alumnoId=a.alumnoId inner join apoderado ap on m.apoderadoId=ap.apoderadoId";
                    $resultado=$conection->query($query);
                    while($fila = mysqli_fetch_array($resultado)){
                        echo "<tr>";
                        echo "<th>$fila[pagosId]";
                        echo "<th>$fila[nroBoleta]";
                        echo "<th>$fila[nombres]";
                        echo "<th>$fila[grado]";
                        echo "<th>$fila[telefono]";
                        echo "<th>$fila[montoMatricula]";
                        echo "<th>$fila[mesPension]";
                        echo "<th>$fila[montoPension]";
                        echo "<th>$fila[montoCopias]";
                        echo "<th>$fila[montoMaterial]";
                        echo "<th>$fila[mesActividades]";
                        echo "<th>$fila[montoActividades]";
                        echo "<th>$fila[descripcionActividades]";
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>
    </main>        
</body>
</html>
