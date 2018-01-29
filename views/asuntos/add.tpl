<div class="col-md-4"></div>
<div class="col-md-4">
	<h3>Nuevo Asunto</h3>
	<form action="" method="post">
		<div class="form-group">
			<label>Nombre:</label>
			<input type="text" name="nombre" class="form-control" placeholder="Nombre del asunto" value="{$datos.nombre|default:""}">
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Guardar" class="btn btn-success">
		</div>
	</form>
</div>
<div class="col-md-4"></div>
