<?php 

//Se crea el control para ir a las diferentes rutas del proyecto

 class MvcController {

	public function getTemplate(){
		return include 'views/template.php';	 
	}	 	 	


 	public function getRuta(){ 
 		$ruta = $_GET['ruta'];
 		switch ($ruta) {
 			case 'articulos':
 				include 'views/modulos/articulos.php';
 				break;
 			case 'agregarArticulo':
 				include 'views/modulos/agregarArticulo.php';
 				break;
 			default:
 				include 'views/modulos/rutaError.php';
 				break;
 		}
 	}
 }

 ?>