<div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="{$_layoutParams.root}velatorios/add">Agregar Velatorio</a></p>
</div>
<div class="col-md-4">
	
	<h3>Ver Velatorio</h3>
	
	{if isset($velatorio) && count($velatorio)}
		<p><img src="{$_layoutParams.root}public/img/componentes/thumb/thumb_{$velatorio.imagen}" alt="Imagen Velatorio"></p>
		<p style="font-size: 18px"><strong>Trámites:</strong> {ucfirst($velatorio.tramites)}</p>
		<p style="font-size: 18px"><strong>Asesor a domicilio:</strong> {if($velatorio.asesor ==1)} Si {else}No {/if}</p>
		<p style="font-size: 18px"><strong>Sala velatorio:</strong> {if($velatorio.sala ==1)} Si {else}No {/if}</p>
		<p style="font-size: 18px"><strong>Capilla ecuménica:</strong> {if($velatorio.capilla ==1)} Si {else}No {/if}</p>
		<p style="font-size: 18px"><strong>N° de cirios:</strong> {$velatorio.cirios}</p>
		<p style="font-size: 18px"><strong>Plan:</strong> {ucfirst($urna.plan)}</p>			
	{/if}
	<p>
		<a href="{$_layoutParams.root}urnas/edit/{$urna.id}">Editar</a>&nbsp;&nbsp;
		<a href="{$_layoutParams.root}urnas">Volver</a>
	</p>
	<hr>
</div>
<div class="col-md-4">
	
</div>	
