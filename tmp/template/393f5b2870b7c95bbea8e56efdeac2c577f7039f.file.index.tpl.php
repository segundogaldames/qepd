<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-10-02 16:48:10
         compiled from "/Applications/MAMP/htdocs/qepd/views/imagenes/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56102278759d293f57ab332-10542600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '393f5b2870b7c95bbea8e56efdeac2c577f7039f' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/imagenes/index.tpl',
      1 => 1506973688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56102278759d293f57ab332-10542600',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_59d293f58585e0_75510101',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'imagenes' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d293f58585e0_75510101')) {function content_59d293f58585e0_75510101($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
imagenes/add" class="btn btn-enlace">Agregar Imagen</a></p>
</div>
<div class="col-md-8">
	<?php if (isset($_smarty_tpl->tpl_vars['imagenes']->value)&&count($_smarty_tpl->tpl_vars['imagenes']->value)) {?>
		<?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imagenes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
			<div class="col-md-7">
				<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/componentes/<?php echo $_smarty_tpl->tpl_vars['img']->value['nombre'];?>
" alt="" class="img-responsive">
				
			</div>
			<div class="col-md-5">
				<h4><?php echo $_smarty_tpl->tpl_vars['img']->value['titulo'];?>
</h4>
				<p><strong>Componente:</strong> <?php echo $_smarty_tpl->tpl_vars['img']->value['componente'];?>
</p>
				<p><strong>Plan:</strong><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/view/<?php echo $_smarty_tpl->tpl_vars['img']->value['plan_id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['img']->value['plan'];?>
</a></p>
				<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
imagenes/edit/<?php echo $_smarty_tpl->tpl_vars['img']->value['id'];?>
" class="btn btn-link">Editar</a></p>
			</div>
		<?php } ?>
	<?php }?>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
<?php }} ?>
