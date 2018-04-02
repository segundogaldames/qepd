<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="{$_layoutParams.root}componentes">Componentes</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}planes">Planes</a></p>
	<hr>
	<p class="enlace"><a href="{$_layoutParams.root}capacidades">Capacidades</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}construcciones">Construcciones</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}mantenciones">Mantenciones</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}ubicaciones">Ubicaciones</a></p>
</div>
<div class="col-md-8">
	{if isset($soluciones) && count($soluciones)}
		<h3>Lista de soluciones</h3>
		<table class="table table-hover">
			<th>
				Plan Asociado
			</th>
			<th>
				Acciones
			</th>
			
				
					{foreach from=$soluciones item=s}
						<tr>
							<td>{$s.plan}</td>
							<td>
								<a href="{$_layoutParams.root}soluciones/view/{$s.id}">Ver</a>&nbsp;&nbsp;
								<a href="{$_layoutParams.root}soluciones/delete/{$s.id}" onclick="return eliminar('{$_layoutParams.root}soluciones/delete/{$s.id}', 'la solucion del {$s.plan}');">Eliminar</a>
							</td>
						</tr>

					{/foreach}
				
			
		</table>
	{else}
		<h2>No hay soluciones registradas</h2>
		<p class="enlace"><a href="{$_layoutParams.root}soluciones/add">Agregar Soluciones</a></p>
	{/if}
</div>
<div class="col-md-2">
	
</div>	


	
	
	
