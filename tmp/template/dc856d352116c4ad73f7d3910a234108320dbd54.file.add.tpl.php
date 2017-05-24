<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-25 17:51:04
         compiled from "/Applications/MAMP/htdocs/qepd/views/comunas/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57645611858ff9ba06fae74-65556873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc856d352116c4ad73f7d3910a234108320dbd54' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/comunas/add.tpl',
      1 => 1493153461,
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
    'regiones' => 0,
    'r' => 0,
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
			<label for="regiones">Seleccione una región:</label>
			<select name="region" id="" class="form-control">
				<option value="">Regiones</option>
				<?php if (isset($_smarty_tpl->tpl_vars['regiones']->value)&&count($_smarty_tpl->tpl_vars['regiones']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['regiones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</option>
					<?php } ?>
				<?php }?>
			</select>
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
