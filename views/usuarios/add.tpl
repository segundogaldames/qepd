<div class="col-md-2"></div>
<div class="col-md-4">
	<h3>Registro de Usuarios</h3>
	<p class="text-success">Ingrese sus datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="nombre">Ingrese nombre: <span class="text-danger">*</span></label>
			<input type="text" name="nombre" class="form-control">
		</div>
		<div class="form-group">
			<label for="nombre">Ingrese apellido: <span class="text-danger">*</span></label>
			<input type="text" name="apellido" class="form-control">
		</div>
		<div class="form-group">
			<label for="email">Ingrese correo electrónico (nombre de usuario): <span class="text-danger">*</span></label>
			<input type="text" name="email" class="form-control">
		</div>
		<div class="form-group">
			<label for="clave">Ingrese password (mínimo 8 caracteres): <span class="text-danger">*</span></label>
			<input type="password" name="clave" class="form-control" onpaste="return false">
		</div>
		<div class="form-group">
			<label for="clave2">Reingrese password: <span class="text-danger">*</span></label>
			<input type="password" name="clave_dos" class="form-control" onpaste="return false">
		</div>
		<div class="form-group">
			<label for="role">Seleccione el rol del usuario:</label>
			<select name="role" id="" class="form-control">
				<option value="">Seleccione Rol</option>
				{if isset($roles) && count($roles)}
					{foreach from=$roles item=rol}
						<option value="{$rol.id}">{$rol.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Registrar" class="btn btn-success">
		</div>
	</form>
</div>
<div class="col-md-4">
	<h3>
		<a href="{$_layoutParams.root}" onclick="return abandonarRegistro('{$_layoutParams.root}usuario/cerrar}');">
			<img src="{$_layoutParams.root}/views/layout/default/img/cerrar.png" title="Abandonar registro">
		</a>
	</h3>
</div>	


	
	
	
