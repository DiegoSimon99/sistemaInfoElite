<!DOCTYPE html>
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
                <a href="menuRegistrarMatricula.php"><button type="button" class="btn btn-success">Nuevo Registro</button></a>
            </div>
        </div>
        <h1>Inscripciones</h1>
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Apellidos y Nombres</th>
                    <th>Grado</th>
                    <th>Fecha Nacimiento</th>
                    <th>DNI</th>
                    <th>Colegio Procedencia</th>
                    <th>Dirección Domicilio</th>
                    <th>Nombres Apoderado</th>
                    <th>Telf. Apoderado</th>
                    <th>DNI Apoderado</th>
                </tr>
                <?php
                    $query = "SELECT  m.matriculaId,concat_ws(', ',a.apellidos,a.nombres) nombres,m.grado,a.fechaNac,a.dni,c.nombre colegio,a.direccion,ap.nombres nombreApo,ap.telefono,ap.dni dniApo FROM matricula m inner join alumno a on m.alumnoId=a.alumnoId inner join colegio c on m.colegioId=c.colegioId inner join apoderado ap on m.apoderadoId=ap.apoderadoId";
                    $resultado=$conection->query($query);
                    while($fila = mysqli_fetch_array($resultado)){
                        echo "<tr>";
                        echo "<th>$fila[matriculaId]";
                        echo "<th>$fila[nombres]";
                        echo "<th>$fila[grado]";
                        echo "<th>$fila[fechaNac]";
                        echo "<th>$fila[dni]";
                        echo "<th>$fila[colegio]";
                        echo "<th>$fila[direccion]";
                        echo "<th>$fila[nombreApo]";
                        echo "<th>$fila[telefono]";
                        echo "<th>$fila[dniApo]";
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>
    </main>        
</body>
</html>