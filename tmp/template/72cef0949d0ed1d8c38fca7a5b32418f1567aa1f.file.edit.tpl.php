<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-18 17:50:02
         compiled from "/Applications/MAMP/htdocs/qepd/views/roles/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168719820858f67bfaa86074-59328341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72cef0949d0ed1d8c38fca7a5b32418f1567aa1f' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/roles/edit.tpl',
      1 => 1492548567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168719820858f67bfaa86074-59328341',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dato' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58f67bfab2aa16_40623725',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f67bfab2aa16_40623725')) {function content_58f67bfab2aa16_40623725($_smarty_tpl) {?><div class="col-md-2"></div>
<div class="col-md-4">
	<div style="padding-top: 50px"></div>
	<h3>Editar Role</h3>
	<form action="" method="post" name="form">
		<div class="form-group">
			<label for="nombre">Ingrese nombre:</label>
			<input type="text" name="nombre" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
">
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
