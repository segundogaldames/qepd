<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-01-17 20:07:12
         compiled from "/Applications/MAMP/htdocs/qepd/views/planes/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1860365306592c9b276f7308-20766008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5a9e40fca9f7ce473cef1634de71cae8d6679db' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/planes/index.tpl',
      1 => 1514647736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1860365306592c9b276f7308-20766008',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_592c9b27849170_99353663',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'planes' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592c9b27849170_99353663')) {function content_592c9b27849170_99353663($_smarty_tpl) {?><div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/add">Agregar Planes</a></p>
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tipoplanes">Tipo de Planes</a></p>
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
servicios">Servicios</a></p>
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cotizaciones">Cotizaciones</a></p>
</div>
<div class="col-md-8">
	<?php if (isset($_smarty_tpl->tpl_vars['planes']->value)&&count($_smarty_tpl->tpl_vars['planes']->value)) {?>
		<h3>Lista de Planes</h3>
		<table class="table table-hover">
			<th>
				Nombre
			</th>
			<th>
				Código
			</th>
			<th>
				Empresa
			</th>
			<th>
				Acciones
			</th>
			
				
					<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['planes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['p']->value['nombre'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['p']->value['codigo'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['p']->value['empresa'];?>
</td>
							<td>
								<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/view/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
">Ver</a>&nbsp;&nbsp;
								<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/delete/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/delete/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['p']->value['nombre'];?>
');">Eliminar</a>
							</td>
						</tr>

					<?php } ?>
				
			
		</table>
	<?php } else { ?>
		<h2>No hay planes disponibles</h2>
		<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/add">Agregar Planes</a></p>
	<?php }?>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
<?php }} ?>
