<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-12 21:49:27
         compiled from "/Applications/MAMP/htdocs/mercadomuebles/views/usuario/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192874205555ca6eaab61282-47350010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5c66e8e3f11d9dff8f902c121b53ace30f47c94' => 
    array (
      0 => '/Applications/MAMP/htdocs/mercadomuebles/views/usuario/index.tpl',
      1 => 1439408945,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192874205555ca6eaab61282-47350010',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55ca6eaac3c7e9_70504546',
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ca6eaac3c7e9_70504546')) {function content_55ca6eaac3c7e9_70504546($_smarty_tpl) {?><div class="col-md-2"></div>
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
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuario/cerrar" onclick="return abandonarIngreso('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuario/cerrar');">
			<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
/views/layout/default/img/cerrar.png" title="Abandonar ingreso">
		</a>
	</h3>
</div>

<?php }} ?>
