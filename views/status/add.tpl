<div class="col-md-2"></div>
<div class="col-md-4">
	<h3>Agregar Status</h3>
	<form action="" method="post" name="form">
		<div class="form-group">
			<label>Nombre</label>
			<input type="text" name="nombre" class="form-control" value="{$datos.nombre|default:""}" placeholder="Nombre del status">
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Guardar" class="btn btn-success">
			<a href="{$_layoutParams.root}status" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>
<div class="col-md-2"></div>