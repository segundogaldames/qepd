<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="{$_layoutParams.root}tipoplanes">Tipo de Planes</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}servicios">Servicios</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}cotizaciones">Cotizaciones</a></p>
</div>
<div class="col-md-8">
	{if isset($planes) && count($planes)}
		<h3>Lista de Planes</h3>
		<table class="table table-hover">
			<tr>
				<th>
					Empresa
				</th>
				<th>
					Nombre
				</th>
				<th>
					Código
				</th>
				
				<th>
					Estado
				</th>
				<th>
					Acciones
				</th>
			</tr>
				
			{foreach from=$planes item=p}
				<tr>
					<td>{$p.empresa}</td>
					<td>{$p.nombre}</td>
					<td>{$p.codigo}</td>
					
					<td>{if $p.status_id == 1}Activo{else}Inactivo{/if}</td>
					<td>
						<a href="{$_layoutParams.root}planes/view/{$p.id}">Ver</a>&nbsp;&nbsp;
						<a href="{$_layoutParams.root}planes/delete/{$p.id}" onclick="return eliminar('{$_layoutParams.root}planes/delete/{$p.id}', '{$p.nombre}');">Eliminar</a>
					</td>
				</tr>

			{/foreach}
				
			
		</table>
	{else}
		<h2>No hay planes disponibles</h2>
		<p class="enlace"><a href="{$_layoutParams.root}planes/add">Agregar Planes</a></p>
	{/if}
</div>
<div class="col-md-2">
	
</div>	


	
	
	
