<div style="padding-top: 50px"></div>
<div class="col-md-2"></div>
<div class="col-md-4">
	<h3>Editar Comuna</h3>
	<form action="" method="post" name="form">
		<div class="form-group">
			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre" class="form-control" value="{$dato.nombre|default:''}">
		</div>
		<div class="form-group">
			<label for="region">Región actual: {$dato.region|default:''}</label>
			<select name="region" id="" class="form-control">
				<option value="{$dato.region_id}">{$dato.region}</option>
				{if isset($regiones) && count($regiones)}
					{foreach from=$regiones item=r}
						<option value="{$r.id}">{$r.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>		
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Guardar Cambios" class="btn btn-success">&nbsp;&nbsp;
			<a href="{$_layoutParams.root}comunas">Volver</a>
		</div>
	</form>
</div>
<div class="col-md-4">
	
</div>	


	
	
	
