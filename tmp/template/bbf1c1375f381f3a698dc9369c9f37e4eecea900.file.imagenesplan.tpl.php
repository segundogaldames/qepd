<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-10-02 16:32:16
         compiled from "/Applications/MAMP/htdocs/qepd/views/imagenes/imagenesplan.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185091384059d286b74720a7-17010095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbf1c1375f381f3a698dc9369c9f37e4eecea900' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/imagenes/imagenesplan.tpl',
      1 => 1506972733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185091384059d286b74720a7-17010095',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_59d286b7514675_56435931',
  'variables' => 
  array (
    'imagenes' => 0,
    'img' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d286b7514675_56435931')) {function content_59d286b7514675_56435931($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	
</div>
<div class="col-md-8">
	<h3>Planes Consulta</h3>
	<?php if (isset($_smarty_tpl->tpl_vars['imagenes']->value)&&count($_smarty_tpl->tpl_vars['imagenes']->value)) {?>
		<?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imagenes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
			<figure>
				<h3><?php echo $_smarty_tpl->tpl_vars['img']->value['titulo'];?>
</h3>
				<a href="#" ><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/componentes/<?php echo $_smarty_tpl->tpl_vars['img']->value['nombre'];?>
" alt="" width="280"></a>
				
			</figure>
		<?php } ?>
		<br><br>
		<a href="" class="btn btn-primary">Cotizar</a>
		<?php } else { ?>
			<strong>No hay imágenes asociadas</strong>
	<?php }?>
	
</div>
<div class="col-md-2">
	
</div>	


	
	
	
<?php }} ?>
