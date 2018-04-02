<div class="col-md-2"></div>
<div class="col-md-4">

	<h3>Contactar Cliente</h3>
	<div class="jumbotron">
		<table class="table table-hover">
			<tr>
				<th>Nombre:</th>
				<td>{$dato.nombre}</td>
			</tr>
			<tr>
				<th>Email:</th>
				<td> {$dato.email}</td>
			</tr>
			<tr>
				<th>Teléfono:</th>
				<td>{$dato.telefono}</td>
			</tr>
			<tr>
				<th>Asunto:</th>
				<td>{$dato.asunto}</td>
			</tr>
			<tr>
				<th>Mensaje:</th>
				<td>
					<span class="text-info">{$dato.mensaje}</span>
				</td>
			</tr>
			<tr>
				<th>Es urgente?:</th>
				<td>{if $dato.urgente==1}Si{else}No{/if}</td>
			</tr>
			<tr>
				<th>Estado de la gestión:</th>
				<td>{if $dato.estado==1}Pendiente{else}Processado{/if}</td>
			</tr>
		</table>
	</div>
	<hr>
	<p class="text-success">Complete los datos para esta gestión...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form">
		<div class="form-group">
			<label>Estado <span class="text-danger">*</span></label>
			<select name="estado" class="form-control">
				<option value="{$dato.estado}">{if $dato.estado==1}Pendiente{else}Procesado{/if}</option>
				<option value="1">Pendiente</option>
				<option value="2">Procesado</option>
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Guardar Cambios" class="btn btn-success">
			<a href="{$_layoutParams.root}contactos" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>
<div class="col-md-2"></div>