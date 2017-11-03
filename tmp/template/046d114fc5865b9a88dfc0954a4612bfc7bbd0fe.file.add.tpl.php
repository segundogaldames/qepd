<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-18 14:28:53
         compiled from "/Applications/MAMP/htdocs/qepd/views/roles/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185995531658f64c73b5cdd1-82753886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '046d114fc5865b9a88dfc0954a4612bfc7bbd0fe' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/roles/add.tpl',
      1 => 1492536527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185995531658f64c73b5cdd1-82753886',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58f64c73c0c203_95848837',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f64c73c0c203_95848837')) {function content_58f64c73c0c203_95848837($_smarty_tpl) {?><div class="col-md-2"></div>
<div class="col-md-4">
	<h3>Agregar Roles</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="nombre">Ingrese nombre: <span class="text-danger">*</span></label>
			<input type="text" name="nombre" class="form-control" placeholder="Nombre del role">
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
