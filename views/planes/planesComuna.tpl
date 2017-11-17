<div style="padding-top: 50px"></div>
<div class="col-md-2" style="padding-left: 30px">
	<div style="padding-top: 50px"></div>
	<h4>Buscar por comunas o ciudades</h4>
	<ul class="list-unstyled">
		{if isset($comunas) && count($comunas)}
			{foreach from=$comunas item=c}
				<li><a href="{$_layoutParams.root}planes/planesComuna/{$c.id}">{$c.comuna}</a></li>
			{/foreach}
		{/if}
	</ul>
</div>
<div class="col-md-8">
	<h3>Ver Planes</h3>
	{if isset($planes) && count($planes)}
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
		
			
				{foreach from=$planes item=p}
					<tr>
						<td>$ {number_format($p.precio,0,",",".")}</td>
						<td>{$p.empresa}</td>
						<td>{$p.nombre}</td>
						<td>{$p.tipo_plan}</td>
						<td>{$p.destinatario}</td>
						<td>{$p.comuna}</td>
						<td>
							<a href="{$_layoutParams.root}imagenes/imagenesplan/{$p.id}">Ver Detalles</a>&nbsp;&nbsp;
						</td>
					</tr>

				{/foreach}
			
		
	</table>
	{else}
		<strong>No hay planes asociados</strong>
		<p><a href="{$_layoutParams.root}planes/planesServicios/9" class="btn btn-link">Planes Funerarios</a></p>
		<p><a href="{$_layoutParams.root}planes/planesServicios/10" class="btn btn-link">Planes Cinerarios</a></p>
		<p><a href="{$_layoutParams.root}planes/planesServicios/11" class="btn btn-link">Planes Sepulturas</a></p>
		<p><a href="{$_layoutParams.root}planes/planesServicios/12" class="btn btn-link">Planes Sepultación</a></p>
	{/if}
</div>
<div class="col-md-2">
	
</div>	


	
	
	
