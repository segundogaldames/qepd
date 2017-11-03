<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-19 22:19:46
         compiled from "/Applications/MAMP/htdocs/mercadomuebles/views/muebles/verPublicacion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14860963565699614dad1f26-65493213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28ae415b548a34e3f8ff683b7a2cd1428debf522' => 
    array (
      0 => '/Applications/MAMP/htdocs/mercadomuebles/views/muebles/verPublicacion.tpl',
      1 => 1453238375,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14860963565699614dad1f26-65493213',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5699614dc35286_72450210',
  'variables' => 
  array (
    'nom_usuario' => 0,
    'publicacion' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5699614dc35286_72450210')) {function content_5699614dc35286_72450210($_smarty_tpl) {?><div class="col-md-2"></div>
<div class="col-md-4">
	<h3>Última Publicación de <?php echo $_smarty_tpl->tpl_vars['nom_usuario']->value;?>
</h3>
	<table class="table table-striped">
		<tr>
			<td class="text-right text-primary">Clasificación:</td>
			<td class="text-success"><?php echo $_smarty_tpl->tpl_vars['publicacion']->value['clas'];?>
</td>
		</tr>
		<tr>
			<td class="text-right text-primary">Mueble:</td>
			<td class="text-success"><?php echo $_smarty_tpl->tpl_vars['publicacion']->value['nombre'];?>
</td>
		</tr>
		<tr>
			<td class="text-right text-primary">Tipo:</td>
			<td class="text-success"><?php echo $_smarty_tpl->tpl_vars['publicacion']->value['tipo'];?>
</td>
		</tr>
		<tr>
			<td class="text-right text-primary">Modelo:</td>
			<td class="text-success"><?php echo ucwords($_smarty_tpl->tpl_vars['publicacion']->value['modelo']);?>
</td>
		</tr>
		<tr>
			<td class="text-right text-primary">Largo:</td>
			<td class="text-success"><?php echo $_smarty_tpl->tpl_vars['publicacion']->value['largo'];?>
 cms</td>
		</tr>
		<tr>
			<td class="text-right text-primary">Ancho:</td>
			<td class="text-success"><?php echo $_smarty_tpl->tpl_vars['publicacion']->value['ancho'];?>
 cms</td>
		</tr>
		<tr>
			<td class="text-right text-primary">Alto:</td>
			<td class="text-success"><?php echo $_smarty_tpl->tpl_vars['publicacion']->value['alto'];?>
 cms</td>
		</tr>
		<tr>
			<td class="text-right text-primary">Diámetro:</td>
			<td class="text-success"><?php echo $_smarty_tpl->tpl_vars['publicacion']->value['diametro'];?>
 cms</td>
		</tr>
		<tr>
			<td class="text-right text-primary">Materialidad:</td>
			<td class="text-success"><?php echo ucwords($_smarty_tpl->tpl_vars['publicacion']->value['estructura']);?>
</td>
		</tr>
		<tr>
			<td class="text-right text-primary">Color de terminación:</td>
			<td class="text-success"><?php echo ucwords($_smarty_tpl->tpl_vars['publicacion']->value['color']);?>
</td>
		</tr>
		<tr>
			<td class="text-right text-primary">Destino:</td>
			<td class="text-success"><?php echo $_smarty_tpl->tpl_vars['publicacion']->value['destino'];?>
</td>
		</tr>
		<tr>
			<td class="text-right text-primary">Estado:</td>
			<td class="text-success"><?php if ($_smarty_tpl->tpl_vars['publicacion']->value['estado']==1) {?> Nuevo <?php } else { ?> Usado <?php }?></td>
		</tr>
		<tr>
			<td class="text-right text-primary">Precio unitario:</td>
			<td class="text-success">$ <?php echo $_smarty_tpl->tpl_vars['publicacion']->value['precio'];?>
</td>
		</tr>
		<tr>
			<td class="text-right text-primary">Stock disponible:</td>
			<td class="text-success"><?php echo $_smarty_tpl->tpl_vars['publicacion']->value['stock'];?>
</td>
		</tr>
		<tr>
			<td class="text-right text-primary">Imagen:</td>
			<td class="text-success"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/publica/<?php echo $_smarty_tpl->tpl_vars['publicacion']->value['imagen'];?>
" alt="" width="70"></td>
		</tr>
		<tr>
			<td class="text-right text-primary">Comentarios:</td>
			<td class="text-success"><?php echo $_smarty_tpl->tpl_vars['publicacion']->value['comentario'];?>
</td>
		</tr>
		<tr>
			<td class="text-right text-primary">Fecha y hora de publicación:</td>
			<td class="text-success"><?php echo $_smarty_tpl->tpl_vars['publicacion']->value['creado'];?>
</td>
		</tr>
		<tr>
			<td class="text-right"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
consulta">Confirmar</a></td>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
">Modificar</a></td>
		</tr>
	</table>
</div>
<div class="col-md-2">
	<h3>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
inicio">
			<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
/views/layout/default/img/cerrar.png" title="Abandonar Publicacion">
		</a>
	</h3>
</div>
<?php }} ?>
