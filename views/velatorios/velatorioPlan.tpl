<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="{$_layoutParams.root}planes">Planes</a></p>
</div>
<div class="col-md-4">
	
	<h3>Velatorio {$velatorio.plan}</h3>
	
	{if isset($velatorio) && count($velatorio)}
		<p><img src="{$_layoutParams.root}public/img/componentes/thumb/thumb_{$velatorio.imagen}" alt="Imagen Velatorio"></p>
		<p style="font-size: 18px"><strong>Trámites:</strong> {ucfirst($velatorio.tramites)}</p>
		<p style="font-size: 18px"><strong>Asesor a domicilio:</strong> {if $velatorio.asesor ==1} Si {else}No {/if}</p>
		<p style="font-size: 18px"><strong>Sala velatorio:</strong> {if $velatorio.sala ==1} Si {else}No {/if}</p>
		<p style="font-size: 18px"><strong>Capilla ecuménica:</strong> {if $velatorio.capilla ==1} Si {else}No {/if}</p>
		<p style="font-size: 18px"><strong>N° de Cirios:</strong> {$velatorio.cirios}</p>
		<p style="font-size: 18px"><strong>N° de Portacirios:</strong> {$velatorio.portacirios}</p>
		<p style="font-size: 18px"><strong>N° de Cruces:</strong> {$velatorio.cruces}</p>
		<p style="font-size: 18px"><strong>N° de Flores en canasto:</strong> {$velatorio.florescanastos}</p>
		<p style="font-size: 18px"><strong>N° de Flores cubreurna:</strong> {$velatorio.florescubreurnas}</p>
		<p style="font-size: 18px"><strong>N° de Libros de Condolencias:</strong> {$velatorio.condolencias}</p>
		<p style="font-size: 18px"><strong>Parroco:</strong> {if $velatorio.parroco==1} Si{else} No{/if}</p>
		<p style="font-size: 18px"><strong>N° de Integrantes del coro:</strong> {$velatorio.coro}</p>
		<p style="font-size: 18px"><strong>N° de Avisos de prensa:</strong> {$velatorio.avisosprensa}</p>
		<p style="font-size: 18px"><strong>N° de Tarjetas de agradecimiento:</strong> {$velatorio.tarjetas}</p>
		<p style="font-size: 18px"><strong>Cafetería:</strong> {if $velatorio.cafeteria==1} Básica{elseif $velatorio.cafeteria==2} Superior{else} Ninguna{/if}</p>
		<p style="font-size: 18px"><strong>Plan:</strong> {ucfirst($velatorio.plan)}</p>			
	{/if}
	<p>
		<a href="{$_layoutParams.root}velatorios/edit/{$velatorio.id}">Editar</a>&nbsp;&nbsp;
		<a href="{$_layoutParams.root}velatorios">Volver</a>
	</p>
	<hr>
</div>
<div class="col-md-4">
	
</div>	
