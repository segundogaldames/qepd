<div class="col-md-2"></div>
<div class="col-md-6">
	<h3>Ver Contacto</h3>
	{if isset($contacto) && count($contacto)}
		<p style="font-size: 18px"><strong>Nombre:</strong> {$contacto.nombre}</p>
		<p style="font-size: 18px"><strong>Email:</strong> {$contacto.email}</p>
		<p style="font-size: 18px"><strong>Asunto:</strong> {$contacto.asunto}</p>
		<p style="font-size: 18px"><strong>Mensaje:</strong> {$contacto.mensaje}</p>
		<p style="font-size: 18px"><strong>Fecha:</strong> {$contacto.fecha|date_format:"%d-%m-%Y %H:%M"}</p>
		<p style="font-size: 18px"><strong>Teléfono:</strong> {$contacto.telefono}</p>
		<p style="font-size: 18px"><strong>Estado:</strong> {if $contacto.estado==1}Pendiente{else}Procesado{/if}</p>
		<p style="font-size: 18px"><strong>Urgente?:</strong> {if $contacto.urgente==1}Si{else}No{/if}</p>
	{/if}
	<p><a href="{$_layoutParams.root}contactoclientes/add/{$contacto.id}" class="btn btn-link">Contactar</a></p>
</div>
<div class="col-md-2"></div>