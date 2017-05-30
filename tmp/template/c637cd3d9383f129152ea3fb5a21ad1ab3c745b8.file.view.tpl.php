<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-05-29 17:32:39
         compiled from "/Applications/MAMP/htdocs/qepd/views/servicios/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:428354765592c5b4336c0b7-50203753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c637cd3d9383f129152ea3fb5a21ad1ab3c745b8' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/servicios/view.tpl',
      1 => 1496089957,
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
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592c5b439d3218_88269836')) {function content_592c5b439d3218_88269836($_smarty_tpl) {?><div class="col-md-2"></div>
<div class="col-md-4">
	<div style="padding-top: 50px"></div>
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
	
</div>
<div class="col-md-4">
	
</div><?php }} ?>
