<?php 
/**
 * Se crea la Clase y los metodos para validar informacion
 */
class ArticulosController
{
	static public function agregarArticulo($datos)
	{
		if ($datos['nombre'] != '' && $datos['precio'] > 0 && $datos['descripcion'] != '') {
			if (ArticulosModel::crearArticulo($datos)) {
				return "Se registro correctamente"; 
			}else{
				return "No se realizó el registro";
			}
		}else{
			return "Datos no validos";
		}	
	}

	static public function editarArticulo($datos)
	{
		if ($datos['nombre'] != '' && $datos['precio'] > 0 && $datos['descripcion'] != '') {
			if (ArticulosModel::editarArticulo($datos)) {
				return "Se edito correctamente"; 
			}else{
				return "No se editó";
			}
		}	
	}

	static public function eliminarArticulo($id)
	{
		if ($id >= 0) {
			 
			if (ArticulosModel::eliminarArticulos($id)) {
				return "Usuario eliminado"; 
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