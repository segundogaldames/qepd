<div class="col-md-2">
	
</div>
<div class="col-md-8">
	<h3>Planes Consulta</h3>
	<div class="col-md-6">
		<table class="table table-hover">
			<tr>
				<th>Nombre</th>
				<td>: {ucwords($plan.nombre)}</td>
			</tr>
			<tr>
				<th>Empresa</th>
				<td>: {ucwords($plan.empresa)}</td>
			</tr>
			<tr>
				<th>Código (SKU)</th>
				<td>: {$plan.codigo}</td>
			</tr>
			<tr>
				<th>Tipo Plan</th>
				<td>: {ucwords($plan.tipo_plan)}</td>
			</tr>
			<tr>
				<th>Destinatario</th>
				<td>: {ucwords($plan.destinatario)}</td>
			</tr>
			<tr>
				<th>Comuna</th>
				<td>: {ucwords($plan.comuna)}</td>
			</tr>
			<tr>
				<th>Cobertura Regional</th>
				<td>: {if $plan.cob_regional==1}Si{else}No{/if}</td>
			</tr>
		</table>
	</div>
	
	{if isset($imagenes) && count($imagenes)}
		{foreach from=$imagenes item=img}
			<div class="col-md-12">
				
				<div class="col-md-5">
					{if $img.componente=='Urnas'}
						<h3>Urna</h3>
					{elseif $img.componente=='Velatorios'}
						<h3>Velatorio</h3>
					{elseif $img.componente=='Traslados'}
						<h3>Traslado</h3>
					{else if $img.componente=='Cinerarios'}
						<h3>Cinerario</h3>
					{elseif $img.componente=='Anforas'}
						<h3>Anfora</h3>
					{elseif $img.componente=='Sepultaciones'}
						<h3>Sepultación</h3>
					{elseif $img.componente=='Soluciones'}
						<h3>Solución</h3>
					{/if}
					<!--Descripcion de urna asociada a plan y componente-->
					{if $img.componente_id == $urna.componente_id}
						<table class="table table-hover">
							<tr>
								<th>Modelo:</th>
								<td>{$urna.modelo}</td>
							</tr>
							<tr>
								<th>Medidas:</th>
								<td>{$urna.medidas}</td>
							</tr>
							<tr>
								<th>Material:</th>
								<td>{$urna.material}</td>
							</tr>
							<tr>
								<th>Terminaciones:</th>
								<td>{$urna.terminaciones}</td>
							</tr>
							<tr>
								<th>Color:</th>
								<td>{$urna.color}</td>
							</tr>
						</table>
					<!--Descripcion de traslado asociado a plan y componente-->
					{else if $img.componente_id == $traslado.componente_id}
						<table class="table table-hover">
							<tr>
								<th>Carroza Instalación:</th>
								<td>{if $traslado.instalacion==1}Si{else}No{/if}</td>
							</tr>
							<tr>
								<th>Carroza Funeral:</th>
								<td>{if $traslado.funeral==1}Si{else}No{/if}</td>
							</tr>
							<tr>
								<th>Carroza con flores:</th>
								<td>{if $traslado.conflores==1}Si{else}No{/if}</td>
							</tr>
							<tr>
								<th>Vehículo Acompañamiento:</th>
								<td>{if $traslado.acompanamiento==1}Si{else}No{/if}</td>
							</tr>
							<tr>
								<th>N° Pasajeros:</th>
								<td>{$traslado.pasajeros}</td>
							</tr>
						</table>
					<!--Descripcion de velatorio asociado a plan y componente-->
					{else if $img.componente_id == $velatorio.componente_id}
						<table class="table table-hover">
							<tr>
								<th>Trámites:</th>
								<td>{ucfirst($velatorio.tramites)}</td>
							</tr>
							<tr>
								<th>Asesor a domicilio:</th>
								<td> {if $velatorio.asesor ==1} Si {else}No {/if}</td>
							</tr>
							<tr>
								<th>Sala velatorio:</th>
								<td>{if $velatorio.sala ==1} Si {else}No {/if}</td>
							</tr>
							<tr>
								<th>Capilla ecuménica:</th>
								<td>{if $velatorio.capilla ==1} Si {else}No {/if}</td>
							</tr>
							<tr>
								<th>N° de Cirios:</th>
								<td>{$velatorio.cirios}</td>
							</tr>
							<tr>
								<th>N° de Portacirios:</th>
								<td>{$velatorio.portacirios}</td>
							</tr>
							<tr>
								<th>N° de Cruces:</th>
								<td>{$velatorio.cruces}</td>
							</tr>
							<tr>
								<th>N° de Flores en canasto</th>
								<td>{$velatorio.florescanastos}</td>
							</tr>
							<tr>
								<th>N° de Flores cubreurna:</th>
								<td>{$velatorio.florescubreurnas}</td>
							</tr>	
							<tr>
								<th>N° de Libros de Condolencias:</th>
								<td>{$velatorio.condolencias}</td>
							</tr>
							<tr>
								<th>Parroco:</th>
								<td>{if $velatorio.parroco==1} Si{else} No{/if}</td>
							</tr>
							<tr>
								<th>N° de Integrantes del coro:</th>
								<td>{$velatorio.coro}</td>
							</tr>
							<tr>
								<th>>N° de Avisos de prensa:</th>
								<td>{$velatorio.avisosprensa}</td>
							</tr>
							<tr>
								<th>N° de Tarjetas de agradecimiento:</th>
								<td>{$velatorio.tarjetas}</td>
							</tr>
							<tr>
								<th>Cafetería</th>
								<td>{if $velatorio.cafeteria==1} Básica{elseif $velatorio.cafeteria==2} Superior{else} Ninguna{/if}</td>
							</tr>
						</table>
					<!--Descripcion de cinerario asociado a plan y componente-->
					{else if $img.componente_id == $cinerario.componente_id}
						<table class="table table-hover">
							<tr>
								<th>Sala velatorio:</th>
								<td>{if $cinerario.sala==1}Si{else}No{/if}</td>
							</tr>
							<tr>
								<th>ACapilla ecuménica:</th>
								<td>{if $cinerario.capilla==1}Si{else}No{/if}</td>
							</tr>
							<tr>
								<th>Podium:</th>
								<td>{if $cinerario.podium==1}Si{else}No{/if}</td>
							</tr>
							<tr>
								<th>Liturgia:</th>
								<td>{if $cinerario.liturgia==1}Si{else}No{/if}</td>
							</tr>
							<tr>
								<th>Amplificación:</th>
								<td>{if $cinerario.amplificacion==1}Si{else}No{/if}</td>
							</tr>
							<tr>
								<th>Diácono:</th>
								<td>{if $cinerario.diacono==1}Si{else}No{/if}</td>
							</tr>
							<tr>
								<th>Integrantes del coro:</th>
								<td>{$cinerario.coro}</td>
							</tr>
							<tr>
								<th>Cafetería:</th>
								<td>{if $cinerario.cafeteria==1}Básca{elseif $cinerario.cafeteria==2}Superior{else}No considera{/if}</td>
							</tr>
							<tr>
								<th>Ceremonia:</th>
								<td>{if $cinerario.ceremonia==1}Si{else}No{/if}</td>
							</tr>	
							<tr>
								<th>Anfora?:</th>
								<td>{if $cinerario.anforaincl==1}Si{else}No{/if}</td>
							</tr>
						</table>
					<!--Descripcion de anfora asociado a plan y componente-->
					{else if $img.componente_id == $anfora.componente_id}
						<table class="table table-hover">
							<tr>
								<th>Modelo:</th>
								<td>{$anfora.modelo}</td>
							</tr>
							<tr>
								<th>Descripción:</th>
								<td>{$anfora.descripcion}</td>
							</tr>
						</table>
					<!--Descripcion de sepultacion asociado a plan y componente-->
					{else if $img.componente_id == $sepultacion.componente_id}
						<table class="table table-hover">
							<tr>
								<th>Sala velatorio:</th>
								<td>{if $sepultacion.sala==1}Si{else}No{/if}</td>
							</tr>
							<tr>
								<th>Capilla ecuménica:</th>
								<td>{if $sepultacion.capilla}Si{else}No{/if}</td>
							</tr>
							<tr>
								<th>Liturgia o responso:</th>
								<td>{if $sepultacion.liturgia}Si{else}No{/if}</td>
							</tr>
							<tr>
								<th>N° de toldos:</th>
								<td>{$sepultacion.toldos}</td>
							</tr>
							<tr>
								<th>N° de sillas:</th>
								<td>{$sepultacion.sillas}</td>
							</tr>
							<tr>
								<th>Amplificación:</th>
								<td>{if $sepultacion.amplificacion==1}Si{else}No{/if}</td>
							</tr>
							<tr>
								<th>Diácono:</th>
								<td>{if $sepultacion.diacono==1}Si{else}No{/if}</td>
							</tr>
							<tr>
								<th>Coro:</th>
								<td>{$sepultacion.coro} integrantes</td>
							</tr>
							<tr>
								<th>Cafetería:</th>
								<td>{if $sepultacion.cafeteria==1} Básica{elseif $sepultacion.cafeteria==2}Superior{else} No disponible{/if}</td>
							</tr>	
						</table>
					<!--Descripcion de solucion asociado a plan y componente-->
					{else if $img.componente_id == $solucion.componente_id}
						<table class="table table-hover">
							<tr>
								<th>Solución:</th>
								<td>{if $solucion.solucion==1}Familiar{else}Individual{/if}</td>
							</tr>
							<tr>
								<th>Periodo:</th>
								<td>{if $solucion.periodo==1}Perpetua{else}Temporal{/if}</td>
							</tr>
							<tr>
								<th>Años:</th>
								<td>{$solucion.anios}</td>
							</tr>
							<tr>
								<th>Tipo Solución:</th>
								<td> {$solucion.tipo}</td>
							</tr>
						</table>
					{else}
						<strong>Descripción no disponible</strong>
					{/if}
				</div>
				<div class="col-md-7">
					<a href="#" ><img src="{$_layoutParams.root}public/img/componentes/{$img.nombre}" alt="" class="img-responsive"></a>
					<p>&nbsp;</p>
				</div>
			</div>
			
				

		{/foreach}
		<div class="col-md-12">
			<h2>Condiciones</h2>
			{if isset($condiciones) && count($condiciones)}
				<table class="table table-hover table-striped">
					<tr>
						<th>Precio Plan</th>
						<td>: $ {$condiciones.precio}</td>
					</tr>
					<tr>
						<th>Forma de Pago</th>
						<td>: {$condiciones.formapago}</td>
					</tr>
					<tr>
						<th>Pago a Plazo</th>
						<td>: {if $condiciones.plazopago == 1}Si {else} No{/if}</td>
					</tr>
					<tr>
						<th>Compra Anticipada</th>
						<td>: {if $condiciones.compraanticipada == 1}Si {else} No{/if}</td>
					</tr>
					<tr>
						<th>Seguro Deceso</th>
						<td>: {if $condiciones.segurodeceso == 1}Si {else} No{/if}</td>
					</tr>
					<tr>
						<th>Convenios</th>
						<td>: {$condiciones.convenios}</td>
					</tr>
					<tr>
						<th>Descuento en Columbario</th>
						<td>: {if $condiciones.descuentocol == 0}No {else}{$condiciones.descuentocol}%{/if}</td>
					</tr>
					<tr>
						<th>Descuento Nicho</th>
						<td>: {if $condiciones.descuentonicho == 0}No {else}{$condiciones.descuentonicho}%{/if}</td>
					</tr>
					<tr>
						<th>Pensiones</th>
						<td>: {if $condiciones.pensiones == 1}Si {else} No{/if}</td>
					</tr>
					<tr>
						<th>Cobertura Regional</th>
						<td>: {if $condiciones.cob_regional == 1}Si {else} No{/if}</td>
					</tr>

				</table>
			{/if}
			<p style="margin-bottom: 20px">
				<a href="{$_layoutParams.root}cotizaciones/add/{$img.plan_id}" class="btn btn-success">Cotizar</a>
				<a href="{$_layoutParams.root}planes/planesServicios" class="btn btn-link" onclick="history.go(-1); return false;">Volver</a>
			</p>
			

		</div>
		
		{else}
			<strong>No hay imágenes asociadas</strong>

	{/if}
	
</div>

<div class="col-md-2">
	
</div>	

	
	
	
