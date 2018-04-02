<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-01-17 20:08:58
         compiled from "/Applications/MAMP/htdocs/qepd/views/empresas/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:502235832590374d434ad16-84214570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa72c84e85fec5c7bc926cba36a05494107d811e' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/empresas/view.tpl',
      1 => 1516230526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '502235832590374d434ad16-84214570',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_590374d54a8982_69360068',
  'variables' => 
  array (
    'empresa' => 0,
    '_layoutParams' => 0,
    'sede' => 0,
    's' => 0,
    'planes' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590374d54a8982_69360068')) {function content_590374d54a8982_69360068($_smarty_tpl) {?><div class="col-md-2"></div>
<div class="col-md-4">
	
	<h3>Ver Empresa</h3>
	
	<?php if (isset($_smarty_tpl->tpl_vars['empresa']->value)&&count($_smarty_tpl->tpl_vars['empresa']->value)) {?>
		<p style="font-size: 18px"><strong>Nombre:</strong> <?php echo $_smarty_tpl->tpl_vars['empresa']->value['nombre'];?>
</p>
		<p style="font-size: 18px"><strong>Email:</strong> <?php echo $_smarty_tpl->tpl_vars['empresa']->value['email'];?>
</p>	
		<p style="font-size: 18px"><strong>RUT:</strong> <?php echo $_smarty_tpl->tpl_vars['empresa']->value['rut'];?>
</p>	
		<p style="font-size: 18px"><strong>Usuario:</strong> <?php echo $_smarty_tpl->tpl_vars['empresa']->value['nom_usuario'];?>
 <?php echo $_smarty_tpl->tpl_vars['empresa']->value['apellido'];?>
</p>
		<p style="font-size: 18px"><strong>Tipo Empresa:</strong> <?php echo $_smarty_tpl->tpl_vars['empresa']->value['tipo'];?>
 </p>
	<?php }?>
	<p>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
empresas/edit/<?php echo $_smarty_tpl->tpl_vars['empresa']->value['id'];?>
">Editar</a>&nbsp;&nbsp;
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
empresas">Volver</a>
	</p>
	<hr>
	<?php if (isset($_smarty_tpl->tpl_vars['sede']->value)&&count($_smarty_tpl->tpl_vars['sede']->value)) {?>
	<h4>Sedes</h4>
		<table class="table table-hover">
			<tr>
				<th>Nombre</th>
				<th>Calle Nº</th>
				<th>Ciudad/Comuna</th>
			</tr>
			
				<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sede']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
					<tr>
						<td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
sedes/view/<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['sede'];?>
</a></td>
						<td><?php echo $_smarty_tpl->tpl_vars['s']->value['calle'];?>
 <?php echo $_smarty_tpl->tpl_vars['s']->value['numero'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['s']->value['comuna'];?>
</td>
					</tr>

				<?php } ?>
			
		</table>
	<?php } else { ?>
		<strong>No hay sedes asociadas</strong>
		
	<?php }?>
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
sedes/addSedeEmpresa/<?php echo $_smarty_tpl->tpl_vars['empresa']->value['id'];?>
">Agregar sede</a></p>
	<hr>
	<?php if (isset($_smarty_tpl->tpl_vars['planes']->value)&&count($_smarty_tpl->tpl_vars['planes']->value)) {?>
	<h4>Planes</h4>
		<table class="table table-hover">
			<tr>
				<th>Nombre</th>
				<th>Servicio</th>
				<th>Tipo Plan</th>
				<th>Status</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['planes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
				<tr>
					<td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/view/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['nombre'];?>
</a></td>
					<td><?php echo $_smarty_tpl->tpl_vars['p']->value['servicio'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['p']->value['tipo_plan'];?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['p']->value['status_id']==1) {?>Activo<?php } else { ?>Inactivo<?php }?></td>
				</tr>
			<?php } ?>
		</table>
	<?php } else { ?>
		<strong>No hay planes asociados</strong>
	<?php }?>
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/addPlanEmpresa/<?php echo $_smarty_tpl->tpl_vars['empresa']->value['id'];?>
">Agregar Plan</a></p>
</div>
<div class="col-md-4">
	
</div>	
<?php }} ?>
