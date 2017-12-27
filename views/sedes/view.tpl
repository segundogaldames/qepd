<div class="col-md-2" style="padding-top: 20px">
	
</div>
<div class="col-md-4">
	
	<h3>Ver Sede</h3>
	
	{if isset($sede) && count($sede)}
		<p style="font-size: 18px"><strong>Sede:</strong> {$sede.sede}</p>
		<p style="font-size: 18px"><strong>Direccion:</strong> {$sede.calle} {$sede.numero} {$sede.sector}</p>	
		<p style="font-size: 18px"><strong>Comuna:</strong> {$sede.comuna}</p>	
		
	{/if}
	<p>
		<a href="{$_layoutParams.root}sedes/edit/{$sede.id}">Editar</a>&nbsp;&nbsp;
		<a href="{$_layoutParams.root}sedes">Volver</a>
	</p>
	<hr>
	<h4>Teléfonos</h4>
		{if isset($telefonos) && count($telefonos)}
			<table class="table table-hover">
				<tr>
					<th>Números</th>
				</tr>
				
					{foreach from=$telefonos item=tel}
						<tr>
							<td><img src="{$_layoutParams.ruta_img}phone.jpeg" alt="" width="20">{$tel.numero}</td>
							<td><a href="{$_layoutParams.root}telefonos/edit/{$tel.id}" class="btn btn-link">Editar</a></td>
							<td><a href="{$_layoutParams.root}telefonos/delete/{$tel.id}" onclick="return eliminar('$_layoutParams.root}telefonos/delete/{$tel.id}','{$tel.numero}');" class="btn btn-link">Eliminar</a></td>
						</tr>

					{/foreach}
				
			</table>
		{else}
			<strong>No hay teléfonos asociados</strong>
			<p class="enlace"><a href="{$_layoutParams.root}telefonos/add">Agregar Teléfono</a></p>
		{/if}
</div>
<div class="col-md-4">
	
</div>	
