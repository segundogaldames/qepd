<div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="{$_layoutParams.root}empresas/add">Agregar Componente</a></p>
</div>
<div class="col-md-8">
	<h3>Lista de Componentes</h3>
	<table class="table table-hover">
		<th>
			Nombre
		</th>
		<th>
			Servicio
		</th>
		<th>
			URL
		</th>
		<th>
			Acciones
		</th>
		
			{if isset($componentes) && count($componentes)}
				{foreach from=$componentes item=c}
					<tr>
						<td>{$c.nombre}</td>
						<td>{$c.servicio}</td>
						<td>{$c.url}</td>
						<td>
							<a href="{$_layoutParams.root}componentes/edit/{$c.id}">Editar</a>&nbsp;&nbsp;
							<a href="{$_layoutParams.root}componentes/delete/{$c.id}">Eliminar</a>
						</td>
					</tr>

				{/foreach}
			{/if}
		
	</table>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
