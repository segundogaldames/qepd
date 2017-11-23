<div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="{$_layoutParams.root}sepultaciones/add">Agregar Sepultaciones</a></p>
</div>
<div class="col-md-8">
	{if isset($sepultaciones) && count($sepultaciones)}
		<h3>Lista de Sepultaciones</h3>
		<table class="table table-hover">
			<th>
				Plan Asociado
			</th>
			<th>
				Acciones
			</th>
			
				
					{foreach from=$sepultaciones item=s}
						<tr>
							<td>{$s.plan}</td>
							<td>
								<a href="{$_layoutParams.root}sepultaciones/view/{$s.id}">Ver</a>&nbsp;&nbsp;
								<a href="{$_layoutParams.root}sepultaciones/delete/{$s.id}" onclick="return eliminar('{$_layoutParams.root}sepultaciones/delete/{$s.id}', '{$p.nombre}');">Eliminar</a>
							</td>
						</tr>

					{/foreach}
				
			
		</table>
	{else}
		<h2>No hay sepultaciones asociadas</h2>
		<p class="enlace"><a href="{$_layoutParams.root}sepultaciones/add">Agregar Sepultaciones</a></p>
	{/if}
</div>
<div class="col-md-2">
	
</div>	


	
	
	
