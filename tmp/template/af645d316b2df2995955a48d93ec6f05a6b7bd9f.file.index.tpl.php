<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-05-24 16:40:32
         compiled from "/Applications/MAMP/htdocs/qepd/views/telefonos/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15600912325908b18151cc95-96644703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af645d316b2df2995955a48d93ec6f05a6b7bd9f' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/telefonos/index.tpl',
      1 => 1493745920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15600912325908b18151cc95-96644703',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5908b1816847c2_87958914',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'telefonos' => 0,
    'tel' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5908b1816847c2_87958914')) {function content_5908b1816847c2_87958914($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
telefonos/add">Agregar Teléfono</a></p>
</div>
<div class="col-md-8">
	<h3>Lista de Teléfonos</h3>
	<table class="table table-hover">
		<th>
			Número
		</th>
		<th>
			Sede
		</th>
		<th>
			Empresa
		</th>
		<th>
			Acciones
		</th>
		
			<?php if (isset($_smarty_tpl->tpl_vars['telefonos']->value)&&count($_smarty_tpl->tpl_vars['telefonos']->value)) {?>
				<?php  $_smarty_tpl->tpl_vars['tel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tel']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['telefonos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tel']->key => $_smarty_tpl->tpl_vars['tel']->value) {
$_smarty_tpl->tpl_vars['tel']->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['tel']->value['numero'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['tel']->value['sede'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['tel']->value['empresa'];?>
</td>
						<td>
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
telefonos/view/<?php echo $_smarty_tpl->tpl_vars['tel']->value['id'];?>
">Ver</a>&nbsp;&nbsp;
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
telefonos/delete/<?php echo $_smarty_tpl->tpl_vars['tel']->value['id'];?>
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
