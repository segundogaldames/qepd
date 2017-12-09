<div class="col-md-2">
</div>
<div class="col-md-4">
	<h3>Agregar Empresa</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="nombre">Ingrese nombre: <span class="text-danger">*</span></label>
			<input type="text" name="nombre" value="{$datos.nombre|default:""}" class="form-control" placeholder="Nombre de la empresa">
		</div>
		<div class="form-group">
			<label for="email">Ingrese email: <span class="text-danger">*</span></label>
			<input type="text" name="email" value="{$datos.email|default:""}" class="form-control" placeholder="Email de la empresa">
		</div>
		<div class="form-group">
			<label for="rut">Ingrese RUT: <span class="text-danger">*</span></label>
			<input type="text" name="rut" value="{$datos.rut|default:""}" class="form-control" placeholder="RUT de la empresa">
		</div>
		<div class="form-group">
			<label for="usuario">Seleccione a un usuario</label>
			<select name="usuario" id="" class="form-control">
				<option value="">Usuarios</option>
				{if isset($usuarios) && count($usuarios)}
					{foreach from=$usuarios item=u}
						<option value="{$u.id}">{$u.nombre} {$u.apellido}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<label for="usuario">Seleccione un tipo de empresa:</label>
			<select name="tipo_empresa" id="" class="form-control">
				<option value="">Tipo Empresa</option>
				{if isset($tipos) && count($tipos)}
					{foreach from=$tipos item=t}
						<option value="{$t.id}">{$t.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Registrar" class="btn btn-success">
			<a href="{$_layoutParams.root}empresas" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>

<div class="col-md-4">
	
</div>
