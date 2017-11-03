<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-12 23:56:15
         compiled from "/Applications/MAMP/htdocs/mercadomuebles/views/empresas/addEmpresas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96679622255cba8aa3a0749-08728566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd111ed0c45136ac859c2b260a19ea160b678234' => 
    array (
      0 => '/Applications/MAMP/htdocs/mercadomuebles/views/empresas/addEmpresas.tpl',
      1 => 1439416570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96679622255cba8aa3a0749-08728566',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55cba8aa4b4775_57744799',
  'variables' => 
  array (
    'dias' => 0,
    'd' => 0,
    'region' => 0,
    'reg' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55cba8aa4b4775_57744799')) {function content_55cba8aa4b4775_57744799($_smarty_tpl) {?><div class="col-md-2"></div>

<div class="col-md-8">
	<h3>Publicación de Empresa o Profesional</h3>
	<p class="text-primary">Ingrese los datos de la empresa o institución...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" enctype="multipart/form-data" id="" class="form-horizontal">
		<div class="form-group">
			<h4>Datos de Contacto</h4>
			<div class="col-md-3">
				<label for="nombre" class="pull-right">Nombre o razón social <span class="text-danger">*</span>:</label>
			</div>			
			<div class="col-md-6">
				<input type="text" name="nombre" class="form-control" placeholder="nombre de la empresa">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-3">
				<label for="nombre" class="pull-right">Sitio web:</label>
			</div>
			<div class="col-md-6">
				<input type="text" name="web" class="form-control" placeholder="http://www.tusitio.tudominio">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-3">
				<label for="nombre" class="pull-right">Teléfono fijo:</label>
			</div>
			<div class="col-md-6">
				<input type="text" name="fono" class="form-control" placeholder="teléfono fijo de la empresa">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-3">
				<label for="nombre" class="pull-right">Teléfono móvil <span class="text-danger">*</span>:</label>
			</div>
			<div class="col-md-6">
				<input type="text" name="movil" class="form-control" placeholder="teléfono móvil">
			</div>
		
		</div>
		<div class="form-group">
			<h4>Horario de Atención</h4>
			<div class="col-md-3">
				<label for="dias" class="pull-right">Días de atención <span class="text-danger">*</span>:</label>
			</div>
			<div class="col-md-6">
				<select name="dias" id="" class="form-control">
					<option value="">Días de atención</option>
					<?php if (isset($_smarty_tpl->tpl_vars['dias']->value)&&count($_smarty_tpl->tpl_vars['dias']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['nombre'];?>
</option>
					<?php } ?>
					<?php }?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-3">
				<label for="nombre" class="pull-right">Horario de atención:</label>
			</div>
			<div class="col-md-6">
				<input type="text" name="horario" class="form-control" placeholder="hora de inicio y hora de término">
			</div>
		</div>
		<div class="form-group">
			<h4>Datos de Ubicación</h4>
			<div class="col-md-3">
				<label for="nombre" class="pull-right">Ingrese dirección:</label>
			</div>
			<div class="col-md-6">
				<input type="text" name="direccion" class="form-control" placeholder="calle y número - villa, población o sector">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-3">
				<label for="region" class="pull-right">Seleccione región <span class="text-danger">*</span>:</label>
			</div>
			<div class="col-md-6">
				<select name="region" id="region" class="form-control">
					<option value="">Regiones</option>
					<?php if (isset($_smarty_tpl->tpl_vars['region']->value)&&count($_smarty_tpl->tpl_vars['region']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['reg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['region']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reg']->key => $_smarty_tpl->tpl_vars['reg']->value) {
$_smarty_tpl->tpl_vars['reg']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['reg']->value['id_region'];?>
"><?php echo $_smarty_tpl->tpl_vars['reg']->value['nom_region'];?>
</option>
					<?php } ?>
					<?php }?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-3">
				<label for="ciudad" class="pull-right">Comuna o ciudad <span class="text-danger">*</span>:</label>
			</div>
			<div class="col-md-6">
				<select id="ciudad" name="ciudad" class="form-control">
					<option value="">Ciudades</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<h4>Condiciones de Venta</h4>
			<div class="col-md-3">
				<label for="ciudad" class="pull-right">Cotización en <span class="text-danger">*</span>:</label>
			</div>
			<div class="col-md-6">
				<label for="" class="checkbox-inline">
					<input type="checkbox" name="cotizacion[]" value="terreno">Terreno
				</label>
				<label for="" class="checkbox-inline">
					<input type="checkbox" name="cotizacion[]" value="telefonica">Vía telefónica
				</label>
				<label for="" class="checkbox-inline">
					<input type="checkbox" name="cotizacion[]" value="email">Vía email
				</label>
				<label for="" class="checkbox-inline">
					<input type="checkbox" name="cotizacion[]" value="email">Vía sitio web
				</label>
			</div>
		</div>
		<div class="form-group">
			<h4>Condiciones de Venta</h4>
			<div class="col-md-3">
				<label for="pago" class="pull-right">Medios de pago <span class="text-danger">*</span>:</label>
			</div>
			<div class="col-md-6">
				<label for="" class="checkbox-inline">
					<input type="checkbox" name="pago[]" value="efectivo">Efectivo
				</label>
				<label for="" class="checkbox-inline">
					<input type="checkbox" name="pago[]" value="cheque">Cheque
				</label>
				<label for="" class="checkbox-inline">
					<input type="checkbox" name="pago[]" value="transferencia">Transferencia bancaria
				</label>
				<label for="" class="checkbox-inline">
					<input type="checkbox" name="pago[]" value="tarjeta credito o debito">Tarjeta de Crédito o Débito
				</label>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-3">
				<label for="cobertura" class="pull-right">Cobertura <span class="text-danger">*</span>:</label>
			</div>
			<div class="col-md-6">
				<label for="" class="checkbox-inline">
					<input type="checkbox" name="cobertura[]" value="local">Local
				</label>
				<label for="" class="checkbox-inline">
					<input type="checkbox" name="cobertura[]" value="regional">Regional
				</label>
				<label for="" class="checkbox-inline">
					<input type="checkbox" name="cobertura[]" value="nacional">Nacional
				</label>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-3">
				<label for="despacho" class="pull-right">Despacho:</label>
			</div>
			<div class="col-md-6">
				<label for="" class="checkbox-inline">
					<input type="checkbox" name="despacho[]" value="local">Local
				</label>
				<label for="" class="checkbox-inline">
					<input type="checkbox" name="despacho[]" value="regional">Regional
				</label>
				<label for="" class="checkbox-inline">
					<input type="checkbox" name="despacho[]" value="nacional">Nacional
				</label>
			</div>
		</div>
		<div class="form-group">
			<h4>Fotografía o Logo</h4>
			<div class="col-md-3">
				<label for="foto" class="pull-right">Foto o logo:</label>
			</div>
			<div class="col-md-6">
				<input type="file" name="imagen" class="form-control">
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
</div>
<?php }} ?>
