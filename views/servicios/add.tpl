<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="{$_layoutParams.root}servicios">Ver Servicios</a></p>
</div>

<div class="col-md-4">
	<h3>Agregar Servicio</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="nombre">Ingrese nombre:<span class="text-danger">*</span></label>
			<input type="text" name="nombre" class="form-control" placeholder="Nombre del servicio" value="{$datos.nombre|default:""}">
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
</div>

<div class="col-md-4">
	
</div>
