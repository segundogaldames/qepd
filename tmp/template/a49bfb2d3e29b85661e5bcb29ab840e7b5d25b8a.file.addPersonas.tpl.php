<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-20 01:42:53
         compiled from "/Applications/MAMP/htdocs/mercadomuebles/views/personas/addPersonas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65096150056257ffd74fe64-49810590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a49bfb2d3e29b85661e5bcb29ab840e7b5d25b8a' => 
    array (
      0 => '/Applications/MAMP/htdocs/mercadomuebles/views/personas/addPersonas.tpl',
      1 => 1439325371,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65096150056257ffd74fe64-49810590',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
    'dias' => 0,
    'd' => 0,
    'region' => 0,
    'reg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56257ffd89d3a1_65938962',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56257ffd89d3a1_65938962')) {function content_56257ffd89d3a1_65938962($_smarty_tpl) {?><div id="separador"></div>
<div id="registro">
	<h3>Publicaci&oacute;n Profesional</h3>
	<div id="cabecera">		
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
inicio">
			<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
/views/layout/default/img/cerrar.png" class="img_cerrar" title="Abandonar Publicacion">
		</a>
	</div>
	<div id="form_registro">
		<p class="parrafo_oferta">Ingrese los datos personales o profesionales...</p>
		<p>&nbsp;</p>
		<p class="notificacion">*Datos Obligatorios</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<form action="" id="form" method="post" enctype="multipart/form-data">
			<p class="titulo_oferta">Datos de Contacto:</p>
			<p>&nbsp;</p>
			<table>
				<tr>
					<td class="text_form">Nombre Completo:<span class="notificacion">*</span></td>
					<td><input type="text" name="nombre" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value)) {
echo $_smarty_tpl->tpl_vars['datos']->value['nombre'];
}?>" class="caja_form"></td>
				</tr>
				<tr>
					<td class="text_form">Email:<span class="notificacion">*</span></td>
					<td><input type="text" name="email" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value)) {
echo $_smarty_tpl->tpl_vars['datos']->value['email'];
}?>" class="caja_form"></td>
				</tr>
				<tr>
					<td class="text_form">Tel&eacute;fono Fijo:</td>
					<td><input type="text" name="fono" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value)) {
echo $_smarty_tpl->tpl_vars['datos']->value['fono'];
}?>" class="caja_form"></td>
				</tr>
				<tr>
					<td class="text_form">Tel&eacute;fono M&oacute;vil:<span class="notificacion">*</span></td>
					<td><input type="text" name="movil" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value)) {
echo $_smarty_tpl->tpl_vars['datos']->value['movil'];
}?>" class="caja_form"></td>
				</tr>
				<tr>
					<td class="text_form">Horario de atenci&oacute;n:<span class="notificacion">*</span></td>
					<td>
						<select name="dias">
							<option value="">Dias</option>
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
						<span class="text_form">Horario:</span><input type="text" name="horario" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value)) {
echo $_smarty_tpl->tpl_vars['datos']->value['horario'];
}?>" class="caja_form">
					</td>
				</tr>
			</table>
			<p>&nbsp;</p>
			<p class="titulo_oferta">Datos de Ubicaci&oacute;n:</p>
			<p>&nbsp;</p>
			<table>
				<tr>
					<td class="text_form">Direcci&oacute;n:</td>
					<td><input type="text" name="direccion" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value)) {
echo $_smarty_tpl->tpl_vars['datos']->value['direccion'];
}?>" class="caja_form"></td>
				</tr>
				<tr>
					<td class="text_form">Regi&oacute;n: <span class="notificacion">*</span></td>
					<td>
						<select name="region" id="region">
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
					</td>
				</tr>
				<tr>
					<td >Ciudad o Comuna:<span class="notificacion">*</span></td>
					<td>
						<select id="ciudad" name="ciudad">
							<option value="">Ciudades</option>
						</select>
					</td>
				</tr>
			</table>
			<p>&nbsp;</p>
			<p class="titulo_oferta">Condiciones de Venta:</p>
			<p>&nbsp;</p>
			<table>
				
				<tr><td colspan="2"></td></tr>
				<tr>
					<td class="text_form">Medios de Pago:<span class="notificacion">*</span></td>
					<td>
						<input type="checkbox" name="pago[]" value="efectivo"><span class="text_form">Efectivo</span>&nbsp;
						<input type="checkbox" name="pago[]" value="cheque"><span class="text_form">Cheque</span>&nbsp;
						<input type="checkbox" name="pago[]" value="transferencia"><span class="text_form">Transferencia bancaria</span>&nbsp;
						<input type="checkbox" name="pago[]" value="tarjeta"><span class="text_form">Tarjeta de Cr&eacute;dito o D&eacute;bito</span>
						<input type="checkbox" name="pago[]" value="epago"><span class="text_form">Pago electr&oacute;nico</span>
					</td>
				</tr>
				<tr><td colspan="2"></td></tr>
				<tr>
					<td class="text_form">Cobertura:<span class="notificacion">*</span></td>
					<td>
						<input type="checkbox" name="cobertura[]" value="local"><span class="text_form">Local</span>&nbsp;
						<input type="checkbox" name="cobertura[]" value="regional"><span class="text_form">Regional</span>&nbsp;
						<input type="checkbox" name="cobertura[]" value="nacional"><span class="text_form">Nacional</span>
					</td>
				</tr>
				<tr><td colspan="2"></td></tr>
				<tr>
					<td class="text_form">Opciones de Despacho:</td>
					<td>
						<input type="checkbox" name="desp[]" value="sucursal"><span class="text_form">Retiro en sucursal o lugar acordado</span>&nbsp;
						<input type="checkbox" name="desp[]" value="local"><span class="text_form">Despacho costo incluido</span>&nbsp;
						<input type="checkbox" name="desp[]" value="a regiones"><span class="text_form">Despacho costo del cliente</span>
					</td>
				</tr>
			</table>
			<p>&nbsp;</p>
			<p class="titulo_oferta">Fotograf&iacute;a o Logo:</p>
			<p>&nbsp;</p>
			<table>
				<tr>
					<td class="text_form">Fotograf&iacute;a:</td>
					<td><input type="file" name="imagen" class="caja_form"></td>
				</tr>
				<tr>
					<td colspan="2"><p>&nbsp;</p></td>
				</tr>
				<tr>
					<td colspan="2"><hr></p></td>
				</tr>
			</table>
			<p>&nbsp;</p>
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Publicar Aviso" class="btn_publica">
			<input type="button" value="Volver a Opciones" class="btn_publica" onclick="return volver('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
inicio');">
		</form>
	</div>
</div><?php }} ?>
