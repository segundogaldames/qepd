<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-15 22:21:01
         compiled from "/Applications/MAMP/htdocs/mercadomuebles/views/usuario/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174267967955ca65a042bdf5-14255022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c008c0378df1d279c6a3ea3fef8da36ed7394d4e' => 
    array (
      0 => '/Applications/MAMP/htdocs/mercadomuebles/views/usuario/add.tpl',
      1 => 1440161466,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174267967955ca65a042bdf5-14255022',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55ca65a04d2921_01141713',
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ca65a04d2921_01141713')) {function content_55ca65a04d2921_01141713($_smarty_tpl) {?><div class="col-md-2"></div>
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
			<label for="telefono">Ingrese número telefónico:</label>
			<input type="text" name="fono" class="form-control">
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
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Registrar" class="btn btn-success">
		</div>
	</form>
</div>
<div class="col-md-4">
	<h3>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
" onclick="return abandonarRegistro('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuario/cerrar}');">
			<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
/views/layout/default/img/cerrar.png" title="Abandonar registro">
		</a>
	</h3>
</div>	


	
	
	
<?php }} ?>
