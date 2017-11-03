<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-13 14:38:04
         compiled from "/Applications/MAMP/htdocs/qepd/views/componentes/addComponentes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:836710569594022fc9ee695-07425597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '653959de8b71fefb7da6a580524f3856cff1fe3b' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/componentes/addComponentes.tpl',
      1 => 1497375403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '836710569594022fc9ee695-07425597',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'componentesServicios' => 0,
    'cs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_594022fcaf9fa8_31254310',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594022fcaf9fa8_31254310')) {function content_594022fcaf9fa8_31254310($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes">Ver Planes</a></p>
</div>
<div class="col-md-8">
	<h3>Componentes Por Servicios</h3>
	<?php if (isset($_smarty_tpl->tpl_vars['componentesServicios']->value)&&count($_smarty_tpl->tpl_vars['componentesServicios']->value)) {?>
		<?php  $_smarty_tpl->tpl_vars['cs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['componentesServicios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cs']->key => $_smarty_tpl->tpl_vars['cs']->value) {
$_smarty_tpl->tpl_vars['cs']->_loop = true;
?>
		<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];
echo $_smarty_tpl->tpl_vars['cs']->value['url'];?>
">Agregar <?php echo $_smarty_tpl->tpl_vars['cs']->value['nombre'];?>
</a></p>
		<?php } ?>
	<?php }?>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
<?php }} ?>
