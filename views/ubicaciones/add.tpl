<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="{$_layoutParams.root}ubicaciones">Ver Ubicaciones</a></p>
</div>

<div class="col-md-4">
	<h3>Agregar Ubicaciones</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="ubicacion">Ubicación:<span class="text-danger">*</span></label>
			<select name="ubicacion" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Central</option>
				<option value="2">Periférica</option>
			</select>
		</div>
		<div class="form-group">
			<label for="estacionamiento">Estacionamiento:<span class="text-danger">*</span></label>
			<select name="estacionamiento" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="direccion">Direccion:<span class="text-danger">*</span></label>
			<input type="text" name="direccion" placeholder="Calle - Sector o Código" class="form-control">
		</div>
		<div class="form-group">
			<label for="solucion">Solución:<span class="text-danger">*</span></label>
			<select name="solucion" id="" class="form-control">
				<option value="">Seleccione</option>
				{if isset($soluciones) && count($soluciones)}
					{foreach from=$soluciones item=s}
						<option value="{$s.id}">{$s.tipo}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Guardar" class="btn btn-success">
			<a href="{$_layoutParams.root}ubicaciones" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>

<div class="col-md-4">
	
</div>
