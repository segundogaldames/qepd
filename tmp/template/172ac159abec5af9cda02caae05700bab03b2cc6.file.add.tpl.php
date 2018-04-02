<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-01-19 11:34:14
         compiled from "/Applications/MAMP/htdocs/qepd/views/imagenes/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102970369059370bf6828608-47128606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '172ac159abec5af9cda02caae05700bab03b2cc6' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/imagenes/add.tpl',
      1 => 1514647736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102970369059370bf6828608-47128606',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_59370bf7647306_41501209',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'planes' => 0,
    'p' => 0,
    'componentes' => 0,
    'c' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59370bf7647306_41501209')) {function content_59370bf7647306_41501209($_smarty_tpl) {?><div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
imagenes">Ver Imágenes</a></p>
</div>

<div class="col-md-4">
	<h3>Agregar Imagen</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form" enctype="multipart/form-data">
		<div class="form-group">
			<label for="plan">Seleccione un plan: <span class="text-danger">*</span></label>
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
			<label for="componente">Seleccione un componente: <span class="text-danger">*</span></label>
			<select name="componente" id="" class="form-control">
				<option value="">Seleccione</option>
				<?php if (isset($_smarty_tpl->tpl_vars['componentes']->value)&&count($_smarty_tpl->tpl_vars['componentes']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['componentes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['nombre'];?>
</option>
					<?php } ?>
				<?php }?>
			</select>
		</div>
		<div class="form-group">
			<label for="titulo">Título de la imagen:<span class="text-danger">*</span></label>
			<input type="text" name="titulo" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['titulo'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="imagen">Imagen: <span class="text-danger">*</span></label>
			<input type="file" name="imagen" class="file" placeholder="Seleccione una imagen">
		</div>
		
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Cargar" class="btn btn-success">
			<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
imagenes" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>

<div class="col-md-4">
	
</div>
<?php }} ?>
