<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-05-02 13:06:55
         compiled from "/Applications/MAMP/htdocs/qepd/views/telefonos/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5929651725908a2d4dad0a5-66021575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e33a6b77e90be6f0ea07f45bed0a74ec74eb8451' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/telefonos/add.tpl',
      1 => 1493741136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5929651725908a2d4dad0a5-66021575',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5908a2d500bf74_33325290',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
    'sedes' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5908a2d500bf74_33325290')) {function content_5908a2d500bf74_33325290($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
telefonos">Ver Teléfonos</a></p>
</div>

<div class="col-md-4">
	<h3>Agregar Teléfono</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="telefono">Ingrese Número Telefónico: <span class="text-danger">*</span></label>
			<input type="text" name="telefono" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['telefono'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="Teléfono de la sede - empresa">
		</div>
		
		<div class="form-group">
			<label for="sede">Seleccione la sede</label>
			<select name="sede" id="" class="form-control">
				<option value="">Sedes</option>
				<?php if (isset($_smarty_tpl->tpl_vars['sedes']->value)&&count($_smarty_tpl->tpl_vars['sedes']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sedes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['sede'];?>
 - <?php echo $_smarty_tpl->tpl_vars['s']->value['empresa'];?>
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
