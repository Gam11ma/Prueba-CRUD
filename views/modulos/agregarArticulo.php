<h1>Agregar instrumento musical</h1>
<section>
	<input type="text" id="nombre" required placeholder="Nombre">
	<input type="number" id="precio" required placeholder="Precio">
	<input type="text" id="descripcion" required placeholder="Descripcion">
	<button onclick="agregar();">Agregar</button>
</section>
<div id="respuesta_server">
	
</div>

<script>
	function agregar() {

		var datosJi = { 
			"nombre": $('#nombre').val(),
			"precio": $('#precio').val(),
			"descripcion": $('#descripcion').val(),
			 };

		$.ajax({
			  url: 'ajax/ArticuloAjax.php',
			  data: datosJi,
			  type: 'post', // get
			  dataType: 'json',
			  cache: false,
			  success: function(respuesta) {
			  	alert(respuesta);
			  	$('#respuesta_server').html('<b>'+respuesta+'<b/>');
			  },
			  error: function() {
			      alert("No se ha podido obtener la información");
			  }
			});
	}
</script>