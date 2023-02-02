<!DOCTYPE html>

<html>
    <head>
    <title>Mostrar u ocultar contraseña</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
function mostrarPassword(){
		var cambio = document.getElementById("txtPassword");
		if(cambio.type == "password"){
			cambio.type = "text";
			$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		}else{
			cambio.type = "password";
			$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}
	} 
	
	$(document).ready(function () {
	//CheckBox mostrar contraseña
	$('#ShowPassword').click(function () {
		$('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
	});
});
</script>
    <link href="assets/sticky-footer-navbar.css" rel="stylesheet">
    </head>
    <body>
<header> 
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark"> <a class="navbar-brand" href="#">BaulPHP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
        <li class="nav-item active"> <a class="nav-link" href="index.php">Inicio </a> </li>
        <li class="nav-item active"> <a class="nav-link" href="forma2.php">Forma 2</a> </li>
        <li class="nav-item active"> <a class="nav-link" href="forma3.php">Forma 3<span class="sr-only">(current)</span></a> </li>
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
<form id="form1">
<div class="container">
    <div class="row">
  <div class="col-md-6">
        <p>Click en el ojo para mostrar / ocultar</p>
        <label>Ingrese Contraseña</label>
        <div class="input-group">
      <input ID="txtPassword" type="Password" Class="form-control">
      <div class="input-group-append">
            <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
          </div>
    </div>
      </div>
  <div class="col-md-6">
        <p>Verificar para mostrar / ocultar con chekbox</p>
        <label>Ingrese Contraseña</label>
        <div class="input-group">
      <input ID="Password" type="Password" Class="form-control">
      <div class="input-group-append"> <span class="input-group-text">
        <input ID="ShowPassword" type="checkbox" />
        </span> </div>
    </div>
      </div>
</div>
  </div>
</form>
          
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