<?php 

//Se establece el namespace para especificar el directorio donde podemos acceder
	namespace CRUD;
	// Se importan las clases
	use MvcController;
	use Conexion;
	use ArticulosModel;

	use ArticulosController;


	// Archivos de modelos a utilizar
 	require_once 'models/conexion.php';
 	require_once 'models/ArticulosModel.php';
	

	// Archivos del controlador
	require_once 'controllers/ArticulosController.php';
	require_once 'controllers/MvcController.php';
	// Iniciar aplicacion 
	//Llamamos a la funcion getTemplate donde trae el archivo template.php 
	//En template.php Tenemos la vista principal de la aplicacion
	$var1 = new MvcController();
	$var1->getTemplate();

?>