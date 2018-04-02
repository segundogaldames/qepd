<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="{$_layoutParams.root}tipoplanes/add">Agregar Tipo Planes</a></p>
	<hr>
	<p class="enlace"><a href="{$_layoutParams.root}planes">Planes</a></p>
</div>
<div class="col-md-8">
	{if isset($tipoPlanes) && count($tipoPlanes)}
		<h3>Lista de Tipo Planes</h3>
		<table class="table table-hover">
			<th>
				Nombre
			</th>
			<th>
				Acciones
			</th>
			
				
					{foreach from=$tipoPlanes item=tp}
						<tr>
							<td>{$tp.nombre}</td>
							<td>
								<a href="{$_layoutParams.root}tipoplanes/view/{$tp.id}">Ver</a>&nbsp;&nbsp;
								<a href="{$_layoutParams.root}tipoplanes/delete/{$tp.id}" onclick="return eliminar('{$_layoutParams.root}tipoplanes/delete/{$tp.id}', '{$tp.nombre}');">Eliminar</a>
							</td>
						</tr>

					{/foreach}
				
			
		</table>
	{else}
		<h2>No hay tipo de planes registrados</h2>
		<p class="enlace"><a href="{$_layoutParams.root}tipoplanes/add">Agregar Tipo Planes</a></p>
	{/if}
</div>
<div class="col-md-2">
	
</div>	


	
	
	
