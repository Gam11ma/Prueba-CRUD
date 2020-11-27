<?php 

//Se crea una Clase y una metodo para conectarse a la base de datos
//Se crea el metodo conectar para poder llamarlo desde los modelos

class Conexion {
	
	static public function conectar(){
		$conex = new PDO('mysql:host=localhost;dbname=instrumentos_musicales', 'root', '');
		return $conex;	
	}
}

 ?>