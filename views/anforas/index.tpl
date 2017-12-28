<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="{$_layoutParams.root}anforas/add">Agregar Anforas</a></p>
	<hr>
	<p class="enlace"><a href="{$_layoutParams.root}componentes">Componentes</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}planes">Planes</a></p>
</div>
<div class="col-md-8">
	{if isset($anforas) && count($anforas)}
		<h3>Lista de Anforas</h3>
		<table class="table table-hover">
			<th>
				Plan Asociado
			</th>
			<th>
				Acciones
			</th>
			
				{foreach from=$anforas item=a}
					<tr>
						<td>{$a.plan}</td>
						<td>
							<a href="{$_layoutParams.root}anforas/view/{$a.id}">Ver</a>&nbsp;&nbsp;
							<a href="{$_layoutParams.root}anforas/delete/{$a.id}" onclick="return eliminar('{$_layoutParams.root}anforas/delete/{$a.id}', 'el ánfora del {$a.plan}')">Eliminar</a>
						</td>
					</tr>
				{/foreach}
		</table>
	{else}
		<h2>No hay ánforas registradas</h2>
		<p class="enlace"><a href="{$_layoutParams.root}anforas/add">Agregar Anfora</a></p>
	{/if}
</div>
<div class="col-md-2">
	
</div>	


	
	
	
