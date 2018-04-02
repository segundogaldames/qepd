<div class="col-md-2" style="padding-top: 20px">
</div>
<div class="col-md-4">
	
	<h3>Ver Construcción</h3>
	
	{if isset($construccion) && count($construccion)}
		<p><img src="{$_layoutParams.root}public/img/componentes/thumb/thumb_{$cinerario.imagen}" alt="Imagen cinerario"></p>
		<p style="font-size: 18px"><strong>Tipo:</strong> {$construccion.construccion}</p>
		<p style="font-size: 18px"><strong>Material:</strong> {$construccion.material}</p>
		<p style="font-size: 18px"><strong>Terminación:</strong> {$construccion.terminacion}</p>
		<p style="font-size: 18px"><strong>Grabado:</strong> {if $construccion.grabado==1}Si{else}No{/if}</p>
		<p style="font-size: 18px"><strong>Solución:</strong> {$construccion.solucion}</p>
	{/if}
	<p>
		<a href="{$_layoutParams.root}construcciones/edit/{$construccion.id}">Editar</a>&nbsp;&nbsp;
		<a href="{$_layoutParams.root}construcciones">Volver</a>
	</p>
	<hr>
</div>
<div class="col-md-4">
	
</div>	
