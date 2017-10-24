<div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="{$_layoutParams.root}comunas/add" class="btn btn-enlace">Agregar Comuna</a></p>
</div>
<div class="col-md-8">
	<h3>Lista de Comunas</h3>
	<table class="table table-hover">
		<th>
			Nombre
		</th>
		<th>
			Region
		</th>
		<th>
			Acciones
		</th>
		
			{if isset($comunas) && count($comunas)}
				{foreach from=$comunas item=c}
					<tr>
						<td>{$c.comuna}</td>
						<td>{$c.region}</td>
						<td>
							<a href="{$_layoutParams.root}comunas/view/{$c.id}">Ver</a>&nbsp;&nbsp;
							<a href="{$_layoutParams.root}comunas/delete/{$c.id}" onclick="return eliminar('{$_layoutParams.root}comunas/delete/{$c.id}','{$c.comuna}');">Eliminar</a>
						</td>
					</tr>

				{/foreach}
			{/if}
		
	</table>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
