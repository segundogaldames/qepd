<div class="col-md-2" style="padding-top: 20px">
	
</div>

<div class="col-md-4">
	<h3>Cotizar</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<h4>Datos del Cliente</h4>
		<div class="form-group">
			<label for="opcion">Compra inmediata?:<span class="text-danger">*</span></label>
			<select name="opcion" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="nombre">Nombre:<span class="text-danger">*</span></label>
			<input type="text" name="cliente" value="{$datos.cliente|default:""}" class="form-control" placeholder="Su nombre completo">
		</div>
		<div class="form-group">
			<label for="rut">RUT (opcional):</label>
			<input type="text" name="rut" value="{$datos.rut|default:""}" class="form-control" placeholder="Cédula de identidad completa">
		</div>
		<div class="form-group">
			<label for="fono2">Teléfono móvil:<span class="text-danger">*</span></label>
			<input type="number" name="fono_movil" value="{$datos.fono_movil|default:""}" class="form-control" placeholder="9 digitos sin guiones">
		</div>
		<div class="form-group">
			<label for="fono">Teléfono fijo (opcional):</label>
			<input type="number" name="fono_fijo" value="{$datos.fono_fijo|default:""}" class="form-control" placeholder="9 digitos sin guiones">
		</div>
		
		<div class="form-group">
			<label for="email">Email: <span class="text-danger">*</span></label>
			<input type="email" name="email" value="{$datos.email|default:""}" class="form-control" placeholder="Correo electrónico">
		</div>
		<div class="form-group">
			<label for="comuna">Comuna: <span class="text-danger">*</span></label>
			<select name="comuna" class="form-control">
				<option value="">Seleccione</option>
				{if isset($comunas) && count($comunas)}
					{foreach from=$comunas item=c}
						<option value="{$c.id}">{$c.comuna}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<label for="mensaje">Observaciones (opcional):</label>
			<textarea name="mensaje" id="" rows="6" class="form-control" style="resize: none"></textarea>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Cotizar" class="btn btn-success">
			<a href="{$_layoutParams.root}planes/planesServicios" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>

<div class="col-md-4">
	
</div>
