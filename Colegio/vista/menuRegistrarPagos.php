<?php
    include('../controlador/conexion.php');
    $nombres="";
    $apellidos="";
    $telefono="";
    $grado="";
    if(isset($_POST['btn1'])){
        $buscar= $_POST['buscar'];
        $query1="SELECT a.nombres,a.apellidos,m.grado,ap.telefono FROM alumno a inner join matricula m on a.alumnoId=m.alumnoId inner join apoderado ap on m.apoderadoId=ap.apoderadoId WHERE concat_ws(' ',a.apellidos,a.nombres)='$buscar'";
        $resultado1=$conection->query($query1);
        $row2=$resultado1->fetch_assoc();
        $nombres=$row2['nombres'];
        $apellidos=$row2['apellidos'];
        $telefono=$row2['telefono'];
        $grado=$row2['grado'];
    }
    ?> 
<html>
<head>
	<title>Registrar Pagos</title>
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
    <main role="main" class="col-sm-9 ml-sm-auto col-md-12 pt-3">
        
        <h1>Pagos</h1>
        <form action="menuRegistrarPagos.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-1"></div>
                <div class="form-group col-md-2">
                    <label><br></label>
                    <input type="txt" class="form-control" name="buscar" placeholder="Apellidos y Nombres" value="<?php echo $apellidos.$nombres; ?>">
                </div>
                <div class="form-group col-md-1"></div>
                <div class="form-group col-md-1">
                    <label><br></label>
                    <button type="submit" class="form-control btn btn-success" name="btn1">Buscar</button>
                </div>
                <div class="form-group col-md-1"></div>
                <div class="form-group col-md-2">
                        <label>Telf. Apoderado</label>
                        <input type="text" class="form-control" name="telfApo" value="<?php echo $telefono; ?>" disabled>
                </div>
        </form>
        <form action="../controlador/gestionarPagos.php" method="post">
                <div class="form-group col-md-12">
                    <label>Grado</label>
                    <input type="text" class="form-control" name="grado" maxlength="20" required value="<?php echo $grado; ?>">
                </div>
            </div>
        
            <div class="form-row">
                <div class="form-group col-md-1"></div>
                <div class="form-group col-md-2">
                    <label>Apellidos</label>
                    <input type="text" class="form-control" name="apellidos" value="<?php echo $apellidos; ?>">
                </div>
                <div class="form-group col-md-2">
                    <label>Nombres</label>
                    <input type="text" class="form-control" name="nombres" value="<?php echo $nombres; ?>">
                </div>
                <div class="form-group col-md-1"></div>
                <div class="form-group col-md-2">
                    <label>N° Boleta</label>
                    <input type="text" class="form-control" name="boleta" maxlength="12" required>
                </div>
            </div>
            
            <div class="form-row">                
                <div class="form-group col-md-1"></div>
                <div class="form-group col-md-4">
                    <label>Pension</label>
                    <select class="form-control" name="pension">
                        <option value="">Seleccione</option>
                            <option>Marzo</option>
                            <option>Abril</option>
                            <option>Mayo</option>
                            <option>Junio</option>
                            <option>Julio</option>
                            <option>Agosto</option>
                            <option>Septiembre</option>
                            <option>Octubre</option>
                            <option>Noviembre</option>
                            <option>Diciembre</option>
                    </select>
                </div>
                <div class="form-group col-md-1"></div>
                <div class="form-group col-md-4">
                    <label>Monto Pension</label>
                    <input type="text" class="form-control" name="monto1">
                </div>
            </div>

            <div class="form-row">    
                <div class="form-group col-md-1"></div>
                <div class="form-group col-md-4">
                    <label>Condicion de Pago Matricula</label>
                    <input type="text" class="form-control" name="condPago">
                </div>
                <div class="form-group col-md-1"></div>
                <div class="form-group col-md-4">
                        <label>Monto Material Didactico</label>
                        <input type="text" class="form-control" name="matDidactico">
                    </div>                
            </div>
                
            <div class="form-row">
                <div class="form-group col-md-1"></div>
                <div class="form-group col-md-4">
                <label>Actividades Civicas</label>
                <select class="form-control" name="actCivicas">
                    <option value="">Seleccione</option>
                        <option>Marzo</option>
                        <option>Abril</option>
                        <option>Mayo</option>
                        <option>Junio</option>
                        <option>Julio</option>
                        <option>Agosto</option>
                        <option>Septiembre</option>
                        <option>Octubre</option>
                        <option>Noviembre</option>
                        <option>Diciembre</option>
                </select>
                </div>
                <div class="form-group col-md-1"></div>
                <div class="form-group col-md-4">
                    <label>Descripcion</label>
                    <input type="text" class="form-control" name="descri">
                </div>
            </div>
                                
            <div class="form-row">         
                <div class="form-group col-md-1"></div>
                <div class="form-group col-md-4">
                    <label>Monto Copias</label>
                    <input type="text" class="form-control" name="copias">
                </div>
                <div class="form-group col-md-1"></div>
                <div class="form-group col-md-4">
                    <label>Monto Actividades Civicas</label>
                    <input type="text" class="form-control" name="monto2">
                </div>
            </div>
                <div class="form-row ">
                    <div class="form-group col-md-10 text-right">
                        <button type="submit" class="btn btn-lg btn-success col-md-2" name="btn2">Registrar</button>
                    </div>
                </div>
            </form>
        </main>
    
</body>
</html>
