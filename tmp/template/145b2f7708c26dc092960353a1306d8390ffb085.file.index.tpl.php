<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-19 22:05:51
         compiled from "/Applications/MAMP/htdocs/mercadomuebles/views/inicio/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8058485755cb9b18be26d5-77923074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '145b2f7708c26dc092960353a1306d8390ffb085' => 
    array (
      0 => '/Applications/MAMP/htdocs/mercadomuebles/views/inicio/index.tpl',
      1 => 1453236466,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8058485755cb9b18be26d5-77923074',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55cb9b18d38d92_46074365',
  'variables' => 
  array (
    'usuario' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55cb9b18d38d92_46074365')) {function content_55cb9b18d38d92_46074365($_smarty_tpl) {?><div class="col-md-2"></div>
<div class="col-md-8">
	<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?>
		<h3>Bienvenido <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
 a Mercado Muebles...</h3><?php }?>

	<p class="text-primary">Seleccione las opciones que estime para continuar</p>
	
	<h4>Publicar Aviso</h4>
	<ul class="list-unstyled">
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
empresas/add">Empresa</a></li>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
personas/addPersonas">Profesional</a></li>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
banner">Banners</a></li>
	</ul>
	
	<h4>Publicar Muebles</h4>
	<ul class="list-unstyled">
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
muebles/publicaMuebles">Nuevos y Usados</a></li>
	</ul>
	
	<h4>Publicar Insumos Para Muebles</h4>
	<ul class="list-unstyled">
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
materias">Materias Primas</a></li>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
accesorios">Accesorios y Repuestos</a></li>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
herramientas">M&aacute;quinas y Herramientas</a></li>
	</ul>
	
	<h4>Publicar Servicios</h4>
	<ul class="list-unstyled">
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
servicios/addServicios">Comercializaci&oacute;n de Muebles</a></li>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
insumos">Comercializaci&oacute;n de Insumos Para Muebles</a></li>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
insumos">Diseño y Decoraci&oacute;n</a></li>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
insumos">Fabricaci&oacute;n y Servicios Relacionados</a></li>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
insumos">Instalaci&oacute;n de Muebles</a></li>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
insumos">Mantenci&oacute;n y Restauraci&oacute;n</a></li>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
insumos">Arriendo de Muebles</a></li>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
insumos">Mudanzas, Fletes y Bodegaje</a></li>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
otros">Otros Servicios</a></li>
	</ul>

	<h4>Consultas</h4>
	<ul class="list-unstyled">
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
consulta/publicacion">Revisar y Modificar Publicaciones</a></li>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
consulta/tarifas">Tarifas de Publicaciones</a></li>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
consulta/pago">Estado de Pago y Saldos</a></li>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
insumos">Condiciones y Políticas de Privacidad</a></li>
		<br><br>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuario/cerrar" onclick="return cerrar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuario/cerrar');">Cerrar Sesi&oacute;n</a></li>
	</ul>
</div>









<?php }} ?>
