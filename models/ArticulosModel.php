<?php 
	/*
	  Clase donde se crean todos los metodos Crear, Leer, Actualizar, Eliminar
	  Create, Read, Update,Delete (CRUD)
	 */
	class ArticulosModel 
	{
		//Metodos para acceder a base de datos y realizar las sentencias solicitadas
		static public function crearArticulo($datos)
		{
			$conex = Conexion::conectar(); //Accedemos a conexion a base de datos
			$stmt = $conex->prepare("INSERT into articulos (nombre, precio, descripcion, status) values (:nom, :pre, :des, :sta)");
			if ($stmt->execute([':nom'=>$datos['nombree'], ':pre'=>$datos['precioo'], ':des'=>$datos['descripcionn'],':sta'=>1])) {
				return true;
			}else{
				return false;
			}	
		}

		static public function editarArticulo($datos)
		{
			$conex = Conexion::conectar();
			$stmt = $conex->prepare("UPDATE articulos set nombre = :nom, precio = :pre, descripcion = :des where id = :id");
			if ($stmt->execute([ ':nom'=>$datos['nombre'], ':pre'=>$datos['precio'], ':des'=>$datos['descripcion'],':id'=>$datos['id'] ])) {
				return true;
			}else{
				return false;
			}	
		}

		static public function eliminarArticulos($id)
		{
			$conex = Conexion::conectar();
			$stmt = $conex->prepare("DELETE  from articulos where id = :id");
			if ($stmt->execute([':id'=>$id])) {
				return true;
			}else{
				return false;
			}	
		}

		static public function leerArticulos($datos)
		{
			$conex = Conexion::conectar();
			if(intval($datos['id']) >= 0){
				$id = intval($datos['id']);
				$stmt = $conex->prepare("SELECT * FROM articulos where id = :id");
				$stmt->execute([':id'=>$id]);
				$datos = $stmt->fetch(PDO::FETCH_OBJ);
				return $datos;
			}else{
				$stmt = $conex->query("SELECT * FROM articulos");
				$stmt->execute();
				$datos = $stmt->fetchAll(PDO::FETCH_ASSOC);
				return $datos;
			}	
		}

	}
 ?>