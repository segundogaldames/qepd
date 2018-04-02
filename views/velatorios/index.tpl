<div class="col-md-2" style="padding-top: 20px">
	
	<p class="enlace"><a href="{$_layoutParams.root}componentes">Componentes</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}planes">Planes</a></p>
</div>
<div class="col-md-8">
	{if isset($velatorios) && count($velatorios)}
		<h3>Lista de Velatorios</h3>
		<table class="table table-hover">
			<th>
				Plan
			</th>
			<th>
				Acciones
			</th>
			
				{foreach from=$velatorios item=v}
					<tr>
						<td>{ucfirst($v.plan)}</td>
						<td>
							<a href="{$_layoutParams.root}velatorios/view/{$v.id}">Ver</a>&nbsp;&nbsp;
							<a href="{$_layoutParams.root}velatorios/delete/{$v.id}" onclick="return eliminar('{$_layoutParams.root}velatorios/delete/{$v.id}', '{$v.plan}');">Eliminar</a>
						</td>
					</tr>

				{/foreach}
		{else}
			<p><strong>No hay velatorios registrados</strong></p>
			<p class="enlace"><a href="{$_layoutParams.root}velatorios/add">Agregar Velatorios</a></p>
		{/if}
		
	</table>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
