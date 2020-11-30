<h2>Instrumentos musicales</h2>
<a href="/CRUD/agregarArticulo">Agregar Nuevo</a>

<ul id="articulos">
	<table>
	<thead>
		<tr>
      		<td><h3>Instrumento</h3></td>
      		<td><h3>Precio ($MXN)</h3></td>
      		<td><h3>Descripción</h3></td>
      		<td><h3>Acción</h3></td>
      	</tr>
 	</thead>
</table>
</ul>
<section id="form">
	<h2>Editar instrumento</h2>

	<input type="hidden" id="id" value="-1">
	<input type="text" id="nombre" required placeholder=":nombre">
	<input type="number" id="precio" required placeholder="precio">
	<input type="text" id="descripcion" required placeholder="descripcion">
	<button onclick="editar();">Actualizar</button><!-- Al hacer click accedemos al metodo editar(); -->
</section>
<section>

<script src="views/js/llamadasAjax.js">// Vinculamos codigo javascript de otro archivo
</script>

</section>
