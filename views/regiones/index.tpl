<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="{$_layoutParams.root}materiales/add">Agregar Regiones</a></p>
	<hr>
	<p class="enlace"><a href="{$_layoutParams.root}comunas">Comunas</a></p>
</div>
<div class="col-md-8">
	{if isset($regiones) && count($regiones)}
	<h3>Lista de Regiones</h3>
		<table class="table table-hover">
			<th>
				Nombre
			</th>
			<th>
				Acciones
			</th>
				{foreach from=$regiones item=r}
					<tr>
						<td>{$r.nombre}</td>
						<td>
							<a href="{$_layoutParams.root}regiones/view/{$r.id}" class="btn btn-link btn-sm">Ver</a>&nbsp;&nbsp;
							<a href="{$_layoutParams.root}regiones/delete/{$r.id}" onclick="return eliminar('{$_layoutParams.root}regiones/delete/{$r.id}', '{$r.nombre}');" class="btn btn-link btn-sm">Eliminar</a>
						</td>
					</tr>

				{/foreach}
		</table>
	{else}
		<strong>No hay regiones registradas</strong>
		<p><a href="{$_layoutParams.root}regiones/add" class="btn btn-link">Nueva Región</a></p>
	{/if}
</div>
<div class="col-md-2">
	
</div>	


	
	
	
