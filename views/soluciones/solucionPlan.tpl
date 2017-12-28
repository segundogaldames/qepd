<div class="col-md-2"></div>
<div class="col-md-4">
	<h3>Ver Solución {$solucion.plan}</h3>
	
	{if isset($solucion) && count($solucion)}
		<p style="font-size: 18px"><strong>Solucion:</strong> {if $solucion.solucion==1}Familiar{else}Individual{/if}</p>
		<p style="font-size: 18px"><strong>Periodo:</strong> {if $solucion.periodo==1}Perpetua{else}Temporal{/if}</p>
		<p style="font-size: 18px"><strong>Años:</strong> {$solucion.anios}</p>
		<p style="font-size: 18px"><strong>Tipo Solución:</strong> {$solucion.tipo}</p>
		<p style="font-size: 18px"><strong>Plan:</strong> {$solucion.plan}</p>	
	{/if}
	<p>
		<a href="{$_layoutParams.root}soluciones/edit/{$solucion.id}">Editar</a>&nbsp;&nbsp;
		<a href="{$_layoutParams.root}soluciones">Volver</a>
	</p>
	<hr>
	<p>
		<a href="{$_layoutParams.root}soluciones/view/{$solucion.id}">Componentes asociados</a>
	</p>
</div>
<div class="col-md-4">
	
</div>