<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-05-29 16:44:11
         compiled from "/Applications/MAMP/htdocs/qepd/views/servicios/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:700525084592c63517cd7d1-66352407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f4453abb4bf5d3cfb766e39520e5ae8a4e21292' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/servicios/edit.tpl',
      1 => 1496087045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '700525084592c63517cd7d1-66352407',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_592c63517cfb48_03172685',
  'variables' => 
  array (
    'dato' => 0,
    'tipos' => 0,
    't' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592c63517cfb48_03172685')) {function content_592c63517cfb48_03172685($_smarty_tpl) {?><div class="col-md-2"></div>
<div class="col-md-4">
	<div style="padding-top: 50px"></div>
	<h3>Editar Servicio</h3>
	
	<form action="" method="post">
		<div class="form-group">
			<label for="nombre">Ingrese nombre:<span class="text-danger">*</span></label>
			<input type="text" name="nombre" class="form-control" placeholder="Nombre del servicio" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="tipo">Seleccione un tipo de empresa:</label>
			<select name="tipo" id="" class="form-control">
				<option value="">Tipo Empresas</option>
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
			<input type="submit" value="Registrar" class="btn btn-success">
		</div>
	</form>
	<p>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
servicios">Volver</a>
	</p>
	
</div>
<div class="col-md-4">
	
</div><?php }} ?>
