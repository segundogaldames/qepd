<div class="col-md-2" style="padding-top: 20px">
</div>
<div class="col-md-4">
	
	<h3>Ver Cinerario {$cinerario.plan}</h3>
	
	{if isset($cinerario) && count($cinerario)}
		<p><img src="{$_layoutParams.root}public/img/componentes/thumb/thumb_{$cinerario.imagen}" alt="Imagen cinerario"></p>
		<p style="font-size: 18px"><strong>Sala velatorio:</strong> {if $cinerario.sala==1} Si{else} No{/if}</p>
		<p style="font-size: 18px"><strong>Capilla ecuménica:</strong> {if $cinerario.capilla==1} Si{else} No{/if}</p>
		<p style="font-size: 18px"><strong>Podium:</strong> {if $cinerario.podium==1} Si{else} No{/if}</p>
		<p style="font-size: 18px"><strong>Liturgia:</strong> {if $cinerario.liturgia==1} Si{else} No{/if}</p>
		<p style="font-size: 18px"><strong>Amplificación:</strong> {if $cinerario.amplificacion==1} Si{else} No{/if}</p>
		<p style="font-size: 18px"><strong>Diácono:</strong> {if $cinerario.diacono==1} Si{else} No{/if}</p>
		<p style="font-size: 18px"><strong>Integrantes del coro:</strong> {$cinerario.coro}</p>	
		<p style="font-size: 18px"><strong>Cafetería:</strong> {if $cinerario.cafeteria==1} Básca{elseif $cinerario.cafeteria==2} Superior{else} No considera{/if}</p>	
		<p style="font-size: 18px"><strong>Ceremonia:</strong> {if $cinerario.ceremonia==1} Si{else} No{/if}</p>	
		<p style="font-size: 18px"><strong>Anfora?:</strong> {if $cinerario.anforaincl==1} Si{else} No{/if}</p>
		<p style="font-size: 18px"><strong>Plan:</strong> {$cinerario.plan}</p>
	{/if}
	<p>
		<a href="{$_layoutParams.root}cinerarios/edit/{$cinerario.id}">Editar</a>&nbsp;&nbsp;
		<a href="{$_layoutParams.root}cinerarios">Volver</a>
	</p>
	<hr>
</div>
<div class="col-md-4">
	
</div>	
