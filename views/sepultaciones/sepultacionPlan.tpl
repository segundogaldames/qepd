<div class="col-md-2"></div>
<div class="col-md-4">
	<h3>Ver Sepultación {$sepultacion.plan}</h3>
	
	{if isset($sepultacion) && count($sepultacion)}
		<p style="font-size: 18px"><strong>Sala velatorio:</strong> {if $sepultacion.sala==1}Si{else}No{/if}</p>
		<p style="font-size: 18px"><strong>Capilla ecuménica:</strong> {if $sepultacion.capilla}Si{else}No{/if}</p>
		<p style="font-size: 18px"><strong>Liturgia o responso:</strong> {if $sepultacion.liturgia}Si{else}No{/if}</p>
		<p style="font-size: 18px"><strong>N° de toldos:</strong> {$sepultacion.toldos}</p>
		<p style="font-size: 18px"><strong>N° de sillas:</strong> {$sepultacion.sillas}</p>
		<p style="font-size: 18px"><strong>Amplificación:</strong> {if $sepultacion.amplificacion==1}Si{else}No{/if}</p>
		<p style="font-size: 18px"><strong>Diácono:</strong> {if $sepultacion.diacono==1}Si{else}No{/if}</p>
		<p style="font-size: 18px"><strong>Coro:</strong> {$sepultacion.coro} integrantes</p>
		<p style="font-size: 18px"><strong>Cafetería:</strong> {if $sepultacion.cafeteria==1} Básica{elseif $sepultacion.cafeteria==2}Superior{else} No disponible{/if}</p>
		<p style="font-size: 18px"><strong>Plan:</strong> {$sepultacion.plan}</p>
					
	{/if}
	<p>
		<a href="{$_layoutParams.root}sepultaciones/edit/{$sepultacion.id}">Editar</a>&nbsp;&nbsp;
		<a href="{$_layoutParams.root}sepultaciones">Volver</a>
	</p>
	<hr>
</div>
<div class="col-md-4">
	
</div>