<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-09-12 15:28:15
         compiled from "/Applications/MAMP/htdocs/qepd/views/materiales/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158885540559b826f5e164e0-92238416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c41c5b419db635dbe8f6bf8263559e6a1ee2a2d6' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/materiales/add.tpl',
      1 => 1505240891,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158885540559b826f5e164e0-92238416',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_59b826f5e9b892_79720779',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b826f5e9b892_79720779')) {function content_59b826f5e9b892_79720779($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
materiales">Ver Materiales</a></p>
</div>

<div class="col-md-4">
	<h3>Agregar Materiales</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="nombre">Ingrese nombre:<span class="text-danger">*</span></label>
			<input type="text" name="nombre" class="form-control" placeholder="Nombre del material" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
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
