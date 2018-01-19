<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="{$_layoutParams.root}sedes">Ver Sedes</a></p>
</div>

<div class="col-md-4">
	<h3>Agregar Sede o Sucursal</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="nombre">Ingrese nombre:<span class="text-danger">*</span></label>
			<input type="text" name="nombre" class="form-control" placeholder="Nombre de la sede o sucursal" value="{$datos.nombre|default:""}">
		</div>
		<div class="form-group">
			<label for="calle">Ingrese calle:<span class="text-danger">*</span></label></label>
			<input type="text" name="calle" class="form-control" placeholder="Calle donde se ubica la sede o sucursal" value="{$datos.calle|default:""}">
		</div>
		<div class="form-group">
			<label for="numero">Ingrese número:<span class="text-danger">*</span></label></label>
			<input type="text" name="numero" class="form-control" placeholder="Número donde se ubica la sede o sucursal" value="{$datos.numero|default:""}">
		</div>
		<div class="form-group">
			<label for="sector">Ingrese sector (opcional):</label>
			<input type="text" name="sector" class="form-control" placeholder="Sector donde se ubica la sede o sucursal" value="{$datos.sector|default:""}">
		</div>
		<div class="form-group">
			<label for="ubicacion">Ingrese ubicación (opcional):</label>
			<input type="text" name="ubicacion" class="form-control" placeholder="Ubicación, coordenadas, mapa de sede o sucursal" value="{$datos.ubicacion|default:""}">
		</div>
		
		<div class="form-group">
			<label for="comuna">Seleccione comuna:</label>
			<select name="comuna" id="" class="form-control">
				<option value="">Comunas</option>
				{if isset($comunas) && count($comunas)}
					{foreach from=$comunas item=c}
						<option value="{$c.id}">{$c.comuna}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<label for="vendedor">Seleccione vendedor(opcional):</label>
			<select name="vendedor" id="" class="form-control">
				<option value="">Vendedores</option>
				{if isset($vendedores) && count($vendedores)}
					{foreach from=$vendedores item=v}
						<option value="{$v.id}">{$v.nombre} {$v.apellido}</option>
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
