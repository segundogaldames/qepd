<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-18 17:41:23
         compiled from "/Applications/MAMP/htdocs/qepd/views/roles/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61068087758f66c0c9b9283-39713256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4baa8261a902831b8c7c855332328b3e90859498' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/roles/view.tpl',
      1 => 1492546557,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61068087758f66c0c9b9283-39713256',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58f66c0caad708_25226988',
  'variables' => 
  array (
    'role' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f66c0caad708_25226988')) {function content_58f66c0caad708_25226988($_smarty_tpl) {?><div class="col-md-2"></div>
<div class="col-md-4">
	<div style="padding-top: 50px"></div>
	<h3>Ver Roles</h3>
	
	<?php if (isset($_smarty_tpl->tpl_vars['role']->value)&&count($_smarty_tpl->tpl_vars['role']->value)) {?>
		<p style="font-size: 18px"><strong>Nombre:</strong> <?php echo $_smarty_tpl->tpl_vars['role']->value['nombre'];?>
</p>		
	<?php }?>
	<p>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
roles/edit/<?php echo $_smarty_tpl->tpl_vars['role']->value['id'];?>
">Editar</a>&nbsp;&nbsp;
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
roles">Volver</a>
	</p>
</div>
<div class="col-md-4">
	
</div>	


	
	
	
<?php }} ?>
