<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-30 20:49:57
         compiled from "/Applications/MAMP/htdocs/qepd/views/comunas/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57645611858ff9ba06fae74-65556873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc856d352116c4ad73f7d3910a234108320dbd54' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/comunas/add.tpl',
      1 => 1522453694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57645611858ff9ba06fae74-65556873',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58ff9ba0994e52_01051041',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ff9ba0994e52_01051041')) {function content_58ff9ba0994e52_01051041($_smarty_tpl) {?><div style="padding: 30px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
comunas">Ver Comunas</a></p>
</div>
<div class="col-md-4">
	<h3>Agregar Comunas/Ciudades</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="nombre">Ingrese nombre: <span class="text-danger">*</span></label>
			<input type="text" name="nombre" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="Nombre de la comuna o ciudad">
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Registrar" class="btn btn-success">
			<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
comunas" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>
<div class="col-md-4">
	
</div>	


	
	
	
<?php }} ?>
