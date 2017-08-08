<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-07-25 18:37:59
         compiled from "/Applications/MAMP/htdocs/qepd/views/componentes/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1337224959592dca6b240a92-70422129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1f6436880ff6226906a6377ce42e6a0c2e2424f' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/componentes/add.tpl',
      1 => 1497373355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1337224959592dca6b240a92-70422129',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_592dca6bce88b4_93676538',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
    'servicios' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592dca6bce88b4_93676538')) {function content_592dca6bce88b4_93676538($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
componentes">Ver Componentes</a></p>
</div>

<div class="col-md-4">
	<h3>Agregar Componente</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="nombre">Ingrese nombre: <span class="text-danger">*</span></label>
			<input type="text" name="nombre" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="Nombre del componente">
		</div>
		<div class="form-group">
			<label for="servicio">Seleccione un servicio</label>
			<select name="servicio" id="" class="form-control">
				<option value="">Servicios</option>
				<?php if (isset($_smarty_tpl->tpl_vars['servicios']->value)&&count($_smarty_tpl->tpl_vars['servicios']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['servicios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['nombre'];?>
</option>
					<?php } ?>
				<?php }?>
			</select>
		</div>
		<div class="form-group">
			<label for="url">Ingrese la url:</label>
			<input type="text" name="url" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['url'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="Url del componente del tipo controlador/metodo">
		</div>
		<div class="form-group">
			<label for="url">Ingrese la url de vista:</label>
			<input type="text" name="url_view" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['url_view'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="Url vista del componente del tipo controlador/metodo">
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
