<div class="col-md-2" style="padding-top: 20px">
</div>
<div class="col-md-4">
	
	<h3>Ver Anfora</h3>
	
	{if isset($anfora) && count($anfora)}
		<p><img src="{$_layoutParams.root}public/img/componentes/thumb/thumb_{$cinerario.imagen}" alt="Imagen cinerario"></p>
		<p style="font-size: 18px"><strong>Modelo:</strong> {$anfora.modelo}</p>
		<p style="font-size: 18px"><strong>Plan:</strong> {$anfora.plan}</p>
	{/if}
	<p>
		<a href="{$_layoutParams.root}anforas/edit/{$anfora.id}">Editar</a>&nbsp;&nbsp;
		<a href="{$_layoutParams.root}anforas">Volver</a>
	</p>
	<hr>
</div>
<div class="col-md-4">
	
</div>	
