<div class="col-md-2"></div>
<div class="col-md-4">
	<div style="padding-top: 50px"></div>
	<h3>Editar Servicio</h3>
	
	<form action="" method="post">
		<div class="form-group">
			<label for="nombre">Ingrese nombre:<span class="text-danger">*</span></label>
			<input type="text" name="nombre" class="form-control" placeholder="Nombre del servicio" value="{$dato.nombre|default:""}">
		</div>
		<div class="form-group">
			<label for="tipo">Seleccione un tipo de empresa:</label>
			<select name="tipo" id="" class="form-control">
				<option value="">Tipo Empresas</option>
				{if isset($tipos) && count($tipos)}
					{foreach from=$tipos item=t}
						<option value="{$t.id}">{$t.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Registrar" class="btn btn-success">
		</div>
	</form>
	<p>
		<a href="{$_layoutParams.root}servicios">Volver</a>
	</p>
	
</div>
<div class="col-md-4">
	
</div>