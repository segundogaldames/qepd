<div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="{$_layoutParams.root}planes">Ver Traslados</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}imagenes/add">Agregar imagen</a></p>
</div>

<div class="col-md-4">
	<h3>Agregar Traslado</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="instalacion">Carroza de instalación:<span class="text-danger">*</span></label>
			<select name="instalacion" id="" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="funeral">Carroza de funeral:<span class="text-danger">*</span></label>
			<select name="funeral" id="" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="conflores">Carroza con flores:<span class="text-danger">*</span></label>
			<select name="conflores" id="" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="acompanamiento">Vehiculo de acompañamiento:<span class="text-danger">*</span></label>
			<select name="acompanamiento" id="" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="pasajeros">Nº de Pasajeros:</label>
			<input type="number" name="pasajeros" class="form-control" placeholder="Número de pasajeros" value="{$datos.pasajeros|default:""}">
		</div>
		<div class="form-group">
			<label for="plan">Seleccione el plan:<span class="text-danger">*</span></label>
			<select name="plan" id="" class="form-control">
				<option value="">Seleccione</option>
				{if isset($planes) && count($planes)}
					{foreach from=$planes item=p}
						<option value="{$p.id}">{$p.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Guardar" class="btn btn-success">
		</div>
	</form>
</div>

<div class="col-md-4">
	
</div>
