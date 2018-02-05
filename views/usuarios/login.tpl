<div class="col-md-2"></div>
<div class="col-md-4">
	<h3>Ingreso de Usuarios</h3>
	<p class="text-success">Ingrese sus datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="email">Ingrese correo electrónico: <span class="text-danger">*</span></label>
			<input type="text" name="email" class="form-control">
		</div> 
		<div class="form-group">
			<label for="password">Ingrese password o clave: <span class="text-danger">*</span></label>
			<input type="password" name="password" class="form-control" onpaste="return false">
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Ingresar" class="btn btn-success">
		</div>
	</form>
</div>
<div class="col-md-4">
	<h3>
		<a href="{$_layoutParams.root}usuarios/cerrar" onclick="return abandonarIngreso('{$_layoutParams.root}usuarios/cerrar');">
			<img src="{$_layoutParams.root}/views/layout/default/img/cerrar.png" title="Abandonar ingreso">
		</a>
	</h3>
</div>

