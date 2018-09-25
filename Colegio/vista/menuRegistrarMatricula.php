<?php

?>
<html>
<head>
	<title>Inscripcion</title>
	<link rel="stylesheet" href="../css/estilos.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
	<?php
	include("../estructura/header.php");
	include("../estructura/nav.php");
        include("../estructura/jsfooter.php");
	?>
    <main role="main" class="col-sm-9 ml-sm-auto col-md-12">
            <h1>Nueva Inscripcion</h1>

            <form action="../controlador/gestionarMatricula.php" method="POST">
                
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label>Nombres</label>
                        <input type="text" class="form-control" id="nombre" name="nombres" required>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="nombre">Colegio Procedencia</label>
                        <input type="text" class="form-control" id="colegioProc" name="coleProc" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label>Apellidos</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                    </div>
                    <div class="form-group col-md-5">
                        <label>Direccion Domicilio</label>
                        <input type="text" class="form-control" id="direcDomi" name="direcDomi" required>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label>Grado</label>
                        <select class="form-control" name="grado" required>
                            <option>Seleccione</option>                                
                                <option>1 Primaria</option>
                                <option>2 Primaria</option>
                                <option>3 Primaria</option>
                                <option>4 Primaria</option>
                                <option>5 Primaria</option>
                                <option>6 Primaria</option>
                                <option>1 Secundaria</option>
                                <option>2 Secundaria</option>
                                <option>3 Secundaria</option>
                                <option>4 Secundaria</option>
                                <option>5 Secundaria</option>
                        </select>
                    </div>
                    <div class="form-group col-md-5">
                        <label>Nombres Apoderado</label>
                        <input type="text" class="form-control" id="nomApo" name="nomApo" required>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label>Fecha Nacimiento</label>
                        <input type="date" class="form-control" id="fechNac" name="fechNac" required>
                    </div>
                    <div class="form-group col-md-5">
                        <label>Telf. Apoderado</label>
                        <input type="text" class="form-control" id="telfApo" name="telfApo" maxlength="9" required>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label>DNI</label>
                        <input type="text" class="form-control" id="dni" name="dni" maxlength="8" required>
                    </div>
                    <div class="form-group col-md-5">
                        <label>DNI Apoderado</label>
                        <input type="text" class="form-control" id="dniApo" name="dniApo" maxlength="8" required>
                    </div>
                </div>
                
                <div class="form-row ">
                    <div class="form-group col-md-10 text-right">
                        <button type="submit" class="btn btn-lg btn-success col-md-2">Registrar</button>
                    </div>
                </div>
            </form>

        </main>
</body>
</html>
