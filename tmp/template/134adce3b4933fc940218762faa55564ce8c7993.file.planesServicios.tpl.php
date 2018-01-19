<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-01-17 20:15:06
         compiled from "/Applications/MAMP/htdocs/qepd/views/planes/planesServicios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38855602059ad7579732a90-67635706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '134adce3b4933fc940218762faa55564ce8c7993' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/planes/planesServicios.tpl',
      1 => 1515970896,
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
    '_layoutParams' => 0,
    'c' => 0,
    'planes' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ad757978a100_95697657')) {function content_59ad757978a100_95697657($_smarty_tpl) {?><div class="col-md-2" style="padding-left: 20px">
	<h4>Buscar en</h4>
	<?php if (isset($_smarty_tpl->tpl_vars['comunas']->value)&&count($_smarty_tpl->tpl_vars['comunas']->value)) {?>
		<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comunas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
			<p class="enlace">
				<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/planesComuna/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['comuna'];?>
</a>
			</p>
		<?php } ?>
		<?php }?>
</div>
<div class="col-md-10">
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
		
                    <div class="col-md-3">
                        <div class="service-item">
                            <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-stack-1x text-primary">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/planesServicios/9">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
views/layout/default/img/vectores/funeraria.jpg">
                                </a>
                            </i>
                            </span>
                            <h4>
                                <strong>Funerarias</strong>
                               
                            </h4>
                            <p>Elige el mejor plan funerario</p>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/planesServicios/9" class="btn btn-primary">Cotizar</a>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="service-item">
                            <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-stack-1x text-primary">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/planesServicios/10">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
views/layout/default/img/vectores/crematorio.jpg">
                                </a>
                            </i>
                        </span>
                            <h4>
                                <strong>Crematorios</strong>
                            </h4>
                            <p>Elige el mejor servicio de cremación</p>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/planesServicios/10" class="btn btn-primary">Cotizar</a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="service-item">
                            <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-stack-1x text-primary">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/planesServicios/11">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
views/layout/default/img/vectores/sepultura.jpg">
                                </a>
                                
                            </i>
                        </span>
                            <h4>
                                <strong>Sepulturas</strong>
                            </h4>
                            <p>Elige el mejor plan de cementerio</p>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/planesServicios/11" class="btn btn-primary">Cotizar</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="service-item">
                            <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-stack-1x text-primary">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/planesServicios/12">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
views/layout/default/img/vectores/Servicio-sepultacion.jpg">
                                </a>
                                
                            </i>
                        </span>
                            <h4>
                                <strong>Servicios de Sepultación</strong>
                            </h4>
                            <p>Elige el mejor servicio de sepultación</p>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/planesServicios/12" class="btn btn-primary">Cotizar</a>
                        </div>
                    </div>
                </div>
	<?php }?>
</div>



	
	
	
<?php }} ?>
