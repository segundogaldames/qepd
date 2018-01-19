<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-01-17 18:36:22
         compiled from "/Applications/MAMP/htdocs/qepd/views/sedes/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8527794305908bd27ed3526-37947902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee35dbf743c792a34c35398768e17802ea540122' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/sedes/view.tpl',
      1 => 1516224978,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8527794305908bd27ed3526-37947902',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5908bd28157b82_27702584',
  'variables' => 
  array (
    'sede' => 0,
    '_layoutParams' => 0,
    'telefonos' => 0,
    'tel' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5908bd28157b82_27702584')) {function content_5908bd28157b82_27702584($_smarty_tpl) {?><div class="col-md-2" style="padding-top: 20px">
	
</div>
<div class="col-md-4">
	
	<h3>Ver Sede</h3>
	
	<?php if (isset($_smarty_tpl->tpl_vars['sede']->value)&&count($_smarty_tpl->tpl_vars['sede']->value)) {?>
		<p style="font-size: 18px"><strong>Sede:</strong> <?php echo $_smarty_tpl->tpl_vars['sede']->value['sede'];?>
</p>
		<p style="font-size: 18px"><strong>Direccion:</strong> <?php echo $_smarty_tpl->tpl_vars['sede']->value['calle'];?>
 <?php echo $_smarty_tpl->tpl_vars['sede']->value['numero'];?>
 <?php echo $_smarty_tpl->tpl_vars['sede']->value['sector'];?>
</p>	
		<p style="font-size: 18px"><strong>Comuna:</strong> <?php echo $_smarty_tpl->tpl_vars['sede']->value['comuna'];?>
</p>
		<hr>
		<h4>Datos de Contacto</h4>	
		<p style="font-size: 18px"><strong>Nombre:</strong> <?php echo $_smarty_tpl->tpl_vars['sede']->value['nom_usuario'];?>
 <?php echo $_smarty_tpl->tpl_vars['sede']->value['apellido'];?>
</p>
		<p style="font-size: 18px"><strong>Email:</strong> <?php echo $_smarty_tpl->tpl_vars['sede']->value['email'];?>
</p>
	<?php }?>
	<p>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
sedes/edit/<?php echo $_smarty_tpl->tpl_vars['sede']->value['id'];?>
">Editar</a>&nbsp;&nbsp;
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
sedes">Volver</a>
	</p>
	<hr>
	<h4>Teléfonos</h4>
		<?php if (isset($_smarty_tpl->tpl_vars['telefonos']->value)&&count($_smarty_tpl->tpl_vars['telefonos']->value)) {?>
			<table class="table table-hover">
				<tr>
					<th>Números</th>
				</tr>
				
					<?php  $_smarty_tpl->tpl_vars['tel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tel']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['telefonos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tel']->key => $_smarty_tpl->tpl_vars['tel']->value) {
$_smarty_tpl->tpl_vars['tel']->_loop = true;
?>
						<tr>
							<td><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
phone.jpeg" alt="" width="20"><?php echo $_smarty_tpl->tpl_vars['tel']->value['numero'];?>
</td>
							<td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
telefonos/edit/<?php echo $_smarty_tpl->tpl_vars['tel']->value['id'];?>
" class="btn btn-link">Editar</a></td>
							<td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
telefonos/delete/<?php echo $_smarty_tpl->tpl_vars['tel']->value['id'];?>
" onclick="return eliminar('$_layoutParams.root}telefonos/delete/<?php echo $_smarty_tpl->tpl_vars['tel']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['tel']->value['numero'];?>
');" class="btn btn-link">Eliminar</a></td>
						</tr>

					<?php } ?>
				
			</table>
		<?php } else { ?>
			<strong>No hay teléfonos asociados</strong>
			
		<?php }?>
		<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
telefonos/addTelefonoSede/<?php echo $_smarty_tpl->tpl_vars['sede']->value['id'];?>
">Agregar Teléfono</a></p>
</div>
<div class="col-md-4">
	
</div>	
<?php }} ?>
