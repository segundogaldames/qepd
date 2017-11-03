<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-07-27 13:19:00
         compiled from "/Applications/MAMP/htdocs/qepd/views/condiciones/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15139090885936cc1f7daa38-01479281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3770e281bec96b44ed459b8359a22961d50d373' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/condiciones/add.tpl',
      1 => 1501172337,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15139090885936cc1f7daa38-01479281',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5936cc1fb908e7_33326663',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5936cc1fb908e7_33326663')) {function content_5936cc1fb908e7_33326663($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
condiciones">Ver Condiciones</a></p>
</div>

<div class="col-md-4">
	<h3>Agregar Condiciones</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="precio">Ingrese precio $:<span class="text-danger">*</span></label>
			<input type="number" name="precio" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['precio'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="Precio del plan">
		</div>
		<div class="form-group">
			<label for="fpago">Ingrese forma de pago:<span class="text-danger">*</span></label>
			<input type="text" name="fpago" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['fpago'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="Contado, 3 cheques, tarjeta de credito, etc">
		</div>
		<div class="form-group">
			<label for="plazo">Compra a plazo:<span class="text-danger">*</span></label>
			<select name="plazo" id="" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="anticipada">Compra anticipada:<span class="text-danger">*</span></label>
			<select name="anticipada" id="" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="seguro">Seguro deceso:<span class="text-danger">*</span></label>
			<select name="seguro" id="" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="convenios">Convenios:</label>
			<input type="text" name="convenios" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['convenios'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="Cajas de compensación, AFP, etc">
		</div>
		<div class="form-group">
			<label for="desctocol">Descuento en columbario:</label>
			<input type="text" name="desctocol" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['desctocol'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="% descuento" class="form-control">
		</div>
		<div class="form-group">
			<label for="desctonicho">Descuento cliente nicho:</label>
			<input type="text" name="desctonicho" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['desctocol'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="% descuento" class="form-control">
		</div>
		<div class="form-group">
			<label for="pensiones">Pensiones:<span class="text-danger">*</span></label>
			<select name="pensiones" id="" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
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
