<div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="{$_layoutParams.root}componentes">Ver Componentes</a></p>
</div>

<div class="col-md-4">
	<h3>Agregar Componente</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="nombre">Ingrese nombre: <span class="text-danger">*</span></label>
			<input type="text" name="nombre" value="{$datos.nombre|default:""}" class="form-control" placeholder="Nombre del componente">
		</div>
		<div class="form-group">
			<label for="servicio">Seleccione un servicio</label>
			<select name="servicio" id="" class="form-control">
				<option value="">Servicios</option>
				{if isset($servicios) && count($servicios)}
					{foreach from=$servicios item=s}
						<option value="{$s.id}">{$s.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<label for="url">Ingrese la url_add:</label>
			<input type="text" name="url" value="{$datos.url_add|default:""}" class="form-control" placeholder="Url para añadir un componente">
		</div>
		<div class="form-group">
			<label for="url">Ingrese la url de vista:</label>
			<input type="text" name="url_view" value="{$datos.url_view|default:""}" class="form-control" placeholder="Url vista del componente">
		</div>
		<div class="form-group">
			<label for="url">Ingrese la url index:</label>
			<input type="text" name="url_index" value="{$datos.url_index|default:""}" class="form-control" placeholder="Url vista index del componente">
		</div>
		<div class="form-group">
			<label for="url">Ingrese la url plan:</label>
			<input type="text" name="url_index" value="{$datos.url_plan|default:""}" class="form-control" placeholder="Url vista plan del componente">
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Registrar" class="btn btn-success">
		</div>
	</form>
</div>

<div class="col-md-4">
	
</div>
