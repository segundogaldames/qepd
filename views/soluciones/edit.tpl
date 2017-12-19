<div class="col-md-2" style="padding-top: 20px">
	
</div>

<div class="col-md-4">
	<h3>Editar Soluciones</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="solucion">Solucion:<span class="text-danger">*</span></label>
			<select name="solucion" class="form-control">
				<option value="{$dato.solucion}">{if $dato.solucion==1}Familiar{else}Individual{/if}</option>
				<option value="1">Familiar</option>
				<option value="2">Individual</option>
			</select>
		</div>
		<div class="form-group">
			<label for="periodo">Periodo:<span class="text-danger">*</span></label>
			<select name="periodo" class="form-control">
				<option value="{$dato.periodo}">{if $dato.solucion==1}Perpetua{else}Temporal{/if}</option>
				<option value="1">Perpetua</option>
				<option value="2">Temporal</option>
			</select>
		</div>
		<div class="form-group">
			<label for="anio">Años:<span class="text-danger">*</span></label>
			<input type="number" name="anio" class="form-control" placeholder="Años" value="{$dato.anios|default:""}">
		</div>
		<div class="form-group">
			<label for="tipo_solucion">Seleccione el tipo de solución:<span class="text-danger">*</span></label>
			<select name="tipo_solucion" id="" class="form-control">
				<option value="{$dato.tipo_solucion_id}">{$dato.tipo}</option>
				{if isset($tipo_soluciones) && count($tipo_soluciones)}
					{foreach from=$tipo_soluciones item=ts}
						<option value="{$ts.id}">{$ts.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<label for="plan">Seleccione el plan:<span class="text-danger">*</span></label>
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
			<input type="submit" value="Guardar" class="btn btn-success">
			<a href="{$_layoutParams.root}soluciones" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>

<div class="col-md-4">
	
</div>
