<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-09-21 16:10:31
         compiled from "/Applications/MAMP/htdocs/qepd/views/tipoconstrucciones/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52954905659c40ea721f434-64192892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd2369596070e6f4b49b1205143451da8263ac4c' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/tipoconstrucciones/add.tpl',
      1 => 1506020615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52954905659c40ea721f434-64192892',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_59c40ea7277c85_89636818',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c40ea7277c85_89636818')) {function content_59c40ea7277c85_89636818($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tipoconstrucciones">Ver Tipo Construcciones</a></p>
</div>
<div class="col-md-4">
	<h3>Agregar Tipo Construcciones</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="nombre">Ingrese nombre: <span class="text-danger">*</span></label>
			<input type="text" name="nombre" class="form-control" placeholder="Nombre tipo construcciones">
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
