<div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="{$_layoutParams.root}urnas/add">Agregar Traslado</a></p>
</div>
<div class="col-md-4">
	
	<h3>Ver Traslado</h3>
	
	{if isset($traslado) && count($traslado)}
		<p><img src="{$_layoutParams.root}public/img/componentes/thumb/thumb_{$traslado.imagen}" alt="Imagen traslado"></p>
		<p style="font-size: 18px"><strong>Carroza de Instalación:</strong> {if $traslado.instalacion==1} Si{else} No{/if}</p>
		<p style="font-size: 18px"><strong>Carroza de Funeral:</strong> {if $traslado.funeral==1} Si{else} No{/if}</p>
		<p style="font-size: 18px"><strong>Carroza con Flores:</strong> {if $traslado.conflores==1} Si{else} No{/if}</p>
		<p style="font-size: 18px"><strong>Vehículo de Acompañamiento:</strong> {if $traslado.acompanamiento==1} Si{else} No{/if}</p>
		<p style="font-size: 18px"><strong>N° de Pasajeros:</strong> {$traslado.pasajeros}</p>
		<p style="font-size: 18px"><strong>Plan:</strong> {ucfirst($traslado.plan)}</p>			
	{/if}
	<p>
		<a href="{$_layoutParams.root}traslados/edit/{$traslado.id}">Editar</a>&nbsp;&nbsp;
		<a href="{$_layoutParams.root}traslados">Volver</a>
	</p>
	<hr>
</div>
<div class="col-md-4">
	
</div>	
