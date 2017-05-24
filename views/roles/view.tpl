<div class="col-md-2"></div>
<div class="col-md-4">
	<div style="padding-top: 50px"></div>
	<h3>Ver Roles</h3>
	
	{if isset($role) && count($role)}
		<p style="font-size: 18px"><strong>Nombre:</strong> {$role.nombre}</p>		
	{/if}
	<p>
		<a href="{$_layoutParams.root}roles/edit/{$role.id}">Editar</a>&nbsp;&nbsp;
		<a href="{$_layoutParams.root}roles">Volver</a>
	</p>
</div>
<div class="col-md-4">
	
</div>	


	
	
	
