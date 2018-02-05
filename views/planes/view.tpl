<div class="col-md-2"></div>
<div class="col-md-4">
	<div style="padding-top: 50px"></div>
	<h3>Ver Plan</h3>
	
	{if isset($plan) && count($plan)}
		<p style="font-size: 18px"><strong>Nombre:</strong> {$plan.nombre}</p>
		<p style="font-size: 18px"><strong>Código:</strong> {$plan.codigo}</p>
		<p style="font-size: 18px"><strong>Tipo Plan:</strong> {$plan.tipo_plan}</p>
		<p style="font-size: 18px"><strong>Servicio:</strong> {$plan.servicio}</p>
		<p style="font-size: 18px"><strong>Empresa:</strong> {$plan.empresa}</p>
		<p style="font-size: 18px"><strong>Destinatario:</strong> {$plan.destinatario}</p>
		<p style="font-size: 18px"><strong>Fecha creación:</strong> {$plan.dated|date_format:'%D'}</p>
		<p style="font-size: 18px"><strong>Fecha modificación:</strong> {$plan.updated|date_format: '%D'}</p>
		<p style="font-size: 18px"><strong>Status:</strong> {if $plan.status==1} Activo{else} Inactivo{/if}</p>

					
	{/if}
	<p>
		<a href="{$_layoutParams.root}planes/edit/{$plan.id}">Editar</a>&nbsp;&nbsp;
		<a href="{$_layoutParams.root}planes">Volver</a>
	</p>
	<hr>
	<p><a href="{$_layoutParams.root}componentes/verComponentes/{$plan.servicio_id}/{$plan.id}">Componentes Asociados</a></p>
	<p><a href="{$_layoutParams.root}componentes/addComponentes/{$plan.servicio_id}/{$plan.id}">Agregar Componentes</a></p>
	<p><a href="{$_layoutParams.root}condiciones/add/{$plan.id}">Agregar Condiciones</a></p>
</div>
<div class="col-md-4">
	
</div>