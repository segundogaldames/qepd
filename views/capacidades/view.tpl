<div class="col-md-2" style="padding-top: 20px">
</div>
<div class="col-md-4">
	
	<h3>Ver Capacidad</h3>
	
	{if isset($capacidad) && count($capacidad)}
		<p><img src="{$_layoutParams.root}public/img/componentes/thumb/thumb_{$cinerario.imagen}" alt="Imagen cinerario"></p>
		<p style="font-size: 18px"><strong>Adultos:</strong> {$capacidad.adultos}</p>
		<p style="font-size: 18px"><strong>Párvulos:</strong> {$capacidad.parvulos}</p>
		<p style="font-size: 18px"><strong>Reducciones:</strong> {$capacidad.reducciones}</p>
		<p style="font-size: 18px"><strong>Anforas:</strong> {$capacidad.anforas}</p>
		<p style="font-size: 18px"><strong>Solución:</strong> {$capacidad.solucion}</p>
		<p style="font-size: 18px"><strong>Plan:</strong> {$capacidad.plan}</p>
	{/if}
	<p>
		<a href="{$_layoutParams.root}capacidades/edit/{$capacidad.id}">Editar</a>&nbsp;&nbsp;
		<a href="{$_layoutParams.root}capacidades">Volver</a>
	</p>
	<hr>
</div>
<div class="col-md-4">
	
</div>	
