<div style="padding-top: 60px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="{$_layoutParams.root}componentes/add">Agregar Componente</a></p>
	<hr>
	{if isset($componentes) &&count($componentes)}
		{foreach from=$componentes item=c}
			<p class="enlace">
				<a href="{$_layoutParams.root}{$c.url_index}">{$c.nombre}</a>
			</p>
		{/foreach}
	{/if}
</div>
<div class="col-md-10">
	<h3>Lista de Componentes</h3>
	<table class="table table-hover">
		<th>
			Nombre
		</th>
		<th>
			Servicio
		</th>
		<th>URL Index</th>
		<th>
			URL Add
		</th>
		<th>
			URL View
		</th>
		<th>
			URL Plan
		</th>
		<th>
			Acciones
		</th>
		
			{if isset($componentes) && count($componentes)}
				{foreach from=$componentes item=c}
					<tr>
						<td>{$c.nombre}</td>
						<td>{$c.servicio}</td>
						<td>{$c.url_index}</td>
						<td>{$c.url_add}</td>
						<td>{$c.url_view}</td>
						<td>{$c.url_plan}</td>
						<td>
							<a href="{$_layoutParams.root}componentes/edit/{$c.id}">Editar</a>&nbsp;&nbsp;
							<a href="{$_layoutParams.root}componentes/delete/{$c.id}" onclick="return eliminar('$_layoutParams.root}componentes/delete/{$c.id}', '{$c.nombre}')">Eliminar</a>
						</td>
					</tr>

				{/foreach}
			{/if}
		
	</table>
</div>
	


	
	
	
