<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="{$_layoutParams.root}ubicaciones/add">Agregar Ubicaciones</a></p>
	<hr>
	<p class="enlace"><a href="{$_layoutParams.root}componentes">Componentes</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}planes">Planes</a></p>
	<hr>
	<p class="enlace"><a href="{$_layoutParams.root}soluciones">Soluciones</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}capacidades">Capacidades</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}construcciones">Construcciones</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}mantenciones">Mantenciones</a></p>
</div>
<div class="col-md-8">
	{if isset($ubicaciones) && count($ubicaciones)}
		<h3>Lista de Ubicaciones</h3>
		<table class="table table-hover">
			<th>
				Solución Asociada
			</th>
			<th>
				Acciones
			</th>
				{foreach from=$ubicaciones item=u}
					<tr>
						<td>{$u.solucion}</td>
						<td>
							<a href="{$_layoutParams.root}ubicaciones/view/{$u.id}">Ver</a>&nbsp;&nbsp;
							<a href="{$_layoutParams.root}ubicaciones/delete/{$u.id}" onclick="return eliminar('{$_layoutParams.root}ubicaciones/delete/{$u.id}', 'la ubicacion de la solucion {$u.solucion}');">Eliminar</a>
						</td>
					</tr>
				{/foreach}		
		</table>
	{else}
		<h2>No hay ubicaciones registradas</h2>
		<p class="enlace"><a href="{$_layoutParams.root}ubicaciones/add">Agregar Ubicación</a></p>
	{/if}
</div>
<div class="col-md-2">
	
</div>	


	
	
	
