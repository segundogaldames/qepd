<div style="padding-top: 50px"></div>
<div class="col-md-2">
	{if Session::get('role_id') == 1}
	<p class="enlace"><a href="{$_layoutParams.root}planes">Ver Planes</a></p>
	{/if}
</div>
<div class="col-md-8">
	<h3>Componentes Por Servicios</h3>
	{if isset($componentesServicios) && count($componentesServicios)}
		{foreach from=$componentesServicios item=cs}
		<p><a href="{$_layoutParams.root}{$cs.url_view}{$plan}">{$cs.nombre}</a></p>
		{/foreach}
	{/if}
</div>
<div class="col-md-2">
	
</div>	