<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-05-30 18:45:53
         compiled from "/Applications/MAMP/htdocs/qepd/views/destinatarios/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:692423659592de81188d5e4-57354032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3098dee8ccac90e2ecddcbdc32a2327e8b86910' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/destinatarios/add.tpl',
      1 => 1496180743,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '692423659592de81188d5e4-57354032',
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
  'unifunc' => 'content_592de8119e85c3_95588765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592de8119e85c3_95588765')) {function content_592de8119e85c3_95588765($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
destinatarios">Ver Destinatarios</a></p>
</div>

<div class="col-md-4">
	<h3>Agregar Empresa</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="nombre">Ingrese nombre: <span class="text-danger">*</span></label>
			<input type="text" name="nombre" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="Nombre destinatario">
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
