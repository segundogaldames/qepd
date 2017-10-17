<div class="col-md-2"></div>
<div class="col-md-4">
	<div style="padding-top: 50px"></div>
	<h3>Ver Tipo Empresa</h3>
	
	{if isset($tipo) && count($tipo)}
		<p style="font-size: 18px"><strong>Nombre:</strong> {$tipo.nombre}</p>
		
	
	<p>
		<a href="{$_layoutParams.root}tipoempresas/edit/{$tipo.id}">Editar</a>&nbsp;&nbsp;
		<a href="{$_layoutParams.root}tipoempresas">Volver</a>
	</p>

	{/if}
</div>
<div class="col-md-4">
	
</div>	
