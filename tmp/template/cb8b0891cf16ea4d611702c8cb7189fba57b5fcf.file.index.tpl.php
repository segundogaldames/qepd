<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-25 17:49:23
         compiled from "/Applications/MAMP/htdocs/qepd/views/comunas/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190811652458ffa31803df20-80786626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb8b0891cf16ea4d611702c8cb7189fba57b5fcf' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/comunas/index.tpl',
      1 => 1493153359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190811652458ffa31803df20-80786626',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58ffa3180e2b97_66234009',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'comunas' => 0,
    'c' => 0,
    'emp' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ffa3180e2b97_66234009')) {function content_58ffa3180e2b97_66234009($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
comunas/add" class="btn btn-enlace">Agregar Comuna</a></p>
</div>
<div class="col-md-8">
	<h3>Lista de Comunas</h3>
	<table class="table table-hover">
		<th>
			Nombre
		</th>
		<th>
			Region
		</th>
		<th>
			Acciones
		</th>
		
			<?php if (isset($_smarty_tpl->tpl_vars['comunas']->value)&&count($_smarty_tpl->tpl_vars['comunas']->value)) {?>
				<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comunas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['c']->value['comuna'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['c']->value['region'];?>
</td>
						<td>
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
comunas/view/<?php echo $_smarty_tpl->tpl_vars['emp']->value['id'];?>
">Ver</a>&nbsp;&nbsp;
							<a href="">Eliminar</a>
						</td>
					</tr>

				<?php } ?>
			<?php }?>
		
	</table>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
<?php }} ?>
