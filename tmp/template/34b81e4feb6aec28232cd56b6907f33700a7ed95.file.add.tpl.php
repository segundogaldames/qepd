<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-10-03 18:16:32
         compiled from "/Applications/MAMP/htdocs/qepd/views/cotizaciones/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110254569759d3fc2ba0dd18-26532209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34b81e4feb6aec28232cd56b6907f33700a7ed95' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/cotizaciones/add.tpl',
      1 => 1507065374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110254569759d3fc2ba0dd18-26532209',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_59d3fc2baf3212_84719130',
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d3fc2baf3212_84719130')) {function content_59d3fc2baf3212_84719130($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	
</div>

<div class="col-md-4">
	<h3>Agregar Cotización</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="nombre">Ingrese nombre: <span class="text-danger">*</span></label>
			<input type="text" name="nombre" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="Nombre del componente">
		</div>
		<div class="form-group">
			<label for="rut">Ingrese RUT: <span class="text-danger">*</span></label>
			<input type="text" name="rut" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['rut'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="Cédula de identidad">
		</div>
		<div class="form-group">
			<label for="fono">Ingrese teléfono: <span class="text-danger">*</span></label>
			<input type="number" name="fono" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['fono'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="9 digitos sin guiones">
		</div>
		<div class="form-group">
			<label for="fono2">Ingrese otro número telefónico:</label>
			<input type="number" name="fono2" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['fono2'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="9 digitos sin guiones">
		</div>
		<div class="form-group">
			<label for="email">Ingrese email: <span class="text-danger">*</span></label>
			<input type="email" name="email" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['email'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="Correo electrónico">
		</div>
		<h4>Datos del difunto</h4>
		<div class="form-group">
			<label for="difunto">Ingrese nombre del difunto:</label>
			<input type="text" name="difunto" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['difunto'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="Nombre del difunto">
		</div>
		<div class="form-group">
			<label for="edad">Ingrese edad: <span class="text-danger">*</span></label>
			<input type="number" name="edad" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['edad'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="Edad del difunto">
		</div>
		<div class="form-group">
			<label for="alto">Ingrese estatura: <span class="text-danger">*</span></label>
			<input type="number" name="alto" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['alto'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="Estatura del difunto en centímetros">
		</div>
		<div class="form-group">
			<label for="direccion">Ingrese dirección actual: <span class="text-danger">*</span></label>
			<input type="text" name="alto" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['direccion'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="Calle, número, sector o población, comuna o ciudad">
		</div>
		<div class="form-group">
			<label for="mensaje">Ingrese observaciones:</label>
			<textarea name="mensaje" id="" rows="6" class="form-control" style="resize: none"></textarea>
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
