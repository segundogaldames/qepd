<div class="col-md-2"></div>
<div class="col-md-4">
	<div style="padding-top: 50px"></div>
	<h3>Ver Servicio</h3>
	
	{if isset($servicio) && count($servicio)}
		<p style="font-size: 18px"><strong>Nombre:</strong> {$servicio.nombre}</p>
		<p style="font-size: 18px"><strong>Proveedor:</strong> {$servicio.tipo}</p>	
		
	{/if}
	<p>
		<a href="{$_layoutParams.root}servicios/edit/{$servicio.id}">Editar</a>&nbsp;&nbsp;
		<a href="{$_layoutParams.root}servicios">Volver</a>
	</p>
	
</div>
<div class="col-md-4">
	
</div>