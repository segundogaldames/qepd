<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="{$_layoutParams.root}planes">Planes</a></p>
</div>

<div class="col-md-4">
	<h3>Agregar Sepultaciones</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="sala">Sala velatorio:<span class="text-danger">*</span></label>
			<select name="sala" id="" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="capilla">Capilla ecuménica:<span class="text-danger">*</span></label>
			<select name="capilla" id="" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="liturgia">Liturgia - responso:<span class="text-danger">*</span></label>
			<select name="liturgia" id="" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="toldos">Número de toldos:</label>
			<input type="number" name="toldos" class="form-control" placeholder="Numero de toldos" value="{$datos.toldo|default:""}">
		</div>
		<div class="form-group">
			<label for="sillas">Número de sillas:</label>
			<input type="number" name="sillas" class="form-control" placeholder="Numero de sillas" value="{$datos.sillas|default:""}">
		</div>
		<div class="form-group">
			<label for="amplificacion">Amplificación:<span class="text-danger">*</span></label>
			<select name="amplificacion" id="" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="diacono">Diácono:<span class="text-danger">*</span></label>
			<select name="diacono" id="" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="coro">Coro:</label>
			<input type="number" name="coro" class="form-control" placeholder="Número de integrantes" value="{$datos.coro|default:""}">
		</div>
		<div class="form-group">
			<label for="cafeteria">Cafetería:<span class="text-danger">*</span></label>
			<select name="cafeteria" id="" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Básica</option>
				<option value="2">Superior</option>
				<option value="3">No considera</option>
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Guardar" class="btn btn-success">
			<a href="{$_layoutParams.root}planes" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>

<div class="col-md-4">
	
</div>
