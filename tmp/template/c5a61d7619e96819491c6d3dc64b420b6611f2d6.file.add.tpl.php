<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-06 14:45:42
         compiled from "/Applications/MAMP/htdocs/qepd/views/planes/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14210303515925fbf9835673-39241297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5a61d7619e96819491c6d3dc64b420b6611f2d6' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/planes/add.tpl',
      1 => 1496771139,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14210303515925fbf9835673-39241297',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5925fbf9ab3bf5_29916184',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
    'tipoplanes' => 0,
    'tp' => 0,
    'servicios' => 0,
    'serv' => 0,
    'empresas' => 0,
    'e' => 0,
    'destinatarios' => 0,
    'dest' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5925fbf9ab3bf5_29916184')) {function content_5925fbf9ab3bf5_29916184($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes">Ver Planes</a></p>
</div>

<div class="col-md-4">
	<h3>Agregar Plan</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="nombre">Ingrese nombre:<span class="text-danger">*</span></label>
			<input type="text" name="nombre" class="form-control" placeholder="Nombre del plan" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="codigo">Ingrese el código SKU:</label>
			<input type="text" name="codigo" class="form-control" placeholder="Codigo del plan" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['codigo'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="tipo_plan">Seleccione el tipo de plan:<span class="text-danger">*</span></label></label>
			<select name="tipo_plan" id="" class="form-control">
				<option value="">Tipo Plan</option>
				<?php if (isset($_smarty_tpl->tpl_vars['tipoplanes']->value)&&count($_smarty_tpl->tpl_vars['tipoplanes']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['tp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tipoplanes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tp']->key => $_smarty_tpl->tpl_vars['tp']->value) {
$_smarty_tpl->tpl_vars['tp']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['tp']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['tp']->value['nombre'];?>
</option>
					<?php } ?>
				<?php }?>
			</select>
		</div>
		<div class="form-group">
			<label for="servicio">Seleccione un servicio:<span class="text-danger">*</span></label></label>
			<select name="servicio" id="" class="form-control">
				<option value="">Servicio</option>
				<?php if (isset($_smarty_tpl->tpl_vars['servicios']->value)&&count($_smarty_tpl->tpl_vars['servicios']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['serv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['serv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['servicios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['serv']->key => $_smarty_tpl->tpl_vars['serv']->value) {
$_smarty_tpl->tpl_vars['serv']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['serv']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['serv']->value['nombre'];?>
</option>
					<?php } ?>
				<?php }?>
			</select>
		</div>
		<div class="form-group">
			<label for="empresa">Seleccione una empresa:<span class="text-danger">*</span></label>
			<select name="empresa" id="" class="form-control">
				<option value="">Empresas</option>
				<?php if (isset($_smarty_tpl->tpl_vars['empresas']->value)&&count($_smarty_tpl->tpl_vars['empresas']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['empresas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['e']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value['nombre'];?>
</option>
					<?php } ?>
				<?php }?>
			</select>
		</div>
		<div class="form-group">
			<label for="destinatario">Seleccione un destinatario:</label>
			<select name="destinatario" id="" class="form-control">
				<option value="">Destinatarios</option>
				<?php if (isset($_smarty_tpl->tpl_vars['destinatarios']->value)&&count($_smarty_tpl->tpl_vars['destinatarios']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['dest'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dest']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['destinatarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dest']->key => $_smarty_tpl->tpl_vars['dest']->value) {
$_smarty_tpl->tpl_vars['dest']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['dest']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dest']->value['nombre'];?>
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
	
</div>
<?php }} ?>
