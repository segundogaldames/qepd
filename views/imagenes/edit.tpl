<div class="col-md-2" style="padding-top: 20px">
	
</div>

<div class="col-md-4">
	<h3>Editar Imágenes</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="titulo">Título:<span class="text-danger">*</span></label>
			<input type="text" name="titulo" value="{$dato.titulo|default:""}">
		</div>
		<div class="form-group">
			<label for="componente">Componente:<span class="text-danger">*</span></label>
			<select name="componente" id="" class="form-control">
				<option value="{$dato.componente_id}">{$dato.componente}</option>
				{if isset($componentes) && count($componentes)}
					{foreach from=$componentes item=c}
						<option value="{$c.id}">{$c.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<label for="plan">Plan:<span class="text-danger">*</span></label>
			<select name="plan" id="" class="form-control">
				<option value="{$dato.plan_id}">{$dato.plan}</option>
				{if isset($planes) && count($planes)}
					{foreach from=$planes item=p}
						<option value="{$p.id}">{$p.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Guardar Cambios" class="btn btn-success">
			<a href="{$_layoutParams.root}mantenciones" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>

<div class="col-md-4">
	
</div>
