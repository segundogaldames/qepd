<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-24 13:49:09
         compiled from "/Applications/MAMP/htdocs/qepd/views/tipoempresas/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22031518858fe2a7b095cb5-43684814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74211a4410ca0eb00140cf8ef2fc933493187ec8' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/tipoempresas/index.tpl',
      1 => 1493052547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22031518858fe2a7b095cb5-43684814',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58fe2a7b0d2146_50435659',
  'variables' => 
  array (
    'tipos' => 0,
    't' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fe2a7b0d2146_50435659')) {function content_58fe2a7b0d2146_50435659($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2"></div>
<div class="col-md-4">
	<h3>Lista Tipo Empresas</h3>
	<table class="table table-hover">
		<th>
			Nombre
		</th>
		<th>
			Acciones
		</th>
		
			<?php if (isset($_smarty_tpl->tpl_vars['tipos']->value)&&count($_smarty_tpl->tpl_vars['tipos']->value)) {?>
				<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tipos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['t']->value['nombre'];?>
</td>
						<td>
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tipoempresas/view/<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
">Ver</a>&nbsp;&nbsp;
							<a href="">Eliminar</a>
						</td>
					</tr>

				<?php } ?>
			<?php }?>
		
	</table>
</div>
<div class="col-md-4">
	
</div><?php }} ?>
