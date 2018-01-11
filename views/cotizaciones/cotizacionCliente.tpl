<div class="col-md-2">
	
</div>
<div class="col-md-5">
		<h3>Cotización realizada por {$cotizacion.cliente}</h3>
		<table class="table table-hover">
			<tr>
				<td colspan="2"><h4>Datos del cliente</h4></td>
			</tr>
			<tr>
				<th>Nombre:</th>
				<td>{$cotizacion.cliente}</td>
			</tr>
			<tr>
				<th>RUT:</th>
				<td>{$cotizacion.rut}</td>
			</tr>
			<tr>
				<th>Teléfono fijo:</th>
				<td>{$cotizacion.fono_fijo}</td>
			</tr>
			<tr>
				<th>Teléfono móvil:</th>
				<td>{$cotizacion.fono_movil}</td>
			</tr>
			<tr>
				<th>Correo Electrónico:</th>
				<td>{$cotizacion.email}</td>
			</tr>
			<tr>
				<th>Plan cotizado:</th>
				<td>{$cotizacion.plan}</td>
			</tr>
			<tr>
				<th>Compra anticipada:</th>
				<td>{if $cotizacion.opcion==1}Si{else}No{/if}</td>
			</tr>
			<tr>
				<th>Fecha de Envío:</th>
				<td>{$cotizacion.created|date_format:'%d-%m-%Y'}</td>
			</tr>
		</table>
			<a href="{$_layoutParams.root}cotizaciones/mensajes" class="btn btn-success" onclick="confirmarCotizacion('{$_layoutParams.root}cotizaciones/mensajes')">Aceptar</a>
			<a href="{$_layoutParams.root}cotizaciones/editCotizacion/{$cotizacion.id}" class="btn btn-primary">Modificar</a>
			
	

</div>

<div class="col-md-2">
	
</div>	


	
	
	
