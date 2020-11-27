<?php 
require_once '../controllers/ArticulosController.php';

require_once '../models/ArticulosModel.php';
require_once '../models/conexion.php';

class ArticuloAjax
{
	public $nombre;
	public $precio;
	public $descripcion;
	public $id;

	public function agregarAjax()
	{
		$datos = ['nombre'=>$this->nombre,
				  'precio'=>$this->precio,
				  'descripcion'=>$this->descripcion
				];
		$respuesta = ArticulosController::agregarArticulo($datos);
		echo json_encode($respuesta); //  regresamos la respuesta en formato json
	}

	public function leerAjax()
	{
		$datos = ['id'=>$this->id];
		$respuesta = ArticulosController::consultarArticulo($datos);
		echo json_encode($respuesta); //  regresamos la respuesta en formato json
	}

	public function editarAjax()
	{
		$datos = ['id'=> $this->id, 'nombre'=>$this->nombre, 'precio'=>$this->precio, 'descripcion'=>$this->descripcion];
		$respuesta = ArticulosController::editarArticulo($datos);
		echo json_encode($respuesta);
	}	

	public function eliminarAjax()
	{
		$id = $this->id;
		$respuesta = ArticulosController::eliminarArticulo($id);
		echo json_encode($respuesta);
	}
}


if (isset($_POST['nombre']) && isset($_POST['precio']) && isset($_POST['descripcion'])) {
	$var1 = new ArticuloAjax(); // creamos un objeto de USerAjax
	$var1->nombre = $_POST['nombre'];
	$var1->precio = $_POST['precio'];
	$var1->descripcion = $_POST['descripcion'];
	$var1->agregarAjax();
}

if (isset($_POST['idConsulta'])) {
	$var1 = new ArticuloAjax(); // creamos un objeto de USerAjax
	$var1->id = $_POST['idConsulta'];
	$var1->leerAjax();
}

if (isset($_POST['idEditar'])) {
	$var1 = new ArticuloAjax();
	$var1->id = $_POST['idEditar'];
	$var1->nombre = $_POST['nombre'];
	$var1->editarAjax();
}

if (isset($_POST['idEliminar'])) {
	$var1 = new ArticuloAjax();
	$var1->id = $_POST['idEliminar'];
	$var1->eliminarAjax();
}


 ?>