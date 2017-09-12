<div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="{$_layoutParams.root}planes">Ver Soluciones</a></p>
</div>

<div class="col-md-4">
	<h3>Agregar Capacidades</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="uadulto">Nº de Urnas para adultos:<span class="text-danger"></span></label>
			<input type="number" name="uadulto" class="form-control" value="{$datos.uadulto|default:0}" placeholder="Número de urnas para adultos">
		</div>
		<div class="form-group">
			<label for="uparvulo">Nº de Urnas para párvulos:<span class="text-danger"></span></label>
			<input type="number" name="uparvulo" class="form-control" value="{$datos.uparvulo|default:0}" placeholder="Número de urnas para párvulos">
		</div>
		<div class="form-group">
			<label for="reducciones">Reducciones:<span class="text-danger"></span></label>
			<input type="number" name="reducciones" class="form-control" placeholder="Número de reducciones" value="{$datos.anio|default:""}">
		</div>
		<div class="form-group">
			<label for="anfora">Nº de ánforas:<span class="text-danger"></span></label>
			<input type="number" name="anfora" class="form-control" placeholder="Número de ánforas" value="{$datos.anio|default:""}">
		</div>
		<div class="form-group">
			<label for="plan">Seleccione el plan:<span class="text-danger">*</span></label>
			<select name="plan" id="" class="form-control">
				<option value="">Seleccione</option>
				{if isset($planes) && count($planes)}
					{foreach from=$planes item=p}
						<option value="{$p.id}">{$p.nombre}</option>
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
