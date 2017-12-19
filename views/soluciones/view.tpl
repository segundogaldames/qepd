<div class="col-md-2"></div>
<div class="col-md-4">
	<h3>Ver Solución</h3>
	
	{if isset($solucion) && count($solucion)}
		<p style="font-size: 18px"><strong>Solución:</strong> {if $solucion.solucion==1}Familiar{else}Individual{/if}</p>
		<p style="font-size: 18px"><strong>Periodo:</strong> {if $solucion.periodo==1}Perpetua{else}Temporal{/if}</p>
		<p style="font-size: 18px"><strong>Años:</strong> {$solucion.anios}</p>
		<p style="font-size: 18px"><strong>Tipo Solución:</strong> {$solucion.tipo}</p>
		<p style="font-size: 18px"><strong>Plan:</strong> {$solucion.plan}</p>	
	{/if}
	<p>
		<a href="{$_layoutParams.root}soluciones/edit/{$solucion.id}">Editar</a>&nbsp;&nbsp;
		<a href="{$_layoutParams.root}soluciones">Volver</a>
	</p>
	<hr>
	<h4>Capacidad</h4>
		{if isset($capacidad) && count($capacidad) }
			<table class="table">
				<tr>
					<th>Adultos</th>
					<th>Párvulos</th>
					<th>Reducciones</th>
					<th>Anforas</th>
				</tr>
				<tr>
					<td>{$capacidad.adultos}</td>
					<td>{$capacidad.parvulos}</td>
					<td>{$capacidad.reducciones}</td>
					<td>{$capacidad.anforas}</td>
				</tr>
			</table>
		{else}
			<strong>No hay capacidad asociada a esta solución</strong>
			<p><a href="{$_layoutParams.root}capacidades/add">Agregar Capacidad</a></p>
		{/if}
	<h4>Contrucción</h4>
	<h4>Ubicacion</h4>
	<h4>Mantención</h4>
</div>
<div class="col-md-4">
	
</div>