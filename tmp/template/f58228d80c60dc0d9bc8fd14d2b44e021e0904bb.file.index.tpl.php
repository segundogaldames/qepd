<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-30 20:17:44
         compiled from "/Applications/MAMP/htdocs/qepd/views/sedes/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144993676559037002c6f651-82149601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f58228d80c60dc0d9bc8fd14d2b44e021e0904bb' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/sedes/index.tpl',
      1 => 1522451860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144993676559037002c6f651-82149601',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_59037002ddc157_41785253',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'sedes' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59037002ddc157_41785253')) {function content_59037002ddc157_41785253($_smarty_tpl) {?><div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
sedes/add">Agregar Sede</a></p>
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
telefonos/add">Agregar Teléfono</a></p>
	<hr>
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
empresas">Empresas</a></p>
</div>
<div class="col-md-8">
<?php if (isset($_smarty_tpl->tpl_vars['sedes']->value)&&count($_smarty_tpl->tpl_vars['sedes']->value)) {?>
		<h3>Lista de Sedes</h3>
		<table class="table table-hover">
			<tr>
				<th>
					Empresa
				</th>
				<th>
					Nombre
				</th>
				
				<th>
					Comuna
				</th>
				<th>
					Acciones
				</th>
			</tr>			
				
				<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sedes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['s']->value['empresa'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['s']->value['sede'];?>
</td>
						
						<td><?php echo $_smarty_tpl->tpl_vars['s']->value['comuna'];?>
</td>
						<td>
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
sedes/view/<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
">Ver</a>&nbsp;&nbsp;
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
sedes/delete/<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
sedes/delete/<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['s']->value['sede'];?>
')">Eliminar</a>
						</td>
					</tr>

				<?php } ?>
				
			
		</table>
	<?php } else { ?>
		<h2>No hay sedes asociadas</h2>
		<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
sedes/add">Agregar Sede</a></p>
	<?php }?>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
<?php }} ?>
