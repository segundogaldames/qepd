<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="{$_layoutParams.root}planes">Planes</a></p>
</div>
<div class="col-md-4">
	
	<h3>Ver Anfora {$anfora.plan}</h3>
	
	{if isset($anfora) && count($anfora)}
		<p><img src="{$_layoutParams.root}public/img/componentes/thumb/thumb_{$cinerario.imagen}" alt="Imagen cinerario"></p>
		<p style="font-size: 18px"><strong>Modelo:</strong> {$anfora.modelo}</p>
		<p style="font-size: 18px"><strong>Plan:</strong> {$anfora.plan}</p>
		<p style="font-size: 18px"><strong>Descripción:</strong> {$anfora.descripcion}</p>
	{/if}
	<p>
		<a href="{$_layoutParams.root}anforas/edit/{$anfora.id}">Editar</a>&nbsp;&nbsp;
		<a href="{$_layoutParams.root}anforas">Volver</a>
	</p>
	<hr>
</div>
<div class="col-md-4">
	
</div>	
