<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-12 19:25:06
         compiled from "/Applications/MAMP/htdocs/mercadomuebles/views/layout/default/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14683481355ca617f183e67-90569840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3be4737b8ebabef3c4c19bf6a7e8d85b772eba6' => 
    array (
      0 => '/Applications/MAMP/htdocs/mercadomuebles/views/layout/default/menu.tpl',
      1 => 1439400303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14683481355ca617f183e67-90569840',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55ca617f1c1e02_96758660',
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ca617f1c1e02_96758660')) {function content_55ca617f1c1e02_96758660($_smarty_tpl) {?>
	<div class="col-xs-8 col-md-12" id="menu">
		
		<ul class="nav nav-pills">
			<li role="presentation"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
destacado">Destacados</a></li>
			<li role="presentation"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
donaciones">Donaciones</a></li>
			<li role="presentation"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
licitaciones">Licitaciones</a></li>
			<li role="presentation"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
liquidaciones">Liquidaciones</a></li>
			<li role="presentation"><p class="siguenos">S&iacute;guenos en:</p></li>
			<li role="presentation">
				<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
facebook"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
face.png" width="20"></a>
			</li>
			<li role="presentation">
				<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
twitter"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
twitter.png" width="20"></a>
			</li>
			<li role="presentation">
				<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
youtube"><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
youtube.png" width="50"></a>
			</li>
		</ul>
	
</div>



<?php }} ?>
