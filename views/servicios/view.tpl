<div class="col-md-2"></div>
<div class="col-md-4">
	<h3>Ver Servicio</h3>
	
	{if isset($servicio) && count($servicio)}
		<p style="font-size: 18px"><strong>Nombre:</strong> {$servicio.nombre}</p>
		<p style="font-size: 18px"><strong>Proveedor:</strong> {$servicio.tipo}</p>	
		
	{/if}
	<p>
		<a href="{$_layoutParams.root}servicios/edit/{$servicio.id}">Editar</a>&nbsp;&nbsp;
		<a href="{$_layoutParams.root}servicios">Volver</a>
	</p>
	<hr>
	<h4>Planes Asociados</h4>
	{if isset($planes) && count($planes)}
		<ul type="square">
			{foreach from=$planes item=p}
				<li>
					<a href="{$_layoutParams.root}planes/view/{$p.id}">{$p.nombre}</a>
				</li>
			{/foreach}
		</ul>
	{else}
		<strong>No hay planes asociados</strong>
		<p>
			<a href="{$_layoutParams.root}planes/add">Agregar Planes</a>
		</p>
	{/if}
</div>
<div class="col-md-4">
	
</div>