<div class="col-md-2" style="padding-top: 20px">
</div>
<div class="col-md-4">
	
	<h3>Ver Mantención</h3>
	
	{if isset($mantencion) && count($mantencion)}
		<p><img src="{$_layoutParams.root}public/img/componentes/thumb/thumb_{$cinerario.imagen}" alt="Imagen cinerario"></p>
		<p style="font-size: 18px"><strong>Cobro:</strong> {if $mantencion.cobro==1}Si{else}No{/if}</p>
		<p style="font-size: 18px"><strong>Periodo:</strong> {if $mantencion.periodo==1}Si{elseif $mantencion==2}No{else}Sin Mantención{/if}</p>
		<p style="font-size: 18px"><strong>Solución:</strong> {$mantencion.solucion}</p>
	{/if}
	<p>
		<a href="{$_layoutParams.root}mantenciones/edit/{$mantencion.id}">Editar</a>&nbsp;&nbsp;
		<a href="{$_layoutParams.root}mantenciones">Volver</a>
	</p>
	<hr>
</div>
<div class="col-md-4">
	
</div>	
