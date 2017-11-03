<div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="{$_layoutParams.root}materiales/add">Agregar Materiales</a></p>
</div>
<div class="col-md-8">
	<h3>Lista de Materiales</h3>
	<table class="table table-hover">
		<th>
			Nombre
		</th>
		<th>
			Acciones
		</th>
		
			{if isset($materiales) && count($materiales)}
				{foreach from=$materiales item=m}
					<tr>
						<td>{$m.nombre}</td>
						<td>
							<a href="{$_layoutParams.root}materiales/view/{$m.id}">Ver</a>&nbsp;&nbsp;
							<a href="{$_layoutParams.root}materiales/delete/{$m.id}" onclick="return eliminar('{$_layoutParams.root}materiales/delete/{$m.id}', '{$m.nombre}');">Eliminar</a>
						</td>
					</tr>

				{/foreach}
			{/if}
		
	</table>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
