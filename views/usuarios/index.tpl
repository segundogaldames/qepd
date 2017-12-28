<div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="{$_layoutParams.root}usuario/add">Agregar Usuarios</a></p>
</div>
<div class="col-md-8">
	{if isset($usuarios) && count($usuarios)}
		<h3>Lista de Usuarios</h3>
		<table class="table table-hover">
			<th>
				Nombre
			</th>
			<th>
				Email
			</th>
			<th>
				Rol
			</th>
			<th>
				Acciones
			</th>
			
				{foreach from=$usuarios item=u}
					<tr>
						<td>{ucfirst($u.nombre)} {ucfirst($u.apellido)}</td>
						<td>{$u.email}</td>
						<td>{$u.rol}</td>
						<td>
							<a href="{$_layoutParams.root}usuario/view/{$u.id}">Ver</a>&nbsp;&nbsp;
							<a href="{$_layoutParams.root}usuario/delete/{$u.id}" onclick="return eliminar('{$_layoutParams.root}usuario/delete/{$u.id}', '{$u.nombre} {$u.apellido}');">Eliminar</a>
						</td>
					</tr>

				{/foreach}
		{else}
			<p><strong>No hay usuarios registrados</strong></p>
			<p class="enlace"><a href="{$_layoutParams.root}usuario/add">Agregar Usuarios</a></p>
		{/if}
		
	</table>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
