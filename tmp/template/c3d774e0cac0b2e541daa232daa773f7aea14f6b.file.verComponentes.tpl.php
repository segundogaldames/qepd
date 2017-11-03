<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-09-12 13:05:01
         compiled from "/Applications/MAMP/htdocs/qepd/views/componentes/verComponentes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14620181075935d32335ae09-30417174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3d774e0cac0b2e541daa232daa773f7aea14f6b' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/componentes/verComponentes.tpl',
      1 => 1505232298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14620181075935d32335ae09-30417174',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5935d3233f0f14_11865584',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'componentesServicios' => 0,
    'cs' => 0,
    'plan' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5935d3233f0f14_11865584')) {function content_5935d3233f0f14_11865584($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<?php if (Session::get('role_id')==1) {?>
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes">Ver Planes</a></p>
	<?php }?>
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
echo $_smarty_tpl->tpl_vars['cs']->value['url_view'];
echo $_smarty_tpl->tpl_vars['plan']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['cs']->value['nombre'];?>
</a></p>
		<?php } ?>
	<?php }?>
</div>
<div class="col-md-2">
	
</div>	<?php }} ?>
