<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="{$_layoutParams.root}mantenciones/add">Agregar Mantenciones</a></p>
	<hr>
	<p class="enlace"><a href="{$_layoutParams.root}componentes">Componentes</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}planes">Planes</a></p>
	<hr>
	<p class="enlace"><a href="{$_layoutParams.root}soluciones">Soluciones</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}capadidades">Capacidades</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}construcciones">Construcciones</a></p>
</div>
<div class="col-md-8">
	{if isset($mantenciones) && count($mantenciones)}
		<h3>Lista de Mantenciones</h3>
		<table class="table table-hover">
			<th>
				Solucion Asociada
			</th>
			<th>
				Acciones
			</th>
			{foreach from=$mantenciones item=m}
				<tr>
					<td>{$m.solucion}</td>
					<td>
						<a href="{$_layoutParams.root}mantenciones/view/{$m.id}">Ver</a>&nbsp;&nbsp;
						<a href="{$_layoutParams.root}mantenciones/delete/{$m.id}" onclick="return eliminar('{$_layoutParams.root}mantenciones/delete/{$m.id}', 'la mantencion de {$m.solucion}');">Eliminar</a>
					</td>
				</tr>

			{/foreach}
		</table>
	{else}
		<p class="alert alert-danger">
			No hay mantenciones registradas
		</p>
		<p>
			<a href="{$_layoutParams.root}mantenciones/add">Agregar Mantenciones</a>
		</p>
	{/if}
</div>
<div class="col-md-2">
	
</div>	


	
	
	
