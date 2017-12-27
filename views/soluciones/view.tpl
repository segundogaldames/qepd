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
					<th></th>
				</tr>
				<tr>
					<td>{$capacidad.adultos}</td>
					<td>{$capacidad.parvulos}</td>
					<td>{$capacidad.reducciones}</td>
					<td>{$capacidad.anforas}</td>
					<td>
						<a href="{$_layoutParams.root}capacidades/view/{$capacidad.id}">Ver</a>
					</td>
				</tr>
			</table>
		{else}
			<strong>No hay capacidad asociada a esta solución</strong>
			<p><a href="{$_layoutParams.root}capacidades/add">Agregar Capacidad</a></p>
		{/if}
	<h4>Contrucción</h4>
		{if isset($construccion) && count($construccion)}
			<table class="table">
				<tr>
					<th>Tipo Construcción</th>
					<th>Material</th>
					<th>Terminación</th>
					<th>Grabado</th>
					<th></th>
				</tr>
				<tr>
					<td>{$construccion.construccion}</td>
					<td>{$construccion.material}</td>
					<td>{$construccion.terminacion}</td>
					<td>{if $construccion.grabado==1}Si{else}No{/if}</td>
					<td>
						<a href="{$_layoutParams.root}construcciones/view/{$construccion.id}">Ver</a>
					</td>
				</tr>
			</table>
		{else}
			<strong>No hay construcción asociada a esta solución</strong>
			<p><a href="{$_layoutParams.root}construcciones/add">Agregar Construcción</a></p>
		{/if}
	<h4>Ubicacion</h4>
		{if isset($ubicacion) && count($ubicacion)}
			<table class="table">
				<tr>
					<th>Ubicación</th>
					<th>Estacionamientos</th>
					<th>Dirección</th>
					<th></th>
				</tr>
				<tr>
					<td>{if $ubicacion.ubicacion==1}Central{else}Periférica{/if}</td>
					<td>{if $ubicacion.estacionamientos==1}Si{else}No{/if}</td>
					<td>{$ubicacion.direccion}</td>
					<td>
						<a href="{$_layoutParams.root}ubicaciones/view/{$ubicacion.id}">Ver</a>
					</td>
				</tr>
			</table>
		{else}
			<strong>No hay ubicación asociada a esta solución</strong>
			<p><a href="{$_layoutParams.root}ubicaciones/add">Agregar Ubicación</a></p>
		{/if}
	<h4>Mantención</h4>
		{if isset($mantencion) && count($mantencion)}
			<table class="table">
				<tr>
					<th>Cobro</th>
					<th>Periodo</th>
					<th></th>
				</tr>
				<tr>
					<td>{if $mantencion.cobro==1}Si{else}No{/if}</td>
					<td>{if $mantencion.periodo==1}Anual{elseif $mantencion.periodo==2}Perpetua{else}Sin Mantenciones{/if}</td>
					<td>
						<a href="{$_layoutParams.root}mantenciones/view/{$mantencion.id}">Ver</a>
					</td>
				</tr>
			</table>
		{else}
			<strong>No hay mantención asociada a esta solución</strong>
			<p><a href="{$_layoutParams.root}mantenciones/add">Agregar Mantención</a></p>
		{/if}
</div>
<div class="col-md-4">
	
</div>