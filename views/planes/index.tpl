<div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="{$_layoutParams.root}planes/add">Agregar Planes</a></p>
</div>
<div class="col-md-4">
	<h3>Lista de Planes</h3>
	<table class="table table-hover">
		<th>
			Nombre
		</th>
		<th>
			Código
		</th>
		<th>
			Empresa
		</th>
		<th>
			Acciones
		</th>
		
			{if isset($planes) && count($planes)}
				{foreach from=$planes item=p}
					<tr>
						<td>{$p.nombre}</td>
						<td>{$p.codigo}</td>
						<td>{$p.empresa}</td>
						<td>
							<a href="{$_layoutParams.root}planes/view/{$p.id}">Ver</a>&nbsp;&nbsp;
							<a href="{$_layoutParams.root}planes/delete/{$p.id}" onclick="return eliminar('{$_layoutParams.root}planes/delete/{$p.id}', '{$p.nombre}');">Eliminar</a>
						</td>
					</tr>

				{/foreach}
			{/if}
		
	</table>
</div>
<div class="col-md-4">
	
</div>	


	
	
	
