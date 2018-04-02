<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-30 20:25:03
         compiled from "/Applications/MAMP/htdocs/qepd/views/empresas/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24292308758fe53fdec5754-29288323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98e04195852ede11c6d598bfaf28ba188bd117bf' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/empresas/index.tpl',
      1 => 1522452295,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24292308758fe53fdec5754-29288323',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58fe53fdec78f6_23814762',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'empresas' => 0,
    'emp' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fe53fdec78f6_23814762')) {function content_58fe53fdec78f6_23814762($_smarty_tpl) {?><div class="col-md-2" style="padding-top: 20px">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
empresas/add">Agregar Empresa</a></p>
	<hr>
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tipoempresas/">Tipo Empresas</a></p>
</div>
<div class="col-md-8">
	<h3>Lista de Empresas</h3>
	<?php if (isset($_smarty_tpl->tpl_vars['empresas']->value)&&count($_smarty_tpl->tpl_vars['empresas']->value)) {?>
	<table class="table table-hover">
		<tr>
			<th>
				Tipo Empresa
			</th>
			<th>
				Nombre
			</th>
			<th>
				Email
			</th>
			<th>
				Usuario
			</th>
			
			<th>
				Acciones
			</th>
		</tr>		
			
			<?php  $_smarty_tpl->tpl_vars['emp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['emp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['empresas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['emp']->key => $_smarty_tpl->tpl_vars['emp']->value) {
$_smarty_tpl->tpl_vars['emp']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['emp']->value['tipo'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['emp']->value['nombre'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['emp']->value['email'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['emp']->value['nom_usuario'];?>
 <?php echo $_smarty_tpl->tpl_vars['emp']->value['apellido'];?>
 </td>
					
					<td>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
empresas/view/<?php echo $_smarty_tpl->tpl_vars['emp']->value['id'];?>
">Ver</a>&nbsp;&nbsp;
						<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
empresas/delete/<?php echo $_smarty_tpl->tpl_vars['emp']->value['id'];?>
" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
empresas/delete/<?php echo $_smarty_tpl->tpl_vars['emp']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['emp']->value['nombre'];?>
')">Eliminar</a>
					</td>
				</tr>

			<?php } ?>
				
		
	</table>
	<?php } else { ?>
				<strong>No hay empresas registradas</strong>
	<?php }?>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
<?php }} ?>
