<div style="padding: 30px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="{$_layoutParams.root}comunas">Ver Comunas</a></p>
</div>
<div class="col-md-4">
	<h3>Agregar Comunas/Ciudades</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="nombre">Ingrese nombre: <span class="text-danger">*</span></label>
			<input type="text" name="nombre" value="{$datos.nombre|default:""}" class="form-control" placeholder="Nombre de la comuna o ciudad">
		</div>
		<div class="form-group">
			<label for="regiones">Seleccione una región:</label>
			<select name="region" id="" class="form-control">
				<option value="">Regiones</option>
				{if isset($regiones) && count($regiones)}
					{foreach from=$regiones item=r}
						<option value="{$r.id}">{$r.nombre}</option>
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


	
	
	
