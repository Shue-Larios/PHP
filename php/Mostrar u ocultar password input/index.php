<!DOCTYPE html>

<html>
    <head>
    <title>Mostrar u ocultar contraseña</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link href="assets/sticky-footer-navbar.css" rel="stylesheet">
    </head>
    <body>
<header> 
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark"> <a class="navbar-brand" href="#">BaulPHP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
        <li class="nav-item active"> <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a> </li>
        <li class="nav-item active"> <a class="nav-link" href="forma2.php">Forma 2 </a> </li>
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
      <h3 class="mt-5">Mostrar u ocultar contraseña con jQuery</h3>
      <hr>
      <div class="row">
    <div class="col-12 col-md-12"> 
          <!-- Contenido -->
          
<form method="POST">
<label>Contraseña</label>
<div class="form-row">
    <div class="col">
  <input class="form-control" type="password" name="senha" id="password">
</div>
    <div class="col">
  <button class="btn btn-primary" type="button" onclick="mostrarContrasena()">Mostrar Contraseña</button>
</div>
  </div>
</form>
<script>
  function mostrarContrasena(){
      var tipo = document.getElementById("password");
      if(tipo.type == "password"){
          tipo.type = "text";
      }else{
          tipo.type = "password";
      }
  }
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
<script src="dist/js/bootstrap.min.js"></script>
</body>
</html>