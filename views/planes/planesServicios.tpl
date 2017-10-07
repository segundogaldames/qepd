<div style="padding-top: 50px"></div>
<div class="col-md-2" style="padding-left: 30px">
	<div style="padding-top: 50px"></div>
	<form action="">
		<div class="form-group">
			<label for="comuna">Planes por Comuna</label>
			<select name="comuna" id="" class="form-control">
				<option value="">Seleccione</option>
				{if isset($comunas) && count($comunas)}
					{foreach from=$comunas item=$c}
						<option value="{$c.id}">{$c.nombre}</option>
					{/foreach}
				{/if}
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
	{/if}
</div>
<div class="col-md-2">
	
</div>	


	
	
	
