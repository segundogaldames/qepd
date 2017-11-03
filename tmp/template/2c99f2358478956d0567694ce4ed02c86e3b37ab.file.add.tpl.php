<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-24 13:01:40
         compiled from "/Applications/MAMP/htdocs/qepd/views/tipoempresas/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54869464558fe20c1281298-41093472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c99f2358478956d0567694ce4ed02c86e3b37ab' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/tipoempresas/add.tpl',
      1 => 1493049698,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54869464558fe20c1281298-41093472',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58fe20c12dc311_58273767',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fe20c12dc311_58273767')) {function content_58fe20c12dc311_58273767($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2"></div>

<div class="col-md-4">
	<h3>Agregar Tipo Empresa</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="nombre">Ingrese nombre: <span class="text-danger">*</span></label>
			<input type="text" name="nombre" class="form-control" placeholder="Nombre tipo empresa">
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
