<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-10-03 16:22:04
         compiled from "/Applications/MAMP/htdocs/qepd/views/imagenes/imagenesplan.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185091384059d286b74720a7-17010095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbf1c1375f381f3a698dc9369c9f37e4eecea900' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/imagenes/imagenesplan.tpl',
      1 => 1507058511,
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
    'condiciones' => 0,
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
			<div class="col-md-4">
				<figure>
					<h3><?php echo $_smarty_tpl->tpl_vars['img']->value['titulo'];?>
</h3>
					<a href="#" ><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/componentes/<?php echo $_smarty_tpl->tpl_vars['img']->value['nombre'];?>
" alt="" class="img-responsive"></a>
					
				</figure>
			</div>
			
		<?php } ?>
		<div class="col-md-12">
			<h2>Condiciones</h2>
			<?php if (isset($_smarty_tpl->tpl_vars['condiciones']->value)&&count($_smarty_tpl->tpl_vars['condiciones']->value)) {?>
				<table class="table table-hover table-striped">
					<tr>
						<th>Precio Plan</th>
						<td>: $ <?php echo $_smarty_tpl->tpl_vars['condiciones']->value['precio'];?>
</td>
					</tr>
					<tr>
						<th>Forma de Pago</th>
						<td>: <?php echo $_smarty_tpl->tpl_vars['condiciones']->value['formapago'];?>
</td>
					</tr>
					<tr>
						<th>Pago a Plazo</th>
						<td>: <?php if ($_smarty_tpl->tpl_vars['condiciones']->value['plazopago']==1) {?>Si <?php } else { ?> No<?php }?></td>
					</tr>
					<tr>
						<th>Compra Anticipada</th>
						<td>: <?php if ($_smarty_tpl->tpl_vars['condiciones']->value['compraanticipada']==1) {?>Si <?php } else { ?> No<?php }?></td>
					</tr>
					<tr>
						<th>Seguro Deceso</th>
						<td>: <?php if ($_smarty_tpl->tpl_vars['condiciones']->value['segurodeceso']==1) {?>Si <?php } else { ?> No<?php }?></td>
					</tr>
					<tr>
						<th>Convenios</th>
						<td>: <?php echo $_smarty_tpl->tpl_vars['condiciones']->value['convenios'];?>
</td>
					</tr>
					<tr>
						<th>Descuento en Columbario</th>
						<td>: <?php if ($_smarty_tpl->tpl_vars['condiciones']->value['descuentocol']==0) {?>No <?php } else {
echo $_smarty_tpl->tpl_vars['condiciones']->value['descuentocol'];?>
%<?php }?></td>
					</tr>
					<tr>
						<th>Descuento Nicho</th>
						<td>: <?php if ($_smarty_tpl->tpl_vars['condiciones']->value['descuentonicho']==0) {?>No <?php } else {
echo $_smarty_tpl->tpl_vars['condiciones']->value['descuentonicho'];?>
%<?php }?></td>
					</tr>
					<tr>
						<th>Pensiones</th>
						<td>: <?php if ($_smarty_tpl->tpl_vars['condiciones']->value['pensiones']==1) {?>Si <?php } else { ?> No<?php }?></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
					</tr>

				</table>
			<?php }?>
			<br><br>
			<a href="" class="btn btn-primary">Cotizar</a>
		</div>
		
		<?php } else { ?>
			<strong>No hay imágenes asociadas</strong>
	<?php }?>

	
</div>

<div class="col-md-2">
	
</div>	


	
	
	
<?php }} ?>
