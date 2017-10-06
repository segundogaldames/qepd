<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-10-03 17:26:46
         compiled from "/Applications/MAMP/htdocs/qepd/views/capacidades/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46849378559920415c506b3-74497683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a037f9d3181f940a916e07b8f7c23062e5a47a7' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/capacidades/add.tpl',
      1 => 1502741943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46849378559920415c506b3-74497683',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_59920415d4d138_52233514',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
    'planes' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59920415d4d138_52233514')) {function content_59920415d4d138_52233514($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes">Ver Soluciones</a></p>
</div>

<div class="col-md-4">
	<h3>Agregar Capacidades</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="uadulto">Nº de Urnas para adultos:<span class="text-danger"></span></label>
			<input type="number" name="uadulto" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['uadulto'])===null||$tmp==='' ? 0 : $tmp);?>
" placeholder="Número de urnas para adultos">
		</div>
		<div class="form-group">
			<label for="uparvulo">Nº de Urnas para párvulos:<span class="text-danger"></span></label>
			<input type="number" name="uparvulo" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['uparvulo'])===null||$tmp==='' ? 0 : $tmp);?>
" placeholder="Número de urnas para párvulos">
		</div>
		<div class="form-group">
			<label for="reducciones">Reducciones:<span class="text-danger"></span></label>
			<input type="number" name="reducciones" class="form-control" placeholder="Número de reducciones" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['anio'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="anfora">Nº de ánforas:<span class="text-danger"></span></label>
			<input type="number" name="anfora" class="form-control" placeholder="Número de ánforas" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['anio'])===null||$tmp==='' ? '' : $tmp);?>
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
			<input type="submit" value="Registrar" class="btn btn-success">
		</div>
	</form>
</div>

<div class="col-md-4">
	
</div>
<?php }} ?>
