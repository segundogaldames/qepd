
<div class="col-md-2"></div>
<div class="col-md-4">
	<h3>Editar de Usuario</h3>
	<p class="text-success">Ingrese sus datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="nombre">Nombre: <span class="text-danger">*</span></label>
			<input type="text" name="nombre" class="form-control" value="{$dato.nombre}">
		</div>
		<div class="form-group">
			<label for="nombre">Apellido: <span class="text-danger">*</span></label>
			<input type="text" name="apellido" class="form-control" value="{$dato.apellido}">
		</div>
		<div class="form-group">
			<label for="role">Rol usuario:</label>
			<select name="role" id="" class="form-control">
				<option value="{$dato.roles_id}">{$dato.rol}</option>
				{if isset($roles) && count($roles)}
					{foreach from=$roles item=rol}
						<option value="{$rol.id}">{$rol.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Actualizar" class="btn btn-success">
			<a href="{$_layoutParams.root}usuarios" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>
<div class="col-md-4">
</div>	


	
	
	
