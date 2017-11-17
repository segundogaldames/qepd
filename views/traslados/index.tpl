<div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="{$_layoutParams.root}traslados/add">Agregar Traslados</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}planes">Ver Planes</a></p>
</div>
<div class="col-md-8">
	{if isset($traslados) && count($traslados)}
		<h3>Lista de Traslados</h3>
		<table class="table table-hover">
			<th>
				Planes
			</th>
			<th>
				Acciones
			</th>
			
				{foreach from=$traslados item=t}
					<tr>
						<td>{ucwords($t.plan)}</td>
						<td>
							<a href="{$_layoutParams.root}traslados/view/{$t.id}">Ver</a>&nbsp;&nbsp;
							<a href="{$_layoutParams.root}traslados/delete/{$t.id}" onclick="return eliminar('{$_layoutParams.root}traslados/delete/{$t.id}', 'El traslado de {$t.plan}');">Eliminar</a>
						</td>
					</tr>

				{/foreach}
		{else}
			<p><strong>No hay traslados registrados</strong></p>
			<p class="enlace"><a href="{$_layoutParams.root}traslados/add">Agregar Traslados</a></p>
		{/if}
		
	</table>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
