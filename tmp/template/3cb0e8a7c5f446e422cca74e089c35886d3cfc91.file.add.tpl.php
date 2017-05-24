<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-18 16:10:03
         compiled from "/Applications/MAMP/htdocs/qepd/views/usuario/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157919758658f637c5815f77-62108764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cb0e8a7c5f446e422cca74e089c35886d3cfc91' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/usuario/add.tpl',
      1 => 1492542600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157919758658f637c5815f77-62108764',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58f637c58e5757_47988718',
  'variables' => 
  array (
    'roles' => 0,
    'rol' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f637c58e5757_47988718')) {function content_58f637c58e5757_47988718($_smarty_tpl) {?><div class="col-md-2"></div>
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
				<?php if (isset($_smarty_tpl->tpl_vars['roles']->value)&&count($_smarty_tpl->tpl_vars['roles']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['rol'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rol']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rol']->key => $_smarty_tpl->tpl_vars['rol']->value) {
$_smarty_tpl->tpl_vars['rol']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['rol']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['rol']->value['nombre'];?>
</option>
					<?php } ?>
				<?php }?>
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
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
" onclick="return abandonarRegistro('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuario/cerrar}');">
			<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
/views/layout/default/img/cerrar.png" title="Abandonar registro">
		</a>
	</h3>
</div>	


	
	
	
<?php }} ?>
