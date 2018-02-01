<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="{$_layoutParams.root}planes">Planes</a></p>
</div>
<div class="col-md-4">
	
	<h3>Ver Urna {$urna.plan}</h3>
	
	{if isset($urna) && count($urna)}
		<p><img src="{$_layoutParams.root}public/img/componentes/thumb/thumb_{$urna.imagen}"></p>
		<p style="font-size: 18px"><strong>Modelo:</strong> {ucfirst($urna.modelo)}</p>
		<p style="font-size: 18px"><strong>Medidas:</strong> {ucfirst($urna.medidas)}</p>
		<p style="font-size: 18px"><strong>Material:</strong> {ucfirst($urna.material)}</p>
		<p style="font-size: 18px"><strong>Terminaciones:</strong> {ucfirst($urna.terminaciones)}</p>
		<p style="font-size: 18px"><strong>Color:</strong> {ucfirst($urna.color)}</p>
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
