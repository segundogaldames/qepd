<div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="{$_layoutParams.root}telefonos/add">Agregar Teléfono</a></p>
</div>
<div class="col-md-4">
	
	<h3>Ver Teléfono</h3>
	
	{if isset($telefono) && count($telefono)}
		<p style="font-size: 18px"><strong>Número:</strong> {$telefono.numero}</p>
		<p style="font-size: 18px"><strong>Sede:</strong> {$telefono.sede}</p>			
	{/if}
	<p>
		<a href="{$_layoutParams.root}telefonos/edit/{$telefono.id}">Editar</a>&nbsp;&nbsp;
		<a href="{$_layoutParams.root}telefonos">Volver</a>
	</p>
	<hr>
</div>
<div class="col-md-4">
	
</div>	
