<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-15 22:07:40
         compiled from "/Applications/MAMP/htdocs/mercadomuebles/views/muebles/publicaMuebles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:770664899569558717049d5-40600801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8430f490aece7237c0e59f7b1851e5c1d165be6' => 
    array (
      0 => '/Applications/MAMP/htdocs/mercadomuebles/views/muebles/publicaMuebles.tpl',
      1 => 1453236130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '770664899569558717049d5-40600801',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_569558718a5da2_99130379',
  'variables' => 
  array (
    'clasificacion' => 0,
    'clas' => 0,
    'destino' => 0,
    'dest' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569558718a5da2_99130379')) {function content_569558718a5da2_99130379($_smarty_tpl) {?><div class="col-md-2"></div>

<div class="col-md-8">
	<h3>Publicación de Muebles</h3>
	<p class="text-primary">Ingrese la información del mueble a vender...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" enctype="multipart/form-data" id="form" class="form-horizontal">
		<div class="form-group">
			<div class="col-md-3">
				<label for="clasificacion" class="pull-right">Clasificación <span class="text-danger">*</span>:</label>
			</div>			
			<div class="col-md-6">
				<select name="clasificacion" id="clasif" class="form-control">
					<option value="">Clasificación</option>
					<?php if (isset($_smarty_tpl->tpl_vars['clasificacion']->value)&&count($_smarty_tpl->tpl_vars['clasificacion']->value)) {?>
						<?php  $_smarty_tpl->tpl_vars['clas'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['clas']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clasificacion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['clas']->key => $_smarty_tpl->tpl_vars['clas']->value) {
$_smarty_tpl->tpl_vars['clas']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['clas']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['clas']->value['nombre'];?>
</option>
						<?php } ?>
					<?php }?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-3">
				<label for="mueble" class="pull-right">Mueble <span class="text-danger">*</span>:</label>
			</div>
			<div class="col-md-6">
				<select id="mueble" name="mueble" class="form-control">
					<option value="">Muebles</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-3">
				<label for="tipo" class="pull-right">Tipo de Mueble <span class="text-danger">*</span>:</label>
			</div>
			<div class="col-md-6">
				<select id="tipo" name="tipo" class="form-control">
					<option value="">Tipos</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-3">
				<label for="modelo" class="pull-right">Modelo <span class="text-danger">*</span>:</label>
			</div>
			<div class="col-md-6">
				<input type="text" name="modelo" class="form-control" placeholder="Modelo del mueble">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-3">
				<label for="dimensiones" class="pull-right">Dimensiones (cms):</label>
			</div>
			<div class="col-md-6">
				<div class="col-md-3">
					Largo:<input type="number" name="largo" class="form-control" min="1" max="400">
				</div>
				<div class="col-md-3">
					Ancho:<input type="number" name="ancho" class="form-control" min="1" max="400">
				</div>
				<div class="col-md-3">
					Alto:<input type="number" name="alto" class="form-control" min="1" max="400">
				</div>
				<div class="col-md-3">
					Diámetro:<input type="number" name="diam" class="form-control" min="1" max="400">
				</div>
			</div>
		
		</div>
		<div class="form-group">
			<div class="col-md-3">
				<label for="materialidad" class="pull-right">Materialidad:</label>
			</div>
			<div class="col-md-6">
				<input type="text" name="materialidad" class="form-control" placeholder="Materialidad del mueble">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-3">
				<label for="colores" class="pull-right">Color de terminación:</label>
			</div>
			<div class="col-md-6">
				<input type="text" name="color" class="form-control" placeholder="Color de terminacion del mueble">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-3">
				<label for="destino" class="pull-right">Destino <span class="text-danger">*</span>:</label>
			</div>
			<div class="col-md-6">
				<select name="destinos" id="" class="form-control">
					<option value="">Destinos</option>
					<?php if (isset($_smarty_tpl->tpl_vars['destino']->value)&&count($_smarty_tpl->tpl_vars['destino']->value)) {?>
						<?php  $_smarty_tpl->tpl_vars['dest'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dest']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['destino']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dest']->key => $_smarty_tpl->tpl_vars['dest']->value) {
$_smarty_tpl->tpl_vars['dest']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['dest']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dest']->value['nombre'];?>
</option>
						<?php } ?>
					<?php }?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-3">
				<label for="estado" class="pull-right">Estado del mueble <span class="text-danger">*</span>:</label>
			</div>
			<div class="col-md-6">
				<select name="estado" id="" class="form-control">
					<option value="">Estados</option>
					<option value="1">Nuevo</option>
					<option value="2">Usado</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-3">
				<label for="precio" class="pull-right">Precio (CLP):</label>
			</div>
			<div class="col-md-6">
				<input type="text" class="form-control" name="precio" placeholder="Precio del mueble en pesos">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-3">
				<label for="Cantidad" class="pull-right">Cantidad (Stock):</label>
			</div>
			<div class="col-md-6">
				<input type="text" class="form-control" name="cantidad" placeholder="Cantidad de muebles disponibles">
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-md-3">
				<label for="foto" class="pull-right">Imagen del mueble:</label>
			</div>
			<div class="col-md-6">
				<input type="file" name="imagen" class="file" placeholder="Seleccione una imagen">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-3">
				<label for="comentarios" class="pull-right">Ingrese comentarios:</label>
			</div>
			<div class="col-md-6">
				<textarea name="comentario" id="" rows="5" class="form-control"></textarea>
			</div>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Publicar" class="btn btn-success">
		</div>
	</form>
</div>

<div class="col-md-2">
	<h3>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
inicio">
			<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
/views/layout/default/img/cerrar.png" title="Abandonar Publicacion">
		</a>
	</h3>
</div><?php }} ?>
