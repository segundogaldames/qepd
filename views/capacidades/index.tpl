<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="{$_layoutParams.root}capacidades/add">Agregar Capacidades</a></p>
	<hr>
	<p class="enlace"><a href="{$_layoutParams.root}componentes">Componentes</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}planes">Planes</a></p>
	<hr>
	<p class="enlace"><a href="{$_layoutParams.root}soluciones">Soluciones</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}construcciones">Construcciones</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}mantenciones">Mantenciones</a></p>
</div>
<div class="col-md-8">
	{if isset($capacidades) && count($capacidades)}
		<h3>Lista de Capacidades</h3>
		<table class="table table-hover">
			<th>
				Plan Asociado
			</th>
			<th>
				Solución Asociada
			</th>
			<th>
				Acciones
			</th>
			
				{foreach from=$capacidades item=c}
					<tr>
						<td>{$c.plan}</td>
						<td>{$c.solucion}</td>
						<td>
							<a href="{$_layoutParams.root}capacidades/view/{$c.id}">Ver</a>&nbsp;&nbsp;
							<a href="{$_layoutParams.root}capacidades/delete/{$c.id}" onclick="return eliminar('{$_layoutParams.root}capacidades/delete/{$c.id}', 'la capacidad de {$c.solucion}')">Eliminar</a>
						</td>
					</tr>
				{/foreach}
		</table>
	{else}
		<h2>No hay capacidades registradas</h2>
		<p class="enlace"><a href="{$_layoutParams.root}capacidades/add">Agregar Capacidad</a></p>
	{/if}
</div>
<div class="col-md-2">
	
</div>	


	
	
	
