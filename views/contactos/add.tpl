<div class="col-md-2"></div>
<div class="col-md-4">
	<h3>Formulario de Contacto</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form">
		<div class="form-group">
			<label>Email<span class="text-danger">*</span></label>
			<input type="email" name="email" class="form-control" value="{$datos.email|default:""}">
		</div>
		<div class="form-group">
			<label>Asunto<span class="text-danger">*</span></label>
			<select name="asunto" class="form-control">
				<option value="">Seleccione</option>
				{if isset($asuntos) && count($asuntos)}
					{foreach from=$asuntos item=as}
						<option value="{$as.id}">{$as.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<label>Mensaje<span class="text-danger">*</span></label>
			<textarea name="mensaje" id="" rows="6" class="form-control" style="resize: none"></textarea>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Enviar" class="btn btn-success">
			<a href="{$_layoutParams.root}index" class="btn btn-link">Cancelar</a>
		</div>
	</form>
</div>
<div class="col-md-2"></div>