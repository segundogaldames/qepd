<div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="{$_layoutParams.root}usuarios/add">Agregar Usuario</a></p>
</div>
<div class="col-md-4">
	
	<h3>Ver Usuario</h3>
	
	{if isset($usuario) && count($usuario)}
		<p style="font-size: 18px"><strong>Nombre:</strong> {ucfirst($usuario.nombre)} {ucfirst($usuario.apellido)}</p>
		<p style="font-size: 18px"><strong>Email:</strong> {$usuario.email}</p>
		<p style="font-size: 18px"><strong>Rol:</strong> {$usuario.rol}</p>
		<p style="font-size: 18px"><strong>Fecha de creación:</strong> {$usuario.created}</p>
		<p style="font-size: 18px"><strong>Fecha de actualización:</strong> {$usuario.updated}</p>
	{/if}
	<p>
		<a href="{$_layoutParams.root}usuarios/edit/{$usuario.id}">Editar</a>&nbsp;&nbsp;
		<a href="{$_layoutParams.root}usuarios">Volver</a>
	</p>
	<hr>
</div>
<div class="col-md-4">
	
</div>

