<div class="col-md-2"></div>
<div class="col-md-4">
	<h3>Ver Ubicación</h3>
	
	{if isset($ubicacion) && count($ubicacion)}
		<p style="font-size: 18px"><strong>Ubicación:</strong> {if $ubicacion.ubicacion==1}Central{else}Periférica{/if}</p>
		<p style="font-size: 18px"><strong>Estacionamientos:</strong> {if $ubicacion.estacionamientos==1}Si{else}No{/if}</p>
		<p style="font-size: 18px"><strong>Direccion:</strong> {$ubicacion.direccion}</p>
		<p style="font-size: 18px"><strong>Solución Asociada:</strong> {$ubicacion.solucion}</p>	
	{/if}
	<p>
		<a href="{$_layoutParams.root}ubicaciones/edit/{$ubicacion.id}">Editar</a>&nbsp;&nbsp;
		<a href="{$_layoutParams.root}ubicaciones">Volver</a>
	</p>
	<hr>
</div>
<div class="col-md-4">
	
</div>