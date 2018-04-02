<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-30 21:35:46
         compiled from "/Applications/MAMP/htdocs/qepd/views/cotizaciones/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110254569759d3fc2ba0dd18-26532209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34b81e4feb6aec28232cd56b6907f33700a7ed95' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/cotizaciones/add.tpl',
      1 => 1522456541,
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
    'comunas' => 0,
    'c' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d3fc2baf3212_84719130')) {function content_59d3fc2baf3212_84719130($_smarty_tpl) {?><div class="col-md-2" style="padding-top: 20px">
	
</div>

<div class="col-md-4">
	<h3>Cotizar</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<h4>Datos del Cliente</h4>
		<div class="form-group">
			<label for="opcion">Compra inmediata?:<span class="text-danger">*</span></label>
			<select name="opcion" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="nombre">Nombre:<span class="text-danger">*</span></label>
			<input type="text" name="cliente" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['cliente'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="Su nombre completo">
		</div>
		<div class="form-group">
			<label for="rut">RUT (opcional):</label>
			<input type="text" name="rut" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['rut'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="Cédula de identidad completa">
		</div>
		<div class="form-group">
			<label for="fono2">Teléfono móvil:<span class="text-danger">*</span></label>
			<input type="number" name="fono_movil" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['fono_movil'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="9 digitos sin guiones">
		</div>
		<div class="form-group">
			<label for="fono">Teléfono fijo (opcional):</label>
			<input type="number" name="fono_fijo" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['fono_fijo'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="9 digitos sin guiones">
		</div>
		
		<div class="form-group">
			<label for="email">Email: <span class="text-danger">*</span></label>
			<input type="email" name="email" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['email'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="Correo electrónico">
		</div>
		<div class="form-group">
			<label for="comuna">Comuna: <span class="text-danger">*</span></label>
			<select name="comuna" class="form-control">
				<option value="">Seleccione</option>
				<?php if (isset($_smarty_tpl->tpl_vars['comunas']->value)&&count($_smarty_tpl->tpl_vars['comunas']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comunas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['comuna'];?>
</option>
					<?php } ?>
				<?php }?>
			</select>
		</div>
		<div class="form-group">
			<label for="mensaje">Observaciones (opcional):</label>
			<textarea name="mensaje" id="" rows="6" class="form-control" style="resize: none"></textarea>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Cotizar" class="btn btn-success">
			<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/planesServicios" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>

<div class="col-md-4">
	
</div>
<?php }} ?>
