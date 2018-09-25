<?php
@session_start();
$usuario = isset($_SESSION['usuario']);
if ($usuario){
    header('Location: vista/menuPrincipal.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/log.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body background="imagenes/fondoLogin.jpg">
    <div class="modal-dialog text-center">
    <div class="col-sm-8 main-section">
        <div class="modal-content">
            <div class="col-12 user-img">
                <img src="imagenes/logo.png">
            </div>
            <form class="col-12" id="formulario_login">
        
                <div class="inputWithIcon form-group">
                    <input class=""  type="text" placeholder="Usuario" name="user" required>
                    <i class="fas fa-user" aria-hidden="true"></i>
                </div>

                <div class="inputWithIcon form-group">
                    <input class=""  type="password" placeholder="Contraseña" name="pass" required>
                    <i class="fas fa-lock" aria-hidden="true"></i>
                </div>

                <br>
                <div class="form-group">
                    <button class="btn btn-lg btn-primary btn-block mybtn" type="submit">Iniciar Sesion</button>
                </div>
                <div id="respuesta"></div>

            </form>
        </div>
    </div>
    </div>
            
    <footer>
        <div class="container-fluid text-center">
                Copyright &copy 2018 Info Elite 21.sac
        </div>
    </footer>
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/login.js"></script>
</body>
</html>

