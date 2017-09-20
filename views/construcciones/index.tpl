<div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="{$_layoutParams.root}construcciones/add">Agregar Construcciones</a></p>
</div>
<div class="col-md-8">
	<h3>Lista de Construcciones</h3>
	<table class="table table-hover">
		<th>
			Tipo de Construcción
		</th>
		<th>
			Materiales
		</th>
		<th>
			Terminaciones
		</th>
		<th>
			Grabado
		</th>
		<th>
			Plan
		</th>
		<th>
			Acciones
		</th>
		
			{if isset($construcciones) && count($construcciones)}
				{foreach from=$construcciones item=c}
					<tr>
						<td>{$c.construccion}</td>
						<td>{$c.material}</td>
						<td>{$c.terminacion}</td>
						<td>{$c.grabado}</td>
						<td>{$c.plan}</td>
						<td>
							<a href="{$_layoutParams.root}construcciones/view/{$c.id}">Ver</a>&nbsp;&nbsp;
							<a href="{$_layoutParams.root}materiales/delete/{$c.id}" onclick="return eliminar('{$_layoutParams.root}construcciones/delete/{$c.id}', '{$m.nombre}');">Eliminar</a>
						</td>
					</tr>

				{/foreach}
			{/if}
		
	</table>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
