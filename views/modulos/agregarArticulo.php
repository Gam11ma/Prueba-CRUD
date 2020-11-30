<h1>Agregar instrumento musical</h1>
<section>
	<input type="text" id="nombre" required placeholder="Nombre">
	<input type="number" id="precio" required placeholder="Precio">
	<input type="text" id="descripcion" required placeholder="Descripcion">
	<button onclick="agregar();">Agregar</button> <!-- Al hacer click en el boton llamamos la funcion agregar(); -->
</section>
<div id="respuesta_server">
	
</div>

<script> //En un Script hacemos las llamadas por ajax
	function agregar() {

		var datosJi = { //Objeto de tipo json para enviar
			"nombree": $('#nombre').val(),   //Obtenemos valores y guardamos
			"precioo": $('#precio').val(),  //en variables
			"descripcionn": $('#descripcion').val(),
			 };

		$.ajax({
			  url: 'ajax/ArticuloAjax.php', //URL de funciones que hara las llamadas
			  data: datosJi,
			  type: 'post', // Manera en que obtenemos los datos datos
			  dataType: 'json', // datos a recibir de tipo json
			  cache: false,
			  success: function(respuesta) { //Si hay exito se ejecuta la funcion
			  	alert(respuesta);
			  	$('#respuesta_server').html('<b>'+respuesta+'<b/>');
			  },
			  error: function() {
			      alert("No se ha podido obtener la información");
			  }
		});
	}
</script>