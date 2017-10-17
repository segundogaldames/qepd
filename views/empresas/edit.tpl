<div style="padding-top: 50px"></div>
<div class="col-md-2"></div>
<div class="col-md-4">
	<h3>Editar Empresa</h3>
	<form action="" method="post" name="form">
		<div class="form-group">
			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre" class="form-control" value="{$dato.nombre|default:''}">
		</div>
		<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" name="email" class="form-control" value="{$dato.email|default:''}">
		</div>
		<div class="form-group">
			<label for="rut">Rut:</label>
			<input type="text" name="rut" class="form-control" value="{$dato.rut|default:''}">
		</div>
		<div class="form-group">
			<label for="usuario">Usuario actual: {$dato.nom_usuario|default:''} {$dato.apellido|default:''}</label>
			<select name="usuario" id="" class="form-control">
				<option value="{$dato.usuario_id}">{$dato.nom_usuario} {$dato.apellido}</option>
				{if isset($usuarios) && count($usuarios)}
					{foreach from=$usuarios item=u}
						<option value="{$u.id}">{$u.nombre} {$u.apellido}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<label for="tipo_empresa">Tipo empresa actual: {$dato.tipo|default:''}</label>
			<select name="tipo_empresa" id="" class="form-control">
				<option value="{$dato.tipo_empresa_id}">{$dato.tipo}</option>
				{if isset($tipos) && count($tipos)}
					{foreach from=$tipos item=t}
						<option value="{$t.id}">{$t.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Guardar Cambios" class="btn btn-success">&nbsp;&nbsp;
			<a href="{$_layoutParams.root}empresas">Volver</a>
		</div>
	</form>
</div>
<div class="col-md-4">
	
</div>	


	
	
	
