<?php/*
@session_start();
$usuario = $_SESSION['usuario'];
if (!$usuario) {
    header('Location: http://google.com');
}*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Colegio Info Elite 21</title>
	<link rel="stylesheet" href="../css/estilos.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
	<?php
		include("../estructura/header.php");
		include("../estructura/nav.php");
		include("../estructura/jsfooter.php");
		include("../estructura/footer.php");
	?>
</body>
</html>