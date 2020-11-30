<?php 
require_once '../controllers/ArticulosController.php';

require_once '../models/ArticulosModel.php';
require_once '../models/conexion.php';

class ArticuloAjax // Clase con metodos para usar los datos y enviarlos al controlador
{
	public $nombre;
	public $precio;
	public $descripcion;
	public $id;

	public function agregarAjax() // funcion para enviar datos al controlador
	{
		$datos = ['nombree'=>$this->nombre,
				  'precioo'=>$this->precio,  //Guardamos datos en una arreglo
				  'descripcionn'=>$this->descripcion
				];
	//Accedemos al metodo  para hacer validaciones y guardamos la respuesta
		$respuesta = ArticulosController::agregarArticulo($datos);  
		echo json_encode($respuesta); //  regresamos la respuesta en formato json
	}

	public function leerAjax()
	{
		$datos = ['id'=>$this->id];
	//Accedemos al metodo  para hacer validaciones y guardamos la respuesta
		$respuesta = ArticulosController::consultarArticulo($datos);
		echo json_encode($respuesta); //  regresamos la respuesta en formato json
	}

	public function editarAjax()
	{
		$datos = ['id'=> $this->id, 
				'nombre'=>$this->nombre, 
				'precio'=>$this->precio, 
				'descripcion'=>$this->descripcion];
	//Accedemos al metodo  para hacer validaciones y guardamos la respuesta
		$respuesta = ArticulosController::editarArticulo($datos);
		echo json_encode($respuesta);//  regresamos la respuesta en formato json
	}	

	public function eliminarAjax()
	{
		$id = $this->id;
	//Accedemos al metodo  para hacer validaciones y guardamos la respuesta
		$respuesta = ArticulosController::eliminarArticulo($id);
		echo json_encode($respuesta);
	}
}

//Comprobamos si hay datos
if (isset($_POST['nombree']) && isset($_POST['precioo']) && isset($_POST['descripcionn'])) {
	$var1 = new ArticuloAjax(); // creamos una instancia de  objeto de ArticuloAjax
	$var1->nombre = $_POST['nombree'];
	$var1->precio = $_POST['precioo'];
	$var1->descripcion = $_POST['descripcionn'];
	$var1->agregarAjax(); // Utilizamos el metodo agregarAjax();
}
//Comprobamos si hay datos
if (isset($_POST['idConsulta'])) {
	$var1 = new ArticuloAjax(); // creamos un instancia de objeto de ArticuloAjax
	$var1->id = $_POST['idConsulta'];
	$var1->leerAjax();// accedemos al metodo
}
//Comprobamos si hay datos
if (isset($_POST['id'])) {
	$var1 = new ArticuloAjax();
	$var1->id = $_POST['id'];
	$var1->nombre = $_POST['nombre'];
	$var1->precio = $_POST['precio'];
	$var1->descripcion = $_POST['descripcion'];
	$var1->editarAjax();// Accedemos el metodo
}
//Comprobamos si hay datos
if (isset($_POST['idEliminar'])) {
	$var1 = new ArticuloAjax();
	$var1->id = $_POST['idEliminar'];
	$var1->eliminarAjax();// Accedemos al metodo 
}


 ?>