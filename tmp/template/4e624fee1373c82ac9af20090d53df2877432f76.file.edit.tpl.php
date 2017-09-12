<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-09-11 16:44:44
         compiled from "/Applications/MAMP/htdocs/qepd/views/empresas/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68926308559b6e0055b42c3-00472936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e624fee1373c82ac9af20090d53df2877432f76' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/empresas/edit.tpl',
      1 => 1505158728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68926308559b6e0055b42c3-00472936',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_59b6e0056a4317_77958420',
  'variables' => 
  array (
    'dato' => 0,
    'usuarios' => 0,
    'u' => 0,
    'tipos' => 0,
    't' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b6e0056a4317_77958420')) {function content_59b6e0056a4317_77958420($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2"></div>
<div class="col-md-4">
	<h3>Editar Empresa</h3>
	<form action="" method="post" name="form">
		<div class="form-group">
			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" name="email" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['email'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="rut">Rut:</label>
			<input type="text" name="rut" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['rut'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="usuario">Usuario actual: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['nom_usuario'])===null||$tmp==='' ? '' : $tmp);?>
 <?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['apellido'])===null||$tmp==='' ? '' : $tmp);?>
</label>
			<select name="usuario" id="" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['usuario_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dato']->value['nom_usuario'];?>
 <?php echo $_smarty_tpl->tpl_vars['dato']->value['apellido'];?>
</option>
				<?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value)&&count($_smarty_tpl->tpl_vars['usuarios']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['u']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value['apellido'];?>
</option>
					<?php } ?>
				<?php }?>
			</select>
		</div>
		<div class="form-group">
			<label for="tipo_empresa">Tipo empresa actual: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['tipo'])===null||$tmp==='' ? '' : $tmp);?>
</label>
			<select name="tipo_empresa" id="" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['tipo_empresa_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dato']->value['tipo'];?>
</option>
				<?php if (isset($_smarty_tpl->tpl_vars['tipos']->value)&&count($_smarty_tpl->tpl_vars['tipos']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tipos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['nombre'];?>
</option>
					<?php } ?>
				<?php }?>
			</select>
		</div>
		
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Editar" class="btn btn-success">
		</div>
	</form>
</div>
<div class="col-md-4">
	
</div>	


	
	
	
<?php }} ?>
