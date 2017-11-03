<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-13 15:56:58
         compiled from "/Applications/MAMP/htdocs/qepd/views/componentes/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:633910512592dcf63c9ccd4-68779249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a91ef322fc6a42c0caf887cfee674d19fc6ad052' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/componentes/index.tpl',
      1 => 1497380208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '633910512592dcf63c9ccd4-68779249',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_592dcf6403ebe4_03161377',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'componentes' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592dcf6403ebe4_03161377')) {function content_592dcf6403ebe4_03161377($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
componentes/add">Agregar Componente</a></p>
</div>
<div class="col-md-8">
	<h3>Lista de Componentes</h3>
	<table class="table table-hover">
		<th>
			Nombre
		</th>
		<th>
			Servicio
		</th>
		<th>
			URL Add
		</th>
		<th>
			URL View
		</th>
		<th>
			Acciones
		</th>
		
			<?php if (isset($_smarty_tpl->tpl_vars['componentes']->value)&&count($_smarty_tpl->tpl_vars['componentes']->value)) {?>
				<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['componentes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['c']->value['nombre'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['c']->value['servicio'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['c']->value['url'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['c']->value['url_view'];?>
</td>
						<td>
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
componentes/edit/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
">Editar</a>&nbsp;&nbsp;
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
componentes/delete/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
">Eliminar</a>
						</td>
					</tr>

				<?php } ?>
			<?php }?>
		
	</table>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
<?php }} ?>
