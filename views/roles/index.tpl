<div class="col-md-2"></div>
<div class="col-md-4">
	<h3>Lista de Roles</h3>
	<table class="table table-hover">
		<th>
			Role
		</th>
		<th>
			Acciones
		</th>
		
			{if isset($roles) && count($roles)}
				{foreach from=$roles item=r}
					<tr>
						<td>{$r.nombre}</td>
						<td>
							<a href="{$_layoutParams.root}roles/view/{$r.id}">Ver</a>&nbsp;&nbsp;
							<a href="{$_layoutParams.root}roles/delete/{$r.id}" onclick="return eliminar('{$_layoutParams.root}roles/delete/{$r.id}', '{$r.nombre}')">Eliminar</a>
						</td>
					</tr>

				{/foreach}
			{/if}
		
	</table>
</div>
<div class="col-md-4">
	
</div>	


	
	
	
