<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="{$_layoutParams.root}construcciones/add">Agregar Construcciones</a></p>
	<hr>
	<p class="enlace"><a href="{$_layoutParams.root}componentes">Componentes</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}planes">Planes</a></p>
	<hr>
	<p class="enlace"><a href="{$_layoutParams.root}soluciones">Soluciones</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}capadidades">Capacidades</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}mantenciones">Mantenciones</a></p>
</div>
<div class="col-md-8">
	<h3>Lista de Construcciones</h3>
	<table class="table table-hover">
		<th>
			Tipo de Construcción
		</th>
		<th>
			Solución
		</th>
		<th>
			Acciones
		</th>
		
			{if isset($construcciones) && count($construcciones)}
				{foreach from=$construcciones item=c}
					<tr>
						<td>{$c.construccion}</td>
						<td>{$c.solucion}</td>
						<td>
							<a href="{$_layoutParams.root}construcciones/view/{$c.id}">Ver</a>&nbsp;&nbsp;
							<a href="{$_layoutParams.root}construcciones/delete/{$c.id}" onclick="return eliminar('{$_layoutParams.root}construcciones/delete/{$c.id}', 'la construccion asociada al tipo {$c.construccion}');">Eliminar</a>
						</td>
					</tr>

				{/foreach}
			{/if}
		
	</table>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
