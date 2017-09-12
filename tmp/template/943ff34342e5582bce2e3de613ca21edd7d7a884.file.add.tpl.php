<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-08-14 16:34:42
         compiled from "/Applications/MAMP/htdocs/qepd/views/soluciones/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1901410283598b7ae54b2d27-40828269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '943ff34342e5582bce2e3de613ca21edd7d7a884' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/soluciones/add.tpl',
      1 => 1502739277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1901410283598b7ae54b2d27-40828269',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_598b7ae5587608_48514899',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
    'tipo_soluciones' => 0,
    'ts' => 0,
    'planes' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598b7ae5587608_48514899')) {function content_598b7ae5587608_48514899($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes">Ver Soluciones</a></p>
</div>

<div class="col-md-4">
	<h3>Agregar Soluciones</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="solucion">Solucion:<span class="text-danger">*</span></label>
			<select name="solucion" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Familiar</option>
				<option value="2">Individual</option>
			</select>
		</div>
		<div class="form-group">
			<label for="periodo">Periodo:<span class="text-danger">*</span></label>
			<select name="periodo" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Perpetua</option>
				<option value="2">Temporal</option>
			</select>
		</div>
		<div class="form-group">
			<label for="anio">Años:<span class="text-danger">*</span></label>
			<input type="number" name="anio" class="form-control" placeholder="Años" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['anio'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="tipo_solucion">Seleccione el tipo de solución:<span class="text-danger">*</span></label>
			<select name="tipo_solucion" id="" class="form-control">
				<option value="">Seleccione</option>
				<?php if (isset($_smarty_tpl->tpl_vars['tipo_soluciones']->value)&&count($_smarty_tpl->tpl_vars['tipo_soluciones']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['ts'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ts']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tipo_soluciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ts']->key => $_smarty_tpl->tpl_vars['ts']->value) {
$_smarty_tpl->tpl_vars['ts']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['ts']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ts']->value['nombre'];?>
</option>
					<?php } ?>
				<?php }?>
			</select>
		</div>
		<div class="form-group">
			<label for="tipo_plan">Seleccione el plan:<span class="text-danger">*</span></label>
			<select name="tipo_plan" id="" class="form-control">
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
