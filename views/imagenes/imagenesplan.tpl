<div style="padding-top: 50px"></div>
<div class="col-md-2">
	
</div>
<div class="col-md-8">
	<h3>Planes Consulta</h3>
	{if isset($imagenes) && count($imagenes)}
		{foreach from=$imagenes item=img}
			<div class="col-md-4">
				<figure>
					<h3>{$img.titulo}</h3>
					<a href="#" ><img src="{$_layoutParams.root}public/img/componentes/{$img.nombre}" alt="" class="img-responsive"></a>
					
				</figure>
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
						<td></td>
						<td></td>
					</tr>

				</table>
			{/if}
			<br><br>
			<a href="" class="btn btn-primary">Cotizar</a>
		</div>
		
		{else}
			<strong>No hay imágenes asociadas</strong>
	{/if}

	
</div>

<div class="col-md-2">
	
</div>	


	
	
	
