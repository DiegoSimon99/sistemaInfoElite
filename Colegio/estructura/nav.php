<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="MenuPrincipal.php"><i class="fas fa-home"></i>&nbsp;Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item">
        <a class="nav-link" href="../vista/menuMatricula.php"><i class="fas fa-chalkboard"></i>&nbsp;Matricula</a>
      </li>

      <li class="nav-item">
          <a class="nav-link" href="../vista/menuPagos.php"><i class="fas fa-dollar-sign"></i>&nbsp;Pagos</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href=""><i class="fas fa-book-reader"></i>&nbsp;Aula</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href=""><i class="fas fa-users"></i>&nbsp;Alumnos</a>
      </li>      

    </ul>

    <form class="form-inline my-2 my-lg-0">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-list-ul"></i>&nbsp;Configuracion
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Modificar Usuario</a>
            <a class="dropdown-item" href="../vista/cambiarClave.php">Cambiar contraseña</a>
          </div>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="../controlador/cerrarSesion.php"><i class="fas fa-power-off"></i>&nbsp;Salir</a>
        </li>
      </ul>
    </form>
  </div>
</nav>