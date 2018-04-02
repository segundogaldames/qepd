<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="{$_layoutParams.root}condiciones">Volver</a></p>
</div>
<div class="col-md-6">
	<h3>Ver Condición</h3>
	{if isset($condicion) && count($condicion)}
		<p><strong>Nombre Plan:</strong> {$condicion.plan}</p>
		<p><strong>Precio:</strong> {$condicion.precio}</p>
		<p><strong>Forma Pago:</strong> {$condicion.formapago}</p>
		<p><strong>Plazo de Pago:</strong> {if $condicion.plazopago==1}Si{else}No{/if}</p>
		<p><strong>Compra Anticipada:</strong> {if $condicion.compraanticipada==1}Si{else}No{/if}</p>
		<p><strong>Seguro Deceso:</strong> {if $condicion.segurodeceso==1}Si{else}No{/if}</p>
		<p><strong>Convenios:</strong> {$condicion.convenios}</p>
		<p><strong>Descuento Columbario:</strong> {$condicion.descuentocol}%</p>
		<p><strong>Descuento Nicho:</strong> {$condicion.descuentonicho}%</p>
		<p><strong>Pensiones:</strong> {if $condicion.pensiones==1}Si{else}No{/if}</p>
	{/if}
	<p>
		<a href="{$_layoutParams.root}condiciones/edit/{$condicion.id}" class="btn btn-link">Editar</a>
		<a href="{$_layoutParams.root}condiciones" class="btn btn-link">Volver</a>
	</p>
</div>
<div class="col-md-4"></div>
