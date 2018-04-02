<div class="col-md-2"></div>
<div class="col-md-4">
	<div style="padding-top: 50px"></div>
	<h3>Ver Región</h3>
		<p style="font-size: 18px"><strong>Nombre:</strong> {$region.nombre}</p>		
	<p>
		<a href="{$_layoutParams.root}regiones/edit/{$region.id}">Editar</a>&nbsp;&nbsp;
		<a href="{$_layoutParams.root}regiones">Volver</a>
	</p>
	<hr>
	<h4>Comunas Asociadas</h4>
	{if isset($comunas) && $comunas}
		<ul type="square">
			{foreach from=$comunas item=c}
				<li>
					<a href="{$_layoutParams.root}comunas/view/{$c.id}" class="btn btn-link">{$c.nombre}</a>
				</li>
			{/foreach}
		</ul>
	{else}
		<strong>No hay comunas asociadas</strong>
		<p>
			<a href="{$_layoutParams.root}comunas/add" class="btn btn-link">Agregar Comuna</a>
		</p>
	{/if}
</div>
<div class="col-md-4">
	
</div>	


	
	
	
