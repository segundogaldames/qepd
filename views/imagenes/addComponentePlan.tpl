<div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="{$_layoutParams.root}imagenes">Imágenes</a></p>
	<p class="enlace"><a href="{$_layoutParams.root}planes">Planes</a></p>
</div>

<div class="col-md-4">
	<h3>Agregar Imagen</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form" enctype="multipart/form-data">
		<div class="form-group">
			<label for="titulo">Título de la imagen:<span class="text-danger">*</span></label>
			<input type="text" name="titulo" class="form-control" value="{$datos.titulo|default:''}">
		</div>
		<div class="form-group">
			<label for="imagen">Imagen: <span class="text-danger">*</span></label>
			<input type="file" name="imagen" class="file" placeholder="Seleccione una imagen">
		</div>
		
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Cargar" class="btn btn-success">
			<a href="{$_layoutParams.root}imagenes" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>

<div class="col-md-4">
	
</div>
