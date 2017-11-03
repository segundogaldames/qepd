<div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="{$_layoutParams.root}telefonos">Ver Teléfonos</a></p>
</div>

<div class="col-md-4">
	<h3>Agregar Teléfono</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="telefono">Ingrese Número Telefónico: <span class="text-danger">*</span></label>
			<input type="text" name="telefono" value="{$datos.telefono|default:""}" class="form-control" placeholder="Teléfono de la sede - empresa">
		</div>
		
		<div class="form-group">
			<label for="sede">Seleccione la sede</label>
			<select name="sede" id="" class="form-control">
				<option value="">Sedes</option>
				{if isset($sedes) && count($sedes)}
					{foreach from=$sedes item=s}
						<option value="{$s.id}">{$s.sede} - {$s.empresa}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Registrar" class="btn btn-success">
		</div>
	</form>
</div>

<div class="col-md-4">
	
</div>
