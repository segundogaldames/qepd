<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="{$_layoutParams.root}urnas">Ver Urnas</a></p>
</div>

<div class="col-md-4">
	<h3>Agregar Urna</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="modelo">Ingrese modelo:<span class="text-danger">*</span></label>
			<input type="text" name="modelo" class="form-control" placeholder="Modelo de la urna" value="{$datos.modelo|default:""}">
		</div>
		<div class="form-group">
			<label for="medidas">Ingrese las medidas:</label>
			<input type="text" name="medidas" class="form-control" placeholder="Medidas de la urna" value="{$datos.medidas|default:""}">
		</div>
		<div class="form-group">
			<label for="material">Ingrese el material:<span class="text-danger">*</span></label></label>
			<input type="text" name="material" class="form-control" placeholder="Material de la urna" value="{$datos.material|default:""}">
		</div>
		<div class="form-group">
			<label for="terminaciones">Ingrese terminaciones:<span class="text-danger">*</span></label></label>
			<input type="text" name="terminaciones" class="form-control" placeholder="Terminaciones de la urna" value="{$datos.terminaciones|default:""}">
		</div>
		<div class="form-group">
			<label for="color">Ingrese el color:<span class="text-danger">*</span></label></label>
			<input type="text" name="color" class="form-control" placeholder="Color de la urna" value="{$datos.color|default:""}">
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
			<a href="{$_layoutParams.root}urnas" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>

<div class="col-md-4">
	
</div>
