<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-10-06 22:18:13
         compiled from "/Applications/MAMP/htdocs/qepd/views/planes/planesServicios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38855602059ad7579732a90-67635706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '134adce3b4933fc940218762faa55564ce8c7993' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/planes/planesServicios.tpl',
      1 => 1507339091,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38855602059ad7579732a90-67635706',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_59ad757978a100_95697657',
  'variables' => 
  array (
    'comunas' => 0,
    'c' => 0,
    'planes' => 0,
    'p' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ad757978a100_95697657')) {function content_59ad757978a100_95697657($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2" style="padding-left: 30px">
	<div style="padding-top: 50px"></div>
	<form action="">
		<div class="form-group">
			<label for="comuna">Planes por Comuna</label>
			<select name="comuna" id="" class="form-control">
				<option value="">Seleccione</option>
				<?php if (isset($_smarty_tpl->tpl_vars['comunas']->value)&&count($_smarty_tpl->tpl_vars['comunas']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['c']->value] = new Smarty_Variable; $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['c']->value]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comunas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['c']->value]->key => $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['c']->value]->value) {
$_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['c']->value]->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['nombre'];?>
</option>
					<?php } ?>
				<?php }?>
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" value="1" name="enviar">
			<input type="submit" value="Buscar" class="btn btn-success">
		</div>
	</form>
</div>
<div class="col-md-8">
	<h3>Ver Planes</h3>
	<?php if (isset($_smarty_tpl->tpl_vars['planes']->value)&&count($_smarty_tpl->tpl_vars['planes']->value)) {?>
	<table class="table table-hover">
		<th>
			Precio
		</th>
		<th>
			Funeraria o Empresa
		</th>
		<th>
			Nombre del Plan
		</th>
		<th>
			Tipo de Plan
		</th>
		<th>
			Destinatario
		</th>
		<th>
			Comuna o Ciudad
		</th>
		<th>
			Acciones
		</th>
		
			
				<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['planes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
					<tr>
						<td>$ <?php echo number_format($_smarty_tpl->tpl_vars['p']->value['precio'],0,",",".");?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['p']->value['empresa'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['p']->value['nombre'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['p']->value['tipo_plan'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['p']->value['destinatario'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['p']->value['comuna'];?>
</td>
						<td>
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
imagenes/imagenesplan/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
">Ver Detalles</a>&nbsp;&nbsp;
						</td>
					</tr>

				<?php } ?>
			
		
	</table>
	<?php } else { ?>
		<strong>No hay planes asociados</strong>
	<?php }?>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
<?php }} ?>
