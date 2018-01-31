<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="{$_layoutParams.root}asuntos/add">Agregar Asunto</a></p>
	<hr>
	<p class="enlace"><a href="{$_layoutParams.root}asuntos">Asuntos</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}contactos/activos">Contactos Activos</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}contactos/urgentes">Contactos Urgentes</a></p>
</div>
<div class="col-md-8">
	{if isset($contactos) && count($contactos)}
		<table class="table table-hover">
			<tr>
				<th>Nombre</th>
				<th>Asunto</th>
				<th>Fecha</th>
				<th>Estado</th>
				<th>Urgente</th>
				<th>Acciones</th>
			</tr>
			{foreach from=$contactos item=c}
				<tr>
					<td>{$c.nombre}</td>
					<td>{$c.asunto}</td>
					<td>{$c.fecha|date_format:"%d-%m-%Y %H:%M"}</td>
					<td>{if $c.estado==1}Pendiente{else}Procesado{/if}</td>
					<td>{if $c.urgente==1}Si{else}No{/if}</td>
					<td>
						<a href="{$_layoutParams.root}contactos/view/{$c.id}" class="btn btn-link btn-sm">Ver</a>
						<a href="{$_layoutParams.root}contactos/edit/{$c.id}" class="btn btn-link btn-sm">Editar</a>
					</td>
				</tr>
			{/foreach}

		</table>
	{else}
		<strong>No hay contactos registrados</strong>
	{/if}
</div>
<div class="col-md-2"></div>