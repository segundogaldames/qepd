<div class="col-md-2">
	
</div>

<div class="col-md-4">
	<h3>Editar Componente</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="nombre">Ingrese nombre: <span class="text-danger">*</span></label>
			<input type="text" name="nombre" value="{$dato.nombre|default:""}" class="form-control" placeholder="Nombre del componente">
		</div>
		<div class="form-group">
			<label for="servicio">Seleccione un servicio</label>
			<select name="servicio" id="" class="form-control">
				<option value="{$dato.servicio_id}">{$dato.servicio}</option>
				{if isset($servicios) && count($servicios)}
					{foreach from=$servicios item=s}
						<option value="{$s.id}">{$s.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<label for="url">Ingrese la url add:</label>
			<input type="text" name="url_add" value="{$dato.url_add|default:""}" class="form-control" placeholder="Url para agregar componente">
		</div>
		<div class="form-group">
			<label for="url">Ingrese la url de la vista:</label>
			<input type="text" name="url_view" value="{$dato.url_view|default:""}" class="form-control" placeholder="Url de la vista del componente">
		</div>
		<div class="form-group">
			<label for="url">Ingrese la url del index:</label>
			<input type="text" name="url_index" value="{$dato.url_index|default:""}" class="form-control" placeholder="Url de la vista index del componente">
		</div>
		<div class="form-group">
			<label for="url">Ingrese la url del plan:</label>
			<input type="text" name="url_plan" value="{$dato.url_plan|default:""}" class="form-control" placeholder="Url de la vista plan del componente">
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Modificar" class="btn btn-success">
		</div>
	</form>
</div>

<div class="col-md-4">
	
</div>
