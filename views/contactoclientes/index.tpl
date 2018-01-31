<div class="col-md-2">
	<p class="enlace"><a href="{$_layoutParams.root}contactos">Contactos</a></p>
</div>
<div class="col-md-8">
	{if isset($contactoClientes) && count($contactoClientes)}
		<table class="table table-hover">
			<tr>
				<th>Cliente</th>
				<th>Observaciones</th>
				<th>Fecha Contacto</th>
				<th>Estado Contacto</th>
				<th>Acciones</th>
			</tr>
			{foreach from=$contactoClientes item=cc}
				<tr>
					<td>{$cc.cliente}</td>
					<td>{$cc.observaciones}</td>
					<td>{$cc.fecha|date_format:"%d-%m-%Y %H:%M"}</td>
					<td>{if $cc.estado==1}Pendiente{else}Procesado{/if}</td>
					<td>
						<a href="{$_layoutParams.root}contactos/edit/{$cc.contacto_id}">Cambiar Estado</a>
					</td>
				</tr>
			{/foreach}
		</table>
	{else}
		<strong>No hay contactos registrados... Revise si hay clientes disponibles para contacto</strong>
	{/if}
</div>
<div class="col-md-2"></div>