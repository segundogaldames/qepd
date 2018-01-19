<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-01-17 19:44:31
         compiled from "/Applications/MAMP/htdocs/qepd/views/servicios/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:428354765592c5b4336c0b7-50203753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c637cd3d9383f129152ea3fb5a21ad1ab3c745b8' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/servicios/view.tpl',
      1 => 1514647736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '428354765592c5b4336c0b7-50203753',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_592c5b439d3218_88269836',
  'variables' => 
  array (
    'servicio' => 0,
    '_layoutParams' => 0,
    'planes' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592c5b439d3218_88269836')) {function content_592c5b439d3218_88269836($_smarty_tpl) {?><div class="col-md-2"></div>
<div class="col-md-4">
	<h3>Ver Servicio</h3>
	
	<?php if (isset($_smarty_tpl->tpl_vars['servicio']->value)&&count($_smarty_tpl->tpl_vars['servicio']->value)) {?>
		<p style="font-size: 18px"><strong>Nombre:</strong> <?php echo $_smarty_tpl->tpl_vars['servicio']->value['nombre'];?>
</p>
		<p style="font-size: 18px"><strong>Proveedor:</strong> <?php echo $_smarty_tpl->tpl_vars['servicio']->value['tipo'];?>
</p>	
		
	<?php }?>
	<p>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
servicios/edit/<?php echo $_smarty_tpl->tpl_vars['servicio']->value['id'];?>
">Editar</a>&nbsp;&nbsp;
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
servicios">Volver</a>
	</p>
	<hr>
	<h4>Planes Asociados</h4>
	<?php if (isset($_smarty_tpl->tpl_vars['planes']->value)&&count($_smarty_tpl->tpl_vars['planes']->value)) {?>
		<ul type="square">
			<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['planes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
				<li>
					<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/view/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['nombre'];?>
</a>
				</li>
			<?php } ?>
		</ul>
	<?php } else { ?>
		<strong>No hay planes asociados</strong>
		<p>
			<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/add">Agregar Planes</a>
		</p>
	<?php }?>
</div>
<div class="col-md-4">
	
</div><?php }} ?>
