<div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="{$_layoutParams.root}planes">Ver Soluciones</a></p>
</div>

<div class="col-md-4">
	<h3>Agregar Soluciones</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="solucion">Solucion:<span class="text-danger">*</span></label>
			<select name="solucion" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Familiar</option>
				<option value="2">Individual</option>
			</select>
		</div>
		<div class="form-group">
			<label for="periodo">Periodo:<span class="text-danger">*</span></label>
			<select name="solucion" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Perpetua</option>
				<option value="2">Temporal</option>
			</select>
		</div>
		<div class="form-control">
			<label for="anio">Años:<span class="text-danger">*</span></label>
			<input type="number" name="anio" class="form-control" value="{$datos.toldo|default:""}" placeholder="Años de solución">
		</div>
		<div class="form-group">
			<label for="tipo_servicio">Seleccione el tipo de solución:<span class="text-danger">*</span></label></label>
			<select name="tipo_servicio" id="" class="form-control">
				<option value="">Seleccione</option>
				{if isset($tipoplanes) && count($tipoplanes)}
					{foreach from=$tipoplanes item=tp}
						<option value="{$tp.id}">{$tp.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<label for="tipo_plan">Seleccione el tipo de plan:<span class="text-danger">*</span></label></label>
			<select name="tipo_plan" id="" class="form-control">
				<option value="">Tipo Plan</option>
				{if isset($tipoplanes) && count($tipoplanes)}
					{foreach from=$tipoplanes item=tp}
						<option value="{$tp.id}">{$tp.nombre}</option>
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
