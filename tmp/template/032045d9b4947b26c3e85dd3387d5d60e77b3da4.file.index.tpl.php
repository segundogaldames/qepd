<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-09-21 16:36:51
         compiled from "/Applications/MAMP/htdocs/qepd/views/construcciones/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54590668359b998d47642e3-76360412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '032045d9b4947b26c3e85dd3387d5d60e77b3da4' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/construcciones/index.tpl',
      1 => 1506022608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54590668359b998d47642e3-76360412',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_59b998d4821b66_90677888',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'construcciones' => 0,
    'c' => 0,
    'm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b998d4821b66_90677888')) {function content_59b998d4821b66_90677888($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
construcciones/add">Agregar Construcciones</a></p>
</div>
<div class="col-md-8">
	<h3>Lista de Construcciones</h3>
	<table class="table table-hover">
		<th>
			Tipo de Construcción
		</th>
		<th>
			Materiales
		</th>
		<th>
			Terminaciones
		</th>
		<th>
			Grabado
		</th>
		<th>
			Plan
		</th>
		<th>
			Acciones
		</th>
		
			<?php if (isset($_smarty_tpl->tpl_vars['construcciones']->value)&&count($_smarty_tpl->tpl_vars['construcciones']->value)) {?>
				<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['construcciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['c']->value['construccion'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['c']->value['material'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['c']->value['terminacion'];?>
</td>
						<td><?php if (($_smarty_tpl->tpl_vars['c']->value['grabado'])==1) {?>Si <?php } else { ?> No <?php }?></td>
						<td><?php echo $_smarty_tpl->tpl_vars['c']->value['plan'];?>
</td>
						<td>
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
construcciones/view/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
">Ver</a>&nbsp;&nbsp;
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
construcciones/delete/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
construcciones/delete/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
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
