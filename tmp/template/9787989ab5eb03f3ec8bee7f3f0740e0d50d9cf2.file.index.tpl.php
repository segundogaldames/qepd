<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-01-17 17:14:24
         compiled from "/Applications/MAMP/htdocs/qepd/views/usuario/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81341906358f6379cb78a94-20171314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9787989ab5eb03f3ec8bee7f3f0740e0d50d9cf2' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/usuario/index.tpl',
      1 => 1514647736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81341906358f6379cb78a94-20171314',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58f6379cc44268_63568060',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'usuarios' => 0,
    'u' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f6379cc44268_63568060')) {function content_58f6379cc44268_63568060($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuario/add">Agregar Usuarios</a></p>
</div>
<div class="col-md-8">
	<?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value)&&count($_smarty_tpl->tpl_vars['usuarios']->value)) {?>
		<h3>Lista de Usuarios</h3>
		<table class="table table-hover">
			<th>
				Nombre
			</th>
			<th>
				Email
			</th>
			<th>
				Rol
			</th>
			<th>
				Acciones
			</th>
			
				<?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
?>
					<tr>
						<td><?php echo ucfirst($_smarty_tpl->tpl_vars['u']->value['nombre']);?>
 <?php echo ucfirst($_smarty_tpl->tpl_vars['u']->value['apellido']);?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['u']->value['email'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['u']->value['rol'];?>
</td>
						<td>
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuario/view/<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
">Ver</a>&nbsp;&nbsp;
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuario/delete/<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuario/delete/<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['u']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value['apellido'];?>
');">Eliminar</a>
						</td>
					</tr>

				<?php } ?>
		<?php } else { ?>
			<p><strong>No hay usuarios registrados</strong></p>
			<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuario/add">Agregar Usuarios</a></p>
		<?php }?>
		
	</table>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
<?php }} ?>
