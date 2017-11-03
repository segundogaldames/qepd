<div style="padding-top: 50px"></div>
<div class="col-md-2">
	
</div>

<div class="col-md-4">
	<h3>Agregar Cotización</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="nombre">Ingrese nombre: <span class="text-danger">*</span></label>
			<input type="text" name="nombre" value="{$datos.nombre|default:""}" class="form-control" placeholder="Nombre del componente">
		</div>
		<div class="form-group">
			<label for="rut">Ingrese RUT: <span class="text-danger">*</span></label>
			<input type="text" name="rut" value="{$datos.rut|default:""}" class="form-control" placeholder="Cédula de identidad">
		</div>
		<div class="form-group">
			<label for="fono">Ingrese teléfono: <span class="text-danger">*</span></label>
			<input type="number" name="fono" value="{$datos.fono|default:""}" class="form-control" placeholder="9 digitos sin guiones">
		</div>
		<div class="form-group">
			<label for="fono2">Ingrese otro número telefónico:</label>
			<input type="number" name="fono2" value="{$datos.fono2|default:""}" class="form-control" placeholder="9 digitos sin guiones">
		</div>
		<div class="form-group">
			<label for="email">Ingrese email: <span class="text-danger">*</span></label>
			<input type="email" name="email" value="{$datos.email|default:""}" class="form-control" placeholder="Correo electrónico">
		</div>
		<h4>Datos del difunto</h4>
		<div class="form-group">
			<label for="difunto">Ingrese nombre del difunto:</label>
			<input type="text" name="difunto" value="{$datos.difunto|default:""}" class="form-control" placeholder="Nombre del difunto">
		</div>
		<div class="form-group">
			<label for="edad">Ingrese edad: <span class="text-danger">*</span></label>
			<input type="number" name="edad" value="{$datos.edad|default:""}" class="form-control" placeholder="Edad del difunto">
		</div>
		<div class="form-group">
			<label for="alto">Ingrese estatura: <span class="text-danger">*</span></label>
			<input type="number" name="alto" value="{$datos.alto|default:""}" class="form-control" placeholder="Estatura del difunto en centímetros">
		</div>
		<div class="form-group">
			<label for="direccion">Ingrese dirección actual: <span class="text-danger">*</span></label>
			<input type="text" name="alto" value="{$datos.direccion|default:""}" class="form-control" placeholder="Calle, número, sector o población, comuna o ciudad">
		</div>
		<div class="form-group">
			<label for="mensaje">Ingrese observaciones:</label>
			<textarea name="mensaje" id="" rows="6" class="form-control" style="resize: none"></textarea>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Registrar" class="btn btn-success">
		</div>
	</form>
</div>

<div class="col-md-4">
	
</div>
