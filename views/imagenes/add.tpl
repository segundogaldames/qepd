<div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="{$_layoutParams.root}planes">Ver Planes</a></p>
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
			<label for="componente">Seleccione un componente: <span class="text-danger">*</span></label>
			<select name="componente" id="" class="form-control">
				<option value="">Seleccione</option>
				{if isset($componentes) && count($componentes)}
					{foreach from=$componentes item=c}
						<option value="{$c.id}">{$c.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<label for="plan">Seleccione un plan: <span class="text-danger">*</span></label>
			<select name="plan" id="" class="form-control">
				<option value="">Seleccione</option>
				{if isset($planes) && count($planes)}
					{foreach from=$planes item=p}
						<option value="{$p.id}">{$p.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Cargar" class="btn btn-success">
		</div>
	</form>
</div>

<div class="col-md-4">
	
</div>
