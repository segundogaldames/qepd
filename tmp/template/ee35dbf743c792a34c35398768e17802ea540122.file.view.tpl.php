<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-05-02 14:24:56
         compiled from "/Applications/MAMP/htdocs/qepd/views/sedes/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8527794305908bd27ed3526-37947902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee35dbf743c792a34c35398768e17802ea540122' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/sedes/view.tpl',
      1 => 1493745894,
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
    '_layoutParams' => 0,
    'sede' => 0,
    'telefonos' => 0,
    'tel' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5908bd28157b82_27702584')) {function content_5908bd28157b82_27702584($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
telefonos/add">Agregar Teléfono</a></p>
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
		<table class="table table-hover">
			<tr>
				<th>Números</th>
			</tr>
			<?php if (isset($_smarty_tpl->tpl_vars['telefonos']->value)&&count($_smarty_tpl->tpl_vars['telefonos']->value)) {?>
				<?php  $_smarty_tpl->tpl_vars['tel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tel']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['telefonos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tel']->key => $_smarty_tpl->tpl_vars['tel']->value) {
$_smarty_tpl->tpl_vars['tel']->_loop = true;
?>
					<tr>
						<td><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
phone.jpeg" alt="" width="20"><?php echo $_smarty_tpl->tpl_vars['tel']->value['numero'];?>
</td>
					</tr>

				<?php } ?>
			<?php }?>
		</table>
</div>
<div class="col-md-4">
	
</div>	
<?php }} ?>
