<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace">
		<a href="{$_layoutParams.root}planes">Planes</a>
	</p>
	<p class="enlace">
		<a href="{$_layoutParams.root}status">Status</a>
	</p>
</div>
<div class="col-md-8">
	<h3>Lista de Cotizaciones</h3>
	{if isset($cotizaciones) && count($cotizaciones)}
		<table class="table table-hover">
			<tr>
				<th>
					Plan Asociado
				</th>
				<th>
					Compra Anticipada
				</th>
				<th>
					Cliente
				</th>
				<th>
					Status
				</th>
				<th>
					Fecha
				</th>
				<th>Acciones</th>
			</tr>
			{foreach from=$cotizaciones item=c}
				<tr>
					<td>{$c.plan}</td>
					<td>{if $c.opcion==1}Si{else}No{/if}</td>
					<td>{$c.cliente}</td>
					<td>{$c.status}</td>
					<td>{$c.created|date_format:'%d-%m-%Y'}</td>
					<td>
						<a href="{$_layoutParams.root}cotizaciones/view/{$c.id}" class="btn btn-link">Ver</a>
						<a href="{$_layoutParams.root}cotizaciones/edit/{$c.id}" class="btn btn-link">Editar</a>
					</td>
				</tr>
			{/foreach}
		</table>
	{else}
		<strong>No hay cotizaciones registradas</strong>
	{/if}
</div>
<div class="col-md-2">
	
</div>