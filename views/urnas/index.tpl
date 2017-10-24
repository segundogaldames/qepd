<div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="{$_layoutParams.root}urnas/add">Agregar Urnas</a></p>
</div>
<div class="col-md-8">
	{if isset($urnas) && count($urnas)}
		<h3>Lista de Urnas</h3>
		<table class="table table-hover">
			<th>
				Modelo
			</th>
			<th>
				Material
			</th>
			<th>
				color
			</th>
			<th>
				Plan
			</th>
			<th>
				Acciones
			</th>
			
				{foreach from=$urnas item=u}
					<tr>
						<td>{ucfirst($u.modelo)}</td>
						<td>{ucfirst($u.material)}</td>
						<td>{ucfirst($u.color)}</td>
						<td>{ucwords($u.plan)}</td>
						<td>
							<a href="{$_layoutParams.root}urnas/view/{$u.id}">Ver</a>&nbsp;&nbsp;
							<a href="{$_layoutParams.root}urnas/delete/{$u.id}" onclick="return eliminar('{$_layoutParams.root}urnas/delete/{$u.id}', '{$u.modelo}');">Eliminar</a>
						</td>
					</tr>

				{/foreach}
		{else}
			<p><strong>No hay urnas registradas</strong></p>
			<p class="enlace"><a href="{$_layoutParams.root}urnas/add">Agregar Urnas</a></p>
		{/if}
		
	</table>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
