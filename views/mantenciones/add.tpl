<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="{$_layoutParams.root}mantenciones">Ver Mantenciones</a></p>
</div>

<div class="col-md-4">
	<h3>Agregar Mantenciones</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="cobro">Cobro:<span class="text-danger">*</span></label>
			<select name="cobro" id="" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="periodo">Periodo:<span class="text-danger">*</span></label>
			<select name="periodo" id="" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Anual</option>
				<option value="2">Perpetua</option>
				<option value="3">Sin Mantenciones</option>
			</select>
		</div>
		<div class="form-group">
			<label for="solucion">Solución:<span class="text-danger">*</span></label>
			<select name="solucion" id="" class="form-control">
				<option value="">Seleccione</option>
				{if isset($soluciones) && count($soluciones)}
					{foreach from=$soluciones item=s}
						<option value="{$s.id}">{$s.plan}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Registrar" class="btn btn-success">
			<a href="{$_layoutParams.root}mantenciones" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>

<div class="col-md-4">
	
</div>
