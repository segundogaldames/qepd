<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="{$_layoutParams.root}capacidades">Ver Capacidades</a></p>
</div>

<div class="col-md-4">
	<h3>Editar Capacidad</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="uadulto">Nº de Urnas para adultos:<span class="text-danger"></span></label>
			<input type="number" name="adulto" class="form-control" value="{$dato.adultos|default:0}" placeholder="Número de urnas para adultos">
		</div>
		<div class="form-group">
			<label for="uparvulo">Nº de Urnas para párvulos:<span class="text-danger"></span></label>
			<input type="number" name="parvulo" class="form-control" value="{$dato.parvulos|default:0}" placeholder="Número de urnas para párvulos">
		</div>
		<div class="form-group">
			<label for="reducciones">Reducciones:<span class="text-danger"></span></label>
			<input type="number" name="reducciones" class="form-control" placeholder="Número de reducciones" value="{$dato.reducciones|default:0}">
		</div>
		<div class="form-group">
			<label for="anfora">Nº de ánforas:<span class="text-danger"></span></label>
			<input type="number" name="anfora" class="form-control" placeholder="Número de ánforas" value="{$datos.anforas|default:0}">
		</div>
		<div class="form-group">
			<label for="plan">Seleccione la solución:<span class="text-danger">*</span></label>
			<select name="soluciones" id="" class="form-control">
				<option value="{$dato.solucion_id}">{$dato.solucion}</option>
				{if isset($soluciones) && count($soluciones)}
					{foreach from=$soluciones item=s}
						<option value="{$s.id}">Solucion {$s.plan}</option>
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
			<input type="submit" value="Modificar" class="btn btn-success">
			<a href="{$_layoutParams.root}capacidades" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>

<div class="col-md-4">
	
</div>
