<div class="col-md-2"></div>
<div class="col-md-4">

	<h3>Contactar Cliente</h3>
	<div class="jumbotron">
		<table class="table table-hover">
			<tr>
				<th>Nombre:</th>
				<td>{$contacto.nombre}</td>
			</tr>
			<tr>
				<th>Email:</th>
				<td> {$contacto.email}</td>
			</tr>
			<tr>
				<th>Teléfono:</th>
				<td>{$contacto.telefono}</td>
			</tr>
			<tr>
				<th>Asunto:</th>
				<td>{$contacto.asunto}</td>
			</tr>
			<tr>
				<th>Mensaje:</th>
				<td>
					<span class="text-info">{$contacto.mensaje}</span>
				</td>
			</tr>
			<tr>
				<th>Es urgente?:</th>
				<td>{if $contacto.urgente==1}Si{else}No{/if}</td>
			</tr>
			<tr>
				<th>Estado de la gestión:</th>
				<td>{if $contacto.estado==1}Pendiente{else}Processado{/if}</td>
			</tr>
		</table>
	</div>
	<hr>
	<p class="text-success">Complete los datos para esta gestión...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form">
		<div class="form-group">
			<label>Observaciones:</label>
			<textarea name="observaciones" class="form-control" rows="6" style="resize: none;">{$datos.observaciones|default:""}</textarea>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Guardar Cambios" class="btn btn-success">
			<a href="{$_layoutParams.root}contactos" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>
<div class="col-md-2"></div>