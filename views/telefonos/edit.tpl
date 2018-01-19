<div class="col-md-2"></div>
<div class="col-md-4">
	<h3>Editar Teléfono</h3>
	<form action="" method="post" name="form">
		<div class="form-group">
			<label for="numero">Numero:</label>
			<input type="text" name="numero" class="form-control" value="{$dato.telefono|default:''}">
		</div>
		<div class="form-group">
			<label for="sedes">Sede actual: {$dato.sede|default:''}</label>
			<select name="sede" id="" class="form-control">
				<option value="{$dato.sede_id}">{$dato.sede} - {$dato.empresa}</option>
				{if isset($sedes) && count($sedes)}
					{foreach from=$sedes item=s}
						<option value="{$s.id}">{$s.sede} - {$s.empresa}</option>
					{/foreach}
				{/if}
			</select>
		</div>		
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Guardar Cambios" class="btn btn-success">&nbsp;&nbsp;
			<a href="{$_layoutParams.root}telefonos">Volver</a>
		</div>
	</form>
</div>
<div class="col-md-4">
	
</div>	


	
	
	
