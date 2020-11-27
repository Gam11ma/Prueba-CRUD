<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mi pagina</title>
	
	<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous">
  	</script> <!-- Utilizamos un plugin para el intercambio de datos tipo json el uso de AJAX  -->
</head>
<body align = "center">
	<h1 >Instrumentos Musicales</h1>
	<a href="/Prueba/articulos">Ver instrumentos musicales</a>
<br>
<br>
<section>
	<?php 
		$var1 = new MvcController(); //Instanciamos un objeto dela clase MvcController
		$var1->getRuta(); // Lamamos a la funcion getRuta del la clase MvcController, por medio de la funcion getRuta llamamos lo que necesitamos mostrar en pantalla
	?>
</section>
</body>
</html>