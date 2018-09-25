<!DOCTYPE html>
<html>
<head>
	<title>Registrarse</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="../css/editarUsuario.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
    <?php
        include("../estructura/header.php");
        include("../estructura/nav.php");
        include("../estructura/jsfooter.php");
    ?>
    
	<div class="my-content">
            <div class="row">
		<div class="col-sm-6 col-sm-offset-3 myform-cont">
                    <form action="../controlador/formulario.php" method="POST">

			<div class="form-group">
                            <label for="usuario">Actual</label>
                            <input class="form-control" id="Usuario" name="usuario" type="text" placeholder="Contraseña actual" required>
			</div>

                        <div class="form-group">
                            <label for="password">Nueva</label>
                            <input class="form-control" id="Contraseña" name="contraseña" type="password" placeholder="Nueva contraseña" required>
			</div>
                        
			<div class="form-group">
                            <label for="password">Repetir contraseña nueva</label>
                            <input class="form-control" id="Contraseña" name="contraseña" type="password" placeholder="Repetir contraseña" required>
			</div>
                        
			<div class="form-group">
                            <button type="submit" class="mybtn btn-block">Registrar</button>
			</div>
                    </form>
		</div>
            </div>
	</div>
    
</body>
</html>