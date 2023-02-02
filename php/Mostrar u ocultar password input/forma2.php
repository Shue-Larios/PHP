<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="favicon.ico">
<title>Mostrar u ocultar contraseña - BaulPHP</title>

<!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets/sticky-footer-navbar.css" rel="stylesheet">
<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
</head>

<body>
<header> 
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark"> <a class="navbar-brand" href="#">BaulPHP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"> <a class="nav-link" href="index.php">Inicio </a> </li>
        <li class="nav-item active"> <a class="nav-link" href="forma2.php">Forma 2<span class="sr-only">(current)</span></a> </li>
        <li class="nav-item active"> <a class="nav-link" href="forma3.php">Forma 3 </a> </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busqueda</button>
      </form>
    </div>
  </nav>
</header>

<!-- Begin page content -->

<div class="container">
  <h3 class="mt-5">Mostrar u Ocultar Contraseña</h3>
  <hr>
  <div class="row">
    <div class="col-12 col-md-12"> 
      <!-- Contenido -->
      
<form action="" method="post" id="frmLogin">
  <div class="error-mensaje">
    
  </div>
  <div class="form-group">
    <label for="usuario">Usuario</label>
    <input name="usuario_nombre" type="text"  class="form-control">
  </div>
  <div class="form-group">
    <div class="form-row">
      <div class="col">
        <label for="password">Contraseña</label>
        <input name="usuario_password" type="password" value="" class="form-control" id="contrasena">
      </div>
      <div class="col">
        <label for="password"></label>
        <!-- checkbox que nos permite activar o desactivar la opcion -->
        <div style="margin-top:15px;">
          <input style="margin-left:20px;" type="checkbox" id="mostrar_contrasena" title="clic para mostrar contraseña"/>
          &nbsp;&nbsp;Mostrar Contraseña</div>
      </div>
    </div>
  </div>
  <div class="form-check">
    <input type="checkbox" name="remember" id="remember" class="form-check-input"/>
    <label for="remember-me">Recordarme</label>
  </div>
  <div class="form-group">
    <input type="submit" name="login" value="Iniciar Sesión"
          class="btn btn-primary">
  </div>
</form>
</div>
<script>
$(document).ready(function () {
  $('#mostrar_contrasena').click(function () {
    if ($('#mostrar_contrasena').is(':checked')) {
      $('#contrasena').attr('type', 'text');
    } else {
      $('#contrasena').attr('type', 'password');
    }
  });
});
</script> 
    
    <!-- Fin Contenido --> 
  </div>
</div>
<!-- Fin row -->

</div>
<!-- Fin container -->
<footer class="footer">
  <div class="container"> <span class="text-muted">
    <p>Códigos <a href="https://www.baulphp.com/" target="_blank">BaulPHP</a></p>
    </span> </div>
</footer>
<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 

<script src="dist/js/bootstrap.min.js"></script>
</body>
</html>