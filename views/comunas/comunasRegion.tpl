<div class="col-md-2" style="padding-left: 20px">
	<h4>Buscar en</h4>
	{if isset($regiones) && count($regiones)}
		{foreach from=$regiones item=r}
			<p class="enlace">
				<a href="{$_layoutParams.root}comunas/comunasRegion/{$r.id}">{$r.nombre}</a>
			</p>
		{/foreach}
		{/if}
</div>
<div class="col-md-10">
	<h4>Planes Por comuna</h4>
	{if isset($comunas) && count($comunas)}
		<ul class="list-unstyled">
			{foreach from=$comunas item=c}
				<li>
					<a href="{$_layoutParams.root}planes/planesComuna/{$c.id}" class="btn btn-link">{$c.nombre}</a>
				</li>
			{/foreach}
		</ul>
	{/if}
	<p>{if isset($paginacion)}{$paginacion}{/if}</p>
</div>