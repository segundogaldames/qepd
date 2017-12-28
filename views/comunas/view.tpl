<div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="{$_layoutParams.root}telefonos/add">Agregar Comuna</a></p>
</div>
<div class="col-md-4">
	
	<h3>Ver Comuna</h3>
	
	{if isset($comuna) && count($comuna)}
		<p style="font-size: 18px"><strong>Nombre:</strong> {$comuna.nombre}</p>
		<p style="font-size: 18px"><strong>Región:</strong> {$comuna.region}</p>			
	{/if}
	<p>
		<a href="{$_layoutParams.root}comunas/edit/{$comuna.id}">Editar</a>&nbsp;&nbsp;
		<a href="{$_layoutParams.root}comunas">Volver</a>
	</p>
	<hr>
</div>
<div class="col-md-4">
	
</div>	
