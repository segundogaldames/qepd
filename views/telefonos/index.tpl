<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="{$_layoutParams.root}telefonos/add">Agregar Teléfono</a></p>
	<hr>
	<p class="enlace"><a href="{$_layoutParams.root}sedes">Sedes</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}empresas">Empresas</a></p>
</div>
<div class="col-md-10">
	<h3>Lista de Teléfonos</h3>
	<table class="table table-hover">
		<th>
			Número
		</th>
		<th>
			Sede
		</th>
		<th>
			Dirección
		</th>
		<th>
			Comuna
		</th>
		<th>
			Empresa
		</th>
		<th>
			Acciones
		</th>
		
			{if isset($telefonos) && count($telefonos)}
				{foreach from=$telefonos item=tel}
					<tr>
						<td>{$tel.telefono}</td>
						<td>{$tel.sede}</td>
						<td>{$tel.calle} {$tel.numero}</td>
						<td>{$tel.comuna}</td>
						<td>{$tel.empresa}</td>
						<td>
							<a href="{$_layoutParams.root}telefonos/view/{$tel.id}">Ver</a>&nbsp;&nbsp;
							<a href="{$_layoutParams.root}telefonos/delete/{$tel.id}" onclick="return eliminar('{$_layoutParams.root}telefonos/delete/{$tel.id}', '{$tel.telefono}');">Eliminar</a>
						</td>
					</tr>

				{/foreach}
			{/if}
		
	</table>
</div>



	
	
	
