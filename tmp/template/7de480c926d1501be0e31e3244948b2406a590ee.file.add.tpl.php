<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-05-29 18:10:36
         compiled from "/Applications/MAMP/htdocs/qepd/views/tipoplanes/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2027994917592c8dc93fba05-39413354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7de480c926d1501be0e31e3244948b2406a590ee' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/tipoplanes/add.tpl',
      1 => 1496092231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2027994917592c8dc93fba05-39413354',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_592c8dc949e632_17339730',
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592c8dc949e632_17339730')) {function content_592c8dc949e632_17339730($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tipoplanes">Ver Tipo Planes</a></p>
</div>

<div class="col-md-4">
	<h3>Agregar Tipo Plan</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="nombre">Ingrese nombre: <span class="text-danger">*</span></label>
			<input type="text" name="nombre" class="form-control" placeholder="Nombre tipo plan">
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
