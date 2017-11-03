<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-10-03 16:29:59
         compiled from "/Applications/MAMP/htdocs/qepd/views/urnas/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1669881816594048466ad1f4-50934277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8aac4c40509a58a6f69a45f06c738d7792db85f4' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/urnas/add.tpl',
      1 => 1506023187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1669881816594048466ad1f4-50934277',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_59404846b51714_45442241',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
    'planes' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59404846b51714_45442241')) {function content_59404846b51714_45442241($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
urnas">Ver Urnas</a></p>
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
imagenes/add">Agregar imagen</a></p>
</div>

<div class="col-md-4">
	<h3>Agregar Urna</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="modelo">Ingrese modelo:<span class="text-danger">*</span></label>
			<input type="text" name="modelo" class="form-control" placeholder="Modelo de la urna" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['modelo'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="medidas">Ingrese las medidas:</label>
			<input type="text" name="medidas" class="form-control" placeholder="Medidas de la urna" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['medidas'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="material">Ingrese el material:<span class="text-danger">*</span></label></label>
			<input type="text" name="material" class="form-control" placeholder="Material de la urna" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['material'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="terminaciones">Ingrese terminaciones:<span class="text-danger">*</span></label></label>
			<input type="text" name="terminaciones" class="form-control" placeholder="Terminaciones de la urna" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['terminaciones'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="color">Ingrese el color:<span class="text-danger">*</span></label></label>
			<input type="text" name="color" class="form-control" placeholder="Color de la urna" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['color'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="plan">Seleccione el plan:<span class="text-danger">*</span></label>
			<select name="plan" id="" class="form-control">
				<option value="">Seleccione</option>
				<?php if (isset($_smarty_tpl->tpl_vars['planes']->value)&&count($_smarty_tpl->tpl_vars['planes']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['planes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['nombre'];?>
</option>
					<?php } ?>
				<?php }?>
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Guardar" class="btn btn-success">
		</div>
	</form>
</div>

<div class="col-md-4">
	
</div>
<?php }} ?>
