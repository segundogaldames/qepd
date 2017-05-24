<div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="{$_layoutParams.root}telefonos/add">Agregar Teléfono</a></p>
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
		<table class="table table-hover">
			<tr>
				<th>Números</th>
			</tr>
			{if isset($telefonos) && count($telefonos)}
				{foreach from=$telefonos item=tel}
					<tr>
						<td><img src="{$_layoutParams.ruta_img}phone.jpeg" alt="" width="20">{$tel.numero}</td>
					</tr>

				{/foreach}
			{/if}
		</table>
</div>
<div class="col-md-4">
	
</div>	
