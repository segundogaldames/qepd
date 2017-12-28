<div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="{$_layoutParams.root}terminaciones/add">Agregar Terminaciones</a></p>
</div>
<div class="col-md-8">
	<h3>Lista de Terminaciones</h3>
	<table class="table table-hover">
		<th>
			Nombre
		</th>
		<th>
			Acciones
		</th>
		
			{if isset($terminaciones) && count($terminaciones)}
				{foreach from=$terminaciones item=t}
					<tr>
						<td>{$t.nombre}</td>
						<td>
							<a href="{$_layoutParams.root}terminaciones/view/{$t.id}">Ver</a>&nbsp;&nbsp;
							<a href="{$_layoutParams.root}terminaciones/delete/{$t.id}" onclick="return eliminar('{$_layoutParams.root}terminaciones/delete/{$t.id}', '{$m.nombre}');">Eliminar</a>
						</td>
					</tr>

				{/foreach}
			{/if}
		
	</table>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
