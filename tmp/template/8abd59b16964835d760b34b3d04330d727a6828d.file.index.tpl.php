<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-12 19:30:39
         compiled from "/Applications/MAMP/htdocs/mercadomuebles/views/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83093279655ca617f1c6c65-56070400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8abd59b16964835d760b34b3d04330d727a6828d' => 
    array (
      0 => '/Applications/MAMP/htdocs/mercadomuebles/views/index/index.tpl',
      1 => 1439400635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83093279655ca617f1c6c65-56070400',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55ca617f284e23_15853907',
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ca617f284e23_15853907')) {function content_55ca617f284e23_15853907($_smarty_tpl) {?><div class="col-md-4">
	
		<h4>Muebles</h4>
		<ul class="list-unstyled">
			<li role="presentation"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
muebles">Nuevos y Usados</a></li>
		</ul>
		<h4>Insumos Para Muebles</h4>
		<ul class="list-unstyled">
			<li role="presentation"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
insumos/mPrimas">Materias Primas</a></li>
			<li role="presentation"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
insumos/repuestos">Accesorios y Repuestos</a></li>
			<li role="presentation"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
insumos/maquinas">M&aacute;quinas y Herramientas</a></li>
		</ul>
		<h4>Servicios</h4>
		<ul class="list-unstyled">
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
servicios/cMuebles">Comercialización de Muebles</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
servicios/cInsumos">Comercialización de Insumos Para Muebles</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
servicios/diseños">Diseño y Decoración</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
servicios/proveedores">Fabricación y Servicios</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
servicios/instalaciones">Instalaciones</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
servicios/mantenciones">Mantenimiento y Restauraciones</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
servicios/arriendos">Arriendo de Muebles</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
servicios/fletes">Mudanzas, Fletes y Bodegaje</a></li>
		</ul>
	
</div>

<div class="col-md-3">
	<div id="imagenes_index">
			<h4>B&Uacute;QUEDA ESPECIALIZADA</h4>
			<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
productos/silla_1.png" class="img-responsive center-block">
		</div>
		<div id="imagenes_index">
			<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
productos/dormitorio1.png" class="img-responsive center-block">
		</div>
</div>
		
		
		
		


		
	
<?php }} ?>
