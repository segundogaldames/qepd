<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-08-08 17:20:14
         compiled from "/Applications/MAMP/htdocs/qepd/views/tiposoluciones/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13451133075989e4d6a86bd8-91335062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe24cd6f376bd17e67dcbeab8fc7da8cac81b83e' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/tiposoluciones/add.tpl',
      1 => 1502223611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13451133075989e4d6a86bd8-91335062',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5989e4d6ae2511_50125842',
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5989e4d6ae2511_50125842')) {function content_5989e4d6ae2511_50125842($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tiposoluciones">Ver Tipo Soluciones</a></p>
</div>
<div class="col-md-4">
	<h3>Agregar Tipo Soluciones</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="nombre">Ingrese nombre: <span class="text-danger">*</span></label>
			<input type="text" name="nombre" class="form-control" placeholder="Nombre tipo soluciones">
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
