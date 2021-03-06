<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="{$_layoutParams.root}velatorios">Ver Velatorios</a></p>
</div>

<div class="col-md-4">
	<h3>Agregar Velatorio</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="tramite">Trámites defunción:<span class="text-danger">*</span></label>
			<input type="text" name="tramite" class="form-control" placeholder="Trámites del velatorio: inscripción, pase, certificados, etc." value="{$datos.tramite|default:""}">
		</div>
		<div class="form-group">
			<label for="asesor">Asesor a domicilio:<span class="text-danger">*</span></label>
			<select name="asesor" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="sala">Sala de velatorio:<span class="text-danger">*</span></label>
			<select name="sala" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="capilla">Capilla ecuménica:<span class="text-danger">*</span></label>
			<select name="capilla" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="cirio">Nº de Cirios:</label>
			<input type="number" name="cirios" class="form-control" placeholder="Número de cirios" value="{$datos.cirio|default:""}">
		</div>
		<div class="form-group">
			<label for="portacirios">Nº de Portacirios:</label>
			<input type="number" name="portacirios" class="form-control" placeholder="Número de portacirios" value="{$datos.portacirios|default:""}">
		</div>
		<div class="form-group">
			<label for="cruz">Nº de Cruces:</label>
			<input type="number" name="cruz" class="form-control" placeholder="Número de cruces" value="{$datos.cruz|default:""}">
		</div>
		<div class="form-group">
			<label for="canasto">Nº de Flores en canasto:</label>
			<input type="number" name="canasto" class="form-control" placeholder="Número de flores en canasto" value="{$datos.canasto|default:""}">
		</div>
		<div class="form-group">
			<label for="cubreurna">Nº de Flores cubreurna:</label>
			<input type="number" name="cubreurna" class="form-control" placeholder="Número de flores cubreurna" value="{$datos.cubreurna|default:""}">
		</div>
		<div class="form-group">
			<label for="libro">Nº de Libros de condolencias:</label>
			<input type="number" name="libro" class="form-control" placeholder="Número de libros de condolencias" value="{$datos.libro|default:""}">
		</div>
		<div class="form-group">
			<label for="parroco">Párroco:<span class="text-danger">*</span></label>
			<select name="parroco" class="form-control">
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
			<label for="aviso">Nº de Avisos de prensa:</label>
			<input type="number" name="aviso" class="form-control" placeholder="Número de avisos" value="{$datos.coro|default:""}">
		</div>
		<div class="form-group">
			<label for="tarjeta">Nº de Tarjetas de agradecimiento:</label>
			<input type="number" name="tarjeta" class="form-control" placeholder="Número de tarjetas" value="{$datos.tarjeta|default:""}">
		</div>
		<div class="form-group">
			<label for="cafeteria">Cafeteria:<span class="text-danger">*</span></label>
			<select name="cafeteria" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Básica</option>
				<option value="2">Superior</option>
				<option value="3">No considerada</option>
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
