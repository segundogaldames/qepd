<div class="col-md-2"></div>
<div class="col-md-6">
	<h3>Editar Status Cotización</h3>
	<form action="" method="post" name="form">
		<div class="form-group">
			<label>Cliente: {$dato.cliente}</label>
		</div>
		<div class="form-group">
			<label>Fecha: {$dato.created|date_format:'%d-%m-%Y'}</label>
		</div>
		<div class="form-group">
			<label>Status</label>
			<select name="status" class="form-control">
				<option value="{$dato.status_id}">{$dato.status}</option>
				{if isset($status) && count($status)}
					{foreach from=$status item=st}
						<option value="{$st.id}">{$st.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Guardar Cambios" class="btn btn-success">
			<a href="{$_layoutParams.root}cotizaciones" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>
.<col class="md-2"></col>