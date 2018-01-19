<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-01-17 20:15:38
         compiled from "/Applications/MAMP/htdocs/qepd/views/imagenes/imagenesplan.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185091384059d286b74720a7-17010095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbf1c1375f381f3a698dc9369c9f37e4eecea900' => 
    array (
      0 => '/Applications/MAMP/htdocs/qepd/views/imagenes/imagenesplan.tpl',
      1 => 1515970896,
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
    '_layoutParams' => 0,
    'img' => 0,
    'urna' => 0,
    'traslado' => 0,
    'velatorio' => 0,
    'cinerario' => 0,
    'anfora' => 0,
    'sepultacion' => 0,
    'solucion' => 0,
    'condiciones' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d286b7514675_56435931')) {function content_59d286b7514675_56435931($_smarty_tpl) {?><div class="col-md-2">
	
</div>
<div class="col-md-8">
	<h3>Planes Consulta</h3>
	<?php if (isset($_smarty_tpl->tpl_vars['imagenes']->value)&&count($_smarty_tpl->tpl_vars['imagenes']->value)) {?>
		<?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imagenes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
			<div class="col-md-12">
				<div class="col-md-7">
					<a href="#" ><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/componentes/<?php echo $_smarty_tpl->tpl_vars['img']->value['nombre'];?>
" alt="" class="img-responsive"></a>
					<p>&nbsp;</p>
				</div>
				<div class="col-md-5">
					<h3><?php echo $_smarty_tpl->tpl_vars['img']->value['componente'];?>
</h3>
					<!--Descripcion de urna asociada a plan y componente-->
					<?php if ($_smarty_tpl->tpl_vars['img']->value['componente_id']==$_smarty_tpl->tpl_vars['urna']->value['componente_id']) {?>
						<table class="table table-hover">
							<tr>
								<th>Modelo:</th>
								<td><?php echo $_smarty_tpl->tpl_vars['urna']->value['modelo'];?>
</td>
							</tr>
							<tr>
								<th>Medidas:</th>
								<td><?php echo $_smarty_tpl->tpl_vars['urna']->value['medidas'];?>
</td>
							</tr>
							<tr>
								<th>Material:</th>
								<td><?php echo $_smarty_tpl->tpl_vars['urna']->value['material'];?>
</td>
							</tr>
							<tr>
								<th>Terminaciones:</th>
								<td><?php echo $_smarty_tpl->tpl_vars['urna']->value['terminaciones'];?>
</td>
							</tr>
							<tr>
								<th>Color:</th>
								<td><?php echo $_smarty_tpl->tpl_vars['urna']->value['color'];?>
</td>
							</tr>
						</table>
					<!--Descripcion de traslado asociado a plan y componente-->
					<?php } elseif ($_smarty_tpl->tpl_vars['img']->value['componente_id']==$_smarty_tpl->tpl_vars['traslado']->value['componente_id']) {?>
						<table class="table table-hover">
							<tr>
								<th>Carroza Instalación:</th>
								<td><?php if ($_smarty_tpl->tpl_vars['traslado']->value['instalacion']==1) {?>Si<?php } else { ?>No<?php }?></td>
							</tr>
							<tr>
								<th>Carroza Funeral:</th>
								<td><?php if ($_smarty_tpl->tpl_vars['traslado']->value['funeral']==1) {?>Si<?php } else { ?>No<?php }?></td>
							</tr>
							<tr>
								<th>Carroza con flores:</th>
								<td><?php if ($_smarty_tpl->tpl_vars['traslado']->value['conflores']==1) {?>Si<?php } else { ?>No<?php }?></td>
							</tr>
							<tr>
								<th>Vehículo Acompañamiento:</th>
								<td><?php if ($_smarty_tpl->tpl_vars['traslado']->value['acompanamiento']==1) {?>Si<?php } else { ?>No<?php }?></td>
							</tr>
							<tr>
								<th>N° Pasajeros:</th>
								<td><?php echo $_smarty_tpl->tpl_vars['traslado']->value['pasajeros'];?>
</td>
							</tr>
						</table>
					<!--Descripcion de velatorio asociado a plan y componente-->
					<?php } elseif ($_smarty_tpl->tpl_vars['img']->value['componente_id']==$_smarty_tpl->tpl_vars['velatorio']->value['componente_id']) {?>
						<table class="table table-hover">
							<tr>
								<th>Trámites:</th>
								<td><?php echo ucfirst($_smarty_tpl->tpl_vars['velatorio']->value['tramites']);?>
</td>
							</tr>
							<tr>
								<th>Asesor a domicilio:</th>
								<td> <?php if ($_smarty_tpl->tpl_vars['velatorio']->value['asesor']==1) {?> Si <?php } else { ?>No <?php }?></td>
							</tr>
							<tr>
								<th>Sala velatorio:</th>
								<td><?php if ($_smarty_tpl->tpl_vars['velatorio']->value['sala']==1) {?> Si <?php } else { ?>No <?php }?></td>
							</tr>
							<tr>
								<th>Capilla ecuménica:</th>
								<td><?php if ($_smarty_tpl->tpl_vars['velatorio']->value['capilla']==1) {?> Si <?php } else { ?>No <?php }?></td>
							</tr>
							<tr>
								<th>N° de Cirios:</th>
								<td><?php echo $_smarty_tpl->tpl_vars['velatorio']->value['cirios'];?>
</td>
							</tr>
							<tr>
								<th>N° de Portacirios:</th>
								<td><?php echo $_smarty_tpl->tpl_vars['velatorio']->value['portacirios'];?>
</td>
							</tr>
							<tr>
								<th>N° de Cruces:</th>
								<td><?php echo $_smarty_tpl->tpl_vars['velatorio']->value['cruces'];?>
</td>
							</tr>
							<tr>
								<th>N° de Flores en canasto</th>
								<td><?php echo $_smarty_tpl->tpl_vars['velatorio']->value['florescanastos'];?>
</td>
							</tr>
							<tr>
								<th>N° de Flores cubreurna:</th>
								<td><?php echo $_smarty_tpl->tpl_vars['velatorio']->value['florescubreurnas'];?>
</td>
							</tr>	
							<tr>
								<th>N° de Libros de Condolencias:</th>
								<td><?php echo $_smarty_tpl->tpl_vars['velatorio']->value['condolencias'];?>
</td>
							</tr>
							<tr>
								<th>Parroco:</th>
								<td><?php if ($_smarty_tpl->tpl_vars['velatorio']->value['parroco']==1) {?> Si<?php } else { ?> No<?php }?></td>
							</tr>
							<tr>
								<th>N° de Integrantes del coro:</th>
								<td><?php echo $_smarty_tpl->tpl_vars['velatorio']->value['coro'];?>
</td>
							</tr>
							<tr>
								<th>>N° de Avisos de prensa:</th>
								<td><?php echo $_smarty_tpl->tpl_vars['velatorio']->value['avisosprensa'];?>
</td>
							</tr>
							<tr>
								<th>N° de Tarjetas de agradecimiento:</th>
								<td><?php echo $_smarty_tpl->tpl_vars['velatorio']->value['tarjetas'];?>
</td>
							</tr>
							<tr>
								<th>Cafetería</th>
								<td><?php if ($_smarty_tpl->tpl_vars['velatorio']->value['cafeteria']==1) {?> Básica<?php } elseif ($_smarty_tpl->tpl_vars['velatorio']->value['cafeteria']==2) {?> Superior<?php } else { ?> Ninguna<?php }?></td>
							</tr>
						</table>
					<!--Descripcion de cinerario asociado a plan y componente-->
					<?php } elseif ($_smarty_tpl->tpl_vars['img']->value['componente_id']==$_smarty_tpl->tpl_vars['cinerario']->value['componente_id']) {?>
						<table class="table table-hover">
							<tr>
								<th>Sala velatorio:</th>
								<td><?php if ($_smarty_tpl->tpl_vars['cinerario']->value['sala']==1) {?>Si<?php } else { ?>No<?php }?></td>
							</tr>
							<tr>
								<th>ACapilla ecuménica:</th>
								<td><?php if ($_smarty_tpl->tpl_vars['cinerario']->value['capilla']==1) {?>Si<?php } else { ?>No<?php }?></td>
							</tr>
							<tr>
								<th>Podium:</th>
								<td><?php if ($_smarty_tpl->tpl_vars['cinerario']->value['podium']==1) {?>Si<?php } else { ?>No<?php }?></td>
							</tr>
							<tr>
								<th>Liturgia:</th>
								<td><?php if ($_smarty_tpl->tpl_vars['cinerario']->value['liturgia']==1) {?>Si<?php } else { ?>No<?php }?></td>
							</tr>
							<tr>
								<th>Amplificación:</th>
								<td><?php if ($_smarty_tpl->tpl_vars['cinerario']->value['amplificacion']==1) {?>Si<?php } else { ?>No<?php }?></td>
							</tr>
							<tr>
								<th>Diácono:</th>
								<td><?php if ($_smarty_tpl->tpl_vars['cinerario']->value['diacono']==1) {?>Si<?php } else { ?>No<?php }?></td>
							</tr>
							<tr>
								<th>Integrantes del coro:</th>
								<td><?php echo $_smarty_tpl->tpl_vars['cinerario']->value['coro'];?>
</td>
							</tr>
							<tr>
								<th>Cafetería:</th>
								<td><?php if ($_smarty_tpl->tpl_vars['cinerario']->value['cafeteria']==1) {?>Básca<?php } elseif ($_smarty_tpl->tpl_vars['cinerario']->value['cafeteria']==2) {?>Superior<?php } else { ?>No considera<?php }?></td>
							</tr>
							<tr>
								<th>Ceremonia:</th>
								<td><?php if ($_smarty_tpl->tpl_vars['cinerario']->value['ceremonia']==1) {?>Si<?php } else { ?>No<?php }?></td>
							</tr>	
							<tr>
								<th>Anfora?:</th>
								<td><?php if ($_smarty_tpl->tpl_vars['cinerario']->value['anforaincl']==1) {?>Si<?php } else { ?>No<?php }?></td>
							</tr>
						</table>
					<!--Descripcion de anfora asociado a plan y componente-->
					<?php } elseif ($_smarty_tpl->tpl_vars['img']->value['componente_id']==$_smarty_tpl->tpl_vars['anfora']->value['componente_id']) {?>
						<table class="table table-hover">
							<tr>
								<th>Modelo:</th>
								<td><?php echo $_smarty_tpl->tpl_vars['anfora']->value['modelo'];?>
</td>
							</tr>
						</table>
					<!--Descripcion de sepultacion asociado a plan y componente-->
					<?php } elseif ($_smarty_tpl->tpl_vars['img']->value['componente_id']==$_smarty_tpl->tpl_vars['sepultacion']->value['componente_id']) {?>
						<table class="table table-hover">
							<tr>
								<th>Sala velatorio:</th>
								<td><?php if ($_smarty_tpl->tpl_vars['sepultacion']->value['sala']==1) {?>Si<?php } else { ?>No<?php }?></td>
							</tr>
							<tr>
								<th>Capilla ecuménica:</th>
								<td><?php if ($_smarty_tpl->tpl_vars['sepultacion']->value['capilla']) {?>Si<?php } else { ?>No<?php }?></td>
							</tr>
							<tr>
								<th>Liturgia o responso:</th>
								<td><?php if ($_smarty_tpl->tpl_vars['sepultacion']->value['liturgia']) {?>Si<?php } else { ?>No<?php }?></td>
							</tr>
							<tr>
								<th>N° de toldos:</th>
								<td><?php echo $_smarty_tpl->tpl_vars['sepultacion']->value['toldos'];?>
</td>
							</tr>
							<tr>
								<th>N° de sillas:</th>
								<td><?php echo $_smarty_tpl->tpl_vars['sepultacion']->value['sillas'];?>
</td>
							</tr>
							<tr>
								<th>Amplificación:</th>
								<td><?php if ($_smarty_tpl->tpl_vars['sepultacion']->value['amplificacion']==1) {?>Si<?php } else { ?>No<?php }?></td>
							</tr>
							<tr>
								<th>Diácono:</th>
								<td><?php if ($_smarty_tpl->tpl_vars['sepultacion']->value['diacono']==1) {?>Si<?php } else { ?>No<?php }?></td>
							</tr>
							<tr>
								<th>Coro:</th>
								<td><?php echo $_smarty_tpl->tpl_vars['sepultacion']->value['coro'];?>
 integrantes</td>
							</tr>
							<tr>
								<th>Cafetería:</th>
								<td><?php if ($_smarty_tpl->tpl_vars['sepultacion']->value['cafeteria']==1) {?> Básica<?php } elseif ($_smarty_tpl->tpl_vars['sepultacion']->value['cafeteria']==2) {?>Superior<?php } else { ?> No disponible<?php }?></td>
							</tr>	
						</table>
					<!--Descripcion de solucion asociado a plan y componente-->
					<?php } elseif ($_smarty_tpl->tpl_vars['img']->value['componente_id']==$_smarty_tpl->tpl_vars['solucion']->value['componente_id']) {?>
						<table class="table table-hover">
							<tr>
								<th>Solución:</th>
								<td><?php if ($_smarty_tpl->tpl_vars['solucion']->value['solucion']==1) {?>Familiar<?php } else { ?>Individual<?php }?></td>
							</tr>
							<tr>
								<th>Periodo:</th>
								<td><?php if ($_smarty_tpl->tpl_vars['solucion']->value['periodo']==1) {?>Perpetua<?php } else { ?>Temporal<?php }?></td>
							</tr>
							<tr>
								<th>Años:</th>
								<td><?php echo $_smarty_tpl->tpl_vars['solucion']->value['anios'];?>
</td>
							</tr>
							<tr>
								<th>Tipo Solución:</th>
								<td> <?php echo $_smarty_tpl->tpl_vars['solucion']->value['tipo'];?>
</td>
							</tr>
						</table>
					<?php } else { ?>
						<strong>Descripción no disponible</strong>
					<?php }?>
				</div>
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
			<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cotizaciones/add/<?php echo $_smarty_tpl->tpl_vars['img']->value['plan_id'];?>
" class="btn btn-primary">Cotizar</a>
			<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/planesServicios" class="btn btn-link">Volver</a>
		</div>
		
		<?php } else { ?>
			<strong>No hay imágenes asociadas</strong>

	<?php }?>

</div>

<div class="col-md-2">
	
</div>	


	
	
	
<?php }} ?>
