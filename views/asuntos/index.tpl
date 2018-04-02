<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="{$_layoutParams.root}asuntos/add">Agregar Asunto</a></p>
</div>
<div class="col-md-6">
	{if isset($asuntos) && count($asuntos)}
	<h3>Lista de Asuntos</h3>
	<table class=".table table-hover">
		<tr>
			<th>Nombre</th>
			<th>Acciones</th>
		</tr>
		{foreach from=$asuntos item=as}
			<tr>
				<td>{$as.nombre}</td>
				<td>
					<a href="{$_layoutParams.root}asuntos/edit/{$as.id}" class="btn btn-link btn-sm">Editar</a>
					<a href="{$_layoutParams.root}asuntos/delete/{$as.id}" class="btn btn-link btn-sm" onclick="return eliminar('{$_layoutParams.root}asuntos/delete/{$as.id}', '{$as.nombre}')">Eliminar</a>
				</td>
			</tr>
		{/foreach}
	</table>
	{else}
		<strong>No hay asuntos registrados</strong>
	{/if}
	<p><a href="{$_layoutParams.root}asuntos/add" class="btn btn-link">Agregar Asunto</a></p>
</div>
<div class="col-md-2"></div>