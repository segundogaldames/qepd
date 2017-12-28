<div class="col-md-2"></div>
<div class="col-md-4">
	<h3>Editar Sede</h3>
	<form action="" method="post" name="form">
		<div class="form-group">
			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre" class="form-control" value="{$dato.sede|default:''}">
		</div>
		<div class="form-group">
			<label for="calle">Calle:</label>
			<input type="calle" name="calle" class="form-control" value="{$dato.calle|default:''}">
		</div>
		<div class="form-group">
			<label for="numero">Numero:</label>
			<input type="text" name="numero" class="form-control" value="{$dato.numero|default:''}">
		</div>
		<div class="form-group">
			<label for="sector">Sector:</label>
			<input type="text" name="sector" class="form-control" value="{$dato.sector|default:''}">
		</div>
		<div class="form-group">
			<label for="ubicacion">Ubicaciòn:</label>
			<input type="text" name="ubicacion" class="form-control" value="{$dato.ubicacion|default:''}">
		</div>
		<div class="form-group">
			<label for="empresa">Empresa actual: {$dato.empresa|default:''}</label>
			<select name="empresa" id="" class="form-control">
				<option value="{$dato.empresa_id}">{$dato.empresa}</option>
				{if isset($empresas) && count($empresas)}
					{foreach from=$empresas item=e}
						<option value="{$e.id}">{$e.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<label for="comuna">Comuna actual: {$dato.comuna|default:''}</label>
			<select name="comuna" id="" class="form-control">
				<option value="{$dato.comuna_id}">{$dato.comuna}</option>
				{if isset($comunas) && count($comunas)}
					{foreach from=$comunas item=c}
						<option value="{$c.id}">{$c.comuna}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Guardar Cambios" class="btn btn-success">&nbsp;&nbsp;
			<a href="{$_layoutParams.root}sedes">Volver</a>
		</div>
	</form>
</div>
<div class="col-md-4">
	
</div>	


	
	
	
