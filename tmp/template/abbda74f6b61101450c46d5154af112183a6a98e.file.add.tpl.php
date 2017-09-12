<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-09-12 18:24:18
         compiled from "/Applications/MAMP/htdocs/qepd/views/terminaciones/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103826179159b85082752e83-83887732%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abbda74f6b61101450c46d5154af112183a6a98e' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/terminaciones/add.tpl',
      1 => 1505244970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103826179159b85082752e83-83887732',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_59b85082934289_67637925',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b85082934289_67637925')) {function content_59b85082934289_67637925($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
terminaciones">Ver Terminaciones</a></p>
</div>

<div class="col-md-4">
	<h3>Agregar Terminaciones</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="nombre">Ingrese nombre:<span class="text-danger">*</span></label>
			<input type="text" name="nombre" class="form-control" placeholder="Nombre de la terminación" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
">
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
