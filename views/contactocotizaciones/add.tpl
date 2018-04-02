<div class="col-md-2"></div>
<div class="col-md-6">
	<h3>Contactar Cotización</h3>
	<div class="jumbotron">
		<table class="table table-hover">
			<tr>
				<th>Nombre:</th>
				<td>{$cotizacion.cliente}</td>
			</tr>
			<tr>
				<th>Teléfono Fijo:</th>
				<td>{$cotizacion.fono_fijo}</td>
			</tr>
			<tr>
				<th>Teléfono Móvil:</th>
				<td>{$cotizacion.fono_movil}</td>
			</tr>
			<tr>
				<th>Email:</th>
				<td>{$cotizacion.email}</td>
			</tr>
			<tr>
				<th>Plan:</th>
				<td>{$cotizacion.plan}</td>
			</tr>
			<tr>
				<th>Fecha de Cotización:</th>
				<td>{$cotizacion.created|date_format:'%d-%m-%Y'}</td>
			</tr>
		</table>
	</div>
	<hr>
	<!--formulario para procesar cotizaciones-->
	<h4>Completa los datos para este contacto</h4>
	<div class="col-md-8">
		<form action="" method="post" name="form">
			<div class="form-group">
				<label>Destinatario (opcional):</label>
				<select name="destinatario" class="form-control">
					<option value="">Seleccione</option>
					{if isset($destinatarios) && count($destinatarios)}
						{foreach from=$destinatarios item=d}
							<option value="{$d.id}">{$d.nombre}</option>
						{/foreach}
					{/if}
				</select>
			</div>
			<div class="form-group">
				<label>Nombre difunto (opcional):</label>
				<input type="text" name="nombre" class="form-control" placeholder="Nombre del difunto">
			</div>
			<div class="form-group">
				<label>Edad difunto (opcional):</label>
				<input type="number" name="edad" class="form-control" placeholder="Edad del difunto">
			</div>
			<div class="form-group">
				<label>Estatura difunto: (en centímetros)</label>
				<input type="number" name="estatura" class="form-control" placeholder="Estatura del difunto en centímetros">
			</div>
			<div class="form-group">
				<label>Peso difunto: (en kilogramos)</label>
				<input type="number" name="peso" class="form-control" placeholder="Peso del difunto en kilogramos">
			</div>
			<div class="form-group">
				<label>Observaciones:</label>
				<textarea name="mensaje" rows="6" class="form-control" style="resize: none;"></textarea>
			</div>
			<div class="form-group">
				<input type="hidden" name="enviar" value="1">
				<input type="submit" value="Guardar" class="btn btn-success">
			</div>
		</form>
	</div>
	
</div>
<div class="col-md-2"></div>