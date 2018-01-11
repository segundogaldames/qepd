<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="{$_layoutParams.root}sedes/add">Agregar Sede</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}telefonos/add">Agregar Teléfono</a></p>
	<hr>
	<p class="enlace"><a href="{$_layoutParams.root}empresas">Empresas</a></p>
</div>
<div class="col-md-8">
{if isset($sedes) && count($sedes)}
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
			
				
					{foreach from=$sedes item=s}
						<tr>
							<td>{$s.sede}</td>
							<td>{$s.empresa}</td>
							<td>{$s.comuna}</td>
							<td>
								<a href="{$_layoutParams.root}sedes/view/{$s.id}">Ver</a>&nbsp;&nbsp;
								<a href="{$_layoutParams.root}sedes/delete/{$s.id}" onclick="return eliminar('{$_layoutParams.root}sedes/delete/{$s.id}', '{$s.sede}')">Eliminar</a>
							</td>
						</tr>

					{/foreach}
				
			
		</table>
	{else}
		<h2>No hay sedes asociadas</h2>
		<p class="enlace"><a href="{$_layoutParams.root}sedes/add">Agregar Sede</a></p>
	{/if}
</div>
<div class="col-md-2">
	
</div>	


	
	
	
