<h2>Instrumentos musicales</h2>
<a href="/Prueba/agregarArticulo">Agregar Nuevo</a>

<ul id="articulos">
</ul>
<section id="form">
	<h2>Editar instrumento</h2>

	<input type="hidden" id="id" value="-1">
	<input type="text" id="nombre" required placeholder=":nombre">
	<input type="number" id="precio" required placeholder="precio">
	<input type="text" id="descripcion" required placeholder="descripcion">
	<button onclick="editar();">Actualizar</button>
</section>
<section>

<script>
	$('#form').hide();
	function eliminar(id) {
		var datos = { idEliminar : id };

		$.ajax({
			  url: 'ajax/ArticuloAjax.php',
			  data: datos,
			  type: 'post', // get
			  dataType: 'json',
			  cache: false,
			  success: function(respuesta) {
			  	alert(respuesta);
			  	$('#articulos').empty();
			  	listar();
			  },
			  error: function() {
			      alert("No se ha podido obtener la información");
			  }
		});

	}

	function editar() {
		var datos = { nombre : $('#nombre').val(), 
					 idEditar : $('#id').val(),
					  };

		$.ajax({
			  url: 'ajax/ArticuloAjax.php',
			  data: datos,
			  type: 'post', // get
			  dataType: 'json',
			  cache: false,
			  success: function(respuesta) {
			  	console.log("RESPUESTA DE EDICION ", respuesta);
			  	$('#articulos').show();
			  	$('#articulos').empty();
			  	listar();
			  	$('#form').hide();
			  },
			  error: function() {
			      alert("No se ha podido obtener la información");
			  }
		});

	}

	function getDatos(id) {
		var datosJi = { "idConsulta": id };
		
		$.ajax({
			  url: 'ajax/ArticuloAjax.php',
			  data: datosJi,
			  type: 'post', // get
			  dataType: 'json',
			  cache: false,
			  success: function(respuesta) {
			  	$('#articulos').hide();
			  	$('#form').show();
			  	$('#nombre').val(respuesta.nombre);
			  	$('#id').val(respuesta.id);
			  	$('#precio').val(respuesta.precio);
			  	$('#descripcion').val(respuesta.descripcion);
			  },
			  error: function() {
			      alert("No se ha podido obtener la información");
			  }
		});
	}

	
	function listar() {
		var datosJi = { "idConsulta": -1 };

		$.ajax({
			  url: 'ajax/ArticuloAjax.php',
			  data: datosJi,
			  type: 'post', // get
			  dataType: 'json',
			  cache: false,
			  success: function(respuesta) {
			  	console.log(respuesta);
			  	
			  	Object.keys(respuesta).forEach(function(e) {// e key del arreglo(objeto)
      				$('#articulos').append(
      					'<table>'+'<tr>'+'<td>'+'<td>'+
      					'<td>'+' '+this[e].nombre+'<td>'+
      					'<td>'+' '+this[e].precio+'<td>'+
      					'<td>'+this[e].descripcion+'<td>'+
      					''+'<button onclick="getDatos('+this[e].id+')">Editar</button><button onclick="eliminar('+this[e].id+')">Eliminar</button>'+'</tr>'+'</table>'
      					);
   				},respuesta);

			  },
			  error: function() {
			      alert("No se ha podido obtener la información");
			  }
		});
	}
	// llamamos a listar
	listar();
</script>

</section>