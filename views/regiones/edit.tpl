<div class="col-md-2" style="padding-top: 20px">
	
</div>

<div class="col-md-4">
	<h3>Editar Región</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="nombre">Ingrese nombre:<span class="text-danger">*</span></label>
			<input type="text" name="nombre" class="form-control" placeholder="Nombre de la región" value="{$dato.nombre|default:""}">
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Guardar Cambios" class="btn btn-success">
			<a href="{$_layoutParams.root}regiones">Volver</a>
		</div>
	</form>
</div>

<div class="col-md-4">
	
</div>