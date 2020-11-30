<?php 
/**
 * Se crea la Clase y los metodos para validar informacion
 */
class ArticulosController
{
	//Validaciones correspondientes para poder acceder al metodo del modelo
	static public function agregarArticulo($datos) 
	{
		if ($datos['nombree'] != '' && $datos['precioo'] > 0 && $datos['descripcionn'] != '') {
			if (ArticulosModel::crearArticulo($datos)) { //Accedemos al modelo
				return "Se registro correctamente"; 
			}else{
				return "No se realizó el registro";
			}
		}else{
			return "Datos no validos";
		}	
	}

	//Validaciones correspondientes para poder acceder al metodo del modelo
	static public function editarArticulo($datos)
	{
		if ($datos['nombre'] != '' && $datos['precio'] > 0 && $datos['descripcion'] != '') {
			if (ArticulosModel::editarArticulo($datos)) {//Accedemos al modelo
				return "Se edito correctamente"; 
			}else{
				return "No se editó";
			}
		}	
	}

	static public function eliminarArticulo($id)
	{
		if ($id >= 0) {
			 
			if (ArticulosModel::eliminarArticulos($id)) { //Accedemos al modelo
				return "Instrumento eliminado"; 
			}else{
				return "No se pudo eliminar";
			}
		}	
	}

	static public function consultarArticulo($datos)
	{
		if (true) {
			return ArticulosModel::leerArticulos($datos);
		}	
	}

	
}

?>