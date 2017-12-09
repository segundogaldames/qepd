<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="{$_layoutParams.root}empresas/add">Agregar Empresa</a></p>
	<hr>
	<p class="enlace"><a href="{$_layoutParams.root}tipoempresas/">Tipo Empresas</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}sedes/">Sedes</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}telefonos/">Teléfonos</a></p>
</div>
<div class="col-md-8">
	<h3>Lista de Empresas</h3>
	{if isset($empresas) && count($empresas)}
	<table class="table table-hover">
		<th>
			Nombre
		</th>
		<th>
			Email
		</th>
		<th>
			Usuario
		</th>
		<th>
			Tipo Empresa
		</th>
		<th>
			Acciones
		</th>
		
			
				{foreach from=$empresas item=emp}
					<tr>
						<td>{$emp.nombre}</td>
						<td>{$emp.email}</td>
						<td>{$emp.nom_usuario} {$emp.apellido} </td>
						<td>{$emp.tipo}</td>
						<td>
							<a href="{$_layoutParams.root}empresas/view/{$emp.id}">Ver</a>&nbsp;&nbsp;
							<a href="{$_layoutParams.root}empresas/delete/{$emp.id}" onclick="return eliminar('{$_layoutParams.root}empresas/delete/{$emp.id}', '{$emp.nombre}')">Eliminar</a>
						</td>
					</tr>

				{/foreach}
				
		
	</table>
	{else}
				<strong>No hay empresas registradas</strong>
	{/if}
</div>
<div class="col-md-2">
	
</div>	


	
	
	
