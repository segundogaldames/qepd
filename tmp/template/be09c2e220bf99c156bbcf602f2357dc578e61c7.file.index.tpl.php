<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-05-30 18:53:19
         compiled from "/Applications/MAMP/htdocs/qepd/views/destinatarios/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88239276592de9cf914643-19643893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be09c2e220bf99c156bbcf602f2357dc578e61c7' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/destinatarios/index.tpl',
      1 => 1496181140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88239276592de9cf914643-19643893',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'destinatarios' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_592de9cfa22880_94623599',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592de9cfa22880_94623599')) {function content_592de9cfa22880_94623599($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
destinatarios/add" class="btn btn-enlace">Agregar Destinatario</a></p>
</div>
<div class="col-md-8">
	<h3>Lista de Comunas</h3>
	<table class="table table-hover">
		<th>
			Nombre
		</th>
		<th>
			Acciones
		</th>
		
			<?php if (isset($_smarty_tpl->tpl_vars['destinatarios']->value)&&count($_smarty_tpl->tpl_vars['destinatarios']->value)) {?>
				<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['destinatarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['d']->value['nombre'];?>
</td>
						<td>
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
destinatarios/view/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">Ver</a>&nbsp;&nbsp;
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
destinatarios/delete/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
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
