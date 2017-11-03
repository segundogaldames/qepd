<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-29 22:33:41
         compiled from "/Applications/MAMP/htdocs/mercadomuebles/views/consulta/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2129859904569ea86b045336-42766051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '527aee258902d225c553a30eb94dc8f67f5e27b0' => 
    array (
      0 => '/Applications/MAMP/htdocs/mercadomuebles/views/consulta/index.tpl',
      1 => 1453240554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2129859904569ea86b045336-42766051',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_569ea86b046bf5_85920727',
  'variables' => 
  array (
    'publicaciones' => 0,
    'pub' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569ea86b046bf5_85920727')) {function content_569ea86b046bf5_85920727($_smarty_tpl) {?><div class="col-md-2"></div>
<div class="col-md-8">
	<h4>Publicaciones Realizadas</h4>
	<?php if (isset($_smarty_tpl->tpl_vars['publicaciones']->value)&&count($_smarty_tpl->tpl_vars['publicaciones']->value)) {?>
		<table class="table">
			<tr>
				<th>Producto</th>
				<th>Fecha</th>
				<th>Comentarios</th>
				<th>Acciones</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['pub'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pub']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['publicaciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pub']->key => $_smarty_tpl->tpl_vars['pub']->value) {
$_smarty_tpl->tpl_vars['pub']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['pub']->value['nombre'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['pub']->value['creado'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['pub']->value['comentario'];?>
</td>
				<td>
					<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
consulta/ver/<?php echo $_smarty_tpl->tpl_vars['pub']->value['id'];?>
" class="btn btn-default btn-xs">Ver</a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
consulta/editar/<?php echo $_smarty_tpl->tpl_vars['pub']->value['id'];?>
" class="btn btn-default btn-xs">Editar</a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
consulta/eliminar/<?php echo $_smarty_tpl->tpl_vars['pub']->value['id'];?>
" class="btn btn-default btn-xs">Eliminar</a>
				</td>
			</tr>
			<?php } ?>
			</table>
		
	<?php }?>
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
inicio">Publicar Aviso</a></p>
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuario/cerrar" onclick="eturn cerrar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuario/cerrar');">Cerrar Sesión</a></p>
</div><?php }} ?>
