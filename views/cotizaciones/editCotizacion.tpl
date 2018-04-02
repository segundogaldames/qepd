<div class="col-md-2" style="padding-top: 20px">
	
</div>

<div class="col-md-4">
	<h3>Editar Cotización</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<h4>Datos del Cliente</h4>
		<div class="form-group">
			<label for="opcion">Compra anticipada?<span class="text-danger">*</span></label>
			<select name="opcion" class="form-control">
				<option value="{$dato.opcion}">{if $dato.opcion==1}Si{else}No{/if}</option>
			</select>
		</div>
		<div class="form-group">
			<label for="nombre">Nombre:<span class="text-danger">*</span></label>
			<input type="text" name="cliente" value="{$dato.cliente|default:""}" class="form-control" placeholder="Su nombre completo">
		</div>
		<div class="form-group">
			<label for="rut">RUT (opcional):</label>
			<input type="text" name="rut" value="{$dato.rut|default:""}" class="form-control" placeholder="Cédula de identidad completa">
		</div>
		<div class="form-group">
			<label for="fono">Teléfono fijo (opcional):</label>
			<input type="number" name="fono_fijo" value="{$dato.fono_fijo|default:""}" class="form-control" placeholder="9 digitos sin guiones">
		</div>
		<div class="form-group">
			<label for="fono2">Teléfono móvil:<span class="text-danger">*</span></label>
			<input type="number" name="fono_movil" value="{$dato.fono_movil|default:""}" class="form-control" placeholder="9 digitos sin guiones">
		</div>
		<div class="form-group">
			<label for="email">Email: <span class="text-danger">*</span></label>
			<input type="email" name="email" value="{$dato.email|default:""}" class="form-control" placeholder="Correo electrónico">
		</div>
		<div class="form-group">
			<label for="comuna">Comuna: <span class="text-danger">*</span></label>
			<select name="comuna" class="form-control">
				<option value="{$dato.comuna_id}">{$dato.comuna}</option>
				{if isset($comunas) && count($comunas)}
					{foreach from=$comunas item=c}
						<option value="{$c.id}">{$c.comuna}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<label for="mensaje">Observaciones:</label>
			<textarea name="mensaje" id="" rows="6" class="form-control" style="resize: none">{$dato.observaciones}</textarea>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Modificar" class="btn btn-success">
			<a href="{$_layoutParams.root}planes/planesServicios" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>

<div class="col-md-4">
	
</div>
