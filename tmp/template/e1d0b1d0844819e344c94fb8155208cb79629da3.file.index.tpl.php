<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-09-21 16:10:26
         compiled from "/Applications/MAMP/htdocs/qepd/views/tipoconstrucciones/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162869732859c40def7a7c14-48868077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1d0b1d0844819e344c94fb8155208cb79629da3' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/tipoconstrucciones/index.tpl',
      1 => 1506021018,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162869732859c40def7a7c14-48868077',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_59c40def83b844_90448497',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'tipos' => 0,
    't' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c40def83b844_90448497')) {function content_59c40def83b844_90448497($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tipoconstrucciones/add">Agregar Tipo Construcciones</a></p>
</div>
<div class="col-md-6">
	<h3>Lista Tipo Construcciones</h3>
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
tipoconstrucciones/view/<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
">Ver</a>&nbsp;&nbsp;
							<a href="">Eliminar</a>
						</td>
					</tr>

				<?php } ?>
			<?php }?>
		
	</table>
</div>
<div class="col-md-2">
	
</div><?php }} ?>
