<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-09-12 18:24:10
         compiled from "/Applications/MAMP/htdocs/qepd/views/terminaciones/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46142454359b8507a19ab60-13215440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9be25a1b586fc87dc962fa5fd1a1a4e21553e06' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/terminaciones/index.tpl',
      1 => 1505244884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46142454359b8507a19ab60-13215440',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'terminaciones' => 0,
    't' => 0,
    'm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_59b8507a25f433_36818734',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b8507a25f433_36818734')) {function content_59b8507a25f433_36818734($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
terminaciones/add">Agregar Terminaciones</a></p>
</div>
<div class="col-md-8">
	<h3>Lista de Terminaciones</h3>
	<table class="table table-hover">
		<th>
			Nombre
		</th>
		<th>
			Acciones
		</th>
		
			<?php if (isset($_smarty_tpl->tpl_vars['terminaciones']->value)&&count($_smarty_tpl->tpl_vars['terminaciones']->value)) {?>
				<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['terminaciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['t']->value['nombre'];?>
</td>
						<td>
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
terminaciones/view/<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
">Ver</a>&nbsp;&nbsp;
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
terminaciones/delete/<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
terminaciones/delete/<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['m']->value['nombre'];?>
');">Eliminar</a>
						</td>
					</tr>

				<?php } ?>
			<?php }?>
		
	</table>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
<?php }} ?>
