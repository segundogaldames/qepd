<div class="col-md-2"></div>
<div class="col-md-8">
	<h4>Publicaciones Realizadas</h4>
	{if isset($publicaciones) && count($publicaciones)}
		<table class="table">
			<tr>
				<th>Producto</th>
				<th>Fecha</th>
				<th>Comentarios</th>
				<th>Acciones</th>
			</tr>
			{foreach from=$publicaciones item=pub}
			<tr>
				<td>{$pub.nombre}</td>
				<td>{$pub.creado}</td>
				<td>{$pub.comentario}</td>
				<td>
					<a href="{$_layoutParams.root}consulta/ver/{$pub.id}" class="btn btn-default btn-xs">Ver</a>
					<a href="{$_layoutParams.root}consulta/editar/{$pub.id}" class="btn btn-default btn-xs">Editar</a>
					<a href="{$_layoutParams.root}consulta/eliminar/{$pub.id}" class="btn btn-default btn-xs">Eliminar</a>
				</td>
			</tr>
			{/foreach}
			</table>
		
	{/if}
	<p><a href="{$_layoutParams.root}inicio">Publicar Aviso</a></p>
	<p><a href="{$_layoutParams.root}usuario/cerrar" onclick="eturn cerrar('{$_layoutParams.root}usuario/cerrar');">Cerrar Sesión</a></p>
</div>