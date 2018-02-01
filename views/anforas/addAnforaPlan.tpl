<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="{$_layoutParams.root}planes">Planes</a></p>
</div>

<div class="col-md-4">
	<h3>Agregar Anforas</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="modelo">Modelo:<span class="text-danger"></span></label>
			<input type="text" name="modelo" class="form-control" value="{$datos.modelo|default:""}" placeholder="Modelo del ánfora">
		</div>
		<div class="form-group">
			<label for="descripcion">Descripción:<span class="text-danger">*</span></label>
			<textarea name="descripcion" class="form-control" rows="6" style="resize: none;">{$datos.descripcion|default:""}</textarea>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Guardar" class="btn btn-success">
			<a href="{$_layoutParams.root}anforas" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>

<div class="col-md-4">
	
</div>
