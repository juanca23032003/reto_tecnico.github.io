<!DOCTYPE html>
<html lang="en">
<head>
	
<meta charset="utf-8"/>
<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/favicon.ico">
<link rel="icon" type="image/png" href="./assets/img/demo/icono.ico">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>TEST 1</title>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Source+Sans+Pro:400,600,700" rel="stylesheet">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<!-- Main CSS -->
<link href="./assets/css/main.css" rel="stylesheet"/>


</head>
<body>
<!--------------------------------------
NAVBAR
--------------------------------------->
<nav class="topnav navbar navbar-expand-lg navbar-light bg-white fixed-top">
<div class="container">
	<a class="navbar-brand" href="./index.html"><strong>Bienestar digital</strong></a>
	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="navbar-collapse collapse" id="navbarColor02" style="">
		<ul class="navbar-nav mr-auto d-flex align-items-center">
			<li class="nav-item">
			<a class="nav-link" href="./index.html">¿Qué es? <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="./test.php">Test 1</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="./ventajas.html">Ventajas</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="./test2.html">Test 2</a>
			</li>     
		</ul>
		<ul class="navbar-nav ml-auto d-flex align-items-center">
			<li class="nav-item highlight">
			<a class="nav-link" href="assets/php/calificaciongeneral.php">Mi calificación</a>
			</li>
		</ul>
	</div>
</div>
</nav>
<!-- End Navbar -->
    
<!--------------------------------------
HEADER
--------------------------------------->
<div class="col-md-6 mx-auto ">
  <h1 class="font-weight-bold">Comprueba tus conocimientos</h1>
</div>
<!-- End Header -->
    
<!--------------------------------------
MAIN
--------------------------------------->
    
<div class="col-md-3 mx-auto">
	<img src="assets/img/demo/test1.png" alt="">
</div>
<div class="col-md-10 mx-auto">
<h4>Samuel pasa mucho tiempo conectado y se ha dado cuenta de que está 
comenzando a afectar negativamente su relación con sus amigos.	 
¿Cómo le hablarías del concepto de Bienestar Digital? 
</h4>
<h3 class="font-weight-bold">Respuesta</h3>

<form action="assets/php/test1.php" method="POST">
	<input type="text" name="pregunta" placeholder="Escriba su respuesta">
	<div>
		<p>1.	El Bienestar Digital consiste en crear y mantener una relación equilibrada y saludable con la tecnología.</p></div>
	<input type="radio" id="pre1" name="p1" value="1.25">
	<label for="pre1">VERDADERO</label>
	<br>
	<input type="radio" id="pre1" name="p1" value="0">
	<label for="pre1">FALSO</label>
	<div><p>2.	El Bienestar Digital consiste en disfrutar de las ventajas que ofrece la tecnología sin distraernos de lo que es importante. </p></div>
	<input type="radio" id="pre2" name="p2" value="1.25">
	<label for="pre2">VERDADERO</label>
	<br>
	<input type="radio" id="pre2" name="p2" value="0">
	<label for="pre2">FALSO</label>
	<div><p>3.	El Bienestar Digital consiste en pasar el mismo tiempo con amigos que usando nuestros dispositivos.  </p></div>
	<input type="radio" id="pre3" name="p3" value="0">
	<label for="pre3">VERDADERO</label>
	<br>
	<input type="radio" id="pre3" name="p3" value="1.25">
	<label for="pre3">FALSO</label>
	<div><p>4. El Bienestar Digital consiste en usar la tecnología como nuestro medio de comunicación principal.  </p></div>
	<input type="radio" id="pre4" name="p4" value="0">
	<label for="pre4">VERDADERO</label>
	<br>
	<input type="radio" id="pre4" name="p4" value="1.25">
	<label for="pre4">FALSO</label>
	<br>
	<input type="submit" value="ENVIAR">
</form>

   </div>


<!--------------------------------------
FOOTER
--------------------------------------->
<div class="container mt-5">
	<footer class="bg-white border-top p-3 text-muted small">
	<div class="row align-items-center justify-content-between">
		<div>
			<span class="navbar-brand mr-2"><strong>Mundana</strong></span> Copyright &copy;
			<script>document.write(new Date().getFullYear())</script>
			 . All rights reserved.
		</div>
		<div>
			 Made with <a target="_blank" class="text-secondary font-weight-bold" href="https://www.wowthemes.net/mundana-free-html-bootstrap-template/">Mundana Theme</a> by WowThemes.net.
		</div>
	</div>
	</footer>
</div>
<!-- End Footer -->
    
<!--------------------------------------
JAVASCRIPTS
--------------------------------------->


<script src="./assets/js/vendor/jquery.min.js" type="text/javascript"></script>

<script src="./assets/js/vendor/popper.min.js" type="text/javascript"></script>

<script src="./assets/js/vendor/bootstrap.min.js" type="text/javascript"></script>

<script src="./assets/js/functions.js" type="text/javascript"></script>

</body>
</html>