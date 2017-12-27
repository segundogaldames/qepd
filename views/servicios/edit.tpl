<div class="col-md-2"></div>
<div class="col-md-4">
	<h3>Editar Servicio</h3>
	
	<form action="" method="post">
		<div class="form-group">
			<label for="nombre">Ingrese nombre:<span class="text-danger">*</span></label>
			<input type="text" name="nombre" class="form-control" placeholder="Nombre del servicio" value="{$dato.nombre|default:""}">
		</div>
		<div class="form-group">
			<label>Tipo de empresa actual:{$dato.tipo}</label>
			<select name="tipo" id="" class="form-control">
				<option value="{$dato.tipo_empresa_id}">{$dato.tipo}</option>
				{if isset($tipos) && count($tipos)}
					{foreach from=$tipos item=t}
						<option value="{$t.id}">{$t.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Guardar Cambios" class="btn btn-success">
			<a href="{$_layoutParams.root}servicios" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>
<div class="col-md-4">
	
</div>