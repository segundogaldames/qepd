<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-09-12 18:01:20
         compiled from "/Applications/MAMP/htdocs/qepd/views/materiales/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63616051259b826ed1b2220-59710066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b480a29785841737940ddd892e207f59b7a98ac' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/materiales/index.tpl',
      1 => 1505244878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63616051259b826ed1b2220-59710066',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_59b826ed26f5e8_08874902',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'materiales' => 0,
    'm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b826ed26f5e8_08874902')) {function content_59b826ed26f5e8_08874902($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
materiales/add">Agregar Materiales</a></p>
</div>
<div class="col-md-8">
	<h3>Lista de Materiales</h3>
	<table class="table table-hover">
		<th>
			Nombre
		</th>
		<th>
			Acciones
		</th>
		
			<?php if (isset($_smarty_tpl->tpl_vars['materiales']->value)&&count($_smarty_tpl->tpl_vars['materiales']->value)) {?>
				<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['materiales']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['m']->value['nombre'];?>
</td>
						<td>
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
materiales/view/<?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
">Ver</a>&nbsp;&nbsp;
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
materiales/delete/<?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
materiales/delete/<?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
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
