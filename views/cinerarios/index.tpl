<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="{$_layoutParams.root}componentes">Componentes</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}planes">Planes</a></p>
</div>
<div class="col-md-8">
	{if isset($cinerarios) && count($cinerarios)}
		<h3>Lista de Cinerarios</h3>
		<table class="table table-hover">
			<th>
				Plan Asociado
			</th>
			<th>
				Acciones
			</th>
			
				{foreach from=$cinerarios item=c}
					<tr>
						<td>{$c.plan}</td>
						<td>
							<a href="{$_layoutParams.root}cinerarios/view/{$c.id}">Ver</a>&nbsp;&nbsp;
							<a href="{$_layoutParams.root}cinerarios/delete/{$c.id}" onclick="return eliminar('{$_layoutParams.root}cinerarios/delete/{$c.id}', 'el cinerio del {$c.plan}')">Eliminar</a>
						</td>
					</tr>
				{/foreach}
		</table>
	{else}
		<h2>No hay cinerarios asociados</h2>
		<p class="enlace"><a href="{$_layoutParams.root}cinerarios/add">Agregar Cinerarios</a></p>
	{/if}
</div>
<div class="col-md-2">
	
</div>	


	
	
	
