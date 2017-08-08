<div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="{$_layoutParams.root}condiciones">Ver Condiciones</a></p>
</div>

<div class="col-md-4">
	<h3>Agregar Condiciones</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="precio">Ingrese precio $:<span class="text-danger">*</span></label>
			<input type="number" name="precio" value="{$datos.precio|default:""}" class="form-control" placeholder="Precio del plan">
		</div>
		<div class="form-group">
			<label for="fpago">Ingrese forma de pago:<span class="text-danger">*</span></label>
			<input type="text" name="fpago" value="{$datos.fpago|default:""}" class="form-control" placeholder="Contado, 3 cheques, tarjeta de credito, etc">
		</div>
		<div class="form-group">
			<label for="plazo">Compra a plazo:<span class="text-danger">*</span></label>
			<select name="plazo" id="" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="anticipada">Compra anticipada:<span class="text-danger">*</span></label>
			<select name="anticipada" id="" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="seguro">Seguro deceso:<span class="text-danger">*</span></label>
			<select name="seguro" id="" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="convenios">Convenios:</label>
			<input type="text" name="convenios" value="{$datos.convenios|default:""}" class="form-control" placeholder="Cajas de compensación, AFP, etc">
		</div>
		<div class="form-group">
			<label for="desctocol">Descuento en columbario:</label>
			<input type="text" name="desctocol" value="{$datos.desctocol|default:""}" placeholder="% descuento" class="form-control">
		</div>
		<div class="form-group">
			<label for="desctonicho">Descuento cliente nicho:</label>
			<input type="text" name="desctonicho" value="{$datos.desctocol|default:""}" placeholder="% descuento" class="form-control">
		</div>
		<div class="form-group">
			<label for="pensiones">Pensiones:<span class="text-danger">*</span></label>
			<select name="pensiones" id="" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Registrar" class="btn btn-success">
		</div>
	</form>
</div>

<div class="col-md-4">
	
</div>
