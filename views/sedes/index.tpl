<div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="{$_layoutParams.root}sedes/add">Agregar Sede</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}telefonos/add">Agregar Teléfono</a></p>
</div>
<div class="col-md-8">
	<h3>Lista de Sedes</h3>
	<table class="table table-hover">
		<th>
			Nombre
		</th>
		<th>
			Empresa
		</th>
		<th>
			Comuna
		</th>
		<th>
			Acciones
		</th>
		
			{if isset($sedes) && count($sedes)}
				{foreach from=$sedes item=s}
					<tr>
						<td>{$s.sede}</td>
						<td>{$s.empresa}</td>
						<td>{$s.comuna}</td>
						<td>
							<a href="{$_layoutParams.root}sedes/view/{$s.id}">Ver</a>&nbsp;&nbsp;
							<a href="{$_layoutParams.root}sedes/delete/{$s.id}" onclick="return eliminar('{$_layoutParams.root}sedes/delete/{$s.id}', '{$s.nombre}')">Eliminar</a>
						</td>
					</tr>

				{/foreach}
			{/if}
		
	</table>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
