<div style="padding-top: 50px"></div>
<div class="col-md-2"></div>
<div class="col-md-4">
	<h3>Editar Urna</h3>
	<form action="" method="post" name="form">
		<div class="form-group">
			<label for="modelo">Modelo:<span class="text-danger">*</span></label>
			<input type="text" name="modelo" class="form-control" placeholder="Modelo de la urna" value="{$dato.modelo|default:""}">
		</div>
		<div class="form-group">
			<label for="medidas">Medidas:</label>
			<input type="text" name="medidas" class="form-control" placeholder="Medidas de la urna" value="{$dato.medidas|default:""}">
		</div>
		<div class="form-group">
			<label for="material">Material:<span class="text-danger">*</span></label></label>
			<input type="text" name="material" class="form-control" placeholder="Material de la urna" value="{$dato.material|default:""}">
		</div>
		<div class="form-group">
			<label for="terminaciones">Terminaciones:<span class="text-danger">*</span></label></label>
			<input type="text" name="terminaciones" class="form-control" placeholder="Terminaciones de la urna" value="{$dato.terminaciones|default:""}">
		</div>
		<div class="form-group">
			<label for="color">Color:<span class="text-danger">*</span></label></label>
			<input type="text" name="color" class="form-control" placeholder="Color de la urna" value="{$dato.color|default:""}">
		</div>
		<div class="form-group">
			<label for="plan">Plan actual: {$dato.plan}<span class="text-danger">*</span></label>
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
			<input type="submit" value="Guardar Cambios" class="btn btn-success">&nbsp;&nbsp;
			<a href="{$_layoutParams.root}urnas" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>
<div class="col-md-4">
	
</div>	


	
	
	
