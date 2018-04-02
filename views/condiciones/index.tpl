<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="{$_layoutParams.root}planes">Ver Planes</a></p>
</div>
<div class="col-md-8">
	{if isset($condiciones) && count($condiciones)}
		<table class="table table-hover">
			<tr>
				<th>Nombre Plan</th>
				<th>Precio</th>
				<th>Forma de Pago</th>
				<th>Acciones</th>
			</tr>
			{foreach from=$condiciones item=c}
				<tr>
					<td>{$c.plan}</td>
					<td>{$c.precio}</td>
					<td>{$c.formapago}</td>
					<td><a href="{$_layoutParams.root}condiciones/view/{$c.id}">Ver</a></td>
				</tr>
			{/foreach}
		</table>
	{else}
		<strong>No hay condiciones registradas</strong>
	{/if}
</div>
<div class="col-md-2">
	
</div>