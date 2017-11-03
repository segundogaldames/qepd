<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-18 16:51:47
         compiled from "/Applications/MAMP/htdocs/qepd/views/roles/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129777022458f66305901191-31341546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a26bd3df6d0f36002fa3b5a9f3e026913b6cd380' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/roles/index.tpl',
      1 => 1492544810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129777022458f66305901191-31341546',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58f663059921d1_73158842',
  'variables' => 
  array (
    'roles' => 0,
    'r' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f663059921d1_73158842')) {function content_58f663059921d1_73158842($_smarty_tpl) {?><div class="col-md-2"></div>
<div class="col-md-4">
	<h3>Lista de Roles</h3>
	<table class="table table-hover">
		<th>
			Role
		</th>
		<th>
			Acciones
		</th>
		
			<?php if (isset($_smarty_tpl->tpl_vars['roles']->value)&&count($_smarty_tpl->tpl_vars['roles']->value)) {?>
				<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</td>
						<td>
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
roles/view/<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
">Ver</a>&nbsp;&nbsp;
							<a href="">Eliminar</a>
						</td>
					</tr>

				<?php } ?>
			<?php }?>
		
	</table>
</div>
<div class="col-md-4">
	
</div>	


	
	
	
<?php }} ?>
